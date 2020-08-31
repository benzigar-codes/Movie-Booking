<?php
include("connection.php");
session_start();
$email = $_SESSION['email'];
$result = mysqli_query($connection, "select distinct theatre from bookedseats where email='$email';");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Booked seats</title>
</head>

<body>
    <div class="d-flex justify-content-around align-items-center p-3 bg-info">
        <div>
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
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='display-4 m-4'>$row[0]</div>";
        $result1 = mysqli_query($connection, "select bookid,movie,date,showtime,seat from bookedseats where email='$email' and theatre='$row[0]';");
        echo '
        <div class="container card mt-3">
        <table class="table">
            <tr>
                <th>
                    TICKET ID
                </th>
                <th>
                    Movie
                </th>
                <th>
                    Date
                </th>
                <th>
                    Showtime
                </th>
                <th>
                    Seats
                </th>
            </tr>
        
        ';
        while ($row1 = mysqli_fetch_array($result1)) {
            echo '
                
                    <tr>
                        <td>' . $row1[0] . '</td>
                        <td>' . $row1[1] . '</td>
                        <td>' . $row1[2] . '</td>
                        <td>' . $row1[3] . '</td>
                        <td>' . $row1[4] . '</td>
                    </tr>
                
        ';
        }
        echo '
        </table>
        </div>
        
        ';
    }

    ?>
</body>

</html>