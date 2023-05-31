<?php

    session_start();

    if(!isset($_SESSION['user'])){
        header('location: index.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5" style="width:800px;">
        <h1 class="mb-3 text-center">Alice (Manager)</h1>

        <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-warning">
                Cannot uploaded file!
            </div>
        <?php endif ?>

        <?php if(file_exists('_actions/photos/profile.jpg')): ?>
            <img class="img-thumbnail mb-3"
                src="_actions/photos/profile.jpg" 
                alt="Image" width="200">
        <?php endif ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="photo" class="form-control">
            <button class="btn-btn-success">Upload</button>
        </form>


        <ul class="list-group">
            <li class="list-group-item">
                <b>Email: </b> alice@gmail.com
            </li>
            <li class="list-group-item">
                <b>Address: </b> Yangon
            </li>
            <li class="list-group-item">
                <b>Phone: </b> 0943445
            </li>
        </ul>

        <a href="_actions/logout.php" class="btn btn-danger">Logout</a>
    </div>
    
</body>
</html>