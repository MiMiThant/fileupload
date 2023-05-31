<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$tabel=new UsersTable(new MySQL);

$table->insert([
    "name"=>$_POST['name'],
    "email"=>$POST['email'],
    "phone"=>$_POST['phone'],
    "address"=>$_POST['address'],
    
]);

HTTP::redirect("/index.php","register=success");