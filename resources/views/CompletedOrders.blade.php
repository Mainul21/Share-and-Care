<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/CompletedOrdersStyles.css') }}">
    <title>Completed Orders</title>
</head>
<body>
    <div class= "banner">
		<div class="navbar">
			<a href="{{ asset('/SellerHomePage') }}"><img src = "images/logo.png" class="logo"></a>
            <a href="{{ asset('/SellerProfile') }}"><button class="btn"><h2>Back</h2></button></a>
		</div>
    <div class="orders-container">
        <h1>Completed Orders</h1>

        <div class="order">
            <p>Order Number: 1</p>
            <p>Customer Name: {{ Auth::user()->name }}</p>
            <p>Mobile Number: {{ Auth::user()->phone }}</p>
            <p>Address: {{ Auth::user()->address }}</p>
        </div>
        <div class="order">
            <p>Order Number: </p>
            <p>Customer Name: </p>
            <p>Mobile Number: </p>
            <p>Address: </p>
        </div>
    </div>
    </div>
</body>
</html>
