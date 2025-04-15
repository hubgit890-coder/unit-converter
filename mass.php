<?php
$ans="";
$kg="";
$hg="";
$dag="";
$g="";
$dg="";
$cg="";
$mg="";
$msg="";
$msg1="";
$msg2="";
$msg3="";
$msg4="";
$msg5="";
// $c="";
 
$sel1="";
$sel2="";
$sel3="";
$sel4="";
$sel5="";
$sel6="";
$sel7="";

if(isset($_REQUEST["mass"]) && $_REQUEST["mass"]=="GRAM")
    {
        $sel1=" selected ";
        $ans=$_REQUEST["temp"];
        $kg=$ans/1000;
        $hg=$ans/100;
        $dag=$ans/10;
        // $g=$ans/$g;
        $dg=$ans*10;
        $cg=$ans*100;
        $mg=$ans*1000;
        $msg="<font color='blue'><b>"."conversion of " .$ans." GRAM  to KILOGRAM is :" .$kg;
        $msg1="<font color='blue'><b>"."conversion of " .$ans." GRAM to HECTOGRAM is :" .$hg;
        $msg2="<font color='blue'><b>"."conversion of " .$ans." GRAM to DECAGRAM is :" .$dag;
        $msg3="<font color='blue'><b>"."conversion of " .$ans." GRAM to DECIGRAM is :" .$dg;
        $msg4="<font color='blue'><b>"."conversion of " .$ans." GRAM to CENTIGRAM is :" .$cg;
        $msg5="<font color='blue'><b>"."conversion of " .$ans." GRAM to MILIGRAM is :" .$mg;
    }
    elseif(isset($_REQUEST["mass"]) && $_REQUEST["mass"]=="KILOGRAM")
    {
        $sel2=" selected ";
        $ans=$_REQUEST["temp"];
        $g=$ans*1000;
        $hg=$ans*10;
        $dag=$ans*100;
        // $g=$ans/;
        $dg=$ans*10000;
        $cg=$ans*100000;
        $mg=$ans*1e+6;
        $msg="<font color='blue'><b>"."conversion of " .$ans." KILOGRAM to GRAM is :" .$g;
        $msg1="<font color='blue'><b>"."conversion of " .$ans." KILOGRAM to HECTOGRAM is :" .$hg;
        $msg2="<font color='blue'><b>"."conversion of " .$ans." KILOGRAM to DECAGRAM is :" .$dag;
        $msg3="<font color='blue'><b>"."conversion of " .$ans." KILOGRAM to DECIGRAM is :" .$dg;
        $msg4="<font color='blue'><b>"."conversion of " .$ans." KILOGRAM to CENTIGRAM is :" .$cg;
        $msg5="<font color='blue'><b>"."conversion of " .$ans." KILOGRAM to MILIGRAM is :" .$mg;
    }
    elseif(isset($_REQUEST["mass"]) && $_REQUEST["mass"]=="HECTOGRAM")
    {
        $sel3=" selected ";
        $ans=$_REQUEST["temp"];
        $g=$ans*100;
        $kg=$ans/10;
        $dag=$ans*10;
        // $g=$ans/;
        $dg=$ans*1000;
        $cg=$ans*10000;
        $mg=$ans*1.0e+5;
        $msg="<font color='blue'><b>"."conversion of " .$ans." HECTOGRAM to".$ans." GRAM is :" .$g."g";
        $msg1="<font color='blue'><b>"."conversion of " .$ans." HECTOGRAM to".$ans." KILOGRAM is :" .$kg."kg";
        $msg2="<font color='blue'><b>"."conversion of " .$ans." HECTOGRAM to".$ans." DECAGRAM is :" .$dag."dag";
        $msg3="<font color='blue'><b>"."conversion of " .$ans." HECTOGRAM to".$ans." DECIGRAM is :" .$dg."dg";
        $msg4="<font color='blue'><b>"."conversion of " .$ans." HECTOGRAM to".$ans." CENTIGRAM is :" .$cg."cg";
        $msg5="<font color='blue'><b>"."conversion of " .$ans." HECTOGRAM to".$ans." MILIGRAM is :" .$mg."mg";
    }
    elseif(isset($_REQUEST["mass"]) && $_REQUEST["mass"]=="DECAGRAM")
    {
        $sel4=" selected ";
        $ans=$_REQUEST["temp"];
        $g=$ans*10;
        $kg=$ans/100;
        $hg=$ans/10;
        // $g=$ans/;
        $dg=$ans*100;
        $cg=$ans*1000;
        $mg=$ans*1.0e+4;
        $msg="<font color='blue'><b>"."conversion of " .$ans." DECAGRAM to".$ans." GRAM is :" .$g."g";
        $msg1="<font color='blue'><b>"."conversion of " .$ans." DECAGRAM to".$ans." KILOGRAM is :" .$kg."kg";
        $msg2="<font color='blue'><b>"."conversion of " .$ans." DECAGRAM to".$ans." HECTAGRAM is :" .$hg."hg";
        $msg3="<font color='blue'><b>"."conversion of " .$ans." DECAGRAM to".$ans." DECIGRAM is :" .$dg."dg";
        $msg4="<font color='blue'><b>"."conversion of " .$ans." DECAGRAM to".$ans." CENTIGRAM is :" .$cg."cg";
        $msg5="<font color='blue'><b>"."conversion of " .$ans." DECAGRAM to".$ans." MILIGRAM is :" .$mg."mg";
    }
    elseif(isset($_REQUEST["mass"]) && $_REQUEST["mass"]=="DECIGRAM")
    {
        $sel5=" selected ";
        $ans=$_REQUEST["temp"];
        $g=$ans/10;
        $kg=$ans/10000;
        $hg=$ans/1000;
        // $g=$ans/;
        $dag=$ans/100;
        $cg=$ans*10;
        $mg=$ans*100;
        $msg="<font color='blue'><b>"."conversion of " .$ans." DECIGRAM to".$ans." GRAM is :" .$g."g";
        $msg1="<font color='blue'><b>"."conversion of " .$ans." DECIGRAM to".$ans." KILOGRAM is :" .$kg."kg";
        $msg2="<font color='blue'><b>"."conversion of " .$ans." DECIGRAM to".$ans." HECTAGRAM is :" .$hg."hg";
        $msg3="<font color='blue'><b>"."conversion of " .$ans." DECIGRAM to".$ans." DECAGRAM is :" .$dag."dag";
        $msg4="<font color='blue'><b>"."conversion of " .$ans." DECIGRAM to".$ans." CENTIGRAM is :" .$cg."cg";
        $msg5="<font color='blue'><b>"."conversion of " .$ans." DECIGRAM to".$ans." MILIGRAM is :" .$mg."mg";
    }
    elseif(isset($_REQUEST["mass"]) && $_REQUEST["mass"]=="CENTIGRAM")
    {
        $sel6=" selected ";
        $ans=$_REQUEST["temp"];
        $g=$ans/100;
        $kg=$ans/100000;
        $hg=$ans/100;
        // $g=$ans/;
        $dg=$ans*1;
        $dag=$ans/10;
        $mg=$ans*10;
        $msg="<font color='blue'><b>"."conversion of " .$ans." CENTIGRAM to".$ans." GRAM is :" .$g."g";
        $msg1="<font color='blue'><b>"."conversion of " .$ans." CENTIGRAM to".$ans." KILOGRAM is :" .$kg."kg";
        $msg2="<font color='blue'><b>"."conversion of " .$ans." CENTIGRAM to".$ans." HECTAGRAM is :" .$hg."hg";
        $msg3="<font color='blue'><b>"."conversion of " .$ans." CENTIGRAM to".$ans." DECIGRAM is :" .$dg."dg";
        $msg4="<font color='blue'><b>"."conversion of " .$ans." CENTIGRAM to".$ans." DECAGRAM is :" .$dag."dag";
        $msg5="<font color='blue'><b>"."conversion of " .$ans." CENTIGRAM to".$ans." MILIGRAM is :" .$mg."mg";
    }
    elseif(isset($_REQUEST["mass"]) && $_REQUEST["mass"]=="MILIGRAM")
    {
        $sel7=" selected ";
        $ans=$_REQUEST["temp"];
        $g=$ans/1000;
        $kg=$ans/100000;
        $hg=$ans/10000;
        // $g=$ans/;
        $dag=$ans/10000;
        $cg=$ans/10;
        $dg=$ans/100;
        $msg="<font color='blue'><b>"."conversion of " .$ans." MILIGRAM to".$ans." GRAM is :" .$g."g";
        $msg1="<font color='blue'><b>"."conversion of " .$ans." MILIGRAM to".$ans." KILOGRAM is :" .$kg."kg";
        $msg2="<font color='blue'><b>"."conversion of " .$ans." MILIGRAM to".$ans." HECTAGRAM is :" .$hg."hg";
        $msg3="<font color='blue'><b>"."conversion of " .$ans." MILIGRAM to".$ans." DECIGRAM is :" .$dag."dag";
        $msg4="<font color='blue'><b>"."conversion of " .$ans." MILIGRAM to".$ans." DECAGRAM is :" .$dg."dg";
        $msg5="<font color='blue'><b>"."conversion of " .$ans." MILIGRAM to".$ans." CENTIGRAM is :" .$cg."cg";
    }
// else
// {
//     echo"wrong inputs";
// }

include("header.html");
include("mass.html");
include("footer.html");
?>