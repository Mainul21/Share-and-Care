<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Page</title>
    <link href="{{ asset('css/LoginPageStyles.css') }}" rel='stylesheet'/>
</head>

<body>

    <div class="loginHeader">
        <h1 class="centerWhite">Share & Care</h1>
        <h2 class="white">Login Page</h2>
    </div>
    <br>
    <img src="images/SunflowerAvatar.png" class="image_center" width="200px">
    <br>
    <div class="loginBox">
        <img src="images/avatar.png" class="avatar">
        <h1 class="loginText">Login or Signup</h1>
        <div class="username_password" >
            <form action="/login" method="POST">
                @csrf
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <br><br>
                <button class="button">Login</button>
            </form>
            <a href="{{ asset('/SignupPage') }}"><button class="button">Sign up</button></a>
        </div>
    </div>
    <div class="support">
        <p><a href="Support.html">SUPPORT</a></p>
    </div>
</body>
</html>
