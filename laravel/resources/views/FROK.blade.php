@extends('layouts.app')

@section('content')
<br/><br/>


      <!--h-->

	  
<div class="container" id="d"><style>#d{border:solid 1.5px; font-size:140%;}</style>
  <h2>مشخصات خود را تایید می کنید؟</h2>
           
  <table class="table table-striped">
    <thead>
      
    </thead>
    <tbody>
      <tr>
        
        <td>{{$name}}</td>
		<td >نام</td >
		
      </tr>
      <tr>
        
        <td>{{$lastname}}</td>
		<td >فامیلی</td>
		
      </tr>
      <tr>
        
        <td>{{$meliNumber}}</td>
		<td >شماره کارت ملی</td>
		
      </tr>
	    <tr>
        
        <td>{{$phone}}</td>
		<td >شماره تلفن</td>
		
      </tr>
	    <tr>
       
        <td>{{$address}}</td>
		 <td >آدرس</td>
		 
      </tr>
	    <tr>
        
        <td>{{$postalcode}}</td>
		<td >کد پستی</td>
		
      </tr>
	    <tr>
        
        <td>{{$birthdate}}</td> 
		<td >تولد</td>
		
      </tr>
	 
    </tbody>
  </table>

   							
							
                            <div class="col-md-8 col-md-offset-3">
								<form class="form-horizontal" method="post" 
									  action="{{ route('FROK') }}">
									  {{ csrf_field() }}
									<input type="text "name="confirm" value="true" >
									<button type="submit" class="btn btn-success btn-lg" >
									
										&nbsp;&nbsp;&nbsp;&nbsp; تایید &nbsp;&laquo;&nbsp;&nbsp;&nbsp;
									</button>
								</form>	<style>input{display:none;}</style>
								
							</div><br/><br/>	
				
</div>	
<!--//h-->
<br/><br/><br/><br/>
@endsection