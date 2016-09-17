<?php
$con = new mysqli(SERVER, USERNAME, PASSWORD);
if (!$con) {
    echo "Database Connection fail";
    exit;
} else {
    $con->select_db(DATABASE);
}
