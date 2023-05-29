<?php
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
$query = "INSERT INTO $name_table (season, command, tournament, matches, goal, transmission,assistant)
         VALUES ('$season', '$command', '$tournament', '$matches', '$goal', '$transmission','$assistant')";
$result = mysqli_query($db, $query);
mysqli_close($db);
if ($result)
echo 'Статья успешно добавлена';