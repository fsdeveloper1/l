@extends('layouts.app')

@section('content')
<br/><br/>


      <!--h-->

	  
	
	
<div class="container" id="j">
  <h2></h2>
	
	<img class="img-rounded" src="storage/{{$image}}/fff.jpg" id="img" />  
	
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
        
        <td>{{$phone}}</td>
		<td >شماره تلفن</td>
		
      </tr>
	   
    </tbody>
  </table>
  
</div>	

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
@endsection