@extends('layouts.app')

@section('content')
<br/>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h4> برای رورد به صفحه کاربری ثبت نام کنید &nbsp;&nbsp;</h4></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('FullRegister')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<!--part--><br/>
                            <label for="name" class="col-md-4 control-label lg">نام</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control input-lg" name="name" value="{{ old('name') }}" maxlength="15" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
							<!--//part--><br/><br/><br/>
							
							<!--part-->
							<label for="lastname" class="col-md-4 control-label">فامیلی</label>

                            <div class="col-md-7">
                                <input id="lastname" type="text" class="form-control input-lg" name="lastname" value="{{ old('lastname') }}" maxlength="25" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<!--//part-->
						
						<!--checklist-->
							
								<div class="container">
									
										<div class="form-group">
											
												<div class="col-md-2">
													<select class="form-control input-lg" type="select list"   name="sex" id="sex" >
														<option  value="man">مرد</option>
														<option  value="woman">زن</option>
													</select>
												</div>	
										</div>
									
								</div>	
							
							<!--//checklist-->
							
						<!--part-->
                            <label for="meliNumber" class="col-md-4 control-label">شماره کارت ملی</label>

                            <div class="col-md-7">
                                <input id="meliNumber" type="text" class="form-control input-lg"           name="meliNumber" value="{{ old('name') }}" maxlength="10" required autofocus>

                                @if ($errors->has('meli'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('meli') }}</strong>
                                    </span>
                                @endif
                            </div>
							<!--//part--><br/><br/><br/>
							
							<!--part-->
                            <label for="birthdate" class="col-md-4 control-label">تاریخ تولد</label>

                            <div class="col-md-5">
                                <input id="birthdate" type="date" class="form-control input-lg" name="birthdate" value="{{ old('birthdate') }}" maxlength="11" required autofocus>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
							<!--//part--><br/><br/><br/>
							
							<!--part-->
                            <label for="phone" class="col-md-4 control-label">تلفن</label>

                            <div class="col-md-7">
                                <input id="phone" type="tel" class="form-control input-lg" name="phone" value="{{ old('phone') }}" maxlength="11" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
							<!--//part--><br/><br/><br/>
							
							<!--part-->
                            <label for="address" class="col-md-4 control-label"> آدرس</label>
                            <div class="col-md-7">
							<textarea id="address" name="address" class="form-control"  rows="3" cols="" value="{{ old('address') }}" maxlength="120" required autofocus ></textarea>
									<br>
 

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
							<!--//part--><br/><br/><br/>
							
							<!--part--><br/><br/><br/>
                            <label for="postalcode" class="col-md-4 control-label">کد پستی</label>

                            <div class="col-md-7">
                                <input id="postalcode" type="text" class="form-control input-lg" name="postalcode" value="{{ old('postalcode') }}" required autofocus>

                                @if ($errors->has('postalcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postalcode') }}</strong>
                                    </span>
                                @endif
                            </div
							<!--//part--><br/><br/><br/>
						<!--btn-->	
                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-3">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    ثبت&nbsp;&lsaquo;
                                </button>
                            </div>
                        </div>
						<!--//btn-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



