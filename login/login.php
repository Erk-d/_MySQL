<?php

// Want to use the the session_start at the top of any page thats going to be at any page thats uses session varibles

session_start();

//Check Wether the POST exists as a request yet in other words did someone try to login?
if( $_POST ) {
    // Store the user email and password in eaasier to type variables

    $email = $_POST['email'];
    $password = $_POST['password'];

    //fake static calues with the correct login

   $fake_email = 'erikdavies0@gmail.com';
   $fake_password = 'amazeballs';

    //create a container array for potential errors
    $errors = array();

    //Check whether inouted the email/password match the correct email/password

    if($email == $fake_email and $password == $fake_password) {
        //login accepted
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        // Check whether the user wants to be remembered
        if($_POST['remember'] == true ){
            //set a cookie to have for later
            setcookie('user_email', $email, time() + (60*60*24) );
            setcookie('user_password', $password, time() + (60*60*24) );

        } else {
            // Set empty coolies in case the user already had saved login information
            setcookie( 'user_email', '');
            setcookie( 'user_password', '');
        }
        //rediret to secret profile
        header( 'location:secret_profile.php' );
    } else {
    //Assume weve got a problem

    if($email != $fake_email) {
        // Error for emails that dont match
        $errors[] = 'Your email was wrong';
    }
    if($password != $fake_password) {
        // Error for the password that dont match
        $errors[] = 'Your password was wrong';
    }

}
}


?>
<!DOCTYPE html>
    <head>

    </head>
<?php
//where i display my errors
    if (count($errors) > 0) {
        // loop through all the errors and write  them in a paragraph tag
        foreach( $errors as $error) {
            //Write the error to the browser
            echo "<p>$error</p>";
        }

    }


?>

<body>
    <form action="login.php" method="POST">
    <p>Email<br />
    <input type="text" name="email" value="<?php echo $_COOKIE['user_email'] ?>" /> </p>

    <p>Password<br />
    <input type="password" name="password" value="<?php $_COOKIE['user_password'] ?>" /></p>

    <p><input type="checkbox" name="remember" value="true" /> Remember Me</p>

    <p><input type="submit" value="login" /> </p>

    </form>

    <?php
    // CHeck wether the user logged out using the GET request
    // if the user has just logged out show message

    if( $_GET['action'] == 'logout' ) {
        // display message
        echo '<p>Thanks for coming, see you soon!</p>';
    }


    ?>

</body>