<?php
    $server = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "press";

    $connectDB = mysqli_connect($_server,$dbusername,$dbpassword,$dbname);
    if (!$connectDB) {
        die("Connection Failed").mysqli_connect_error();
        // header("Location: ../../register");
    }

?>