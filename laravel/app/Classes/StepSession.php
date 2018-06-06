<?php
namespace App\Classes;

use Illuminate\Support\Facades\Auth;
use App\Session;
use Illuminate\Support\Facades\DB;


 class StepSession 
{
	public static function CurrentSteps()
	{	
		try {
				$step = DB::table('sessions')->where('id', Auth::id())->value('steps');
				
				if( (! isset($step)) || $step === null )
				{
					//session(['steps'=> 0]);
					return 0;
				}
				else
				{
					return "$step";
				}	
			}
			
		catch(exception $e)
			{
			report($e);
			return -1;
			}	
	}
	public static function UpdateSteps( $x)  
	{
		if($x == 1)
		{
			DB::table('sessions')->insert(['id' => Auth::id(), 'steps' => $x, 'ip' =>request()->ip()]);
		}
		if($x >1)
		{	
			DB::table('sessions')->where('id', Auth::id())->update(['steps' => $x,'ip' =>request()->ip() ]);
		}
	}
}	
?>