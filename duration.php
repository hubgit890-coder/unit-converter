<?php 
$sec="";
$min="";
$hr="";
$day="";
$week="";

$ans="";
$msg="";
$msg2="";
$msg3="";
$msg4="";
$sel1="";
$sel2="";
$sel3="";

if(isset($_REQUEST["time"]) && $_REQUEST["time"]=="SECONDS")
{
    $sel1=" selected ";
    $ans=$_REQUEST["num"];
    $min=$ans/60;
    $hr=$ans/3600;
    $day=$ans/86400;
    $week=$ans/604800;
    $msg="<font color='rgb(248,117,10)'>".$ans. " SECONDS means " . $min . " MINUTE";
    $msg2="<font color='rgb(248,117,10)'>".$ans. " SECONDS means " . $hr . " HOUR";
    $msg3="<font color='rgb(248,117,10)'>".$ans. " SECONDS means " . $day . " DAY";
    $msg4="<font color='rgb(248,117,10)'>".$ans. " SECONDS means " . $week . " WEEK";
}
elseif(isset($_REQUEST["time"]) && $_REQUEST["time"]=="MINUTE")
{
    $sel2=" selected ";
    $ans=$_REQUEST["num"];
    $sec=$ans*60;
    $hr=$ans/60;
    $day=$ans/(60*24);
    $week=$ans/(60*24*7);
    $msg="<font color='rgb(248,117,10)'>".$ans. " MINUTE means " . $sec . " SECONDS
    ";
    $msg2="<font color='rgb(248,117,10)'>".$ans. " MINUTE means " . $hr . " HOUR";
    $msg3="<font color='rgb(248,117,10)'>".$ans. " MINUTE means " . $day . " DAY";
    $msg4="<font color='rgb(248,117,10)'>".$ans. " MINUTE means " . $week . " WEEK";
}
elseif(isset($_REQUEST["time"]) && $_REQUEST["time"]=="HOUR")
{
    $sel3=" selected ";
    $ans=$_REQUEST["num"];
    $sec=$ans*3600;
    $min=$ans*60;
    $day=$ans/(60*24);
    $week=$ans/(60*24*7);
    $msg="<font color='rgb(248,117,10)'>".$ans. " HOUR means " . $sec . " SECONDS
    ";
    $msg2="<font color='rgb(248,117,10)'>".$ans. " HOUR means " . $min . " MINUTE";
    // $msg3="<font color='rgb(248,117,10)'>".$ans. " MINUTE means " . $day . " DAY";
    // $msg4="<font color='rgb(248,117,10)'>".$ans. " MINUTE means " . $week . " WEEK";
}
include("header.html");
include("duration.html");
include("footer.html"); 
?>