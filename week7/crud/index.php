<?php

    $error_msgs = array();
    $fullname = '';
    $email = '';
    $comments = '';
    
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
                    <input type="text" name="email" value="<?php echo $email; ?>" />
                </p>
                <p>
                    <label>Name:</label>
                    <input type="text" name="fullname" value="<?php echo $fullname; ?>" />
                </p>
                <p>Comments: (optional)</p>
                <textarea name="comments" rows="4" cols="50"><?php echo $comments; ?></textarea>

                <p> <input type="submit" value="Submit" /> </p>
            </fieldset>
        </form> 
    </body>
</html>
