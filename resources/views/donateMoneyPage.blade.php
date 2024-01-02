<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Money</title>
    <link rel="stylesheet" href="{{ asset('css/donateMoneyStyles.css') }}"> 
</head>
<body>
    <h1>Donate Money</h1>

    <form>
        

        <label for="paymentMethod">Payment Method:</label>
        <select id="paymentMethod" name="paymentMethod">
            <option value="bkash">Bkash</option>
            <option value="creditCard">Credit Card</option>
        </select>
        <br>

        <label for="donationAmount">Enter the Amount of Money:</label>
        <input type="text" id="donationAmount" name="donationAmount" required>

        <br>

        <div id="bkashDetails" class="payment-details">
            <label for="bkashMobileNumber">Enter Bkash Mobile Number:</label>
            <input type="text" id="bkashMobileNumber" name="bkashMobileNumber" required pattern="\d{11}">
        </div>

        <div id="creditCardDetails" class="payment-details">
            <label for="creditCardNumber">Enter Credit Card Number:</label>
            <input type="text" id="creditCardNumber" name="creditCardNumber" required pattern="\d{16}">
        </div>

        <br>

        <button type="submit"><span></span>Submit</button>
    </form>
</body>
</html>
