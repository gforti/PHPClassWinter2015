<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $states = array();
            $states["RI"] = 'Rhode Island';
            
            
            echo '<select>';
            foreach ($states as $key => $value) {
                echo '<option value=""></option>';
            }
            
             echo '</select>';
            
        ?>
    </body>
</html>
