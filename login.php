<?php
session_start();
if(!isset($_SESSION["user"])){
    $_SESSION["user"]=$_POST["usuario"];

}

echo '<h2>'.$_SESSION["user"].'</h2>';

$_SESSION["id"]= session_id();
if(!isset($_SESSION["id"])){
    session_regenerate_id();

}
echo '<h1>'.$_SESSION["id"].'</h1>';

echo '<a href="logout.php" type="" title="Log Out">Logour</a>';