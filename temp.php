<?php 
$cel="";
$kel="";
$fh="";
$ans="";
$msg="";
$msg1="";
$sel1="";
$sel2="";
$sel3="";

if(isset($_REQUEST["temperature"]) && $_REQUEST["temperature"]=="CELCIUS")
{
   $sel1=" selected ";
    $ans=$_REQUEST["temp"];
    $kel=$ans+273;
    $fh=$ans*(9/5)+32;

    $msg=$ans ." °C CELCIUS TO FAHRENHEIT IS : ". $kel ."<i>K";
    $msg1=$ans ." °C CELCIUS TO FAHRENHEIT IS : ". $fh ." °F ";
 }
 elseif(isset($_REQUEST["temperature"]) && $_REQUEST["temperature"]=="KELVIN"){
   $sel2=" selected ";
    $ans=$_REQUEST["temp"];
    $cel=$ans+273;
    $fh=$ans*(9/5)+32;

    $msg=$ans ." °C KELVIN TO FAHRENHEIT IS : ". $cel ."<i>°C";
    $msg1=$ans ." °C KELVIN TO FAHRENHEIT IS : ". $fh ." °F ";
 }
 elseif(isset($_REQUEST["temperature"]) && $_REQUEST["temperature"]=="FAHRENHEIT"){
   $sel3=" selected ";
   $ans=$_REQUEST["temp"];
   $cel=($ans-32)*5/9;
   $kel=($ans-32)*5/9+273.15;

   $msg=$ans ." FAHRENHEIT TO CELCIUS IS : ". $cel ."<i>°C";
   // $msg=$ans ." FAHRENHEIT TO CELCIUS IS : ". $cel ."<i>";
   $msg1=$ans ." FAHRENHEIT TO KELVIN IS : ". $kel ." <i>K";
}
include("header.html");
include("temp.html");
include("footer.html"); 
?>