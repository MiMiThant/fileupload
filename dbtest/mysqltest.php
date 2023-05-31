<?php

$db=new PDO('mysql:dbhost=localhost;dbname=project','root','',
            [
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
            ]);

$statement=$db->query("SELECT * FROM roles");

$row1=$statement->fetch();

$result=$statement->fetchAll();

echo "<br><br>";

print_r($row1);

echo "<br><br>";

print_r($result);

$sql1="INSERT INTO roles(name,value) VALUES('supervisor',3)";

$db->query($sql1);

echo $db->lastInsertId();