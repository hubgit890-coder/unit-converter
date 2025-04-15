<?php
$ans="";
$joule="";
$cal="";
// $kw="";
$ev="";
$mj="";
$msg="";
$msg1="";
$msg2="";
$sel1="";
$sel2="";
$sel3="";
$sel4="";
$sel5="";
if(isset($_REQUEST["energy"]) && $_REQUEST["energy"]=="JOULE")
{
    $sel1=" selected ";
    $ans=$_REQUEST["num"];
    $cal=$ans*0.239;
    $ev=$ans*6.242*10**18;
    $mj=$ans/1000000;
    $msg=$ans." JOULE is equal to " . $cal . " cal ";
    $msg1=$ans." JOULE is equal to " . $ev . " eV ";
    $msg2=$ans." JOULE is equal to " . $mj . " MJ ";
}
elseif(isset($_REQUEST["energy"]) && $_REQUEST["energy"]=="CALORIE")
{
    $sel2=" selected ";
    $ans=$_REQUEST["num"];
    // $joule=$ans*;
    // $ev=$ans;
    // $mj=$ans*;
    $msg=$ans." CALORIE is equal to " . $joule . " J ";
    $msg1=$ans." CALORIE is equal to " . $ev . " eV ";
    $msg2=$ans." CALORIE is equal to " . $mj . " MJ ";
}
elseif(isset($_REQUEST["energy"]) && $_REQUEST["energy"]=="E-VOLT")
{
    $sel3=" selected ";
    $ans=$_REQUEST["num"];
    $joule=$ans*1.602*10**-19;
    $cal=$ans*1.602*10**-19*0.239;
    $mj=$ans*1.602*10**-19*10**-6;
    $msg=$ans." E-VOLT is equal to " . $joule . " J ";
    $msg1=$ans." E-VOLT is equal to " . $cal . " cal ";
    $msg2=$ans." E-VOLT is equal to " . $mj . " MJ ";
}
elseif(isset($_REQUEST["energy"]) && $_REQUEST["energy"]=="MEGAJOULE")
{
    $sel4=" selected ";
    $ans=$_REQUEST["num"];
    $joule=$ans*10**6;
    $cal=$ans*239005.7;
    $ev=$ans*6.242*10**24;
    $msg=$ans." MEGAJOULE is equal to " . $joule . " J ";
    $msg1=$ans." MEGAJOULE is equal to " . $cal . " cal ";
    $msg2=$ans." MEGAJOULE is equal to " . $ev . " eV ";
}
include("header.html");
include("energy1.html");
include("footer.html");
?>
