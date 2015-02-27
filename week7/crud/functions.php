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