<!DOCTYPE html>
<html>
<head>
	<title>SHARE & CARE</title>
	<link rel="stylesheet" href="{{ asset('css/SellerHomePageStyles.css') }}">
	<!-- CHANGE: "userprofile.blade.php"*/ -->
</head>
<body>
	<div class= "banner">
		<div class="navbar">
        <a href="{{ asset('/')}}"><img src = "/images/logo.png" class="logo"></a>
			<ul>

				<li><a href="{{ url('/SellerProfile') }}"> My Profile	</a></li>
				<!-- CHANGE: "userprofile.blade.php"*/ -->
			</ul>
		</div>
		<div class="content">
			<h1>IF YOU CANNOT <br>FEED A HUNDRED PEOPLE,<br>THEN FEED JUST ONE</h1>
			<p>- MOTHER TERESA</p>
			<div class="button">
				<a href="{{ asset('/CreatePost')}}"><button type="button"><span></span>Post Food</button> </a>
				<a href="{{ asset('/SellerShareFood') }}"><button type="button"><span></span>Share Food</button> </a>
			</div>
		</div>
	</div>

</body>
</html>
