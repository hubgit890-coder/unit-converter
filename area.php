<?php 
$ans=" ";
 $sm="";
$skm="";
$sf="";
$acre="";
$hectre="";
$msg=" ";
$msg1="";
$msg2="";
$msg3="";
$sel1=" ";
$sel2="";
$sel3="";
$sel4="";
$sel5="";
if(isset($_REQUEST["area"]) && $_REQUEST["area"]=="SQUAREMETER")
{
    $sel1=" selected ";
    $ans=$_REQUEST["num1"];
    $skm=$ans/1000000;
    $sf=$ans*10.764;
    $acre=$ans/4046.86;
    $hectre=$ans/10000;
    $msg=$ans." M<sup>2</sup> is equal to ". $skm . " km<sup>2</sup> ";
    $msg1=$ans." M<sup>2</sup> is equal to ". $sf . " ft<sup>2</sup> ";
    $msg2=$ans." M<sup>2</sup> is equal to ". $acre . " acres ";
    $msg3=$ans." M<sup>2</sup> is equal to ". $hectre . " hectares ";


}
if(isset($_REQUEST["area"]) && $_REQUEST["area"]=="SQUAREKMETER")
{
    $sel2=" selected ";
    $ans=$_REQUEST["num1"];
    $sm=$ans*1000000;
    $sf=$ans*10763910.4;
    $acre=$ans*247.105;
    $hectre=$ans*100;
    $msg=$ans." km<sup>2</sup> is equal to ". $sm . " M<sup>2</sup> ";
    $msg1=$ans." km<sup>2</sup> is equal to ". $sf . " ft<sup>2</sup> ";
    $msg2=$ans." km<sup>2</sup> is equal to ". $acre . " acres ";
    $msg3=$ans." km<sup>2</sup> is equal to ". $hectre . " hectares ";


}
if(isset($_REQUEST["area"]) && $_REQUEST["area"]=="SQUAREFOOT")
{
    $sel3=" selected ";
    $ans=$_REQUEST["num1"];
    $skm=$ans/10763910.4;
    $sm=$ans/10.764;
    $acre=$ans/43560;
    $hectre=$ans/107639;
    $msg=$ans." ft<sup>2</sup> is equal to ". $skm . " km<sup>2</sup> ";
    $msg1=$ans." ft<sup>2</sup> is equal to ". $sm . " M<sup>2</sup> ";
    $msg2=$ans." ft<sup>2</sup> is equal to ". $acre . " acres ";
    $msg3=$ans." ft<sup>2</sup> is equal to ". $hectre . " hectares ";


}
if(isset($_REQUEST["area"]) && $_REQUEST["area"]=="ACRE")
{
    $sel4=" selected ";
    $ans=$_REQUEST["num1"];
    $skm=$ans/247.105;
    $sf=$ans*43560;
    $sm=$ans*4046.86;
    $hectre=$ans/2.471;
    $msg=$ans." acre is equal to ". $skm . " km<sup>2</sup> ";
    $msg1=$ans." acre is equal to ". $sf . " ft<sup>2</sup> ";
    $msg2=$ans." acre is equal to ". $sm . " M<sup>2</sup> ";
    $msg3=$ans." acre is equal to ". $hectre . " hectares ";


}
if(isset($_REQUEST["area"]) && $_REQUEST["area"]=="HECTARE")
{
    $sel5=" selected ";
    $ans=$_REQUEST["num1"];
    $skm=$ans/100;
    $sf=$ans*107639;
    $acre=$ans*2.471;
    $sm=$ans*10000;
    $msg=$ans." hectares is equal to ". $skm . " km<sup>2</sup> ";
    $msg1=$ans." hectares is equal to ". $sf . " ft<sup>2</sup> ";
    $msg2=$ans." hectares is equal to ". $acre . " acres ";
    $msg3=$ans." hectares is equal to ". $sm . " M<sup>2</sup> ";


}
include("header.html");
include("area.html");
include("footer.html");
?>