<?php
session_start();
?>
<!DOCTYPE html>
    <html>
        <head>

        </head>
        <body>

        <h1>Welcome to you Profile Page</h1>


        <section>
        <p>Hello <?php echo $_SESSION['username']; ?></p>

        <p>You enter in the date of <?php echo $_SESSION['date']; ?></p>

        <p>Your current password is <?php echo $_SESSION['password'];?></p>

        </section>

        </body>





    </html>