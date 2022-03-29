<?php

session_start();

if(!$_SESSION['Login']){
    header('location: index.php');
    exit();
}