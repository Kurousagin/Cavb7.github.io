<?php
session_start();
unset($_SESSION['Login']);
session_destroy();
header('location: ../index.php');
exit();