@extends('layouts.auth')

@section('content')





 <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has(config('admin.globals.username')) ? ' has-error' : '' }}">
                            <div >
                                <input id="{{config('admin.globals.username')}}" type="text" placeholder="{{config('admin.globals.username')}}" class="form-control" name="{{config('admin.globals.username')}}" value="{{ old('') }}">

                                @if ($errors->has(config('admin.globals.username')))
                                    <span class="help-block">
                                        <strong>{{ $errors->first(config('admin.globals.username')) }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="">
                                <input id="password" type="password" placeholder="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- 验证码 -->
                        <div class="row">
                          <div class="col-md-8">
                              <input type="text" name="captcha" placeholder="captcha" class="form-control{{ $errors->has('captcha') ? ' paesley-error' : '' }}" />  
                          </div>
                           <div class="col-md-4"><img src="{{captcha_src()}}" style="cursor: pointer;" onclick="this.src='{{captcha_src()}}'+Math.random()" ></div>  
                              @if ($errors ->has('captcha'))
                              <div class="col-md-12">
                                <p class="text=danger text-left"><STRONG>{{$errors ->first('captcha')}}</STRONG></p>
                              </div>
                              @endif  
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div >
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
          </section>
        </div>
      </div>
    </div> 
@endsection




<!-- <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form  class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
              {{csrf_field()}}
              <h1>Login Form</h1>
              <div >
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Username" required="">

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
                  
              <div>
              
                <input id="password" type="password" class="form-control" name="password" value="{{ old('email') }}" placeholder="Password" required="">
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>

               <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
              </div>


              <div>
             
                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                <a class="reset_pass" href="{{url('password/reset')}}">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="{{url('/register')}}" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div> -->
