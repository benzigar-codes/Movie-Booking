<?php
include("connection.php");
$date = $_POST['date'];
$theatre = $_POST['theatre'];
$showtime = $_POST['showtime'];
$seats = $_POST['seats'];
$result = mysqli_query($connection, "select sum(seat) from bookedseats where date='$date' and theatre='$theatre' and showtime='$showtime';");
$result = mysqli_fetch_all($result);
$bookedseats = $result[0][0];
$totalamount = $seats * 120;
$availableseat = 300 - $bookedseats;
?>
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
        <?php
        if (($availableseat <= 0) or (($availableseat - $seats) <= 0)) {
            echo '<p class="display-4">Sorry the Seats are booked, Please go back and try another showtime</p>';
        } else {
            ?>
            <div class="container col-6">
                <h1 class="text-primary">Conform your purchase</h1>
                <table class="table">
                    <tr>
                        <th colspan="2">
                            The Total Available Seat
                        </th>
                        <td>
                            <?php echo $availableseat ?>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            Your Number of seats for booking :
                        </th>
                        <td>
                            <?php echo $seats ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Total Amount :
                        </th>
                        <td>
                        </td>
                        <td>
                            <?php echo $totalamount ?>
                        </td>
                    </tr>
                </table>
                <form action="debit.php" method="post">
                    <input type="hidden" name="theatre" value="<?php echo $_POST['theatre']; ?>">
                    <input type="hidden" name="movie" value="<?php echo $_POST['movie']; ?>">
                    <input type="hidden" name="date" value="<?php echo $_POST['date']; ?>">
                    <input type="hidden" name="showtime" value="<?php echo $_POST['showtime']; ?>">
                    <input type="hidden" name="seats" value="<?php echo $_POST['seats']; ?>">
                    <input type="submit" value="Continue" class="btn btn-primary">
                </form>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>