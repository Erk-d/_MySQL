<?php
session_start();

?>
<!DOCTYPE html>

<body>
    <h1>SUPER SECRET</h1>
    <?php
    // Display content based on whether the user is logged in
    $logged_in = $_SESSION['logged_in'];

    if( $logged_in == true ){
        echo "<p>this is a super sercet sentence! <a href='logout.php' >Log out</a> </p>";
        echo $_SESSION['email'];
        echo $_SESSION['password'];
    }




    ?>


</body>


