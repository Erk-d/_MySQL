<?php
include_once('mysql_connect.php');
?>
<!DOCTYPE html>
    <html>
        <head>
            <style type="text/css">
                body {


                    background-color: #f1f1ff;
                
                }
                .content {
                    margin-left: 30px;;
                }
                .holder {
                    padding: 10px;
                    border: 2px solid cadetblue;
                    margin: auto;
                    width: 540px;
                }
                h2 {
                    color: #505c62;
                }

                h3 {
                    background-color: #819899;
                }


            </style>
            <title>

            </title>
        </head>
        <body>
            <section class="holder">
            <h2>Recent Posts:</h2>
            <?php

            //Create the MySQL query as a string
            $query = 'SELECT * FROM posts';
            //Actually run the command through MYSQL with PHP
            $results = mysql_query( $query );

            // Loop through each result, use the placeholder varible %row for each row returned from the table  column
            //names are array indexes

            while ($row = mysql_fetch_array( $results )){
                $title = $row['title'];
                $content = $row['content'];

                $excerpt = substr($content,0,12);

                echo "<h3>$title</h3>
                        <div class='content'>$excerpt</div>";

            }


            ?>
                </section>
        </body>
    </html>