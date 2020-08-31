<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Payment</title>
</head>

<body>
    <div class="container p-4">
        <form action="payment.php" method="post">
            <input type="hidden" name="theatre" value="<?php echo $_POST['theatre']; ?>">
            <input type="hidden" name="movie" value="<?php echo $_POST['movie']; ?>">
            <input type="hidden" name="date" value="<?php echo $_POST['date']; ?>">
            <input type="hidden" name="showtime" value="<?php echo $_POST['showtime']; ?>">
            <input type="hidden" name="seats" value="<?php echo $_POST['seats']; ?>">
            <h1>Enter your Debit Card Details</h1>
            <label for="cardnumber">Enter the card number : </label>
            <input required type="text" maxlength="16" placeholder="XXXX XXXX XXXX" name="card" id="" class="form-control">
            <br>
            <label for="">Enter the CVV : </label>
            <input required type="password" name="cvv" id="" class="form-control">
            <br>
            <label for="">Choose the Expiration date : </label>
            <div class="row">
                <div class="col">
                    <input required type="number" placeholder="Date" name="" id="" class="form-control">
                </div>
                <div class="col">
                    <input required type="number" placeholder="Month" name="" id="" class="form-control">
                </div>
            </div>
            <br>
            <label for="">Enter the name of the debit card holder : </label>
            <input required type="text" name="" id="" class="form-control">
            <input type="submit" value="Make Payment" class="mt-3 btn btn-primary">

        </form>
    </div>
</body>

</html>