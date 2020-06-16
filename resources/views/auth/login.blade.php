<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('c_assets/css/style.css')}}">
  
</head>
<body>
    <div id="particles-js">
        <form class="box" action="{{ route('login') }}" method="post">
            @csrf
      <h1>Admin Login</h1>
        
        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="submit" name="" value="Login">
        <a href="{{ route('password.request') }}">Forgot password</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="{{ route('register') }}">Register!!!</a>
    
    </form>
    </div>  
    <script type="text/javascript" src="{{asset('c_assets/js/particles.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('c_assets/js/app.js')}}"></script>
</body>
</html>