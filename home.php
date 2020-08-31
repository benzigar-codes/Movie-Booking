<?php
include("connection.php");
session_start();
$email = $_SESSION['email'];
$theatres = mysqli_query($connection, "select name,movie,image,id from theatredetails;");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Available Movies</title>
</head>

<body>
    <!--Navbar-->
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

    <!--Movies-->
    <h1 class="m-4">Movies : </h1>
    <div class="container">
        <div class="row">
            <?php
            while ($row = mysqli_fetch_array($theatres)) {
                echo '
                <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="book.php?theatre=' . $row[0] . '&movie=' . $row[1] . '">
                    <div class="card">
                        <img src="img/' . $row[2] . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">' . $row[1] . '</h5>
                            <p class="card-text">Running on : ' . $row[0] . '</p>
                        </div>
                    </div>
                </a>
            </div>
                ';
            }
            ?>
        </div>
    </div>
</body>

</html>