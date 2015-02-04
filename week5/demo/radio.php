<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $car = filter_input(INPUT_POST, 'cars');
            
            var_dump($car);
        
            $checked = 'checked="checked"';
        ?>
        
<form action="#" method="post">   
    ford <input type="radio" name="cars" value="ford" /> <br />
    kia <input type="radio" name="cars" value="kia" /> <br />
    honda <input type="radio" name="cars" value="honda" /> <br />
            
<br /><input type="submit" value="Submit" />
</form>
    </body>
</html>
