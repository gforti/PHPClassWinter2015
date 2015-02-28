<?php
    include './functions.php';
    
    $id = filter_input(INPUT_POST, 'id');
    
    $comment = getComment($id);
    
    print_r($comment);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
