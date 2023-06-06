
<?php

session_start();

	include './db/connection.php';

    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
	$username = $conn->real_escape_string($_POST['username']);
	$password = sha1($conn->real_escape_string($_POST['password']));
	$repassword = sha1($conn->real_escape_string($_POST['re_password']));

    if($password === $repassword){
        $insert="INSERT Into user (username, password, name, email) VALUES ('$username', '$password', '$name', '$email')";
        $res=mysqli_query($conn, $insert);

        $_SESSION['register-message'] = 'Account Created!';
        header('location: ./index.php');
    }
    else{
        $_SESSION['register-message'] = 'Password does not match!';
        header('location: ./index.php');
    }

?>