<?php

$con = new mysqli('localhost','root','Ana2013Mari','kitxvari');
mysqli_query($con, "SET CHARACTER SET utf8");
mysqli_query($con, "SET NAMES utf8");

$language = "en";
if (isset($_GET["lang"]) && in_array($_GET["lang"], array("ka", "en"))) {
	$language = $_GET["lang"];
}

require_once("language/" . $language . ".php");

?>