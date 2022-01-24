<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>


    <?php

$connection = mysqli_connect('localhost','root','','user_info');
$query = "SELECT * FROM user_info";

$data_trans = mysqli_query($connection, $query);

$count = mysqli_num_rows($data_trans);

if ($count > 0){

    if(isset($_REQUEST['deleted'])){
        ?>

    <h1 class="container" style="color:green;"><?php echo "Data Deleted Successfully!"; ?></h1>
    <?php
    }


?>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>EMAIL</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>ACTION</th>
                </tr>
            </thead>



            <?php
while($row = mysqli_fetch_assoc($data_trans)){
    
   $db_id = $row['id'];
   $db_email = $row['email'];
   $db_username = $row['username'];
   $db_password = $row['password'];
?>

            <tbody>
                <tr>
                    <td><?php echo $db_id;?> </td>
                    <td><?php echo $db_email;?></td>
                    <td><?php echo $db_username;?></td>
                    <td><?php echo $db_password;?></td>
                    <td><a href="delete.php?id=<?php echo $db_id ?>">Delete</a></td>
                </tr>
            </tbody>


            <?php

}
?>


        </table>
    </div>


    <?php
}else{
?>
    <h1 class="container" style="color:red;"><?php echo "You don't have any data in your database!"; ?> </h1>

    <?php
}
?>


</body>

</html>