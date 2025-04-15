<?php
$ans="";
$pascal="";
$kpa="";
$mpa="";
$bar="";
$msg="";
$msg1="";
$msg2="";
$sel1="";
$sel2="";
$sel3="";
$sel4="";
if(isset($_REQUEST["pressure"]) && $_REQUEST["pressure"]=="PASCAL")
{
    $sel1=" selected ";
    $ans=$_REQUEST["num"];
    $kpa=$ans/1000;
    $mpa=$ans/1000000;
    $bar=$ans/100000;
    $msg=$ans." PASCAL  is equal to " . $kpa . " kPA ";
    $msg1=$ans." PASCAL  is equal to " . $mpa . " mPA ";
    $msg2=$ans." PASCAL  is equal to " . $bar . " bar ";
}
elseif(isset($_REQUEST["pressure"]) && $_REQUEST["pressure"]=="MPA")
{
    $sel2=" selected ";
    $ans=$_REQUEST["num"];
    $pascal=$ans*1000000;
    $kpa=$ans*1000;
    $bar=$ans*10;
    $msg=$ans." megapascal  is equal to " . $pascal . " pa ";
    $msg1=$ans." megapascal  is equal to " . $kpa . " kPA ";
    $msg2=$ans." megapascal  is equal to " . $bar . " bar ";
}
elseif(isset($_REQUEST["pressure"]) && $_REQUEST["pressure"]=="KPA")
{
    $sel3=" selected ";
    $ans=$_REQUEST["num"];
    $pascal=$ans*1000;
    $mpa=$ans*0.001;
    $bar=$ans*0.01;
    $msg=$ans." kilopascal  is equal to " . $pascal . " pa ";
    $msg1=$ans." kilopascal  is equal to " . $mpa . " mPA ";
    $msg2=$ans." kilopascal  is equal to " . $bar . " bar ";
}
elseif(isset($_REQUEST["pressure"]) && $_REQUEST["pressure"]=="BAR")
{
    $sel4=" selected ";
    $ans=$_REQUEST["num"];
    $pascal=$ans*100000;
    $mpa=$ans*0.1;
    $kpa=$ans*100;
    $msg=$ans." bar is equal to " . $pascal . " pa ";
    $msg1=$ans." bar  is equal to " . $mpa . " mPA ";
    $msg2=$ans." bar  is equal to " . $kpa . " kPA ";
}
include("header.html");
include("energy.html");
include("footer.html");
?>
