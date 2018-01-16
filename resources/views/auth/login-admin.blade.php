@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login Admin</div>
                <div class="panel-body">

{{ Form::open(['route' => 'admin.login.submit', 'method' => 'POST', 'id' => 'form', 'class' => 'form-horizontal']) }}

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<label for="email" class="col-md-4 control-label">E-Mail Address</label>
<div class="col-md-6">
{{ Form::email('email', null, ['class' => 'form-control', 'placeholder'=> 'E-Mail', 'id' => 'email']) }}
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
{{ Form::password('password', ['class' => 'form-control', 'placeholder'=> 'Password']) }}
@if ($errors->has('password'))
<span class="help-block">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<div class="checkbox">
<label>
<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
</label>
</div>
</div>
</div>      

<div class="form-group">
<div class="col-md-8 col-md-offset-4">
<button type="submit" class="btn btn-primary">Login</button>
<a class="btn btn-link" href="{{ route('admin.password.request') }}">Forgot Your Password?</a>
</div>
</div>
{{ Form::close() }}
  </div>
            </div>
        </div>
    </div>
</div>
@endsection