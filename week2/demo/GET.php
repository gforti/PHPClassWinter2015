<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <a href="?name=gabriel&email=test@test.com">test link</a>
        
        <?php
            var_dump($_GET);
            
            //$_GET['name']
        
        if ( isset($_GET['name']) ) {
             echo $_GET['name'];
        }   
            
         echo '<br />';

          if ( isset($_GET['email']) === true ) {
             echo $_GET['email'];
        }
    
                 
        ?>
    </body>
</html>
