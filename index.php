<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/adaptive.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <?php require './templates/header.php'; ?> 
        <hr class="red_line">
        <main class="main">
            <div class="gradient">
                <img src="./img/wild.png" alt="">
            </div>

            <?php require './templates/statistics.php'; ?> 
        </main>
        <?php require './templates/footer.php'?>
        
    </div>
</body>
</html>