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
        print_r($comments);
        
        if ( count($comments) == 0 ) {
            echo '<p>No comments</p>';
        }
        echo '<table>';
        if ( count($comments) > 0 ) {
            foreach ($comments as $value) {
                echo '<tr>';
                echo '<td>',$value , '</td>';
                echo '</tr>';
            }
        }
         echo '</table>';
        ?>
    </body>
</html>
