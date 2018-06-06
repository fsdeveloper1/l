@extends('layouts.app')

@section('content')
<style>#m{color:black;padding-right:4%;}@keyframes imp{to{background-color:#ff0101;}} #m{animation:imp 3.5s;}</style>
<div id="m">
	 &emsp; <h1 > {{ $key }} </h1  ><br/>
</div>
@guest <style>@keyframes imo{to{background-color:#ff0101;}}  #d{animation:imo 3.5s 3.5s ;} </style>
@endguest
@endsection






