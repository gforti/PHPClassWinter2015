<?php

    $error_msgs = array();
    
    if ( !empty($_POST) ) {
        
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $comments = filter_input(INPUT_POST, 'comments');
        
        
    }
    



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>                   
        <form action="#" method="post">
            <fieldset>
                <legend><h2>Add Comments</h2></legend>
                <p>
                    <label>E-Mail:</label>
                    <input type="text" name="email" value="" />
                </p>
                <p>
                    <label>Name:</label>
                    <input type="text" name="fullname" value="" />
                </p>
                <p>Comments: (optional)</p>
                <textarea name="comments" rows="4" cols="50"></textarea>

                <p> <input type="submit" value="Submit" /> </p>
            </fieldset>
        </form> 
    </body>
</html>
