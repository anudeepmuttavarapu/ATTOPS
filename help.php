 <?php
include('session.php');
?>




<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<title>Help</title>
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
		<p id="color" style ="font-size:20xp"><b>ATT-OPS Automation System Help</b></p>
<b id="logout"><a href="logout.php">Log Out</a></b>
		</div>

		<div id="divisionone">
			<div data-role="main" class="ui-content  ui-corner-all">
			<table cellspacing="30">
				
					<td>
								<! STARTING WITH "A" >
						<a href="#myPopup7" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Activation</a>
						<br>
						<a href="#myPopup18" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">ASCII Backup</a>
						<br>
						<a href="#myPopup15" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">AT&T MIS Circuit login</a>
						<br>
                                                <a href="#myPopup29" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">AT&T Subnet</a>
						<br>
                                                                <! STARTING WITH "B" >
                                                <a href="#myPopup30" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">BGP</a>
						<br>

								<! STARTING WITH "C" >
                                                <a href="#myPopup23" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">CALEA</a>
                                                <br>
						<a href="#myPopup1" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Card Restarts</a>
						<br>
						<a href="#myPopup19" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">CAT/Dispatcher/Desktop conf Backup</a>
						<br>
						<a href="#myPopup4" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">CDR</a>
					        <br>
         					 
						<a href="#myPopup45" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Card Manager process healthbad</a>

         <br>
                                                <a href="#myPopup44" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Checkpoints for H/W troubleshoot</a>
                                                <br>                                     
						

						
					</td>
					<td>	
				
						<a href="#myPopup20" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Client Config Document</a>
						<br>
						
						<a href="#myPopup35" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Client Connectivity</a>
						<br>

						<a href="#myPopup13" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Client Versions</a>
						<br>
                                                <a href="#myPopup28" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">CLI Guide</a>
						<br>
						 <a href="#myPopup49" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Cross Carrier Provisioning</a>
                                                <br>
					
					
								<! STARTING WITH "D" >
						<a href="#myPopup17" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">DB Backup</a>
						<br>
						<a href="#myPopup6" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Dispatcher links</a>
						<a href="#myPopup27" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Dispatcher Client Issue</a>
                                                <br>
						<a href="#myPopup41" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">DNS Lookup Failure</a>
                                                <br>

					
								<! STARTING WITH "E" >
						<a href="#myPopup12" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">EMS GUI</a>	
						<br>	
								<! STARTING WITH "F" >
						<a href="#myPopup21" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">F5 Backups</a>
                                                <br>
                                                <a href="#myPopup25" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">F5 FQDNS</a>
						<br>
						<a href="#myPopup46" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">F5 IP Geo Location DB update</a>
                                                <br>
								<! STARTING WITH "G" >
								
								<! STARTING WITH "H" >
				               

								<! STARTING WITH "I" >
								
								<! STARTING WITH "J" >
								
								
						
					
							
					</td>
					<td>
								<! STARTING WITH "K" >

						<a href="#myPopup22" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">kodiakDG.conf</a>
                                                <br>
						<a href="#myPopup24" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">KPI</a>
						<br>
								<! STARTING WITH "L" >
						<a href="#myPopup8" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Lifeline</a>
						<br>
						<a href="#myPopup10" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Logs for Activation</a>
						<br>
						<a href="#myPopup9" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Logs for call flow</a>	
						<br>
						<a href="#myPopup11" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Logs for Presence</a>
						
							
				
								<! STARTING WITH "M" >
						 <br>
                                                <a href="#myPopup33" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Media Manager Logs</a>
                                                <br>
							
								<! STARTING WITH "N" >
								
								<! STARTING WITH "O" >
								<a href="#myPopup26" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Outage Recovery</a>
						<br>
                                                <a href="#myPopup31" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Outage Impact</a>
						<br>


								<! STARTING WITH "P" >
						<a href="#myPopup5" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">PAM Logs</a>
						

						
					
					</td>
					<td>
						<a href="#myPopup36" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">PAM instance change alert</a>
				
						
					

						<a href="#myPopup14" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Production Hosting</a>
						<br>
						<a href="#myPopup2" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">POC Switchover</a>	
						<br>
								<! STARTING WITH "Q" >
								
								<! STARTING WITH "R" >
						<a href="#myPopup37" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Reboot POC card</a>
						<br>
						 <a href="#myPopup48" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Reboot HP2U Container and Server</a>
                                                <br>

						<a href="#myPopup3" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Rehome Operation</a>				
						<br>
						<a href="#myPopup47" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Resize logical volumes</a>
                                                <br>

						<a href="#myPopup42" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">RLS Details</a>				
						<br>
						<a href="#myPopup50" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">RLS Audit</a>
                                                <br>

								<! STARTING WITH "S" >
						<a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Server IDs</a>				
						<br>
						<a href="#myPopup16" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">System Full Backup</a>
						<br>
						<a href="#myPopup39" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">SysMonitor Status</a>
						<br>
						<a href="#myPopup40" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">SmartCtl Information</a>
						<br>


				
								<! STARTING WITH "T" > 
						<a href="#myPopup34" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">Talk Group Scanning</a>
						<br>
						 <a href="#myPopup32" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">TU</a>
						<br>
						 		
								<! STARTING WITH "U" >
								
								<! STARTING WITH "V" >
								
								<! STARTING WITH "W" >
                                                  <a href="#myPopup43" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" data-transition="turn" data-position-to="window">WGP-Authentication</a>
						<br>								
								<! STARTING WITH "X" >
								
								<! STARTING WITH "Y" >
								
								<! STARTING WITH "Z" >
					</td>
										
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------->								
				<div data-role="popup" id="myPopup" class="ui-content">
					  <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					  <p><center><h3>Lab Server IDs</h3></center></p>
					  <ul>
						  <li>POC : lps1,lps1r,lps1rr,lps2,lps2r,lps2rr,lps3,lps3r,lps3rr</li>
						  <li>EMS :lems.lemsr,lemsrr </li>
						  <li>XDMS : lxs,lxsr,lxsrr </li>
						  <li>WGP : lwg1,lwg2,lwgrr </li>
						  <li>WCSR : lwc1,lwc2,lwcrr </li>
						  <li>PAGING : lpg1,lpg1r,lpg1rr </li>
						  <li>BILLING : lbs,lbsr,lbsrr,lbs2,lbs2r,lbs2rr </li>
					  </ul>
					  <p><center><h3>Mirror Server IDs</h3></center></p>
						<ul>
							<li>POC : pps1,pps1r,pps1rr,pps2,pps2r,pps2rr,pps3,pps3r,pps3rr</li>
							<li>EMS :pems.pemsr,pemsrr</li>
							<li>XDMS : pxs,pxsr,pxsrr</li>
							<li>WGP : pwg1,pwg2,pwgrr</li>
							<li>WCSR : pwc1,pwc2,pwcrr</li>
							<li>PAGING : ppg1,ppg1r,ppg1rr</li>
							<li>BILLING : pbs,pbsr,pbsrr,pbs2,pbs2r,pbs2rr</li>
						</ul>
						<p><center><h3>Production Server IDs</h3></center></p>
						<ul>
							<li>POC : ps1,ps1r,ps1rr,ps2,ps2r,ps2rr,ps3,ps3r,ps3rrâ€¦â€¦</li>
							<li>EMS :ems.emsr,emsrr</li>
							<li>XDMS : xs,xsr,xsrr</li>
							<li>WGP : wg1,wg2,wgrr </li>
							<li>WCSR : wc1,wc2,wcrr</li>
							<li>PAGING : pg1,pg1r,pg1rr</li>
							<li>BILLING : bs,bsr,bsrr,bs2,bs2r,bs2rr.</li>
						</ul>
						<p><strong>Tip:</strong>To know the server alias log into 55 server and use the following command: cat /etc/hosts </p>
						  
				</div>
				
				<div data-role="popup" id="myPopup1" class="ui-content">
					  <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					  <p><h3>Restarting cards</h3></p>
					  <p>To restart any card excluding ems these are the following steps to be followed: </p>
					  <ul>
						  <li>Log into the card you want to restart.</li>
						  <li>become a root user. To become a root user type <strong>sudo su </strong>, password is kodiak1 </li>
						  <li>First stop the respective card by using the command <strong>kodiakStop</strong></li>
						  <li>Then make it to unknown state by using the command <strong>kodiakUnknown </strong></li>
						  <li>Then restart the card by using command <strong>kodiakStart</strong></li>
						  <li>You can tail the progress by opening the session in a duplicate window and use the command <strong>tail -f /DGlogs/softmanagerinit.log</strong></li>
					  </ul>
					  <p><strong>Tip:</strong>To check the present status of the card use <strong>kstatus</strong></p>
					  
				</div>
				
				<div data-role="popup" id="myPopup2" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><h3>POC Switchover</h3></p>
					<p>To switchover a poc card these are the following steps to be followed:</p>
					<ul>
						<li>Log into the respective card. </li>
						<li>Open cliadmin by typing <strong>su - cliadmin</strong> password : cliadmin</li>
						<li>Select operation 2 from the list i.e <strong> RTX MAINTAINENCE </strong></li>
						<li>Next Select operation 3 from the list i.e <strong> Manage RTX redundancy status </strong></</li>
						<li>Based on the requirement select from one of the two options:</li>
						<ol>
							<li>Change status to active</li>
							<li>Change status to standby</li>
						</ol>
						<li>Based on the requirement select from one of the two options:</li>
						<ol>
							<li>Change Joint redundancy RTX status to Standby</li>
							<li>Change (1+1) RTX status to Standby</li>
						</ol>
						<li>Then you will be asked to enter server </li>
					</ul>
					<p><strong>Tip:</strong>To get the server id login to that server and use the command :<strong>echo $KDSN</strong></p>
				</div>
				
				<div data-role="popup" id="myPopup3" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><h3>Re-homing a subscriber</h3></p>
					<p>To change the poc of a subscriber these are the following steps to be followed:</p>
					<ul>
						<li>Log into the respective XDMServer</li>
						<li>Open cliadmin by typing <strong>su - cliadmin</strong> password : cliadmin</li>
						<li>Select option 8 i.e <strong> OPS CLI</strong> </li>
						<li>select option 3 i.e <strong> Subscriber Rehome Operations</strong></li>
						<li>Next select option as required from: </li>
						<ol>
							<li> Subscriber Rehome</li>
							<li> Bulk Subscriber Rehome</li>
							<li>Update MDN For ReActivation</li>
						</ol>
						<li>Successively type the mdn /poc server id to which the mdn needs to be rehomed to/ trigger time / and then confrim to perform the operation.</li>
					</ul>
		  
				</div>
				
				<div data-role="popup" id="myPopup4" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><h3>CDR</h3></p>
					<p><strong>To check the cdr of a subscriber these are the steps to be followed:</strong></p>
					<ul>
						<li>login to billing server for eg in lab :ssh kodiak@lbs</li>
						<li> Then using the command <strong>cd /DGdata/Replicatedstore/cdr</strong></li>
						<li>Inorder to get fresh logs you should go to <strong> cd /DGdata/tmpcdr</strong> open then lastest file.</li>
					</ul>  
					<p><strong>What is CDR??</strong></p>
					<ul>
						<li><a href="/automation/Docs/CDR_Diagnostics.pdf" target="_blank"> Click here to learn about CDR </a></li>
					</ul>
				</div>
				
				<div data-role="popup" id="myPopup5" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p>To get the PAM Audit logs these are the steps to be followed:</p>
					<ul>
						<li>Log into the respective WCSR card.Example for lab wcsr1 we type: ssh kodiak@lwc1</li>
						<li><strong>cd DGdata/audit</strong> command gives you the all audit logs. </li>
						<li><strong>cd PAM</strong> gives you access to PAM audit logs.</li>
					</ul>
                                       <p>To look at the PAM instance logs:</p>
                                       <ul>
                                                <li>username:ec2-user</li>
                                                <li>pswd:ec2-user123!</li> 
                                                <li>log into ssh pamec2</li>
                                                <li>goto the path /opt/CloudPAMIDS/logs</li>
                                       </ul>

                                                
	   
				</div>
				
				<div data-role="popup" id="myPopup6" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><strong><center>ATT Dispatcher Links</center></strong></p>
					<p>Lab Dispatcher</p>
					<li><a href='http://www.labactivation.eptt.mobi/labdispatch/DispatchConsolePreInstaller.msi' target="_blank"> Lab dispatcher download</a></li>
					<p>Mirror Dispatcher</p>
					<li><a href='http://www.mirroractivation.eptt.mobi/mirrordispatch/DispatchConsolePreInstaller.msi' target="_blank"> Mirror dispatcher download </a></li>
					<p>Production Dispatcher</p>
					<li><a href='http://www.activation.eptt.mobi/dispatch/Integrated_Dispatch_Installer.msi' target="_blank"> Production dispatcher download </a></li>
				
					<p><strong><center>BELL Dispatcher Link</center></strong></p>
                                        <p>Production Dispatcher</p>
                                        <li><a href='http://dispatch.wireless.bell.ca/PreInstaller/DispatchConsolePreInstaller.msi' target="_blank"> BELL production dispatcher download</a></li>
					<p><strong><center>Telefonica Dispatcher Link</center></strong></p>
                                        <p>Production Dispatcher</p>
                                        <li><a href='https://dispatch.prod.telefonicapoc.com/DispatchConsolePreInstaller-x86-en-US_R2_11.msi' target="_blank"> Telefonica production dispatcher download</a></li>



				</div>
				
				<div data-role="popup" id="myPopup7" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><h3><center><strong>Activation of EPTT Subscribers</strong></center></h3></p>
					<div data-role="collapsible-set" data-inset="false">
						<div data-role="collapsible">
							<h3>Activation of Sonim</h3>
							<ul data-role="listview" data-inset="false">
								<p>Reactivation on Sonim can be done using the following steps:</p> 
								<ul>
									<li>Logout</li>
									<li>Master reset (1234 code)</li> 
									<li>After you reset, phone will restart once it restarts type <strong>*#pttconfig#* ( *#788266344#*) </strong>on the dial pad and a menu will appear </li>
									<ul>
										<li> For lab change the server SMS address to 8321 -Ã nd server IP address to www.labeptt.kodiaknetworks.com</li> 
										<li>For mirror change the server SMS address to 8325 and the server IP address to www.mirroreptt.kodiaknetworks.com </li>
										<li>For production change the server SMS address to 8326 and the server IP address www.eptt.kodiaknetworks.com</li>
									</ul>
									<li>Then open EPTT application and activate the client</li>
								</ul>
							</ul>
							<br>
							<br>
						</div>
						<div data-role="collapsible">
							<h3>Activation of Rugby 3</h3>
							<ul data-role="listview" data-inset="false">
								<p>The following steps are to be followed for reactivation of Rugby lll:</p>
								<ul>
									<li> Logout of the application</li>
									<li> Setting :phone: restore phone(password:1234) </li>
									<li>Once the phone restarts, type KODPTT on dialpad</li>
									<li>Go to PTT config file. </li>
									<li>Select Plano for lab, mirror for mirror and Production for production </li>
									<li>Reactivate the application</li>
								</ul>
							</ul>
						</div>
						<div data-role="collapsible">
							<h3>Activation of Rugby 4</h3>
							<ul data-role="listview" data-inset="false">
								<p>Steps for recativation of rugby 4:</p>
								 <ul>
									 <li>logout from application</li>
									 <li>Restore phone using this code  "*2767*3855#"</li>
									 <li>Once phone restores type *#563788#</li>
									 <li>Select Plano for lab,Production mirror for mirror,Production for production.  </li>
									 <li>Login in to the application</li>
								</ul>	
								<br>
							</ul>
						</div>
						<div data-role="collapsible">
							<h3>Activation of Android</h3>
							<ul data-role="listview" data-inset="false">
								<br>
								<ul>
									<li>If the application is already present on the phone go to application manager, Force stop/ Clear data for EPTT application.</li>
									<li>If the application is not present on the phone you can download the application from
									<a href=" https://attops.kodiaknetworks.com/downloads" target="_blank">  https://attops.kodiaknetworks.com/downloads</a> </li>
									<li>Once installed application can be activated by following the steps which appear on the screen.</li>
								</ul>
								<br>
							</ul>
						</div>
						<div data-role="collapsible">
							<h3>Activation of Iphone</h3>
							<ul data-role="listview" data-inset="false">
								<br>
								<ul>
									<li>Install itunes on your laptop.</li>
									<li>Download the required load into your itunes.Loads can be downloaded from 
									<a href=" https://attops.kodiaknetworks.com/downloads" target="_blank">  https://attops.kodiaknetworks.com/downloads</a></li>
									<li>Connect your phone to the computer and install the appluication using itunes</li>
									<li>Activate the application</li>
								</ul>
								<br>
							</ul>
						</div>
						<div data-role="collapsible">
							<h3>Activation of Blackberry Devices</h3>
							<ul data-role="listview" data-inset="false">
								<br>
								<ul>
									<li>Download the app from below URLs </li>
									<ul>
										<li> <a href=" http://76.203.108.34:8080/labiotbuilds.html" target="_blank">  http://76.203.108.34:8080/labiotbuilds.html</a>( Lab loads)</li>
										<li> <a href=" http://76.203.108.34:8080/mirroriotbuilds.html" target="_blank">  http://76.203.108.34:8080/mirroriotbuilds.html</a>( Mirror loads)</li>
										<li><a href=" http://76.203.108.34:8080/iotbuilds.html" target="_blank">  http://76.203.108.34:8080/iotbuilds.html</a> ( production loads)</li>		
									</ul>
									<li>Once the application is installed, activate it.</li>
									<li>If the application is already installed hold the existing application, which popsup various options,click on delete option.</li>
									<li>The device reboots automatically, now using above steps download application and activate it.</li>
								</ul>
								<br>
							
							</ul>
						</div>
		
		
					</div>
		  
				</div>
				
				<div data-role="popup" id="myPopup8" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<P><center><strong> Lifeline information</strong></center> </p>
					<div data-role="collapsible-set" data-inset="false">
						<div data-role="collapsible">
							<h3>Download Load</h3>
							<ul data-role="listview" data-inset="false">
							<p><a href='https://wgp.lleptt.kodiaknetworks.com/poc/client.html' target="_blank">Click Here</a></p>
						</div>
			
						<div data-role="collapsible">
							<h3>EMS GUI access</h3>
							<p>   VPN Profile:DTBK/lab-mirror 819.PCF Username/password: CustomerAdmin/FKk9lt</p>
							<li>GO TO URL:<a href= " http://10.255.200.16:9090" target="_blank" >http://10.255.200.16:9090</a></li>
							<p>Username: attops</p>
							<p>Password: kodiak123!</p>
						</div>
						<div data-role="collapsible">
							<h3>System Access</h3>
							<p>ssh kodiak@llems from plano 55</p>
						</div>
						<div data-role="collapsible">
							<h3>F5 Access</h3>
							<li>GO TO URL:<a href= "https://f5.lleptt.kodiaknetworks.com" target="_blank" >https://f5.lleptt.kodiaknetworks.com</a></li>
							<p>Admin user: admin</p>
							<p>Password: lifeline123!</p>
							<p>Guest user: kodiaknoc</p>
							<p>Password: Kodiak!</p>
						</div>
						<div data-role="collapsible">
							<h3>Provisioning:WCSR access</h3>
							<li>GO TO URL:<a href= "https://wcsr.lleptt.kodiaknetworks.com/csrkodiak/" target="_blank" >https://wcsr.lleptt.kodiaknetworks.com/csrkodiak/</a></li>
							<p>Username: attops</p>
							<p>Password: kodiak123!</p>
						</div>
			
					</div>
				</div>
				
				<div data-role="popup" id="myPopup9" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>SIPPROXY LOG:</center></h3></p>
					<ul>
						<li>See ip and port in adapter log to see where the sip proxy logs should be checked for</li>
					</ul>
						<p><center><h3>SIPADAPTER LOG:</h3></center></p>
						<ul>
							<li>Location: cd/DGlogs/sipadapterlog</li>
							<li>Search using: mdn/siptransacid/dialogid </li>
						</ul>
						<p><center><h3>CALL P LOG:</h3></center></p>
						<ul>
							<li> Location: cd/DGlogs/callp </li>
							<li>Search using: mdn/callid/legid/sessionid/recordid</li>
						</ul>
						<p><center><h3>MEDIA LOG:</h3></center></p>
						<ul>
							<li>Location: cd/DGlogs/pocmediamanager</li>
							<li>Search using: session id/callid/legid</li>
						</ul>
						<p><center><h3>CHECK THE CDR'S:</h3></center></p>
						<p><strong>To check the cdr of a subscriber these are the steps to be followed:</strong></p> 
						<ul>
							<li>Login to billing server for eg in lab :ssh kodiak@lbs</li>
							<li> Then using the command <strong>cd /DGdata/Replicatedstore/cdr</strong></li>
							<li>Inorder to get fresh logs you should go to <strong> cd /DGdata/tmpcdr</strong> open then lastest file.</li>
						</ul>  
					  
				</div>
				
				<div data-role="popup" id="myPopup10" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>For Activation via SMS:</center></h3></p>
					<p>CLIENT--->SMPP-->CLC/CMD GATEWAY-->APP ROUTER-->TEMPPASSKEY DB IN XDM--></p>
					<p>Login to XDMS:</p>
					<ul>
						<li><p>Cd /DGlogs/CLCCmDGateway11.log</p>
							<p>Search Using: MDN </p></li>
						<li><p>Cd /DGlogs/AppRouter7.log</p>
							<p>Search Using :MDN</p></li>
						<li><p>Table name- DG.TMPVASSUBSCRIPTIONKEYINFO in XDM Sql</p>
							<p> Search Using :MDN </p>
							<p><center><h3>For Activation via HTTP:</center></h3></p>
						<p align="left">CLIENT--->WGP-->XDM</p>
					</ul>
					<ul>
						<li><p>Logs:</p>
						<p>WGP--> kodiakgpslog</p>
						<p>Search for :http post:/MDN</p></li>
						<li><p>in XDM:</p>
						<p>xdmdatamanager log</p>
						<p>Search Using :MDN</p></li>
					</ul>
									
				</div>
				
				<div data-role="popup" id="myPopup11" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><h3><center>Presence Update:</center></h3></p>
					<p>SIPPROXY-->PRSIPADAPTER-->OMAPRESENCE-->SENDS NOTIFY THROUGH THE SAME PATH</p>
					<p>Tables in POC Database:</p>
					<ul>
						<li>DG.POCPUBLISHINFO</li>
						<li>DG.PRESENCEPUBLISHINFO</li>
                                                <li>DG.SIPREGISTRATIONSTATUS</li>
                                                <li>DG.PR_IN_REMOTESUBSCRIPTIONINFO</li>
                                                <li>DG.PR_OUT_REMOTESUBSCRIPTIONINFO</li>

					</ul>
					<p>Logs:</p>
					<ul>
						<li>PrSipAdaptor.log</li>
						<li>omapresence.log</li>
                                                <li>pocsipproxy.log</li>
                                                <li>PrSipAdaptor.log</li>
                                                <li>pocsiphndler.log</li> <li>omapresence</li>
					</ul>
							 
				</div>
				
				<div data-role="popup" id="myPopup12" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><h3>EMS GUI</h3></p>
					<p>TO OPEN EMS GUI:</p>
					<ul>
						<li>>open putty>ssh>tunnels>IP:9090 IP:3050 IP:3051 </li>
						<li>>session>load>plano55>load>save>open>ssh kodiak@lems>pass: kodiak1>top</li>
						<li>OPEN BROWSER AND GO TO URL:<a href= " http://localhost:9090" target="_blank" >https://localhost:9090</a></li>
		  
					</ul>
		  
				</div>

				<div data-role="popup" id="myPopup13" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><h3>CLIENT VERSIONS</h3></p>
					<p>Please follow the steps below:</p>
					<ul>
						<li>> ssh kodiak@xsr</li>
						<li>> sql6 </li>
						<li>>select distinct USERAGENT from DG.POCSUBSCRINFO where USERAGENT like '%Android%';</li>
					</ul>
				</div>	
				
				<div data-role="popup" id="myPopup14" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p>Please find the production hosting details here:</p><a href="/automation/Docs/ATT Hosting_Details_v12.2.xlsx" target="_blank">Click here</a>
					   
				</div>
				
				<div data-role="popup" id="myPopup15" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>Login to AT&T MIS Circuit</h3></center></p>
					<ul>
						<li>First go the URL
						<a href=" https://www.businessdirect.att.com/portal/index.jsp?fromlogin=true&_requestid=17164" target="_blank">  https://www.businessdirect.att.com/portal/index.jsp?fromlogin=true&_requestid=17164</a>
						<p>username : kodikns password : k0diak123!</p>
		
						</li>
						<li>After login click on  the <b>AT&T Security center</b> 
						<img src="img/pic1.png" alt="pic1">
	     
						</li>
						<li>After that click on the <b>My services</b> and select <b>Legacy (old) security center portal</b>
						<img src="img/pic2.png" alt="pic2">
	 
						</li>
						<li>After that select <b>My Services</b> and <b>DDOS Protection (option 1)</b>
						<img src="img/pic3.png" align="center" alt="pic3">
						</li>
						<li>You will be redirected to PeakFlow SP page  as shown:
						<img src="img/pic4.png" alt="pic1">
						</li>
						<li>Navigate after this to any alert screen or any information that you may like.</li>
					</ul>
				</div>
				
				<div data-role="popup" id="myPopup16" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>System Full Backup</h3></center></p>
					<p><b>Procedure to take system Full Backup :</b></p>
					<ul>
						<li>Login to card. Example ssh Kodiak@ps6r</li>
						<li>Become root user. sudo su -</li>
						<li>go to /DG/Releases/Release_DG_P_07_006_00A_X64_10/Tools/CronJobs/ directory cd /DG/Releases/Release_DG_P_07_006_00A_X64_10/Tools/CronJobs</li>
						<li>nice -19 backupDGLoad.sh FULL.</li>
					</ul>
					<p><b>Monitor below checks during system fullback up :</b></p>
					<ul>
					  <li>nice -19 top and monitor CPU usage during system backup.</li>
					  <li>nice -19 tail -f  /DGlogs/kodiakDGSysBackup.log and see logs for backup process.</li>
					  <li>vi /DGlogs/kodiakDGSysBackup.history to make sure backup has taken successful</li>
					  <li>Login to back up server and verify full system backup taken.</li>
					</ul>
					<p>Serving Backup server info : ssh backup@10.254.254.8</p>
					<p>export FTPSERVER=10.254.254.8</p>
					<p>export FTPUID=backup</p>
					<p>export FTPPWD=b0d45@k</p>
					<p> Geo Backup server info: ssh backup@10.255.254.8</p>
					<p>export FTPSERVER=10.255.254.8</p>
					<p>export FTPUID=backup</p>
					<p>export FTPPWD=b0d45@k</p>
					<p><b>SNIPPETS:</b></p>
					<p> nice -19 sh backupDGLoad.sh FULL</p>
					<p>Taking Full DG Backup ... </p>
					<p>Please review the </DGlogs/kodiakDGSysBackup.log> for any failure</p>
					<p>Please review the </DGlogs/kodiakDGSysBackup.history> for DG system backup history</p>
					<p>System Backup started for 10.254.254.133 at Sun Mar 30 15:58:00 EDT 2014 ....</p>
					<p>FTPing the file DGSysBackup_Sec_POC_660601_10_254_254_133_20140330_155800_X64_FULL.tar to 10.254.254.8 ...</p>
					<p>Please verify the backupfile <DGSysBackup_Sec_POC_660601_10_254_254_133_20140330_155800_X64_FULL.tar>.</p>
					<p>DGSysBackup_Sec_POC_660601_10_254_254_133_20140330_155800_X64_FULL.tar has been transfered successfully to server <10.254.254.8></p>
					<p>System Backup completed successfully for 10.254.254.133 at Sun Mar 30 16:03:04 EDT 2014</p>
					<p>vi /DGlogs/kodiakDGSysBackup.history</p>
					<p>System Backup started for 10.254.254.133 at Sun Mar 30 15:58:00 EDT 2014 ....</p>
					<p>System Backup completed successfully for 10.254.254.133 at Sun Mar 30 16:03:04 EDT 2014</p>
					<p>tail -f /DGlogs/kodiakDGSysBackup.log</p>


				</div>	  

				<div data-role="popup" id="myPopup17" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>DB Backup</center></h3></p>	  
					<p><b>Log into lps1 card</b></p>
					<p>SNIPPET:</p>
					<ul>
						<li>   [12:46:49 kodiak@LABPOC1P ~]$ </li>
						<li>   ttDBBackup FULL</li>
						<li>   DB Backup File:<DG_640101-10_255_253_38-20150101_124755_X64.tgz></li>
						<li>   DB Backup Taken Successfully and Uploaded to FTP Server, Date: Thu Jan  1 12:47:59 CST 2015, Time taken: 2 secs</li>
					</ul>
					<p><b>Verify Backup took successful.</b></p>
					<p>SNIPPET:</p>
					<ul>
						<li>   ssh backup@10.255.253.8 </li>
						<li>   -rw-r--r--    1 backup backup     4802115 Jan  1 12:47 DG_640101-10_255_253_38-</li>
						<li>   20150101_124755_X64.tgz</li>
				 
					</ul>

				</div>

	  
				<div data-role="popup" id="myPopup18" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>ASCII Backup</center></h3></p>	
					<div data-role="collapsible-set" data-inset="false">
						<div data-role="collapsible">
							<h3>LAB</h3>
							<p>Note: This will take ASCII backup of all the Lab Serving nodes </p>
							<p>FROM .55 SERVER : </p>
							<ul>
								<li>ssh backup@lddb</li>
								<li>  cd /Backup/Production/</li>
								<li>  ./kbackup.sh `date +%b_%d_%Y_%H_%M_%S`</li>
							</ul>
							<p>Note: This will take ASCII backup of all the Lab Geo nodes </p>
							<p>FROM .55 SERVER : </p>
							<ul>
								<li>ssh backup@lcdb</li>
								<li>  cd /Backup/Production/</li>
								<li>  ./kbackup.sh `date +%b_%d_%Y_%H_%M_%S`</li>
							</ul>
						</div>
						<div data-role="collapsible">
							<h3>MIRROR</h3>
							<p>Note: This will take ASCII backup of all the Mirror Serving nodes </p>
							<p>FROM .55 SERVER : </p>
							<ul>
								<li>ssh backup@pcdb</li>
								<li>  cd /Backup/Production/</li>
								<li>  ./kbackup.sh `date +%b_%d_%Y_%H_%M_%S`</li>
							</ul>
							<p>Note: This will take ASCII backup of all the Mirror Geo nodes </p>
							<p>FROM .55 SERVER : </p>
							<ul>
								<li>ssh backup@pddb</li>
								<li>  cd /Backup/Production/</li>
								<li>  ./kbackup.sh `date +%b_%d_%Y_%H_%M_%S`</li>
							</ul>
						</div>
						<div data-role="collapsible">
							<h3>PRODUCTION</h3>
							<p>Note: This will take ASCII backup of all the  Serving nodes </p>
							<p>FROM .55 SERVER : </p>
							<ul>
								<li>ssh backup@cdb</li>
								<li>  cd /Backup/Production/</li>
								<li>  ./kbackup.sh `date +%b_%d_%Y_%H_%M_%S`</li>
							</ul>
							<p>Note: This will take ASCII backup of all the  Geo nodes </p>
							<p>FROM .55 SERVER : </p>
							<ul>
								<li>ssh backup@ddb</li>
								<li>  cd /Backup/Production/</li>
								<li>  ./kbackup.sh `date +%b_%d_%Y_%H_%M_%S`</li>
							</ul>
						</div>
                                                <div data-role="collapsible">
                                                        <h3>INDIVIDUAL CARDS</h3>
                                                        <p>Note: Execute following commands to get ASCII backup on individual cards separately</p>
                                                        <p>FROM .55 SERVER : </p>
                                                        <ul>
                                                                <li>ssh to server "kodiak@xyz"</li>
                                                                <li>For sql DB execute :- "/DG/activeRelease/Tools/DBScripts/ttBulkCpOut $KDSN ."   </li>
                                                                <li>For sql6 DB execute :- "/DG/activeRelease/Tools/DBScripts/ttBulkCpOut $KDSN6 ."   </li>
                                                        </ul>
                                                        <p>Note: For some cards like wcsr and wgp there is no sql6 DB so no need to execute that command.  </p>
                                                </div>

					</div>
				</div>
				
				<div data-role="popup" id="myPopup19" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>CAT Customization Backup and  Dispatcher/Desktop conf Backup</h3></center></p>
					<p>Take backup of following files</p>
					<p><b>WGP :</b></p>
					<p>/DG/Releases/Release_DG_P_07_007_01_X64_35_4_4/WebApps/tomcat_instance1/webapps/Dispatcher/dispatcher.config</p>
					<p>   /DG/Releases/Release_DG_P_07_007_01_X64_35_4_4/WebApps/tomcat_instance1/webapps/poc-client-upgrade/win-desktop</p>
					<p>   /DG/Releases/Release_DG_P_07_007_01_X64_35_4_4/WebApps/tomcat_instance1/webapps/poc-client-upgrade/win-desktop-client</p>
					<p>  /DG/Releases/Release_DG_P_07_007_01_X64_35_4_4/WebApps/tomcat_instance1/webapps/poc-client-upgrade/win-dispatch-client-sideload</p>
					<p>   /DG/Releases/Release_DG_P_07_007_01_X64_35_4_4/WebApps/tomcat_instance1/webapps/poc-client-upgrade/win-dispatch-client/ wyserver.wysv
					<p>   /DG/activeRelease/WebApps/tomcat_instance2/webapps/catui  </p>
					<p>   /DG/activeRelease/WebApps/tomcat_instance2/kodiakWebapps/catui/instance/config/error_en_CA.properties</p>
					<p>   /DG/activeRelease/WebApps/tomcat_instance2/kodiakWebapps/catui/instance/config/error_en_US.properties</p>
					<p>   /DG/activeRelease/WebApps/tomcat_instance2/kodiakWebapps/catui/instance/config/messages_en_US.properties.</p>
					<p><b>WCSR :</b></p>
					<p>/DG/activeRelease/WebApps/tomcat_instance1/kodiakWebapps/csrConfig/appresources/ApplicationResources_en_US.properties</p>
					<p> /DG/activeRelease/WebApps/tomcat_instance1/kodiakWebapps/csrConfig/appresources/ApplicationResources_en_CA.properties</p>
					<p><b>WGP AND WCSR :</b></p>
					<p>/DG/activeRelease/WebApps/tomcat_instance2/kodiakWebapps/catui/custom/images/* </p>
				</div>   

				<div data-role="popup" id="myPopup20" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>Client Config Document for ALL POC</h3></center></p>     
					<ul>
						<li>Prepare device from each POC</li>
						<li>Connect POC client using USB to computer</li>
						<li>OPEN PTT folder of Client storage device</li>
						<li>Copy .config document and save to local machine</li>
						<li>Zip all 3 files and mail</li>
					</ul>
					<p>Note: Config for each Client.</p>
				</div>

				<div data-role="popup" id="myPopup21" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>F5 Backups</h3></center></p>  	
					<div data-role="collapsible-set" data-inset="false">
						<div data-role="collapsible">
							<h3>F5 Backup</h3>	
							<ul>
								<li>Log in to the Configuration utility</li>
								<li>Navigate to System > Archives</li>
								<li>Click on Create</li>
								<li>Give name of Backup</li>
								<li>Download to local machine</li>
							</ul>
						</div>
						<div data-role="collapsible">
							<h3>QK View</h3>
							<ul>
								<li> Log in to the Configuration utility</li>
								<li> Click System</li>
								<li> Click Support The QKView option is already selected</li>
								<li> Click Start.</li>
								<li> 	When prompted, click Download Snapshot File to download the output file</li>
						</div>
						<div data-role="collapsible">
							<h3>bigip.config</h3>
							<ul>
								<li> Log in to f5 from putty</li>
								<li> Cd/config</li>
								<li> Copy bigip.config file to .55 server</li>
							</ul>          
						</div>
						<div data-role="collapsible">
							<h3>bigip base.config</h3>
							<ul>
								<li> Log in to f5 from putty</li>
								<li> Cd/config</li>
								<li> Copy bigip.config file to .55 server</li>
							</ul>          
						</div>
						<div data-role="collapsible">
							<h3>bigip gtm.config</h3>
							<ul>
								<li> Log in to f5 from putty</li>
								<li> Cd/config</li>
								<li> Copy bigip.config file to .55 server</li>
							</ul>          
						</div>
						<div data-role="collapsible">
							<h3>bigip user.config</h3>
							<ul>
								<li> Log in to f5 from putty</li>
								<li> Cd/config</li>
								<li> Copy bigip.config file to .55 server</li>
							</ul>          
						</div>
					</div>
				</div>
			
				<div data-role="popup" id="myPopup22" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>kodiakDG.conf/hosts file/startup.txt files</h3></center></p>  	
					<ul>
						<li>Log in to DG/EMS Cards</li>
						<li>Copy /etc/kodiakDG.conf file to 55 server</li>
						<li>Copy /DG/activeRelease/dat/startup.txt to 55 server.</li>
					</ul>    
				</div>
                                <div data-role="popup" id="myPopup23" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>CALEA</h3></center></p>  	
					<p>Please find the PRI MAINTENANCE FOR CALEA:</p><a href="/automation/Docs/PRI Maintenance.pdf" target="_blank">Click here</a>
                                        <p>Please find the Document for CALEA operations:</p><a href="/automation/Docs/CALEA.pdf" target="_blank">Click here</a>
 
				</div>
                                <div data-role="popup" id="myPopup24" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>KPI</h3></center></p>  	
					<p>Please find the document here:</p><a href="/automation/Docs/Operational_Measurements_Handbook_7.10.pdf" target="_blank">Click here</a>
                                     
 
				</div>

                                <div data-role="popup" id="myPopup25" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3>F5 FQDNS</h3></center></p>  	
					<img src="img/pic5.PNG" alt="pic5" />


				</div>

				<div data-role="popup" id="myPopup26" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><h3><center><strong>Outage recovery</strong></center></h3></p>
					<div data-role="collapsible-set" data-inset="false">
						<div data-role="collapsible">
							<h3>Document</h3>
							<p>Please find the document here:</p><a href="/automation/Docs/Outage_Recovery_v2.docx" target="_blank">Click here</a>

							<br>
							<br>
						</div>
						
						
		
		
					</div>
                                        <div data-role="collapsible-set" data-inset="false">
						<div data-role="collapsible">
							<h3>Provisioning outage 07/27/2015</h3>
							<p>Please find the document here:</p><a href="/automation/Docs/Provisioning Outage 7_27.pdf" target="_blank">Click here</a>

							<br>
							<br>
						</div>
						
						
		
		
					</div>
<div data-role="collapsible-set" data-inset="false">
						<div data-role="collapsible">
							<h3>Reprovisioning as Dispatcher from Handset 11/16/2015</h3>
							<p>Please find the document here:</p><a href="/automation/Docs/Changing provision from Handset to Dispatcher.pdf" target="_blank">Click here</a>

							<br>
							<br>
						</div>
						
						
		
		
					</div>

                                        <div data-role="collapsible-set" data-inset="false">
						<div data-role="collapsible">
							<h3>F5 swap outage 08/01/2015</h3>
							<p>Please find the document here:</p><a href="/automation/Docs/F5 SWo.pdf" target="_blank">Click here</a>

							<br>
                                                       
							<br>
						</div>
					 <div data-role="collapsible-set" data-inset="false">
						<div data-role="collapsible">
							<h3>Amazon certificate expiration 09/23/2015</h3>
							<p>Please find the document here:</p><a href="/automation/Docs/WGP_WCSR_Email_Sending_Failed_Outage_Recovery.xlsx" target="_blank">Click here</a>

							<br>
                                                       
							<br>
						</div>
					 <div data-role="collapsible-set" data-inset="false">
						<div data-role="collapsible">
							<h3>Notification failure outage 09/18/2015</h3>
							<p>Please find the document here:</p><a href="/automation/Docs/RCA_PAM_Notification_Issue_091815.pdf" target="_blank">Click here</a>

							<br>
                                                       
							<br>
						</div>
					<div data-role="collapsible-set" data-inset="false">
						<div data-role="collapsible">
							<h3>POC13P Outage 10/10/2015</h3>
							<p>Please find the document here:</p><a href="/automation/Docs/RCA_POC13P.pdf" target="_blank">Click here</a>

							<br>
							<br>
						</div>
					<div data-role="collapsible-set" data-inset="false">
						<div data-role="collapsible">
							<h3>POC9N3 Outage 10/11/2015</h3>
							<p>Please find the document here:</p><a href="/automation/Docs/RCA_101215-POC9N3.pdf" target="_blank">Click here</a>

							<br>
							<br>
						</div>
						</div>
<div data-role="collapsible-set" data-inset="false">
                                                <div data-role="collapsible">
                                                        <h3>POC14G outage 12/10/2015</h3>
                                                        <p>Please find the document here:</p><a href="/automation/Docs/RCA_121015-POC14Geo.pptx" target="_blank">Click here</a>

                                                        <br>
                                                        <br>
                                                </div>


						</div>
						  

<div data-role="collapsible-set" data-inset="false">
                                                <div data-role="collapsible">
                                                        <h3>POC5G DB connection Outage  12/18/2015</h3>
                                                        <p>Please find the document here:</p><a href="/automation/Docs/RCA_POC5_GEO.PPTX" target="_blank">Click here</a>

                                                        <br>
                                                        <br>
                                                </div>


                                                </div>
	
		
					<div data-role="collapsible-set" data-inset="false">
                                                <div data-role="collapsible">
                                                        <h3>CAT inaccessible  12/22/2015</h3>
                                                        <p>Please find the document here:</p><a href="/automation/Docs/RCA_CAT_inaccessible.pptx" target="_blank">Click here</a>

                                                        <br>
                                                        <br>
                                                </div>


                                                </div>
					<div data-role="collapsible-set" data-inset="false">
                                                <div data-role="collapsible">
                                                        <h3>PAM Cancel Requests 12/21/2015</h3>
                                                        <p>Please find the document here:</p><a href="/automation/Docs/RCA_PAM_Cancel_requests.pptx" target="_blank">Click here</a>

                                                        <br>
                                                        <br>
                                                </div>


                                                </div>
 <div data-role="collapsible-set" data-inset="false">
                                                <div data-role="collapsible">
                                                        <h3>ATT F5 Network Fluctuation</h3>
                                                        <p>Please find the document here:</p><a href="/automation/Docs/ATT_F5.pptx" target="_blank">Click here</a>

                                                        <br>
                                                        <br>
                                                </div>


                                                </div>
<div data-role="collapsible-set" data-inset="false">
                                                <div data-role="collapsible">
                                                        <h3>ATT Provisioning Requests</h3>
                                                        <p>Please find the document here:</p><a href="/automation/Docs/ATT_Provision.pptx" target="_blank">Click here</a>

                                                        <br>
                                                        <br>
                                                </div>


                                                </div>
<div data-role="collapsible-set" data-inset="false">
                                                <div data-role="collapsible">
                                                        <h3>Verizon F5 Network Fluctuation</h3>
                                                        <p>Please find the document here:</p><a href="/automation/Docs/VZW_F5.pptx" target="_blank">Click here</a>

                                                        <br>
                                                        <br>
                                                </div>


                                                </div>
<div data-role="collapsible-set" data-inset="false">
                                                <div data-role="collapsible">
                                                        <h3>Verizon XDM Read only State</h3>
                                                        <p>Please find the document here:</p><a href="/automation/Docs/VZW_Secondary_XDMS.pptx" target="_blank">Click here</a>

                                                        <br>
                                                        <br>
                                                </div>


                                                </div>
<div data-role="collapsible-set" data-inset="false">
                                                <div data-role="collapsible">
                                                        <h3>Bell F5 Connectivity loss </h3>
                                                        <p>Please find the document here:</p><a href="/automation/Docs/BELL_F5.pptx" target="_blank">Click here</a>

                                                        <br>
                                                        <br>
                                                </div>


                                                </div>


		  
				</div>
                                 <div data-role="popup" id="myPopup27" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3></h3></center></p>  	
					<p>Please find the document here:</p><a href="/automation/Docs/DCISSUE.pdf" target="_blank">Click here</a>
                                     
 
				</div>
                                 <div data-role="popup" id="myPopup28" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3></h3></center></p>  	
					<p>Please find the document here:</p><a href="/automation/Docs/CLI_Guide_7.10.pdf" target="_blank">Click here</a>
                                     
 
				</div>
                                 <div data-role="popup" id="myPopup29" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3></h3></center></p>  	
					<img src="/automation/img/subnet.PNG" alt="image error"/>
                                     
 
				</div>
                                 <div data-role="popup" id="myPopup30" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center>The BGP configuration </center></p>  	
					<img src="/automation/img/bgp.PNG" alt="image error"/>
                                        <p>GP is used to learn the routes in the network and the routes are advertised by the border routers to the peers.</p>


 
				</div>

                                <div data-role="popup" id="myPopup31" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3></h3></center></p>  	
					<img src="/automation/img/outage_recovery_docu.PNG" alt="image error"/>
                                     
 
				</div>
                                <div data-role="popup" id="myPopup32" class="ui-content">
					<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
					<p><center><h3></h3></center></p>  	
					<p>Please find the document here:</p><a href="/automation/Docs/TU.pdf" target="_blank">Click here</a>
                                     
 
				</div>
				
				 <div data-role="popup" id="myPopup33" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                        <p><center><h3></h3></center></p>
                                        <p>Please find the document here:</p><a href="/automation/Docs/POC13MSN2.pdf" target="_blank">Click here</a>


                                </div>
				 <div data-role="popup" id="myPopup34" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                        <p><center><h3></h3></center></p>
                                        <p>Please find the document here:</p><a href="/automation/Docs/TALK_GROUP_SCANNING.pdf" target="_blank">Click here</a>


                                </div>
				<div data-role="popup" id="myPopup35" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                        <img src="/automation/img/connectwifi.JPG" alt="Connect wifi"></img>
					<br>
					<img src="/automation/img/connect.JPG" alt="Connect"></img>

                                </div>
				 <div data-role="popup" id="myPopup36" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                  
                                        <p>Please find the document here:</p><a href="/automation/Docs/Amazon_ec2_ip_change.pdf" target="_blank">Click here</a>


                                </div>
				 <div data-role="popup" id="myPopup37" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                        
                                        <p>Please find the document here:</p><a href="/automation/Docs/Reboot of cards.pdf" target="_blank">Click here</a>


                                </div>
				<div data-role="popup" id="myPopup38" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                        
                                        <p>Please find the document here:</p><a href="/automation/Docs/RCA_POC13P.pdf" target="_blank">Click here</a>


                                </div>

				</div>
				<div data-role="popup" id="myPopup39" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                   	<p><h3 align="center">SysMonitor Script</h3></p>
                                        <li>There is a script named “sysmonitor.py” monitors on the OS level and writes “sysMonitorSnapshot” file.</li>
					<li> This file has memory, usage and all OS level pegs.</li>
					<li>To find if “sysmonitor.py” script is running, use the command “ps –elf | grep –i sys” </li>
					<img src="/automation/img/sysmonitor.png" alt="Sysmonitor"></img>
					<li>“cat /etc/rc.local” gives a list of scripts which will be executed after all other init scripts.</li>

                                </div>
				<div data-role="popup" id="myPopup40" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                   	<p><h3 align="center">SmartCtl Information</h3></p>
                                        <li>Cardmanger is verifying the following details in smartctl output.</li>
					<li>SMART is : This parameter should be always “enabled” , if it is disabled then alarm will be raised.</li>
					<li>SMART Health is : This should be always OK. Alarm will be raised if it is other than OK. </li>
					<li>Current Drive Temperature : should be less than 55 C. </li>
					<li>Error counter log : In this o/p we are checking for “Total Uncorrected Error” for both read and write. If this error is more than 500, alarm will be raised.</li>
					<li>SMART Self-test log: In this we are checking for status. Alarm will be raised if status other than “Self test in prog”/ “Complete”.</li> 

                                </div>
				<div data-role="popup" id="myPopup41" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                   	<p><h3 align="center">Mails failed from 55 server</h3></p>
                                        <li>Check for correct IP address in resolv.conf file.</li>
					<li>Check if PING, TRACEROUTE and NSLOOKUP are working for all internal and external IP addresses or FQDN's.</li>
					<li>Check if internal interfaces(Private IP address) for server were set to private IP's in resolv.cfg. </li>
					<li>If external IP's are inserted, take a backup of the file, and insert internal IP addresses for DC1 and DC2 into this configuration. </li>
					<li>You can get internal IP address for DC1 and DC2 using "nslookup plano-dc1.inovate.inovate.com." and "nslookup plano-dc2.inovate.inovate.com."</li>
					<li>DC1 - 172.26.96.32, DC2 - 172.26.96.33</li> 

                                </div>

				<div data-role="popup" id="myPopup42" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                        <h3>RLS Details</h3>
                                        <img src="/automation/img/rls_details.PNG" alt="Rls details"></img>

                                </div>

		                
				<div data-role="popup" id="myPopup43" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                        <h3>WGP-Authentication</h3>
                                         <p>Steps:</p>
                                         <li>1.	Disable datasync in EMS

                                             Command: update DG.DATASYNC_CONFIGINFO set DATASYNC_ENABLED=0 where pttserverid='WGP1PTTID'</li>
                                         <li>2.	Log in to WGP1

                                           Command: Alter user kodiakdb identified by kodiak;</li>
                                         <li>3.	Restart the services.</li>
 


                                </div>
	<div data-role="popup" id="myPopup44" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                        <p><h3 align="center">Checkpoints for H/W troubleshoot</h3></p>
                                        <li>Before swapping HW, MOP should be tested in LAB</li>
                                        <li>Have an Image of the full server</li>
                                        <li>Backup content data to prevent loss</li>                                      <li>Should have training on Servers(hp,cisco etc) </li>
                                        <li>Details forehand on BIOS,firmware,OS versions</li>
                                        <li>Contact for escalation</li>
					<li>MOP template for different issues(to be given by CCB)</li>
					<li>ROOT password should be availble</li>
					<li>Configuration document for the server</li>

                                </div>
	<div data-role="popup" id="myPopup45" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                        <p><h3 align="center">Card Manager process healthbad</h3></p>
                                        <li><b> DiskMemCpuMonitorObj:</b> This thread is responsible for monitoring Disk, memory, CPU and IO of local card.</li>
					<li><b>CardMonitorObj:</b> This thread is responsible for monitoring switch if card is placed in 9th or 10th slot.</li>
					<li><b>hwRmonTask:</b>  This thread is responsible for updating trap IPs to shelf manager and for raising alarm for event related switch and shelf manager.</li>
					<li><i>Below is the root cause and recovery for the issue if it is observed again.</i></li>
					<li>As per the logs, all CardManager functionality was fine. </li>
					<li>Since HealthManager client thread which is running in application context got exited, we see thread blocked and client blocked alarms.</li>
					<li>It is not possible to auto recover Health Manager client thread, CardManager process restart is required to recover the issue.</li>




                                        </div>	

					<div data-role="popup" id="myPopup46" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>

                                        <p>Please find the document here:</p><a href="/automation/Docs/F5_IP_Geo_Location_DB_Update.docx" target="_blank">Click here</a>


	                                </div>
					 <div data-role="popup" id="myPopup47" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                                        <p><h3 align="center">Resize logical volume of partition </h3></p>
					<li>vgs-report information about volume groups</li>
					<li>lvs-report information about logical volumes</li>
					<li>We can extend the size of the logical volumes after creating it by using lvextend utility - lvextend -L+40G /dev/vg01/DGd</li>
					<li>In order to recognize the change, we need to execute - resize2fs /dev/vg01/DGd</li>
					<li>Now do df -h to see whether the logical volume of teh folder given above is resized or not</li>
					</div>

			</div>	  
					 <div data-role="popup" id="myPopup48" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>

                                        <p>Please find the document here:</p><a href="/automation/Docs/Reboot_HP2U_Container_and_HP2U_server.docx" target="_blank">Click here</a>


                                        </div>
					<div data-role="popup" id="myPopup49" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>

                                        <p>Please find the document here:</p><a href="/automation/Docs/Crosscarrier_Provisioning.docx" target="_blank">Click here</a>


                                        </div>	  
					 <div data-role="popup" id="myPopup50" class="ui-content">
                                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>

                                        <p>Please find the document here:</p><a href="/automation/Docs/RLSLogs_AUDIT_V1.xlsx" target="_blank">Click here</a>


                                        </div>
	

	</div>
	 
		<div style="position: relative">
			<p style="position: fixed; bottom: 0; width:100%; text-align: center">&copy 2016 Kodiak</p>
		</div>


	</body>
</html>


