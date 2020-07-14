<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Market a Corporate Category Bootstrap Responsive Website Template - Login </title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->

    <link href="{{ asset('assets/client/css/style-liberty.css') }}" rel="stylesheet" media="all">
    <style>
        .w3l-login .login-box {
            background: url({{asset('assets/client/images/login.jpg')}}) no-repeat 0px 0px;
            background-size: cover;
            height: 100vh;
            display: grid;
            align-items: center; }
    </style>
</head>
<body>
<section class="w3l-login">
    <div class="login-box" style="height:100vh ">
        <div class="container">
            <div class="logo text-center mb-4">
                <a class="navbar-brand" href="{{URL::to("/")}}"><img src="{{asset('assets/client/images/logo.png')}}"> </a>
                <!-- if logo is image enable this
          <a class="navbar-brand" href="#index.html">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
            </div>
            <div class="login-form py-5 px-4 mx-auto">
                <h3 class="account-title mb-4">Please Log in, or <a href="{{URL::to("signup")}}">Sign Up</a></h3>
                <form action="{{ URL::to('clientlogincheck') }}" method="post" id="signup" name="signup">
                    @csrf
                    <div class="form-group">
                        <label class="field-info" for="inputUsernameEmail">Username or email</label>
                        <input type="text" class="form-control" name="username" id="inputUsernameEmail" required="">
                    </div>
                    <div class="form-group">
                        <a class="pull-right forgot" href="#">Forgot password?</a>
                        <label class="field-info" for="inputPassword">Password</label>
                        <input type="password" class="form-control" name="password" id="inputPassword" required="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-theme">
                        Log in
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
</body>

</html>
