<?php

$connection = mysqli_connect('localhost','root','','user_info');
$query = "SELECT * FROM user_info";

$data_trans = mysqli_query($connection, $query);

$count = mysqli_num_rows($data_trans);

if ($count > 0){
    echo 'Username:<br> ';

while($row = mysqli_fetch_assoc($data_trans)){
    echo "{$row['username']}<br>";
}

echo '<br>Your total database is ';
echo "$count";
}else{
    echo 'Your database is empty!';
}


















?>