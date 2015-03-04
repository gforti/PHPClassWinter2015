<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            if ( !empty($_POST) ) {
                $passcode = filter_input(INPUT_POST, 'passcode');
                
                if ( $passcode === 'test' ) {
                   header('Location: admin.php');
                } else {
                    echo 'incorrect passcode';
                }
            
            }
        ?>
        
        <form method="post" action="#">            
            Passcode <input type="password" value="" name="passcode" />            
            <input type="submit" value="submit" />          
        </form>
    </body>
</html>
