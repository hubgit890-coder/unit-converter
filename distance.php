<?php 
$cm="";
$km="";
$m="";
$mm="";
$foot="";
$inch="";
$mile="";
$ans="";
$msg="";
$msg1="";
$msg2="";
$msg3="";
$msg4="";
$msg5="";
// $msg6="";
$sel1="";
$sel2="";
$sel3="";
$sel4="";
$sel5="";
$sel6="";
if(isset($_REQUEST["distance"]) && $_REQUEST["distance"]=="CM")
{
   $sel1=" selected ";
   $ans=$_REQUEST["num"];
   $km=$ans/100000;
   $m=$ans/100;
   $mm=$ans*10;
   $inch=$ans*0.3937;
   $foot=$ans*0.0328;
   $mile=$ans*100;
   $msg="<font color='chrimson'><b><i>"."Conversion of ".$ans." CM to  KILOMETER is :".$km. " KM";
   $msg1="<font color='chrimson'>"."Conversion of ".$ans." CM to  METER is :".$m." M";
   $msg2="<font color='chrimson'>"."Conversion of ".$ans." CM to  MILIMETER is :".$mm." MM";
   $msg3="<font color='chrimson'>"."Conversion of ".$ans." CM to  FOOT is :".$inch." INCH";
   $msg4="<font color='chrimson'>"."Conversion of ".$ans." CM to  INCH is :".$foot." FOOT";
   $msg5="<font color='chrimson'>"."Conversion of ".$ans." CM to  MILE is :".$mile." MILE";
}
if(isset($_REQUEST["distance"]) && $_REQUEST["distance"]=="MM")
{
   $sel2=" selected ";
   $ans=$_REQUEST["num"];
   $km=$ans/100000;
   $m=$ans/1000;
   $cm=$ans/10;
   $inch=$ans/25.4;
   $foot=$ans/304.8;
   $mile=$ans/1609344;
   $msg="<font color='chrimson'><b><i>"."Conversion of ".$ans." MM to  KILOMETER is :".$km. " KM";
   $msg1="<font color='chrimson'>"."Conversion of ".$ans." MM to  METER is :".$m." M";
   $msg2="<font color='chrimson'>"."Conversion of ".$ans." MM to  CM is :".$cm." CM";
   $msg3="<font color='chrimson'>"."Conversion of ".$ans." MM to  INCH is :".$inch." INCH";
   $msg4="<font color='chrimson'>"."Conversion of ".$ans." MM to  FOOT is :".$foot." FOOT";
   $msg5="<font color='chrimson'>"."Conversion of ".$ans." MM to  MILE is :".$mile." MILE";
}
if(isset($_REQUEST["distance"]) && $_REQUEST["distance"]=="KM")
{
   $sel3=" selected ";
   $ans=$_REQUEST["num"];
   $cm=$ans*100000;
   $m=$ans*1000;
   $mm=$ans*1000000;
   $inch=$ans*39370.1;
   $foot=$ans*3280.84;
   $mile=$ans*0.621371;
   $msg="<font color='chrimson'><b><i>"."Conversion of ".$ans." KM to  CM is :".$km. " CM";
   $msg1="<font color='chrimson'>"."Conversion of ".$ans." KM to  METER is :".$m." M";
   $msg2="<font color='chrimson'>"."Conversion of ".$ans." KM to  MILIMETER is :".$mm." MM";
   $msg3="<font color='chrimson'>"."Conversion of ".$ans." KM to  INCH is :".$inch." INCH";
   $msg4="<font color='chrimson'>"."Conversion of ".$ans." KM to  FOOT is :".$foot." FOOT";
   $msg5="<font color='chrimson'>"."Conversion of ".$ans." KM to  MILE is :".$mile." MILE";
}
if(isset($_REQUEST["distance"]) && $_REQUEST["distance"]=="FOOT")
{
   $sel4=" selected ";
   $ans=$_REQUEST["num"];
   $km=$ans*0.0003048;
   $m=$ans*0.3048;
   $mm=$ans*304.8;
   $inch=$ans*0.3937;
   $cm=$ans*30.48;
   $mile=$ans*0.000189394;
   $msg="<font color='chrimson'><b><i>"."Conversion of ".$ans." FOOT to  KILOMETER is :".$km. " KM";
   $msg1="<font color='chrimson'>"."Conversion of ".$ans." FOOT to  METER is :".$m." M";
   $msg2="<font color='chrimson'>"."Conversion of ".$ans." FOOT to  MILIMETER is :".$mm." MM";
   $msg3="<font color='chrimson'>"."Conversion of ".$ans." FOOT to  INCH is :".$inch." INCH";
   $msg4="<font color='chrimson'>"."Conversion of ".$ans." FOOT to  CM is :".$cm." CM";
   $msg5="<font color='chrimson'>"."Conversion of ".$ans." FOOT to  MILE is :".$mile." MILE";
}
if(isset($_REQUEST["distance"]) && $_REQUEST["distance"]=="INCH")
{
   $sel5=" selected ";
   $ans=$_REQUEST["num"];
   $km=$ans*0.0000254;
   $m=$ans*0.0254;
   $mm=$ans*25.4;
   $cm=$ans*2.54;
   $foot=$ans/12;
   $mile=$ans*0.000015783;
   $msg="<font color='chrimson'><b><i>"."Conversion of ".$ans." INCH to  KILOMETER is :".$km. " KM";
   $msg1="<font color='chrimson'>"."Conversion of ".$ans." INCH to  METER is :".$m." M";
   $msg2="<font color='chrimson'>"."Conversion of ".$ans." INCH to  MILIMETER is :".$mm." MM";
   $msg3="<font color='chrimson'>"."Conversion of ".$ans." INCH to  CM is :".$cm." CM";
   $msg4="<font color='chrimson'>"."Conversion of ".$ans." INCH to  FOOT is :".$foot." FOOT";
   $msg5="<font color='chrimson'>"."Conversion of ".$ans." INCH to  MILE is :".$mile." MILE";
}
if(isset($_REQUEST["distance"]) && $_REQUEST["distance"]=="MILE")
{
   $sel6=" selected ";
   $ans=$_REQUEST["num"];
   $km=$ans*1.60934;
   $m=$ans*1609.34;
   $mm=$ans*1609344;
   $foot=$ans*5280;
   $inch=$ans*63360;
   $cm=$ans*160934.4;
   $msg="<font color='chrimson'><b><i>"."Conversion of ".$ans." MILE to  KILOMETER is :".$km. " KM";
   $msg1="<font color='chrimson'>"."Conversion of ".$ans." MILE to  METER is :".$m." M";
   $msg2="<font color='chrimson'>"."Conversion of ".$ans." MILE to  MILIMETER is :".$mm." MM";
   $msg3="<font color='chrimson'>"."Conversion of ".$ans." MILE to  FOOT is :".$foot." FOOT";
   $msg4="<font color='chrimson'>"."Conversion of ".$ans." MILE to  INCH is :".$inch." INCH";
   $msg5="<font color='chrimson'>"."Conversion of ".$ans."MILE to  CM is :".$cm." CM";
}







include("header.html");
include("distance.html");
include("footer.html"); 
?>