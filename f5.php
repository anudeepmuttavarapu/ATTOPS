<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
<title>F5 URLS
</title>
 <style>
#header {
   background-color:#C0C0C0;
   color:white;
   text-align:center;
   padding:5px;
}
#footer {
   background-color:#6666FF;
   color:black;
   clear:both;
       
  padding:5px;
float:bottom;
}
#color{
text-align:center;
color:black;

}
#img{

align:center;


}
</style>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header">
<img align="middle" src=img/logo.png alt="">

</div>

<div id="footer">
<p id="color"><b>ATT-OPS automation system</b></p>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<br>
<center>

<div id="divone">
<h2 align="center"> <strong> Lab Access</strong>  </h2>
<div id="divtable1">
<table id="table1" border="1" style="width:48%" >
<thead>
<tr>
<th colspan="3">F5 URLS</th>
</tr>
</thead>
<tr>
<td align = "center" bgcolor = "#CCCCFF"> F5 Type</td>
<td align = "center"  bgcolor = "#CCCCFF"> When working from Plano environment</td>
<td align = "center"  bgcolor = "#CCCCFF"> When working from VPN environment</td>
</tr>
  <tr>
    <td align = "center" bgcolor = "#CCFFCC"> Charlotte F5 Primary </td>
    <td align = "center"> <a href = "https://cf5a.labeptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
	<td align = "center"> <a href = "https://cf5rva.labeptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
  </tr>
  <tr>
    <td align = "center" bgcolor = "#CCFFCC"> Charlotte F5 Secondary</td>
    <td align = "center"> <a href = "https://cf5b.labeptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
	<td align = "center"> <a href = "https://cf5rvb.labeptt.kodiaknetworks.com"" target = "_blank"> click here </a></td> 
	
   </tr>
   <tr>
    <td align = "center" bgcolor = "#CCFFCC"> Dallas F5 Primary </td>
    <td align = "center"> <a href = "https://df5a.labeptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
	<td align = "center"> <a href = "https://df5rva.labeptt.kodiaknetworks.com"" target = "_blank"> click here </a></td> 
   </tr>
   <tr>
    <td align = "center" bgcolor = "#CCFFCC"> Dallas F5 Secondary  </td>
    <td align = "center"> <a href = "https://df5b.labeptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
	<td align = "center"> <a href = "https://df5rvb.labeptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
   </tr>
 </table>
 </div>
 <br>
 <br>
 <div id="divtable2">
 <table id="table2"  border="1" style="width:48%">
<thead>
<tr>
<th>EMS GUI Access</th>
</tr>
</thead>
    <tr>
    <td align = "center"> <a href = "http://10.255.253.16:9090/" target = "_blank"> click here </a></td> 
   </tr>
 </table>
 </div>
 <br>
 <br>
 <div id="divtable3">
 <table id="table3"  border="1" style="width:48%">
<thead>
<tr>
<th>Amazon Cloud Access</th>
</tr>
</thead>
    <tr>
    <td align = "center"> <a href = "https://032762388313.signin.aws.amazon.com/console" target = "_blank"> click here </a></td> 
   </tr>
 </table>
 </div>
 </div>
 <br>
 <br>
 <div id="divtwo">
 <h2 style="text-align:center;"> <strong>  Mirror Access </strong>  </h2>
 <div id="divtable4">
 <table id="table4" border="1" width=48%>
 <thead>
<tr>

<th colspan="3">F5 URLS</th>
</tr>
</thead>
 <tr>
<td align = "center"  bgcolor = "#CCCCFF"> F5 Type</td>
<td align = "center"  bgcolor = "#CCCCFF"> When working from Plano environment</td>
<td align = "center"  bgcolor = "#CCCCFF"> When working from VPN environment</td>
</tr>
  <tr>
    <td align = "center" bgcolor = "#CCFFCC"> Charlotte F5 Primary </td>
    <td align = "center"> <a href = "https://cf5a.mirroreptt.kodiaknetworks.com" target = "_blank"> click here </a></td>
   <td align = "center"> <a href = "https://cf5rva.mirroreptt.kodiaknetworks.com"" target = "_blank"> click here </a></td> 	
  </tr>
  <tr>
    <td align = "center" bgcolor = "#CCFFCC"> Charlotte F5 Secondary</td>
    <td align = "center"> <a href = "https://cf5b.mirroreptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
	<td align = "center"> <a href = "https://cf5rvb.mirroreptt.kodiaknetworks.com"" target = "_blank"> click here </a></td> 
   </tr>
   <tr>
    <td align = "center" bgcolor = "#CCFFCC"> Dallas F5 Primary </td>
    <td align = "center"> <a href = "https://df5a.mirroreptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
	<td align = "center"> <a href = "https://df5rva.mirroreptt.kodiaknetworks.com"" target = "_blank"> click here </a></td> 
   </tr>
   <tr>
    <td align = "center" bgcolor = "#CCFFCC"> Dallas F5 Secondary  </td>
    <td align = "center"> <a href = "https://df5b.mirroreptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
	<td align = "center"> <a href = "https://df5rvb.mirroreptt.kodiaknetworks.com"" target = "_blank"> click here </a></td> 
   </tr>
 </table>
 </div>
 <br>
 <br>
 <div id="divtable5">
<table id="table5"  border=1" style="width:48%">
<thead>
<tr>
<th>EMS GUI Access</th>
</tr>
</thead>
    <tr>
    <td align = "center"> <a href = "http://10.254.252.16:9090/" target = "_blank"> click here </a></td> 
   </tr>
 </table>
 </div>
 <br>
 <br>
 <div id="divtable6">
 <table id="table6"  border="1" style="width:48%">
<thead>
<tr>
<th>Amazon Cloud Access</th>
</tr>
</thead>
    <tr>
    <td align = "center"> <a href = "https://593630957502.signin.aws.amazon.com/console" target = "_blank"> click here </a></td> 
   </tr>
</table>
</div>
 </div>
 <div id="div 3" >

 <h2 style="text-align:center;"> <strong>  Production Access </strong>  </h2>
<div id="divtable7"> 
 <table id="table7" border="1" style="width:48%">
 <thead>
<tr>
<th colspan="3">F5 URLS</th>
</tr>
</thead>
 <tr>
<td align = "center"  bgcolor = "#CCCCFF"> F5 Type</td>
<td align = "center"  bgcolor = "#CCCCFF"> When working from Plano environment</td>
<td align = "center"  bgcolor = "#CCCCFF"> When working from VPN environment</td>
</tr>
  <tr>
    <td align = "center" bgcolor = "#CCFFCC"> Charlotte F5 Primary </td>
    <td align = "center"> <a href = "https://cf5a.eptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
	<td align = "center"> <a href = "https://cf5rva.eptt.kodiaknetworks.com"" target = "_blank"> click here </a></td> 
  </tr>
  <tr>
    <td align = "center" bgcolor = "#CCFFCC"> Charlotte F5 Secondary</td>
    <td align = "center"> <a href = "https://cf5b.eptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
	<td align = "center"> <a href = "https://cf5rvb.eptt.kodiaknetworks.com"" target = "_blank"> click here </a></td> 
   </tr>
   <tr>
    <td align = "center" bgcolor = "#CCFFCC"> Dallas F5 Primary </td>
    <td align = "center"> <a href = "https://df5a.eptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
	<td align = "center"> <a href = "https://df5rva.eptt.kodiaknetworks.com"" target = "_blank"> click here </a></td> 
   </tr>
   <tr>
    <td align = "center" bgcolor = "#CCFFCC"> Dallas F5 Secondary  </td>
    <td align = "center"> <a href = "https://df5b.eptt.kodiaknetworks.com" target = "_blank"> click here </a></td> 
	<td align = "center"> <a href = "https://df5rvb.eptt.kodiaknetworks.com"" target = "_blank"> click here </a></td> 
   </tr>
 </table>
 </div>
 <br>
 <br>
 <div id="divtable8">
 <table id="table8"  border="1" style="width:48%">
<thead>
<tr>
<th>EMS GUI Access</th>
</tr>
</thead>
    <tr>
    <td align = "center"> <a href = " http://10.254.254.16:9090/" target = "_blank"> click here </a></td> 
   </tr>
 </table>
 </div>
 <br>
 <br>
 <div id="divtable9">
 <table id="table9"  border="1" style="width:48%">
<thead>
<tr>
<th>Amazon Cloud Access</th>
</tr>
</thead>
    <tr>
    <td align = "center"> <a href = "https://853576222895.signin.aws.amazon.com/console" target = "_blank"> click here </a></td> 
   </tr>
 </table>
 </div>
 </div>
  


</center>
</body>
</html>
