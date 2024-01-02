<!DOCTYPE html>
<html>
<head>
	<title>SHARE & CARE</title>
	<link rel="stylesheet" href="{{ asset('css/HomePageStyles.css') }}">
	<!-- CHANGE: "userprofile.blade.php"*/ -->
</head>
<body>
	<div class= "banner">
		<div class="navbar">
        <a href="{{ asset('/')}}"><img src = "/images/logo.png" class="logo"></a>
			<ul>
				<li><a href="#"> My Order</a></li>
				<li><a href="#"> My Share	</a></li>
				<li><a href="{{ url('/UserProfile') }}"> My Profile	</a></li>
                <a class="invi" href="{{ url('/UserProfille') }}">#</a>
				<!-- CHANGE: "userprofile.blade.php"*/ -->
			</ul>
		</div>
		<div class="content">
			<h1>IF YOU CANNOT <br>FEED A HUNDRED PEOPLE,<br>THEN FEED JUST ONE</h1>
			<p>- MOTHER TERESA</p>
			<div class="button">

			<button type="button"><span></span>
<a class="invi" href="{{ url('/BuyFoodlPage') }}">#</a>
                <a href="{{ asset('/LoginPage/HomePage/BuyFoodPage') }}">Buy Food</a>
            </button>
				<a href="{{ asset('/shareFoodPage') }}"><button type="button"><span></span>Share Food</button> </a>
				<a href="{{ asset('/donateMoneyPage') }}"><button type="button"><span></span>Donate </button> </a>
			</div>
		</div>
	</div>


</body>
</html>
