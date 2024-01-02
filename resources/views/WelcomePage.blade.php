<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WELCOME PAGE</title>
	<link href="{{ asset('css/WelcomePageStyles.css') }}" rel='stylesheet'/>
</head>
<body>
	<header class='header'>
		<img src="\images\logo.png" class="logo">

		<nav class="navbar">
			<a href="{{ asset('/About')}}" style="--i:1;">About Us</a>
			<a href="{{ asset('/Support')}}" style="--i:2;">Support</a>
			<a href="https://laravel.com/" style="--i:3;">Learn More</a>
		</nav>

		<div class="social-media">
			<a href="###"><i><img src = "/images/facebook.png"></i></a>
			<a href="###"><i><img src = "/images/instagram.png"></i></a>
			<a href="###"><i><img src = "/images/twitter.png"></i></a>
		</div>
	</header>
		<br>
		<br>

		<section class= "home">
			<div class="home-content">
				<h1> Welcome To Share&Care </h1>
				<h3> Build A Better Future </h3>
				<p>Hello beautiful people!!!
				We are here planning a better future for everyone. Eat, be happy and healthy. Here you can buy the food, share the food you want to share or maybe share the food you can not finish.
				</p>
				<a href="/LoginPage" class="button">Customer & Donor Login</a>
				<a href="/SellerLogin" class="button">Food Seller Login</a>
			</div>
			<div class="home-img">
				<div class="rhombus">
					<div class="sliderframe">
						<div class="slideimages">
							<div class="imagecontainer">
								<img src="food_images_png/food1.png">
							</div>

							<div class="imagecontainer">
								<img src="food_images_png/food2.png">
							</div>

							<div class="imagecontainer">
								<img src="food_images_png/food3.png">
							</div>

							<div class="imagecontainer">
								<img src="food_images_png/food4.png">
							</div>

							<div class="imagecontainer">
								<img src="food_images_png/food5.png">
							</div>
							<div class="imagecontainer">
								<img src="food_images_png/food6.png">
							</div>

						</div>
					</div>

				</div>
			</div>
			<div class="rhombus2">
			</div>
			<div class="rhombus3">
			</div>
		</section>
</body>
</html>
