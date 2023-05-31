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
    <div class="container my-5">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="photo">
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>