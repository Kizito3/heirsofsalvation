<?php

$conn = mysqli_connect('localhost', 'root', '', 'hos_database');

if(!$conn)
{
    echo 'Cannot connect to database';
    exit;
}

?>