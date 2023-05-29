<?php
    $id = $_POST['id'];
    $name_table = $_POST['name_table'];
    if($name_table == 'NHL'){
        $name_table = 'championships';
    } 
    if($name_table == 'KHL'){
        $name_table = 'national_cups';
    } 
    if($name_table == 'RF'){
        $name_table = 'national_team';
    } 
    $db = mysqli_connect('localhost', 'root', '', 'kaprizov_bd');
    $query = "DELETE FROM $name_table WHERE id = '$id'";
    $result = mysqli_query($db, $query);
    mysqli_close($db);
    if ($result)
    echo 'Запись успешно удалена';