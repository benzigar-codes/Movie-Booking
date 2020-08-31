<?php
include("connection.php");
session_start();
$email = $_SESSION['email'];
if (isset($_POST)) {
    $theatre = $_POST['theatre'];
    $movie = $_POST['movie'];
    $date = $_POST['date'];
    $showtime = $_POST['showtime'];
    $seats = $_POST['seats'];
    $registerid = uniqid();
    mysqli_query($connection, "insert into bookedseats values(null,'$email',$seats,'$date','$showtime','$theatre','$movie','$registerid');");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Payment successfull</title>
</head>

<body>
    <div class="d-flex justify-content-around align-items-center p-3 bg-info">
        <div>
            <a href="booked.php">
                <svg height=35 width=35 aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ticket-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-ticket-alt fa-w-18">
                    <path fill="white" d="M128 160h320v192H128V160zm400 96c0 26.51 21.49 48 48 48v96c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48v-96c26.51 0 48-21.49 48-48s-21.49-48-48-48v-96c0-26.51 21.49-48 48-48h480c26.51 0 48 21.49 48 48v96c-26.51 0-48 21.49-48 48zm-48-104c0-13.255-10.745-24-24-24H120c-13.255 0-24 10.745-24 24v208c0 13.255 10.745 24 24 24h336c13.255 0 24-10.745 24-24V152z" class=""></path>
                </svg>
            </a>
        </div>
        <div class="d-flex align-items-center">
            <div class="ml-3">
                <a href="home.php">
                    <h4 class="text-white">Theatres</h4>
                </a>
            </div>
            <div class="ml-3">
                <a href="logout.php">
                    <button class="btn btn-light btn-sm">
                        Log out
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="container m-4 col-5 card mx-auto">
        <div class="card-body">
            <div class="container">
                <div class="display-4">Payment Sucessfull</div>
                <h1>Your ID is <?php echo $registerid; ?></h1>
                <p class="lead">Show this ID in the ticket counter and get the tickets,, </p>
            </div>
        </div>
    </div>
</body>

</html>