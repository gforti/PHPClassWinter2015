<?php

function emailIsValid( $email ) {
     if ( filter_var($email, FILTER_VALIDATE_EMAIL) != false ) {
        return true;
     } else {
         return false;
     }
}

function fullNameIsValid( $name ) {
    if ( !empty($name) ) {
        return true;
    } else {
        return false;
    }
}


function commentsIsValid( $comments ) {
     if ( !empty($comments) ) {
        return true;
    } else {
        return false;
    }
}


function displayErrorMsgs( $error_msgs ) {
     if ( is_array($error_msgs) && count($error_msgs) > 0 ) {
        foreach ($error_msgs as $err) {
          echo '<p>', $err, '</p>'; 
        }                    
    }
}