@extends('layouts.app')

@section('content')
<div class="container" id="w">
<div class="row">
<form enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{ route('FR') }}" >
{{ csrf_field() }}
<div class="col-md-6 offset-md-6">
<div class="panel panel-default">
<div class="panel-heading"> فایل رزومه</div>
<div class="panel-body">

<label for="files" class="col-md-4 control-label"> (اختیاری)&nbsp;PDF فقط فایل </label>
<div class="col-md-6 offset-md-6">
<input class="form-control-file" id="image" type="file" name='files' value="" ></input> 
</div>
</div>
</div>
</div>

<div class="col-md-6 offset-md-6">
<div class="panel panel-default">
<div class="panel-heading">عکس</div>
<div class="panel-body">
<label for="pictureFile" class="col-md-4 control-label">عکس را انتخاب کنید&nbsp;(الزامی)</label>

<div class="col-md-6 offset-md-6">
<input class="form-file-input" id="image" type="file" name="pictureFile" 
		onchange="readURL(this);" required></input><br/> 
	<img class="img" id="blah"  src="{{asset('pic/images.png')}}" />
	
</div>
</div>
</div>
</div>



						<!--btn-->	
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-1">
                                <button type="submit" class="btn btn-lg btn-success" name="foo">
                                 &nbsp;&nbsp;&nbsp;      ارسال      &nbsp;&nbsp;&nbsp;
                                </button>
                            </div>
                        </div>
						<!--//btn-->
</form>						
</div>						
</div>
<br/><br/><br/>
<style>#w{border:solid 1.5px; padding:10px;}</style>
@endsection