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
        //print_r($comments);
        
        if ( count($comments) == 0 ) {
            echo '<p>No comments</p>';
        }
        echo '<table border="1">';
         echo '<tr><th>Name</th><th>email</th><th>comments</th><th>phone</th><th></th><th></th></tr>';
        if ( count($comments) > 0 ) {
            foreach ($comments as $value) {
                echo '<tr>';
                echo '<td>',$value['name'] , '</td>';
                echo '<td>',$value['email'] , '</td>';
                echo '<td>',$value['comments'] , '</td>';
                echo '<td>',$value['phone'] , '</td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '</tr>';
            }
        }
         echo '</table>';
        ?>
    </body>
</html>
