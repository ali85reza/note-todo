<?php
require_once 'db.php';


// add to db
// $insert = mysqli_query($db , "INSERT INTO users (display_name, username, password) VALUES ('حسین', 'fdsagsdg', 'sdagadsg')");

// if($insert){
//     echo 'added';
// } else {
//     echo 'error';
// }

$username = 'fdsagadsgadsgd';
$checkUser = mysqli_query($db, "SELECT * FROM users WHERE username='$username'");

// echo mysqli_num_rows($checkUser);

if(mysqli_num_rows($checkUser) > 0){
    echo 'شما نمیتوانید ثبت نام کنید';
}else {
     echo 'اوکیه';
}