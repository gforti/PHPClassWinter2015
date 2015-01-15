<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //  $_POST
        
            if ( isset($_POST['fname'] ) ) {
                echo $_POST['fname'];
            }
            
             if ( isset($_POST['email'] ) ) {
                echo $_POST['email'];
            }
            
            
            include './validation.php';
            
        
        ?>
    </body>
</html>
