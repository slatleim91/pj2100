<?php

//require 'setAktivitet.php';
//$aktivSetter = new setAktivitet();
error_reporting(0);
//try{
$filename =  $_GET['url'] . '.php';
$classname = $_GET['url'];
//}catch (Exception $E) {
error_reporting(-1);

//die("File doesn\'t exist!");
if(!file_exists($filename)) 
 {

$filename = 'frontpage.php';
$classname = 'frontpage';
}

require 'header.php';
header('Content-Type: text/html; charset=UTF8');
require $filename;
$kode = new $classname();

//require 'testPage.php';
//$kode = new testPage();
echo $kode->showpage($database);
require 'footer.php';


?>