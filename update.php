<?php
$id = $_POST['id'];
$season = $_POST['season'];
$command = $_POST['command'];
$tournament = $_POST['tournament'];
$matches = $_POST['matches'];
$goal = $_POST['goal'];
$transmission = $_POST['transmission'];
$assistant = $_POST['assistant'];

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
$query = "UPDATE $name_table
            SET season = '$season',
                command = '$command',
                tournament = '$tournament',
                matches = '$matches',
                goal = '$goal',
                transmission = '$transmission',
                assistant = '$assistant'
                WHERE id='$id';";
$result = mysqli_query($db, $query);
mysqli_close($db);
if ($result)
echo 'Статья успешно изменина';