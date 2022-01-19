<?php
$con = new mysqli('localhost','root','root','crud operation');
if(!$con){
    die(mysqli_error($con));
}