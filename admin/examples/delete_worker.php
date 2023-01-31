<?php

$id = $_GET['id'];

include('conn.php');

$query = "delete from workers where id = '$id'";
$result = mysqli_query($conn,$query);

if($result)
{
    $success = 'Worker removed';
    include('workers.php');
    exit;
}


?>