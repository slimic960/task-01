<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <title>Task</title>
    </head>
    <body>
        <section class="choice">
            <div class="container">
                <ul id="navbar">
                    <li><a href="#criminalsnote-group">Записка преступника</a></li>
                    <li><a href="#island-group">Островки</a></li>
                    <li><a href="#task-group">Каталог товаров</a></li>
                </ul>
            </div>
        </section>
        <section class="value">
            <div class="container-fluid">
                <div id="block-value">
                    <?php
                    include ("includes/criminalsnote/index.php");           
                    include ("includes/islands/index.php");
                    include ("includes/task/index.php");
                    ?>                 
                </div>
            </div>
        </section>
    </body>
</html>

