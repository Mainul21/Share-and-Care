<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Food</title>
     <link rel="stylesheet" href="{{ asset('css/shareFoodStyles.css') }}"> <!-- CHANGE: href -->
</head>

<body>
    <h1>Share Food</h1>
    <form action="\collect-donation" method="POST">

        <label for="foodType">Food Type:</label>
        <select name="foodType">
            <option value="cooked">Cooked</option>
            <option value="rawMaterials">Raw Materials</option>
        </select>

        <br>
        <label for="foodamount">Food Amount:</label>
        <input type="integer" name="foodamount">
        <br>

    </form>
    <a href="{{ asset('/LoginPage/HomePage') }}"><button><span></span>Submit</button></a>
</body>
</html>
