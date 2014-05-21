<?php
/*
 * cPanel Wordpress 
 * Ikenna Okpala 
*/

$addon = "addoncgi/cpaddons.html?addon=cPanel::Blogs::WordPress";
$curent_path = substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1);
$url = "$_SERVER['HTTP_HOST']$curent_path$addon";

header('Location: https://$url/');
exit;
?>

