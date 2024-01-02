<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css\BuyFoodStyles.css')}}">
</head>
<body class="">
    <header>
        <h1>Your Shopping Cart</h1>
        <div class="shopping">
            <img src="\images\cart.png">
            <span class="quantity">0</span>
        </div>
    </header>

    <div class="container">


        <div class="list">

        </div>
    </div>
    <div class="card">
        <h1>Cart</h1>
        <ul class="listCart">
        </ul>
        <div class="checkOut">
            <a href="{{ url('LoginPage/HomePage')}}"><div class="total">0</div> </a>
            <div class="closeShopping">Close</div>
        </div>
    </div>

    <script src="{{ asset('js\BuyFoodlMain.js')}}"></script>
</body>
</html>
