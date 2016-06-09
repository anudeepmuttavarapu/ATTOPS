<?php
include('../session1.php');
?>
<html>
<head>

<title>Audit Log Management</title>
<link href="../style.css" rel="stylesheet" type="text/css">
<style>
	.test
	{
  	background: #4734d9;
  	background-image: -webkit-linear-gradient(top, #4734d9, #2b87b8);
  	background-image: -moz-linear-gradient(top, #4734d9, #2b87b8);
  	background-image: -ms-linear-gradient(top, #4734d9, #2b87b8);
  	background-image: -o-linear-gradient(top, #4734d9, #2b87b8);
  	background-image: linear-gradient(to bottom, #4734d9, #2b87b8);
  	-webkit-border-radius: 4;
  	-moz-border-radius: 4;
  	border-radius: 4px;
  	font-family: Arial;
  	color: #ffffff;
  	font-size: 12px;
  	padding: 10px 10px 10px 10px;
  	text-decoration: none;
	text-align: center;
	}

	.test:hover {
  	background: #3cb0fd;
  	background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  	background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  	background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  	background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  	background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  	text-decoration: none;
	}

 
	#header {
	   background-color:#C0C0C0;
	   color:white;
	   text-align:center;
	   padding:5px;
	   position:relative;
	   max-width:200%;
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

	
<script language="javascript">

// Set the default "show" mode to that specified by W3C DOM
// compliant browsers

var showMode = 'table-cell';

// However, IE5 at least does not render table cells correctly
// using the style 'table-cell', but does when the style 'block'
// is used, so handle this

if (document.all) showMode='block';

// This is the function that actually does the manipulation

function toggleVis(btn){

	// First isolate the checkbox by name using the
	// name of the form and the name of the checkbox

	btn   = document.forms['tcol'].elements[btn];

	// Next find all the table cells by using the DOM function
	// getElementsByName passing in the constructed name of
	// the cells, derived from the checkbox name

	cells = document.getElementsByName('t'+btn.name);

	// Once the cells and checkbox object has been retrieved
	// the show hide choice is simply whether the checkbox is
	// checked or clear

	mode = btn.checked ? showMode : 'none';

	// Apply the style to the CSS display property for the cells

	for(j = 0; j < cells.length; j++) cells[j].style.display = mode;
}

</script>
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
	
function f1(MDN_Number,POC_Category){

 var z = "";
 var mdn = document.getElementById("MDN_Number").value;
 var poc = document.getElementById("POC_Category").value;
  if (mdn == null || mdn == "") {
              var z = z.concat("  MDN_Number");
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
          document.getElementById("form1").style.display="none";
          
 var xhr=new createXHR();
                xhr.onreadystatechange=function()
                {
                        if (xhr.readyState==4 && xhr.status==200)
                                {
                                        document.getElementById("display").innerHTML=xhr.responseText;
                                }
                }
              
              xhr.open("GET","audit.php?MDN_Number=" +mdn+"&POC_Category=" +poc,true);

                xhr.send();
          }
function f2(MDN_Number,Date,eDate,POC_Category){

 var z = "";
 var mdn2 = document.getElementById("MDN_Number2").value;
 var Date = document.getElementById("Date").value;
 var eDate = document.getElementById("eDate").value;
 var poc2 = document.getElementById("POC_Category2").value;
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
          document.getElementById("form2").style.display="none";

 var xhr=new createXHR();
                xhr.onreadystatechange=function()
                {
                        if (xhr.readyState==4 && xhr.status==200)
                                {
                                        document.getElementById("display").innerHTML=xhr.responseText;
                                }
                }
 xhr.open("GET","cdr_php.php?MDN_Number2=" +mdn2+"&Date=" +Date+"&eDate=" +eDate+ "&POC_Category2=" +poc2,true);

                xhr.send();
          }

function a()
        {
        document.getElementById("display").style.display="none";
        document.getElementById("form1").style.display="block";
        document.getElementById("form2").style.display="none";
	}
function am()
        {
        document.getElementById("display").style.display="none";
        document.getElementById("form2").style.display="block";
        document.getElementById("form1").style.display="none";
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
                                <button type="button" onClick="a()">Audit logs</button>
                        </td>
                        <td>
                                <button type="button" onClick="am()">Audit logs stats</button>
                        </td>


                </tr>
                </table>	
		<div id="display">
		
		</div>
               
		

		<div id="form1" style="display:none">
			<div id="wrapper">
			<form>
                          <fieldset>
                            <legend>Audit Logs</legend>
				<div>
					
					<font size=2>MDN: </font><input type="text" id="MDN_Number" placeholder="MDN_Number"></input></h4>
					
				</div>
                               
				<div>
					    
					<font size=2>POC_Category: </font><select name="POC_Category" id="POC_Category">
                                            <option value="">Select a POC</option>
                                            <option value="POC1P">POC1</option>
                                            <option value="POC2P">POC2</option>
                                            <option value="POC3P">POC3</option>
                                            <option value="POC4P">POC4</option>
<option value="POC5P">POC5</option>
<option value="POC6P">POC6</option>
<option value="POC7P">POC7</option>
<option value="POC8P">POC8</option>
<option value="POC9P">POC9</option>
<option value="POC10P">POC10</option>
<option value="POC11P">POC11</option>
<option value="POC12P">POC12</option>
<option value="POC13P">POC13</option>
<option value="POC14P">POC14</option>
<option value="POC15P">POC15</option>
                                        </select><br>
                                </div>
					
				
                                <div>
                                        <input type="button" class="test" value="Get AuditLogs"onclick=" f1(MDN_Number,POC_Category);"></input>
                                        <input type="reset" value="Reset" class="test"></input>
				</div>	

			     </fieldset>
                            </form>
                        </div>
</div>
			 <div id="form2" style="display:none">
                        <div id="wrapper">
                        <form>
                          <fieldset>
                            <legend>Audit Logs stats</legend>
                                <div>

				<textarea id="MDN_Number2" placeholder="Enter the MDN's"></textarea>
                                </div>
                                <div>

                                        <font size=2>Start Date: </font><input type="date" name="Date" id="Date" min="2000-01-02" placeholder="YYYY-MM-DD"/>

                                </div>
                                <div>

                                         <font size=2>End Date: </font><input type="date" name="eDate" id="eDate" min="2000-01-02" placeholder="YYYY-MM-DD"/>

                                </div>

                                <div>

                                        <font size=2>POC_Category: </font><select name="POC_Category" id="POC_Category2">
                                 <option value="">Select a POC</option>
                                            <option value="POC1P">POC1</option>
                                            <option value="POC2P">POC2</option>
                                            <option value="POC3P">POC3</option>
                                            <option value="POC4P">POC4</option>
<option value="POC5P">POC5</option>
<option value="POC6P">POC6</option>
<option value="POC7P">POC7</option>
<option value="POC8P">POC8</option>
<option value="POC9P">POC9</option>
<option value="POC10P">POC10</option>
<option value="POC11P">POC11</option>
<option value="POC12P">POC12</option>
<option value="POC13P">POC13</option>
<option value="POC14P">POC14</option>
<option value="POC15P">POC15</option>        
				</select><br>
                                </div>


                                <div>
                                        <button type="button" class="test" onclick=" f2(MDN_Number2,Date,eDate,POC_Category2);">Get Audit stats</button>
                                        <button type="reset" class="test" value="Reset">Reset</button>
                                </div>

                             </fieldset>
                            </form>
                        </div>



                        </div>

			
		

</body>


</html>


