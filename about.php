<?php
session_start();
if (!isset($_SESSION['user'])){
    header(header: 'Location: index.php');
    exit();
}
$user = $_SESSION['user'];
require 'template_about_user.php';