<?php 

$conn = mysqli_connect("localhost", "root", "", "urlshortener");
if(!$conn){ //if database is not connected
    echo "Database Connection error".mysqli_connect_error();
}