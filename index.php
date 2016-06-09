
<?php
include('login.php'); // Includes Login Script
//smodugu@kodiakptt.com saketh
/*if(isset($_SESSION['login_user'])){

header("location: admin.php"); // Redirecting To Other Page


}*/
?>
<!DOCTYPE html>
<html>
<head>
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
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ATT-OPS</title>

</head>
<body>
<div id="header">
<img align="middle" src=img/logo.png alt="">

</div>

<div id="footer">
<p id="color"><b>ATT-OPS automation system</b></p>
</div>
<br>

<div id="main">

<div id="login">

<form action="" method="post" align="center">
<div id="wrapper" align="center">
<legend>Login</legend>
<div>
<input id="name" name="username" placeholder="username" type="text">
</div>
<div>
<input id="password" name="password" placeholder="**********" type="password">
</div>
<div>
<input name="submit" type="submit" class="test" value=" Login ">
</div>
</div>
<span><center><?php echo $error; ?><center></span>
</form>
</div>
</div>
 <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p align="center">Copyright &copy; Netops-T3 KodiakPTT</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

</body>
</html>
