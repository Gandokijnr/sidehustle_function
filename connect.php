<?php

$connect = mysqli_connect("localhost", "root", "", "sidehustle");

if (!$connect) {
    die("cannot connect to the database");
}else {
    echo "connected to the database <br>";
}
?>