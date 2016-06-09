<?php
//include("getelasticsearch.php");
$a= $_GET['MDN_Number'];
$b= $_GET['Date'];
$d= $_GET['eDate'];
$index= $_GET['POC_Category'];
$type= $_GET['type'];
$fromtimestamp=$b.':00-05:00';
$totimestamp=$d.':00-05:00';
//$date='2016_04_11';
//$type='rlsntfevents';
$index=$index.'*/'.$type;
//echo $b;
//echo $d;
include('getelasticsearch.php');





?>
