<?php
include("connection.php");
if (isset($_GET['theatre'])) {
    $theatre = $_GET['theatre'];
    $movie = $_GET['movie'];
    $theatredetails = mysqli_query($connection, "select name,movie,image,id from theatredetails where name='$theatre';");
    $theatredetails = mysqli_fetch_all($theatredetails);
    $movieimage = $theatredetails[0][2];
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="bootstrap.min.css">
        <style>
            .icon {
                height: 80px;
                width: 80px;
                object-fit: cover;
                border-radius: 50%;
            }
        </style>
        <title>Book Show</title>
    </head>

    <body>
        <div class="container mt-4">
            <div class="card p-4">
                <div class="card-title">
                    <div class="d-flex align-items-center">
                        <img src="img/<?php echo $movieimage; ?>" alt="" class="icon">
                        <h1 class="ml-3"><?php echo $movie; ?></h1>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Price : <small>120</small></h3>
                    <hr>
                    <form action="check.php" method="post">
                        <input type="hidden" name="theatre" value="<?php echo $theatre ?>">
                        <input type="hidden" name="movie" value="<?php echo $movie ?>">
                        <h3>Choose the Date : </h3>
                        <input required class="form-control" type="date" name="date" id="">
                        <br>
                        <h3>Choose the Show</h3>
                        <select required class="form-control" name="showtime" id="">
                            <option value="11:00">11:00 am</option>
                            <option value="2:30">2:30 pm</option>
                            <option value="6:30">6:30 pm</option>
                            <option value="9:30">9:30 pm</option>
                        </select>
                        <br>
                        <h3>Choose the number of seats : </h3>
                        <input required class="form-control" type="number" name="seats" id="">
                        <input type="submit" value="Book" class="mt-3 btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location: home.php");
}
?>