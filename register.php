<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap {
width: 100%;
max-width: 400px;
margin: 40px auto;
}
    </style>
</head>
<body>

    <div class="text-center">
       <div class="warp">
            <h1>Register</h1>

            <?php if(isset($_GET['error'])): ?>
                <div class="alert alert-warning">
                     Email or password is Incorrect!
                </div>
            <?php endif ?>

            <form action="_actions/create.php" method="post" class="container w-200">
                <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
                <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
                <input type="text" class="form-control mb-2" name="phone" placeholder="Phone" required>
                <input type="text" class="form-control mb-2" name="address" placeholder="Address" required>
                <input type="text" class="form-control mb-2" name="password" placeholder="Password" required>

                <button class="btn btn-success" type="submit">Rigister</button>
            </form>
            <a href="_actions/login.php">Login</a>
       </div>
    </div>
    
</body>
</html>