<?php
include("connection.php");
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $movie = $_POST['movie'];
    $image = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $newname = uniqid() . ".jpg";
    move_uploaded_file($tempname, "img/" . $newname);
    mysqli_query($connection, "update theatredetails set movie='$movie', image='$newname' where id=$id;");
    header("Location: admin.php");
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $theatre = mysqli_query($connection, "select name,movie from theatredetails where id = $id;");
    $theatre = mysqli_fetch_all($theatre);
    $theatrename = $theatre[0][0];
    $movie = $theatre[0][1];
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="bootstrap.min.css">
        <style>
            .form-control {
                font-size: 40px;
            }
        </style>
        <title>Edit Theatre</title>
    </head>

    <body>
        <div class="jumbotron">
            <form action="edit.php" method="post" enctype="multipart/form-data">
                <h1 class="display-4"><?php echo $theatrename; ?></h1>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="text" name="movie" id="" value="<?php echo $movie ?>" class="form-control">
                <input class="mb-4" type="file" name="image" id="">
                <br>
                <input type="submit" value="Change Movie" class="btn btn-primary">

            </form>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location: admin.php");
}
?>