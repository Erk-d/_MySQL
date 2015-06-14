<?php

session_start();

if ($_POST){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = $_POST['date'];

    //fake stuff
    $fake_username = 'djangoo';
    $fake_email = 'erikdavies0@gmail.com';

    //arrays
    $errors = array();

    if($username == $fake_username and $email == $fake_email){
        //login accepted
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['date'] = $date;
    }
    header( 'location:profile.php');
} else {
    //poblems
    if($username != $fake_email){
        $errors[] = 'Username is incorrect';
    }
}


?>
<!DOCTYPE html>
    <html>
        <head>

        </head>
        <body>
            <form action="practicelogin.php" method="POST">
                <input type="text" name="username" value="" placeholder="please enter in your name">

                <input type="email" name="email" value="" placeholder="please enter your email">

                <input type="password" name="password" value="" placeholder="Please enter a password">

                <input type="date" name="date" value="">

                <input type="submit"  value="Login">
            </form>
        </body>

















    </html>