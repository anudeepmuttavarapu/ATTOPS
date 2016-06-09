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

$a= $_GET['MDN_Number'];
$c= $_GET['POC_Category'];
$file = 'mdndetails';
file_put_contents($file, $a);
file_put_contents($file, ",", FILE_APPEND | LOCK_EX);

file_put_contents($file, $c, FILE_APPEND | LOCK_EX);
  
  

shell_exec('sh /usr/apache-tomcat-6.0.43/webapps/automation/auditlogs/get_audit_info.sh');
$out=shell_exec('cat /usr/apache-tomcat-6.0.43/webapps/automation/auditlogs/auditdata.html');
echo $out;

?>
</body>
</html>


