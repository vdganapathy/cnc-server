<?php
session_start();
function su_set_session($sessname,$sessval)
{
 
$_SESSION[$sessname]=$sessval;
}

function su_setasso_session($sessname,$sesskey,$sessval)
{
$_SESSION[$sessname][$sesskey]=$sessval;
}
?>