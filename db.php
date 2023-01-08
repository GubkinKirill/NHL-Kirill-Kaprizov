<?php
    $dbhost = "localhost";
    $dbname = "kaprizov_bd";
    $username = "root";
    $password = "";

    $db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

    function get_table_($name_table){
        global $db;
        $table = $db->query("SELECT * FROM $name_table");
        return $table;
    }
?>