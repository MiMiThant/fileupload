<?php

$db=new PDO('mysql:dbhost=localhost;dbname=project','root','',
    [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
    ]);

$sql="UPDATE roles SET name=:name WHERE value=999";

$statement=$db->prepare($sql);

$statement -> execute([
    ':name'=>'Supervisor'
]);

echo $statement->rowCount();