<?php

/*
***********************************************************

Topic   : Program to demonstrate array_walk function in PHP.
Author  : Chpaone09®
Date    : Oct 26, 2020

************************************************************
*/


function check($v, $k){
echo " $k has $v<br>";
}

$a = array("name"=> "abc", "age"=>25);

array_walk($a,"check");
//echo "<pre>";print_r($a);

?>
