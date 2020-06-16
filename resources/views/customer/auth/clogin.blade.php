<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('c_assets/css/style.css')}}">
  
</head>
<body>
	<div id="particles-js">
		<form class="box" action="{{ route('web_customer_login_submit') }}" method="post">
			@csrf
      <h1>Log-in Here...</h1>
        
        <input type="text" name="email" id="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
        @error('email')
                <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                    </span>
        @enderror

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <input type="submit" name="" value="Login">
        <a href="{{ route('password.request') }}">Forgot password</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        	<a href="{{ route('cregister') }}">Register!!!</a>
    
    </form>
	</div>	
	<script type="text/javascript" src="{{asset('c_assets/js/particles.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('c_assets/js/app.js')}}"></script>
</body>
</html>