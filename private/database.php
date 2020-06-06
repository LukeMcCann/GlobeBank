<?php
    require_once('db_credentials');

    function db_connect() {
        $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        return $connection;
    }

    function db_dicsconnect($connection) {
        if(!isset($connection)) { return; }
        mysqli_close($connection);
    }
?>