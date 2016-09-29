<?php
try{
    $con=new PDO("mysql:host=".SERVER.";dbname=".DATABASE."",USERNAME,PASSWORD);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    $e->getMessage();
}
