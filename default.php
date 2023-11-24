<?php

$test=true;

//if($test==false)
if (isset($_GET['id'])) 
{
    include ("request.html");
}
else
{
    include ("empty.html");
}
?>