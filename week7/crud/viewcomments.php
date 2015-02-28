<?php
    include './functions.php';    
    $comments = readAllComments();
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
        
        if ( count($comments) == 0 ) {
            echo '<p>No comments</p>';
        }
        
        
        ?>
    </body>
</html>
