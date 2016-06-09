<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ATT-OPS Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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

body {
padding-top: 0px;
}

</style>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ATT-OPS</title>
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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12" align="center">
                <p><i><?php echo $login_session; ?></i></p><h4>Welcome to ATT-OPS automation system.</h4>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href=CheckPoints/checkPoints.php>
                    <img class="img-responsive" src="img/s1.png" alt="">
                </a>
		 <h4>Checkpoints</h4>
                   <p>21 checkpoints on LAB/MIRROR/PRODUCTION system.</p>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href=devices/devicemanagement.php>
                    <img class="img-responsive" src="img/device-testing_1.jpg" alt="">
                </a>
         	<h4>Device Management System</h4>
                   <p>Application to manage Device Inventory for ATT-OPS</p>   
	</div>
            <div class="col-md-3 portfolio-item">
                <a href=tickets/ticketmanagement.php>
                    <img class="img-responsive" src="img/support-ticket1.png" alt="">
                </a>
             <h4>Ticket Info Retrieval System</h4>
                   <p>ATT-OPS ticket info retrieval/troubleshooting System</p>

	</div>
            <div class="col-md-3 portfolio-item">
                <a href=help.php>
                    <img class="img-responsive" src="img/s4.png" alt="">
                </a>
        <h4>Help Page</h4>
                   <p>Help topics related to day to day activities</p>    

	</div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href=f5backup/backup.php>
                    <img class="img-responsive" src="img/s6.png" alt="">
                </a>
        <h4>F5 Backups</h4>
                   <p>Page for taking backup on F5 servers</p>
    
	</div>
            <div class="col-md-3 portfolio-item">
                <a href=f5.php>
                    <img class="img-responsive" src="img/URL.gif" alt="">
                </a>
        	 <h4>ACCESS URLs</h4>
                   <p>URL's for accessing F5 servers</p>    
	</div>
            <div class="col-md-3 portfolio-item">
                <a href=olstatus/olstatus.php>
                    <img class="img-responsive" src="img/browse.png" alt="">
                </a>
            <h4>MDN Information Tool</h4>
                   <p>Input the MDN's to find the status</p>
	</div>
           <div class="col-md-3 portfolio-item">
             <a href=cdr_tool/cdrinfo.php>
                  <img class="img-responsive" src="img/ic_phone100.png" alt="">
             </a>
	<h4>CDR Information Tool</h4>
	<p> Provides CDR analysis on MDN basis for specific time period </p>
	<p> </p>
	
           </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
           <div class="col-md-3 portfolio-item">
                 <a href=auditlogs/auditinfo.php>
                    <img class="img-responsive" src="img/log.jpg" alt="">
                 </a>
		<h4>Audit logs</h4>
		<p>Retrieves Audit Logs from RLS using MDN and Poc</p>
             </div>
        <!--     <div class="col-md-3 portfolio-item">-->
      <!--           <a href="#">-->
      <!--               <img class="img-responsive" src="http://placehold.it/750x450" alt="">-->
      <!--           </a>-->
     <!--        </div>-->
       <!--      <div class="col-md-3 portfolio-item">-->
       <!--          <a href="#">-->
         <!--            <img class="img-responsive" src="http://placehold.it/750x450" alt="">-->
       <!--          </a>-->
      <!--       </div>-->
      <!--       <div class="col-md-3 portfolio-item">-->
      <!--           <a href="#">-->
     <!--                <img class="img-responsive" src="http://placehold.it/750x450" alt="">-->
      <!--           </a>-->
     <!--        </div> -->
          <div class="col-md-3 portfolio-item">
                 <a href=hosting/hostingdetails.php>
                    <img class="img-responsive" src="img/hosting.jpg" alt="">
                 </a>
		<h4>Hosting Details</h4>
		<p>Search for hosting details</p>
             </div>
<div class="col-md-3 portfolio-item">
                 <a href=certificates/certificatedetails.php>
                    <img class="img-responsive" height="5" src="img/certificates.png" alt="">
                 </a>
                <h4>Certificate Details</h4>
                <p>Get the Active and Expired certificate details</p>
             </div>
<div class="col-md-3 portfolio-item">
                 <a href=KPI/getkpi.php>
                    <img class="img-responsive" height="5" src="img/analysis.jpg" alt="">
                 </a>
                <h4>KPI Analysis</h4>
                <p>Get the KPI's</p>
             </div>

         </div> 
        <!-- /.row -->
<div class="col-md-3 portfolio-item">
                 <a href=elasticsearch/elasticsearch.php>
                    <img class="img-responsive" height="5" src="img/search.jpg" alt="">
                 </a>
                <h4>Elastic Search</h4>
                <p>Get all the Logs</p>
             </div>

<div class="col-md-3 portfolio-item">
                 <a href=impactdetails/impact.php>
                    <img class="img-responsive" height="5" src="img/impact_opt.png" alt="">
                 </a>
                <h4>Impact Details Retrieval System</h4>
                <p>ATT-OPS Impact Details retrieval/troubleshooting System</p>
             </div>


         </div>


       <hr>

         </div>
        <hr>

         </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
       <!--  <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>  -->
        <!-- /.row -->
	   <!--     <hr>-->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p align="center">Copyright &copy; Netops-T3 KodiakPTT</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
