<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            session_start();
            echo $_SESSION['hello'];
        ?>
    </body>
</html>
