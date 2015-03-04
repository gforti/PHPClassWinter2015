<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
            session_start();
            
            $_SESSION['hello'] = 'hello';
            
            $_SESSION['cart'] = array();
            
        ?>
    </body>
</html>
