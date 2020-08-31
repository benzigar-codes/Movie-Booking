<?php
include("connection.php");
$theatre = $_GET['id'];
$result = mysqli_query($connection, "select distinct date from bookedseats where theatre='$theatre';");
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

    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='display-4 m-4'>$row[0]</div>";
        $result1 = mysqli_query($connection, "select bookid,movie,showtime,seat from bookedseats where theatre='$theatre' and date='$row[0]';");
        echo '
        <div class="container card mt-3">
        <table class="table">
            <tr>
                <th>
                    View Ticket ID
                </th>
                <th>
                    Movie
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