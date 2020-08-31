<?php
include("connection.php");
$theatres = mysqli_query($connection, "select name,movie,image,id from theatredetails;");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <style>
        .poster {
            height: 300px;
            object-fit: cover;
        }
    </style>
    <title>Admin</title>
</head>

<body>
    <div class="m-4">
        <div class="display-4">Theatres : </div>
        <?php
        while ($row = mysqli_fetch_array($theatres)) {
            echo '
            <div class="jumbotron">
            <div class="row">
                <div class="col">
                    <div class="display-4">
                        ' . $row[0] . '
                    </div>
                    <p class="lead">Running : ' . $row[1] . '</p>
                    <a href="edit.php?id=' . $row[3] . '">
                        <svg height=35 width=35 aria-hidden="true" focusable="false" data-prefix="fas" data-icon="edit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-edit fa-w-18">
                            <path fill="currentColor" d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z" class=""></path>
                        </svg>
                    </a>
                    <a href="viewtickets.php?id=' . $row[0] . '">
                        <svg class="ml-4" height=40 width=35 aria-hidden="true" focusable="false" data-prefix="far" data-icon="ticket-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-ticket-alt fa-w-18">
                            <path fill="currentColor" d="M400 208v96H176v-96h224m24-48H152c-13.255 0-24 10.745-24 24v144c0 13.255 10.745 24 24 24h272c13.255 0 24-10.745 24-24V184c0-13.255-10.745-24-24-24zm144 56h8V112c0-26.51-21.49-48-48-48H48C21.49 64 0 85.49 0 112v104h8c22.091 0 40 17.909 40 40s-17.909 40-40 40H0v104c0 26.51 21.49 48 48 48h480c26.51 0 48-21.49 48-48V296h-8c-22.091 0-40-17.909-40-40s17.909-40 40-40zm-40-38.372c-28.47 14.59-48 44.243-48 78.372s19.53 63.782 48 78.372V400H48v-65.628c28.471-14.59 48-44.243 48-78.372s-19.529-63.782-48-78.372V112h480v65.628z" class=""></path>
                        </svg>
                    </a>
                </div>
                <div class="col">
                    <img src="img/' . $row[2] . '" alt="" class="poster">
                </div>
            </div>
        </div>
            ';
        }
        ?>

    </div>
</body>

</html>