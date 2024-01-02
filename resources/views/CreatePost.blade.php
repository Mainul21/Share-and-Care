<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/CreatePostStyles.css') }}">
    <title>Create Post</title>
</head>
<body>
    <div class= "banner">
		<div class="navbar">
			<a href="{{ asset('/SellerHomePage') }}"><img src = "images/logo.png" class="logo"></a><span></span>
		</div>
    <div class="post-container">
        <h1>Create a New Post</h1>
        <form action="submit-post-url" method="post">
            <input type="file" name="picture">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="description" placeholder="Description">
            <input type="number" name="price" placeholder="Price">
        </form>
        <br>
        <a href="{{ asset('/SellerHomePage') }}"><button>Post</button></a>
        <br>
        <br>
        <a href="{{ url('/SellerProfile')}} "><button > Back </button></a>
    </div>
</body>
</html>
