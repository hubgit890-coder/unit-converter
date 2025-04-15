<?php
$byte="";
$kb="";
$mb="";
$gb="";
$tb="";
$ans="";
$msg="";
$msg1="";
$msg2="";
$msg3="";
$sel1="";
$sel2="";
$sel3="";
$sel4="";
$sel5="";

if(isset($_REQUEST["data"]) && $_REQUEST["data"]=="BYTE")
{
    $sel1=" selected ";
    $ans=$_REQUEST["num"];
    $kb=$ans/1024;
    
    $msg ="<font color='green'>" . "conversion of ".$ans." BYTE to KILOBYTE is : ".$kb. " KB";
}
elseif(isset($_REQUEST["data"]) && $_REQUEST["data"]=="KB")
{
    $sel2=" selected ";
    $ans=$_REQUEST["num"];
    $mb=$ans/1024;

    $msg ="<font color='green'>" . "conversion of ".$ans." KILOBYTE to MEGABYTE is : ".$mb. " MB";
}
elseif(isset($_REQUEST["data"]) && $_REQUEST["data"]=="MB")
{
    $sel3=" selected ";
    $ans=$_REQUEST["num"];
    $gb=$ans/1024;

    $msg ="<font color='green'>" . "conversion of ".$ans." MEGABYTE  to  GIGABYTE is : ".$gb. " GB";
}
elseif(isset($_REQUEST["data"]) && $_REQUEST["data"]=="GB")
{
    $sel4=" selected ";
    $ans=$_REQUEST["num"];
    $tb=$ans/1024;

    $msg ="<font color='green'>" . "conversion of ".$ans." GIGABYTE to TERABYTE is : ".$tb. " TB";
}
include("header.html");
include("data.html");
include("footer.html");
?>