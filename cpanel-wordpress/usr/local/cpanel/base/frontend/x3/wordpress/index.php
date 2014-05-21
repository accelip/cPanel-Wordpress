<?php
/*
 * cPanel Wordpress 
 * Ikenna Okpala 
*/

$addon = "addoncgi/cpaddons.html?addon=cPanel::Blogs::WordPress";
$curent_path =  str_replace("wordpress/", "", substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1));
$url = "$curent_path$addon";

header("Location:$url");
exit;
?>
