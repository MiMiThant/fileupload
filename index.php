<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap{
            width:100%;
            max-width:400px;
            margin: 40px auto;
        }
    </style>
</head>
<body class="container text-center"> 
        <div class="wrap">
            <h1 class="h3 mb-3">Login</h1>

            <?php if(isset($_GET['incorrect'])): ?>
                <div class="alert alert-danger">
                    Incorrect email or password!
                </div>
            <?php endif ?>

            <form action="_actions/login.php" method="post">
                <input type="email" class="form-control my-3" name="email" placeholder="Please Enter Email">
                <input type="text" class="form-control my-3" name="password" placeholder="Password">
                <button type="submit" class="btn btn-primary my-3 w-100">Login</button>
            </form>

            <a href="register.php">Register</a>
        </div>
    
</body>
</html>