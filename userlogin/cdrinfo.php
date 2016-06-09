<?php
include('../session1.php');
?>

<html>
<head>
<title>CDR Management</title>
<link href="../style.css" rel="stylesheet" type="text/css">
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
         #wrapper {
        width:450px;
        margin:0 auto;
        font-family:Verdana, sans-serif;
    }
      
     table {
    width: 100%;
    border-collapse: collapse;

        }

    table, td, th {
    border: 1px solid black;
    padding: 5px;
  //  width: 30%;
   }

   th {text-align: left;}
	.tabs {
    width:100%;
    display:inline-block;
    }
	  .tab-links:after {
        display:block;
        clear:both;
        content:'';
      }
 
     .tab-links li {
        margin:0px 5px;
        float:left;
        list-style:none;
     }
 
      .tab-links a {
            padding:9px 15px;
            display:inline-block;
            border-radius:3px 3px 0px 0px;
            background:#FAEBD7;
            font-size:16px;
            font-weight:600;
            color:#4c4c4c;
            transition:all linear 0.15s;
       }
	   .tab-links a:hover {
            background:#a7cce5;
            text-decoration:none;
        }
 
       li.active a, li.active a:hover {
        background:#7FB5DA;
        color:#4c4c4c;
       }
		 .tab-content {
        padding:15px;
        border-radius:3px;
        box-shadow:-1px 1px 1px rgba(0,0,0,0.15);
        background:#fff;
        }
 
        .tab {
            display:none;
        }
 
        .tab.active {
            display:block;
        }
         
    legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
        border-color:rgba(4, 129, 177, 0.4);
    }
   
    input,
    textarea {
        color: #373737;
        background: #fff;
        border: 1px solid #CCCCCC;
        color: #aaa;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }
   
    select,
    textarea {
        color: #373737;
        background: #fff;
        border: 1px solid #CCCCCC;
        color: #aaa;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }
  
    input[type="text"],select[type="options"],
    input[type="password"]{
        padding: 8px 6px;
        height: 22px;
        width:280px;
    }
    input[type="text"]:focus,select[type="textarea]:focus,
    input[type="password"]:focus {
        background:#f5fcfe;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        -webkit-transition-duration: 400ms;
        -webkit-transition-property: width, background;
        -webkit-transition-timing-function: ease;
        -moz-transition-duration: 400ms;
        -moz-transition-property: width, background;
        -moz-transition-timing-function: ease;
        -o-transition-duration: 400ms;
        -o-transition-property: width, background;
        -o-transition-timing-function: ease;
        width: 380px;
        
        border-color:#ccc;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        opacity:0.6;
    }
    input[type="submit"]{
        background: #222;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: #eee;
        cursor: pointer;
        font-size: 15px;
        margin: 5px 0;
        padding: 5px 22px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-border-radius:4px;
        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
    }
    textarea {
        padding:3px;
        width:96%;
        height:100px;
    }
    textarea:focus {
        background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
    }
    .small {
        line-height:14px;
        font-size:12px;
        color:#999898;
        margin-bottom:3px;
    }
</style>

	

<script>


function createXHR()
   {
	try {
		return new XMLHttpRequest();
		} catch (e) 
		{
			try {
				return new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e)
				{
				return new ActiveXObject("Msxml2.XMLHTTP");
				}
		}
	}

 
function f4(search_option,accountid_search,start_date){
// alert("you are in f3");
 var z = "";
 var search = document.getElementById("search_option").value;
 if(search == "accountid")
 {
   var mdn = document.getElementById("accountid_search").value;
   var eDate = document.getElementById("start_date").value;
   if (mdn == null || mdn == "") {
              var z = z.concat("  Accountid");
             }


   if (eDate == null || eDate == "") {
              var z = z.concat("  Date ");
             }
   if(z!=""){
                alert("Please fill"+z);
                exit(0);
             }
   document.getElementById("display").style.display="block";
          document.getElementById("display").innerHTML="Sit Back and Relax while we fetch the data";
          document.getElementById("form4").style.display="none";

 var xhr=new createXHR();
                xhr.onreadystatechange=function()
                {
                        if (xhr.readyState==4 && xhr.status==200)
                                {
                                        document.getElementById("display").innerHTML=xhr.responseText;
                                }
                }

              xhr.open("GET","accountid_cdr.php?Account_id=" +mdn+"&Day=" +eDate,true);

                xhr.send();



 }
else
{
 var mdn = document.getElementById("accountid_search").value;
 var eDate = document.getElementById("start_date").value;
// var eDate = document.getElementById("month").value;
 //var poc = document.getElementById("year").value;
//alert(poc);
  if (mdn == null || mdn == "") {
              var z = z.concat("  Accountid");
             }
  if (eDate == null || eDate == "") {
              var z = z.concat("  Date");
             }
             
  
if(z!=""){
                alert("Please fill"+z);
                exit(0);
             }


 document.getElementById("display").style.display="block";
          document.getElementById("display").innerHTML="Sit Back and Relax while we fetch the data";
          document.getElementById("form4").style.display="none";

 var xhr=new createXHR();
                xhr.onreadystatechange=function()
                {
                        if (xhr.readyState==4 && xhr.status==200)
                                {
                                        document.getElementById("display").innerHTML=xhr.responseText;
                                }
                }

              xhr.open("GET","sumofcalls_accountid.php?Account_id=" +mdn+"&Day=" +eDate,true);

                xhr.send();
          }


}
	
function f1(MDN_Number,Date,eDate,POC_Category){

 var z = "";
 var mdn = document.getElementById("MDN_Number").value;
 var Date = document.getElementById("Date").value;
 var eDate = document.getElementById("eDate").value;
 var poc = document.getElementById("POC_Category").value;
/*  if (mdn == null || mdn == "") {
              var z = z.concat("  MDN_Number");
	     }
  if (Date == null || Date == "") {
              var z = z.concat("  DATE");
	     }

  if (poc == null || poc == "") {
              var z = z.concat("  pOC_category ");
	     }
if(z!=""){
		alert("Please fill"+z);
		exit(0);
             }
 */

 document.getElementById("display").style.display="block";
          document.getElementById("display").innerHTML="Sit Back and Relax while we fetch the data";
          document.getElementById("form1").style.display="none";
          
 var xhr=new createXHR();
                xhr.onreadystatechange=function()
                {
                        if (xhr.readyState==4 && xhr.status==200)
                                {
                                        document.getElementById("display").innerHTML=xhr.responseText;
                                }
                }
              
              xhr.open("GET","cdr_php.php?MDN_Number=" +mdn+"&Date=" +Date +"&eDate=" +eDate+ "&POC_Category=" +poc,true);

                xhr.send();
          }


function f3(MDN_Number3,Date3,eDate3,POC_Category3){
// alert("you are in f3");
 var z = "";
 var mdn = document.getElementById("MDN_Number3").value;
 var Date = document.getElementById("Date3").value;
 var eDate = document.getElementById("eDate3").value;
 var poc = document.getElementById("POC_Category3").value;
alert(poc);
  if (mdn == null || mdn == "") {
              var z = z.concat("  MDN_Number");
             }
  if (Date == null || Date == "") {
              var z = z.concat("  DATE");
             }

  if (poc == null || poc == "") {
              var z = z.concat("  pOC_category ");
             }
if(z!=""){
                alert("Please fill"+z);
                exit(0);
             }


 document.getElementById("display").style.display="block";
          document.getElementById("display").innerHTML="Sit Back and Relax while we fetch the data";
          document.getElementById("form3").style.display="none";

 var xhr=new createXHR();
                xhr.onreadystatechange=function()
                {
                        if (xhr.readyState==4 && xhr.status==200)
                                {
                                        document.getElementById("display").innerHTML=xhr.responseText;
                                }
                }

              xhr.open("GET","idap_cdr.php?MDN_Number=" +mdn+"&Date=" +Date +"&eDate=" +eDate+ "&POC_Category=" +poc,true);

                xhr.send();
          }




function bsf1()
	{
	document.getElementById("display").style.display="none";
	document.getElementById("form1").style.display="block";
	document.getElementById("form2").style.display="none";
        document.getElementById("form3").style.display="none";
        document.getElementById("form4").style.display="none";

	}

function bsf2()
        {
        document.getElementById("display").style.display="none";
        document.getElementById("form2").style.display="block";
        document.getElementById("form1").style.display="none";
        document.getElementById("form3").style.display="none";
        document.getElementById("form4").style.display="none";

        }
function idapf1()
        {
        document.getElementById("display").style.display="none";
        document.getElementById("form3").style.display="block";
        document.getElementById("form2").style.display="none";
        document.getElementById("form1").style.display="none";
        document.getElementById("form4").style.display="none";

        }
function idapf2()
        {
        document.getElementById("display").style.display="none";
        document.getElementById("form4").style.display="block";
        document.getElementById("form1").style.display="none";
        document.getElementById("form2").style.display="none";
        document.getElementById("form3").style.display="none";

        }





</script>
</head>

<body>
<div id="header">
		<img align="middle" src='../img/logo.png' alt="">
		</div>

		<div id="footer">
		<p id="color" style ="font-size:20xp"><b>PRSUPPORT</b></p>
                <b id="logout"><a href="../logout.php">Log Out</a></b>
		</div>
		<table border=1 align=center>
		<tr>
			<td>
				<button type="button" onClick="bsf1()">CDR from BS</button>
			</td>
			<td>
				<button type="button" onClick="bsf2()">CDRstat from BS</button>
			</td>
			<td>
				<button type="button" onClick="idapf1()">CDR from IDAP</button>
			</td>
			<td>
				<button type="button" onClick="idapf2()">CDR for accountid</button>
			</td>
			

			
			
			
		</tr>	
		</table>
		<div id="display">
		
		</div>
               
		
		
		
		

		<div id="form1" style="display:none">
			<div id="wrapper">
			<form>
                          <fieldset>
                            <legend>CDR-BS</legend>
				<div>
					
					<font size=2>MDN: </font><input type="text" id="MDN_Number" placeholder="MDN_Number"></input></h4>
					
				</div>
                                <div>
					
					<font size=2>Start Date: </font><input type="date" name="Date" id="Date" min="2000-01-02" placeholder="Date(YYYY/MM/DD)"/>
					
				</div>
				<div>
					
					 <font size=2>End Date: </font><input type="date" name="eDate" id="eDate" min="2000-01-02" placeholder="Date(YYYY/MM/DD)"/>
					
				</div>

				<div>
					    
					<font size=2>POC_Category: </font><select name="POC_Category" id="POC_Category">
                                            <option value="">Select a POC</option>
                                            <option value="POC1">POC1</option>
                                            <option value="POC2">POC2</option>
                                            <option value="POC3">POC3</option>
                                            <option value="POC4">POC4</option>
<option value="POC5">POC5</option>
<option value="POC6">POC6</option>
<option value="POC7">POC7</option>
<option value="POC8">POC8</option>
<option value="POC9">POC9</option>
<option value="POC10">POC10</option>
<option value="POC11">POC11</option>
<option value="POC12">POC12</option>
<option value="POC13">POC13</option>
<option value="POC14">POC14</option>
<option value="POC15">POC15</option>
<option value="POC16">POC16</option>
                                        </select><br>
                                </div>
					
				
                                <div>
                                        <button type="button" onclick=" f1(MDN_Number,Date,eDate,POC_Category);">GetCDR</button>
                                        <button type="reset" value="Reset">Reset</button>
				</div>	

			     </fieldset>
                            </form>
                        </div>
			
			
			
			</div>


			<div id="form2" style="display:none">
			<div id="wrapper">
			<form>
                          <fieldset>
                            <legend>CDRstat BS</legend>
				<div>
					
					<font size=2>MDN: </font><input type="text" id="MDN_Number2" placeholder="MDN_Number"></input>
					
				</div>
                                <div>
					
					<font size=2>Start Date: </font><input type="date" name="Date" id="Date2" min="2000-01-02" placeholder="Date(YYYY/MM/DD)"/>
					
				</div>
				<div>
					
					 <font size=2>End Date: </font><input type="date" name="eDate" id="eDate2" min="2000-01-02" placeholder="Date(YYYY/MM/DD)"/>
					
				</div>

				<div>
					    
					<font size=2>POC_Category: </font><select name="POC_Category" id="POC_Category2">
                                            <option value="">Select a POC</option>
                                            <option value="POC1">POC1</option>
                                            <option value="POC2">POC2</option>
                                            <option value="POC3">POC3</option>
                                            <option value="POC4">POC4</option>
<option value="POC5">POC5</option>
<option value="POC6">POC6</option>
<option value="POC7">POC7</option>
<option value="POC8">POC8</option>
<option value="POC9">POC9</option>
<option value="POC10">POC10</option>
<option value="POC11">POC11</option>
<option value="POC12">POC12</option>
<option value="POC13">POC13</option>
<option value="POC14">POC14</option>
<option value="POC15">POC15</option>
                                        </select><br>
                                </div>
					
				
                                <div>
                                        <button type="button" onclick=" f1(MDN_Number2,Date2,eDate2,POC_Category2);">GetCDR</button>
                                        <button type="reset" value="Reset">Reset</button>
				</div>	

			     </fieldset>
                            </form>
                        </div>
			
			
			
			</div>

<div id="form3" style="display:none">
			<div id="wrapper">
			<form>
                          <fieldset>
                            <legend>IDAP CDR</legend>
				<div>
					
					<font size=2>MDN: </font><input type="text" id="MDN_Number3" placeholder="MDN_Number"></input>
					
				</div>
                                <div>
					
					<font size=2>Start Month: </font><select name="Date"  id="Date3">
                                           <option value="">Select a Month</option>
                                            <option value="01">Jan</option>
                                            <option value="02">Feb</option>
                                            <option value="03">Mar</option>
                                            <option value="04">Apr</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select><br>
					
				</div>
				<div>
					
					 <font size=2>End Month: </font><select  name="eDate" id="eDate3">
 <option value="">Select a Month</option>
                                            <option value="01">Jan</option>
                                            <option value="02">Feb</option>
                                            <option value="03">Mar</option>
                                            <option value="04">Apr</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
	

			</select><br>
				</div>

				<div>
					    
					<font size=2>POC_Category: </font><select name="POC_Category" id="POC_Category3">
                                            <option value="">Select a POC</option>
                                            <option value="POC1">POC1</option>
                                            <option value="POC2">POC2</option>
                                            <option value="POC3">POC3</option>
                                            <option value="POC4">POC4</option>
<option value="POC5">POC5</option>
<option value="POC6">POC6</option>
<option value="POC7">POC7</option>
<option value="POC8">POC8</option>
<option value="POC9">POC9</option>
<option value="POC10">POC10</option>
<option value="POC11">POC11</option>
<option value="POC12">POC12</option>
<option value="POC13">POC13</option>
<option value="POC14">POC14</option>
<option value="POC15">POC15</option>
                                        </select><br>
                                </div>
					
				
                                <div>
                                        <button type="button" onclick="f3(MDN_Number3,Date3,eDate3,POC_Category3);">GetCDR</button>
                                        <button type="reset" value="Reset">Reset</button>
				</div>	

			     </fieldset>
                            </form>
                        </div>
			
			
			
	
		</div>


<div id="form4" style="display:none">
			<div id="wrapper">
			<form>
                          <fieldset>
                            <legend>IDAP CDR-Accountid</legend>
				<div>
					<select name="search_option" id="search_option">
                                        <option value="accountid">Account_id-bynumber</option>
                                        <option value="accountidfull">Accountid-full</option>
                                           

					
					
				</div>
                               <div>
									
					<input type="text" id="accountid_search" placeholder="Search_value"/>
					
				</div>

                               <div>
                               <input type="date" id="start_date"  min="2000-01-02" max="<?php echo date("Y-m-d"); ?>" placeholder="Start_date (yyyy-mm-dd)"/>
				</div>	
					
					
				
                                <div>
                                        <button type="button" onclick=" f4(search_option,accountid_search,start_date);">GetCDR</button>
                                        <button type="reset" value="Reset">Reset</button>
				</div>	

			     </fieldset>
                            </form>
                        </div>
			
			
			</div>

</body>


</html>
