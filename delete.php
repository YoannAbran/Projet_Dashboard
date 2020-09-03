<?php
session_start();
require('controller.php');
require('Book.php');

$user = $_SESSION['username'];
bookDelete($_GET['id'], $user);

?>
