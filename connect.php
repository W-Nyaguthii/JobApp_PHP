<?php

$host="localhost";
$user="root";
$pass="";
$name="login";
$conn=new mysqli($host,$user,$pass,"login"); //the login part is the name of the <database>
if($conn->connect_error)
{
    echo "Failed to connect DB".$conn->connect_error;
}

