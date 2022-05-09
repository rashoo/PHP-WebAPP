<?php


//Modify the hostname, user, password for mysql_connect with the your

//database connection information

$link = mysqli_connect('sre-training.mysql.database.azure.com', 'lnrs_mysql@sre-training', 'Password@124', 'users');

if (!$link) {

    die('Could not connect: ' . mysqli_error("No Connection"));

}

echo 'Connected successfully';

mysqli_close($link);

?>


