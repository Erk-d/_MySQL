<?php

// Check if someone tried to register before attempting to validate information

if ($_POST['did_register'] == true ) {
    // if the post was submitted run validation
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pw1 = $_POST['pw1'];
    $pw2 = $_POST['pw2'];

    $errors = array();

    // Check name to see if empty

    if($name == '' ){
        //errors
        $errors[] = 'Please enter your name';
    }

    if($email == '' ){
        $errors[] = 'Please enater your email';
    }

    if($pw1 == '' ){
        $errors[] = 'Please enter a password';
    } elseif($pw1 != $pw2) {
        $errors[] = 'Your passwords do not match';
    }

    // Check wether errors were triggered

    if (count($errors)== 0) {
        // The form was successfully submitted!

        $to = $email;
        $subject = "Thanks $name for registering";
        $body = 'Hello, Thanks for signing up';
        $header = 'From: erikdaives0@gmail.com rn
                   BCC: kracker4586@yahoo.com';

        // Actually send email
        $mail_sent = mail($to,$subject,$body,$header);

    }

}


?>
<!DOCTYPE html>
    <html>
        <head>

        </head>
        <body>

        <?php
        //if there are more than zero errors show them
        if(count($errors) > 0 ){

            //use loop to iterater through each index in the errors array
            foreach($errors as $error ) {
                // Write the error to the page
                echo "<p>$error</p>";
            }

        }
        ?>


            <form action="signup.php" method="POST">
                <p>Your name:<br />
                <input type="text" name="username" value="<?php echo $name?>" /></p>

                <p>Your email<br />
                <input type="text" name="email" value="<?php echo $email ?>" /></p>

                <p>Your Password<br />
                <input type="password" name="pw1" value="" /></p>

                <p>Confirm your password:<br />
                <input type="password" name="pw2" value="" /></p>


                <p><input type="submit" value="Register" /></p>

                <input type="hidden" name="did_register" value="true">

            </form>







        </body>
    </html>

