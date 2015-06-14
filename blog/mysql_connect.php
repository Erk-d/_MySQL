<?php

//Do not load this page by itself, include it on pages where you want access to the database

$db_username = 'erikd';
$db_password = 'red';
$db_name = 'webeve';

$db = mysql_connect('localhost', $db_username, $db_password);

if( !$db ) {
    die( 'Could not connect: ' . mysql_error());
}

mysql_select_db( $db_name, $db ) or die( 'Could not connect to database: ' . mysql_error() );