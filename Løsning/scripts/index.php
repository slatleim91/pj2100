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

$filename = 'testPage.php';
$classname = 'testPage';
}

require 'header.php';
require $filename;
$kode = new $classname();

//require 'testPage.php';
//$kode = new testPage();
echo $kode->showpage($database);
require 'footer.php';


?>