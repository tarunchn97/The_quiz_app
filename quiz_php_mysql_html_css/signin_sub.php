<?php
include("class/user.php");
$signin=new users;
extract($_POST);
if($signin->signin($e,$p))
{
    $signin->url("home.php");
}
else
{
    $signin->url('quiz.php?run=failed');
}

?>