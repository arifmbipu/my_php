
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php

if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($email && $username && $password){

        $connection = mysqli_connect('localhost','root','','user_info');

        // DATABASE CONNECTION TESTING

        // if($connection){
        //     echo 'Database is perfectly connected';
        // }else{
        //     echo 'Database is not connected!';
        // }

        $query = "INSERT INTO user_info (email, username, password) VALUES ('$email','$username','$password')";

        $result = mysqli_query($connection, $query);

        if($result){
            header("location: index.php");
        }else{
            echo 'kindly provide necessary information';
        }
    }else{
        echo 'Empty field cannot be sent!';
    }


}



?>

<div class="container">
    <h1 class="heading">User Registration</h1>
    <form role="form" action="login.php" method="post">
        <input class="form-control" type="text" name="email" placeholder="Type your mail">
        <input class="form-control" type="text" name="username" placeholder="username">
        <input class="form-control" type="password" name="password" placeholder="Type your password">
        <input class="form-control btn btn-success" type="submit" name="submit" value="Submit">
    </form>
</div>
</body>
</html>