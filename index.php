<?php
session_start();
include 'config/dbconnection.php';
include 'models/functions.php';

$pdo = pdo_connect_mysql();

//Basic routing
$page = isset($_GET['page']) && file_exists($_GET['page']) . '.php' ? $_GET['page'] : 'home';

include $page . '.php';
