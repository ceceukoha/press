<?php
    require "db_con.php";
    require "../modules/sessions.php";

    if (!isset($_POST['login'])) {
        header("Location: ../../lo")
    }
?>