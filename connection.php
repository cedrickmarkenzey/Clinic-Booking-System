<?php

    $database= new mysqli("localhost","root","","doc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>