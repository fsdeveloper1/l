<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\StepSession;
use Illuminate\Support\Facades\Auth;
use App\Traits\messages;
use Illuminate\Support\Facades\DB;
use App\FullRegister;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\input;

class FRController extends Controller
{
	use messages;
		
	public $id;
	public function Update(Request $request)
    {
		if(StepSession::CurrentSteps()==1)
		{
			Storage::putFileAs(
			$this->id(), $request->file('pictureFile'), 'fff.jpg');
			#Storage::disk('public')->put('images', $request->get('pictureFile') );			   	
			StepSession::UpdateSteps(2);
			
			return view('FinalView',['name'=>fullregister::find(Auth::id())['name'], 
									'lastname'=>fullregister::find(Auth::id())['lastname'],
									'phone'=>fullregister::find(Auth::id())['phone'],
									'image'=>Auth::id(),
									'files'=>fullregister::find(Auth::id())['files']
			]);
		}
		else
		{	
			return view('FinalView',['name'=>fullregister::find(Auth::id())['name'], 
									'lastname'=>fullregister::find(Auth::id())['lastname'],
									'phone'=>fullregister::find(Auth::id())['phone'],
									'image'=>Auth::id(),
									'files'=>fullregister::find(Auth::id())['files'],
									'key'=>"$this->AlreadyDone"
			]);
		}	
	
	}	
	public function id()
	{
		$id = Auth::id();
		return $id;
	}	
}
?>
