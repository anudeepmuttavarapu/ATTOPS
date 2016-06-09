<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php

$a= $_GET['MDN_Number2'];
$b= $_GET['Date'];
$d= $_GET['eDate'];
$c= $_GET['POC_Category2'];
$file = 'mdndetails_multiple';
$file1="poc_name";
file_put_contents($file, $a);
//file_put_contents($file, ",", FILE_APPEND | LOCK_EX);

file_put_contents($file1, $c);
function GetDays($sStartDate, $sEndDate){  
  // Firstly, format the provided dates.  
  // This function works best with YYYY-MM-DD  
  // but other date formats will work thanks  
  // to strtotime().  
  $sStartDate = gmdate("Y-m-d", strtotime($sStartDate));  
  $sEndDate = gmdate("Y-m-d", strtotime($sEndDate));  
  $file2 = 'dates';
file_put_contents($file2, '');
  // Start the variable off with the start date  
  $aDays[] = $sStartDate;  
  
  // Set a 'temp' variable, sCurrentDate, with  
  // the start date - before beginning the loop  
  $sCurrentDate = $sStartDate;  
  
  // While the current date is less than the end date  
  while($sCurrentDate < $sEndDate){  
    // Add a day to the current date  
    $sCurrentDate = gmdate("Y-m-d", strtotime("+1 day", strtotime($sCurrentDate)));  
  
    // Add this new day to the aDays array  
    $aDays[] = $sCurrentDate;  
  }  
  
  // Once the loop has finished, return the  
  // array of days.  
  $last = end($aDays);
foreach($aDays as $key => $value)
{
     if($value == $last){
file_put_contents($file2, $value, FILE_APPEND | LOCK_EX);

}
else
{
    file_put_contents($file2, $value, FILE_APPEND | LOCK_EX);
    file_put_contents($file2, ",", FILE_APPEND | LOCK_EX);
}
}
}
#echo "hi";  
GetDays($b,$d);
shell_exec('sh /usr/apache-tomcat-6.0.43/webapps/automation/auditlogs/get_audit_details.sh');
$out=shell_exec('cat /usr/apache-tomcat-6.0.43/webapps/automation/auditlogs/auditdata_multiple.html');
echo $out;

?>
</body>
</html>
