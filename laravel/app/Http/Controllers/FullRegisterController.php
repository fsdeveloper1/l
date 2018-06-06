<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\FullRegister;
use App\Traits\messages;
use Illuminate\Validation;
use App\Session;
use App\Classes\StepSession;
use Illuminate\Support\Facades\Storage;



class FullRegisterController extends Controller
{
	use messages;
	
    public function index(Request $request)
	{
		if($this->id() > 0 )
		{
			if($this->forDate())
			{                                              
				switch(StepSession::CurrentSteps())
				{	
					case(-1): 
						Auth::logout();
						echo view('welcome',['key'=>"$this->RelogininNeeded"]);
						break;
						
					case(0):
						echo view('FullRegister');
						break;
						
					case(1):
						echo view('FR');
						break;
						
					case(2):					
						echo view('FinalView',['name'=>fullregister::find(Auth::id())['name'], 
			                           'lastname'=>fullregister::find(Auth::id())['lastname'],
									   'phone'=>fullregister::find(Auth::id())['phone'],
									   'image'=>Auth::id(),
									   'files'=>fullregister::find(Auth::id())['files']
									   ]);
						break;
						
					default:
						Auth::logout();
						echo view('welcome',['key'=>"$this->ReloginNeeded"]);
						break;
				}
			}	
			else
			{
			return view('welcome',['key'=>"$this->OffDate"]);
			}
		}
		else
		{
			//view('/', ['key'=>"$this->LoginNeeded"]);
			return view('welcome',['key'=>"$this->LoginNeeded"]);
		}					
	}
	public function store(Request $request)	
    {
		if(StepSession::CurrentSteps()==1)
			{
				return view('FR',['key'=>"$this->AlreadyDone"]);
			}
		elseif(StepSession::CurrentSteps()==2)
			{
				return view('FinalView',['name'=>fullregister::find(Auth::id())['name'], 
			                           'lastname'=>fullregister::find(Auth::id())['lastname'],
									   'phone'=>fullregister::find(Auth::id())['phone'],
									   'image'=>Auth::id(),
									   'files'=>fullregister::find(Auth::id())['files'],
									   'key'=>"$this->AlreadyDone"
									   ]);
			}	
		elseif($request->confirm === null)	
		{
			//$this->Validating();	
			$request->flash();
			return view('FROK',['name'=>"$request->name", 'lastname'=>"$request->lastname",
			'sex'=>"$request->sex", 'meliNumber'=>"$request->meliNumber",
			'birthdate'=>"$request->birthdate",'phone'=>"$request->phone",'address'=>"$request->address",
			'postalcode'=>"$request->postalcode",
			]); 
		}	
		else
		{ 
			$fullregister = new FullRegister;
			$fullregister->id = $this->id();
			$fullregister->name = $request->old('name');
			$fullregister->lastname = $request->old('lastname');
			$fullregister->sex = $request->old('sex');
			$fullregister->meliNumber = $request->old('meliNumber');
			$fullregister->birthdate = $request->old('birthdate');
			$fullregister->phone = $request->old('phone');
			$fullregister->address = $request->old('address');
			$fullregister->postalcode = $request->old('postalcode');
			$fullregister->save();
			StepSession::UpdateSteps(1);
			return view('FR',['key'=>"$this->Successfull"]);
		}
	}
	public function Validating(Request $request)
    {
			
             $rules['name'] = 'required|string|max:15'[null][null];
			 $rules['lastname'] = 'required|string|max:25'[ null][null];
			 $rules['sex'] = 'string|max:15'[ null][null];
			 $rules['meliNumbr'] = 'required|integer|max:15'[ "$this->PureInteger"][null];
			 $rules['birthdate'] = 'required|string|max:15'[ null][null];
			 $rules['phone'] = 'required|string|min:5|max:15'[null][null];
			 $rules['address' ]= 'required|string|max:120'[ null][null];
			 $rules['postalcode'] = 'required|integer|max:15'["$this->PureInteger"][null];       
    }
		
	protected function id()
	{
		$id = Auth::id();
		return $id;
	}
	private function forDate()
	{
		$fixeddate = Carbon::createFromDate($year='2018',$month='01',$day='16', $hour='08',$minute='30', $tz = 'Asia/Tehran');
		$now = Carbon::now($tz = 'Asia/Tehran');
		
		if($fixeddate <= $now)
			{
			return true;
			}
		else
			{
			return false;
			}
	}
}
