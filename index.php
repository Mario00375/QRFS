<?php
session_start();
include("config.php");
require "class/conexion.php";
$user = new ApptivaDB();

include("inc/header.php");
if(isset($_SESSION['admin']))
$page=(isset($_GET['pagina'])) ? $_GET['pagina'] : "index";
else
    $page="login";
include("pages/".$page.".php");
$user=null;
include("inc/footer.php");

?>
