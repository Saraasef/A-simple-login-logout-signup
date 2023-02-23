<?php
session_start();

include 'Connection.php';
include 'Function.php';

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>

<head>
    <title>My website</title>
</head>

<body id="body">
    <style>
    #body {
        text-align: center;
    }
    </style>
    <a href="logout.php">Logout</a>
    <h1>Home Page: welcome</h1><img
        src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcROgjuDT7GkXv5he4_RtjhYnakCNoxYd88lnYsxfDCNsIE1Xdni8YTfxgu7xSmniF9rYrhFRXbq_7jku1-eANMxrzDDkZOiBjKXfSVxQl8&usqp=CAc"><img /><br>Hello <?php echo $user_data[
            'user_name'
        ]; ?>
</body>

</html>