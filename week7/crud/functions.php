<?php

function emailIsValid( $email ) {
     if ( filter_var($email, FILTER_VALIDATE_EMAIL) != false ) {
        return true;
     } else {
         return false;
     }
}

function fullNameIsValid( $name ) {
    
}


function commentsIsValid( $comments ) {
    
}