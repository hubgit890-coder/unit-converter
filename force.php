<?php
$ans="";
$n="";
$kn="";
$mn="";
$dyne="";
$msg="";
$msg1="";
$msg2="";
$sel1="";
$sel2="";
$sel3="";
$sel4="";
if(isset($_REQUEST["force"]) && $_REQUEST["force"]=="NEWTON")
{
    $sel1=" selected ";
    $ans=$_REQUEST["num"];
    $kn=$ans/1000;
    $mn=$ans/1000000;
    $dyne=$ans/10**-5;
    $msg=$ans." NEWTON is equal to " . $kn . " KN";
    $msg1=$ans. " NEWTON is equal to " . $mn . " MN";
    $msg2=$ans . " NEWTON is equal to " . $dyne . " DYNE";
}
elseif(isset($_REQUEST["force"]) && $_REQUEST["force"]=="KILONEWTON")
{
    $sel2=" selected ";
    $ans=$_REQUEST["num"];
    $n=$ans*1000;
    $mn=$ans*0.001;
    $dyne=$ans*10**8;
    $msg=$ans." KILONEWTON is equal to " . $n . " N";
    $msg1=$ans. " KILONEWTON is equal to " . $mn . " MN";
    $msg2=$ans . " KILONEWTON is equal to " . $dyne . " DYNE";
}
elseif(isset($_REQUEST["force"]) && $_REQUEST["force"]=="MEGANEWTON")
{
    $sel3=" selected ";
    $ans=$_REQUEST["num"];
    $n=$ans*1000000;
    $kn=$ans*1000;
    $dyne=$ans*10**11;
    $msg=$ans." MEGANEWTON is equal to " . $n . " N";
    $msg1=$ans. " MEGAEWTON is equal to " . $kn . " KN";
    $msg2=$ans . " MEGAEWTON is equal to " . $dyne . " DYNE";
}
elseif(isset($_REQUEST["force"]) && $_REQUEST["force"]=="DYNE")
{
    $sel4=" selected ";
    $ans=$_REQUEST["num"];
    $n=$ans*10**-5;
    $kn=$ans*10**-8;
    $mn=$ans*10**11;
    $msg=$ans." DYNE is equal to " . $n . " N";
    $msg1=$ans. " DYNE is equal to " . $kn . " KN";
    $msg2=$ans . " DYNE is equal to " . $mn . " MN";
}
include("header.html");
include("force.html");
include("footer.html");
?>