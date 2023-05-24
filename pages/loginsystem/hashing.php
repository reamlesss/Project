<?php

function HashData($password)
{
    $pass = password_hash($password, PASSWORD_DEFAULT);
    return $pass;
}

function CorrectPass($password, $hash)
{
    if(password_verify($password, $hash))
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>