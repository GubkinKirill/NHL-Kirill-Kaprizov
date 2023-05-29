<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: adminavt.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Страница</title>
<meta charset="utf-8">
<link rel="stylesheet" href="./style/style.css">
</head>
<body>
<div class="_container">


<?php require 'db.php'?>
<h2 style="font-family: 'Roboto';">НХЛ</h2>
<table class="matches_table">
                <tr class="matches_table_head">
                    <td>Сезон</td>
                    <td>Команда</td>
                    <td>Турнир</td>
                    <td>Матчи</td>
                    <td>Г</td>
                    <td>П</td>
                    <td>О</td>
                </tr>
                <?php
                $table = get_table_('championships');
                foreach ($table as $i) : ?>
                    <tr class="matches_table_head_body">

                        <td><?php echo $i["season"] ?></td>
                        <td><?php echo $i["command"] ?></td>
                        <td><?php echo $i["tournament"] ?></td>
                        <td><?php echo $i["matches"] ?></td>
                        <td><?php echo $i["goal"] ?></td>
                        <td><?php echo $i["transmission"] ?></td>
                        <td><?php echo $i["assistant"] ?></td>
                    </tr>
                <?php endforeach ?>

            </table>

            

            <h2 style="font-family: 'Roboto';">КХЛ</h2>
            <table class="matches_table">
                <tr class="matches_table_head">
                    <td>Сезон</td>
                    <td>Команда</td>
                    <td>Турнир</td>
                    <td>Матчи</td>
                    <td>Г</td>
                    <td>П</td>
                    <td>О</td>
                </tr>
                <?php
                $table = get_table_('national_cups');
                foreach ($table as $i) : ?>
                    <tr class="matches_table_head_body">

                        <td><?php echo $i["season"] ?></td>
                        <td><?php echo $i["command"] ?></td>
                        <td><?php echo $i["tournament"] ?></td>
                        <td><?php echo $i["matches"] ?></td>
                        <td><?php echo $i["goal"] ?></td>
                        <td><?php echo $i["transmission"] ?></td>
                        <td><?php echo $i["assistant"] ?></td>
                    </tr>
                <?php endforeach ?>

            </table>

            

            <h2 style="font-family: 'Roboto';">СБОРНАЯ РФ</h2>        
            <table class="matches_table">
                <tr class="matches_table_head">
                    <td>Сезон</td>
                    <td>Команда</td>
                    <td>Турнир</td>
                    <td>Матчи</td>
                    <td>Г</td>
                    <td>П</td>
                    <td>О</td>
                </tr>
                <?php
                $table = get_table_('national_team');
                foreach ($table as $i) : ?>
                    <tr class="matches_table_head_body">

                        <td><?php echo $i["season"] ?></td>
                        <td><?php echo $i["command"] ?></td>
                        <td><?php echo $i["tournament"] ?></td>
                        <td><?php echo $i["matches"] ?></td>
                        <td><?php echo $i["goal"] ?></td>
                        <td><?php echo $i["transmission"] ?></td>
                        <td><?php echo $i["assistant"] ?></td>
                    </tr>
                <?php endforeach ?>
                
            </table>

            <form action="newart.php" method="post">
                <div>
                <input type="radio" id="huey" name="name_table" value="NHL" checked>
                <label for="huey">НХЛ</label>
                </div>

                <div>
                <input type="radio" id="dewey" name="name_table" value="KHL">
                <label for="dewey">КХЛ</label>
                </div>

                <div>
                <input type="radio" id="dewey" name="name_table" value="RF">
                <label for="dewey">Сборная РФ</label>
                </div>

            <p>Сезон:</p>
            <input name="season">
            <p>Команда:</p>
            <input name="command">
            <p>Название турнира</p>
            <input name="tournament">
            <p>Количество матчей</p>
            <input name="matches">
            <p>Количество заброшенных шайб</p>
            <input name="goal">
            <p>Количество передач</p>
            <input name="transmission">
            <p>Ассистент</p>
            <input name="assistant">
            <input type="submit" value="Добавить данные">
            </form>

            <br>
             <br> 
            <h3>Удаление данных из таблицы</h3>
            <form action="delete.php" method="post">
                <div>
                <input type="radio" id="huey" name="name_table" value="NHL" checked>
                <label for="huey">НХЛ</label>
                </div>

                <div>
                <input type="radio" id="dewey" name="name_table" value="KHL">
                <label for="dewey">КХЛ</label>
                </div>

                <div>
                <input type="radio" id="dewey" name="name_table" value="RF">
                <label for="dewey">Сборная РФ</label>
                </div>
                

                <p>Введите номер записи, которую нужно удалить</p>
                <input name="id">
                <input type="submit" value="Удалить данные">
            </form>
             <br>
             <br>       
           <h3>Изменение данных</h3>      
            <form action="update.php" method="post">
                <div>
                <input type="radio" id="huey" name="name_table" value="NHL" checked>
                <label for="huey">НХЛ</label>
                </div>

                <div>
                <input type="radio" id="dewey" name="name_table" value="KHL">
                <label for="dewey">КХЛ</label>
                </div>

                <div>
                <input type="radio" id="dewey" name="name_table" value="RF">
                <label for="dewey">Сборная РФ</label>
                </div>
            <p>Id:</p>    
            <input name="id">        
            <p>Сезон:</p>
            <input name="season">
            <p>Команда:</p>
            <input name="command">
            <p>Название турнира</p>
            <input name="tournament">
            <p>Количество матчей</p>
            <input name="matches">
            <p>Количество заброшенных шайб</p>
            <input name="goal">
            <p>Количество передач</p>
            <input name="transmission">
            <p>Ассистент</p>
            <input name="assistant">
            <input type="submit" value="Изменить данные">
            <br>
             <br> 
</div>
</body>
</html>