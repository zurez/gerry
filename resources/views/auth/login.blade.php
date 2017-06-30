

<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<script src="http://code.jquery.com/jquery-1.12.4.min.js"
			  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
			  crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	@yield('css')
</head>
<body>
<div class="container">
{{ Form::open(array('url' => 'login','class'=>'form')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'Email Address') }}
    <input type="text" name="email" class="form-control">
</p>

<p>
    {{ Form::label('password', 'Password') }}
    <input type="password" name="password" class="form-control">
   
</p>

<p>{{ Form::submit('Submit!') }}</p>
</div>
{{ Form::close() }}
