<?php

$id = $_GET['id'];

include('conn.php');

$query = "delete from members where id = '$id'";
$result = mysqli_query($conn,$query);

if($result)
{
    $success = 'member removed';
    include('member.php');
    exit;
}


?>