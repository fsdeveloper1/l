@extends('layouts.app')

@section('content')
<br/>
<div class="container" >
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <div class="panel panel-default">
                <div class="panel-heading"> ورود</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('login')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						
                            <label for="email" class="col-md-4 control-label" >ایمیل</label>
                            <div class="col-md-7 " >
                                <input id="email" type="email" class="form-control input-lg" name="email"   value="{{ old('email') }}" required autofocus >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
							
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           
						    <label for="password" class="col-md-4 control-label">پسورد </label>

                            <div class="col-md-7" >
                                <input id="password" type="password" class="form-control input-lg" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>     
							
                        </div> 

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <div class="checkbox input-lg">
                                    <label>
                                       <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> به یاد داشته باش
                                    </label> 
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-lg">
                                 &nbsp;&nbsp;&nbsp;&nbsp; ورود &nbsp;&nbsp;&nbsp;&nbsp;
                                </button>

                                <a class="btn btn-ink" href="{{ route('password.request') }}">
                                   فراموش کردن پسورد
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
