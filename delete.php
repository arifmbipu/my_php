<?php

$connection = mysqli_connect('localhost','root','','user_info');

$recv = $_REQUEST['id'];

$query = "DELETE FROM user_info WHERE id = $recv";

$run_delete_query = mysqli_query($connection, $query);

if($run_delete_query){
    header("location: index.php?deleted");
}


?>