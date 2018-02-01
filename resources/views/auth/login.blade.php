@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <title>Netlinks Mail</title>
</head>
<body>

</body>
</html>
<style type="text/css">
    body {
        background-image: url('Images/netlinks.jpg');
        background-position-x: right;
        background-position-y: center; 
        background-size: 1900px 1100px;
        background-repeat: no-repeat;
    }
    
</style>
@section('content')
<div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <img style="margin: 0px" height="90px" width="280px" src="Images/image.jpg" alt="logo">
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <header class="site-header col-md-offset-6">
                        <div class="container-fluid" style="margin: 20px; right: 20px">
                            <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="col-md-5">
                                Email:<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-5">
                                Password:<input id="password" type="password" class="form-control" name="password" required>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>

                                @endif
                            </div>
                              <br>
                              <button type="submit" class="btn btn-success">
                                    Login
                            </button>
                        </form>
                        </div>
                    </header>   
             </div>
         </div>
      </nav>

           

            <div class="col-xs-12 col-md-4 col-md-offset-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Join Us for Free!</h1>
                       
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                
                                
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    <span style="display: block; position: absolute; top:7px; right: 25px;    background-color: white; " class="atnetlinks">@netlink.af</span>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Date of Birth 
                                </label>
                                <span class="_5k_4" data-type="selectors" data-name="birthday_wrapper" id="u_0_z"><span>
                                    &nbsp &nbsp &nbsp
                                    <select aria-label="Day" name="birthday_day" id="day" title="Day" class="_5dba">
                                        @for($i=1 ;$i<=31 ;$i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                        </select>
                                    <select aria-label="Month" name="birthday_month" id="month" title="Month" class="_5dba">
                                        <option value="0">Month</option>
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jul</option>
                                        <option value="8">Aug</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12" selected="1">Dec</option>
                                    </select>
                                        <select aria-label="Year" name="birthday_year" id="year" title="Year" class="_5dba">
                                        @for($i=2018 ;$i>=1950 ;$i--)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                    </div>
                                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Mobile Phone &nbsp +93</label>
                                    
                                <div class="col-md-4">
                                    <input id="number" type="text" class="form-control" name="number" value="{{ old('number') }}" required autofocus>

                                    @if ($errors->has('number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                                     <div class="form-group">
                                <label for="Gender" class="col-md-4 control-label">Gender</label>
                                &nbsp &nbsp
                                    <input id="male" type="radio" class="col-md-offset-0" value="male" name="gender" required>
                                    Male &nbsp &nbsp
                                      <input id="female" type="radio" class="col-md-offset-0" value="female" name="gender" required>
                                    Female
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    <button type="submit" class="btn btn-danger btn-block">
                                        <strong>
                                        Create Account
                                        </strong>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>   
</div>

@endsection
