<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name="viewpoint" content="width= device-width, initial-scale=1.0"/>
		<title>Seller Login Page</title>
		<link href="{{ asset('css/SellerLoginStyles.css')}}" rel='stylesheet'/>
	</head>

	<body>

		<div class=loginHeader>
		<h1 class= centerWhite>Share & Care</h1>
		<h2 class= white>Seller Login Page</h2>
		</div>
		<br><br><br><br>
        <br>
        <div class="loginBox">
        	<img src="images/selleravatar.png" class="avatar">
        	<h1 class="loginText">Login or Signup</h1>
            @csrf
        	<form class="username_password" action="/sellerlogin" method="POST">
        		<p>Username</p>
        		<input type="text" name="username" placeholder="Enter Username">
        		<p>Password</p>
        		<input type="password" name="password" placeholder="Enter Password">
        		<br><br>
        		<a href="{{ url('/SellerHomePage') }}"><button type="button">SignIn</button></a>
        		<a href="{{ url('/SellerSignup') }}"><button type="button">SignUp</button></a>
        	</form>
        </div>
        <div class="support">
			<p><a href="Support.html"> SUPPORT </a></p>
		</div>
	</body>
</html>
