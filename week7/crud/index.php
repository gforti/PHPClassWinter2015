<?php

    include './functions.php';
    $error_msgs = array();
    $fullname = '';
    $email = '';
    $comments = '';
    
    if ( !empty($_POST) ) {
        
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $comments = filter_input(INPUT_POST, 'comments');
        
        
        if ( !emailIsValid($email) ) {
            $error_msgs[] = 'Email is not Valid.';
        }
        
        if ( !fullNameIsValid($fullname) ) {
            $error_msgs[] = 'Please enter your name.';
        }
        
        
        if ( count($error_msgs) == 0 ) {
            //add to database
            
            // remember to change the port
            $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");
            $dbs = $db->prepare('insert into comments set name = :name, email = :email, comments =:comments'); 
            
            // you must bind the data before you execute
            $dbs->bindParam(':name', $fullname, PDO::PARAM_STR);
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':comments', $comments, PDO::PARAM_STR);
            
            
             if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                echo '<h1> user  was added</h1>';
            } else {
                echo '<h1> user was <strong>NOT</strong> added</h1>';
            }     
            
        }
        
        
    }
    
    
    

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>    
        
        <div class="error_message">
            <?php            
                displayErrorMsgs($error_msgs);            
            ?>
        </div>
        
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
