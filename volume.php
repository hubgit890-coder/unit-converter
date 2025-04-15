<?php
$ans="";
$meter="";
$liter="";
$milileter="";
$gallons="";
$cm="";
$msg="";
$msg1="";
$msg2="";
$msg3="";
$sel1="";
$sel2="";
$sel3="";
$sel4="";
$sel5="";
if(isset($_REQUEST["volume"]) && $_REQUEST["volume"]=="meter")
{
    $sel1=" selected ";
    $ans=$_REQUEST["num"];
    $liter=$ans*1000;
    $milileter=$ans*1000000;
    $gallons=$ans*264.172;
    $cm=$ans*1000000;
    $msg="conversion of ".$ans." m³ to litre is : ".$liter."l";
    $msg1="conversion of ".$ans."  m³ to milileter is : ".$milileter."ml";
    $msg2="conversion of ".$ans." m³ to gallons is : ".$gallons."gallons(US)";
    $msg3="conversion of ".$ans." m³ to cm³ is : ".$cm."cm³"; 
}
if(isset($_REQUEST["volume"]) && $_REQUEST["volume"]=="liter")
{
    $sel2=" selected ";
    $ans=$_REQUEST["num"];
    $meter=$ans/1000;
    $milileter=$ans*1000;
    $gallons=$ans/3.785;
    $cm=$ans*1000;
    $msg="conversion of ".$ans." liter to m³  is  : ".$meter."m³";
    $msg1="conversion of ".$ans."  liter to milileter is : ".$milileter."ml";
    $msg2="conversion of ".$ans." liter to gallons is : ".$gallons."gallons(US)";
    $msg3="conversion of ".$ans." liter to cm³ is : ".$cm."cm³"; 
}
if(isset($_REQUEST["volume"]) && $_REQUEST["volume"]=="milileter")
{
    $sel3=" selected ";
    $ans=$_REQUEST["num"];
    $meter=$ans/1000000;
    $liter=$ans/1000;
    $gallons=$ans/4546.09;
    $cm=$ans
    ;
    $msg="conversion of ".$ans." milileter to  m³ is : ".$meter."m³";
    $msg1="conversion of ".$ans."  milileter to liter is : ".$liter."l";
    $msg2="conversion of ".$ans." milileter to gallons is : ".$gallons."gallons(US)";
    $msg3="conversion of ".$ans." milileter to cm³ is : ".$cm."cm³"; 
}
if(isset($_REQUEST["volume"]) && $_REQUEST["volume"]=="gallons")
{
    $sel4=" selected ";
    $ans=$_REQUEST["num"];
    $meter=$ans*0.003785;
    $milileter=$ans*3785.41;
    $leter=$ans*3.785;
    $cm=$ans*3785.41;
    $msg="conversion of ".$ans." gallons(US) to m³ is : ".$meter."m³";
    $msg1="conversion of ".$ans."  gallons(US) to milileter is : ".$milileter."ml";
    $msg2="conversion of ".$ans." gallons(US) to liter is : ".$liter."l";
    $msg3="conversion of ".$ans." gallons(US) to cm³ is : ".$cm."cm³"; 
}
if(isset($_REQUEST["volume"]) && $_REQUEST["volume"]=="cm")
{
    $sel5=" selected ";
    $ans=$_REQUEST["num"];
    $meter=$ans/1000000;
    $milileter=$ans;
    $gallons=$ans/3785.41;
    $liter=$ans/1000;
    $msg="conversion of ".$ans." cm³ to meter is : ".$meter."m³";
    $msg1="conversion of ".$ans."  cm³ to milileter is : ".$milileter."ml";
    $msg2="conversion of ".$ans." cm³ to gallons is : ".$gallons."gallons(US)";
    $msg3="conversion of ".$ans." cm³ to liter is : ".$liter."l"; 
}


include("header.html");
include("volume.html");
include("footer.html");
?>