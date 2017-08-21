@extends('app')

@section('header')
<title>Login!</title>
@endsection

@section('content')

<div class="container">
<div class="row">
<br>
    
      <div class="login-container" style="width: 380px; margin-left: 120px;">
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                    <center>
                    <img src="{{url('images/logologin.jpg')}}" 
                    style="width: 130px;height: 160px;">
                    </center>
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                                                    <center>
                                @if ($errors->has('email'))
                                    <a class="main-nav btn white-text text-accent-2 red waves-effect" style="font-size: 12px;">Username atau Password Salah !</a>
                                    <br>
                                    <br>
                                @endif
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="color: red;">Password Salah</strong>
                                    </span>
                                    <br>
                                @endif
                    </center>
                <div class="row margin-bottom{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email">E-Mail Address</label>

                            </div>
                        </div>

                <div class="row margin-bottom{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">lock</i>
                                <input id="password" type="password" class="form-control" name="password" required>
                            <label for="password" class="col-md-4 control-label">Password</label>

                   
                        </div>

                            </div>
                        <center>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary all" style="width: 180px;height: 50px;">
                                    Login
                                </button>
                            </div>
                        </div>
                        </center>
                    </form>
                    </div>
                    </div>
                    </div>
</div>
</div>
@endsection
