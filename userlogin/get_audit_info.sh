#!/bin/bash
#To get the application folder path
path=`pwd`
mdn_input="$path/mdndetails"
audit_info_html="$path/auditdata.html"
audit_template="$path/audit_template"
temp="$path/temp"
temp1="$path/temp1"
mdn=$(cat $mdn_input | cut -f1 -d ',')
poc_name=$(cat $mdn_input | cut -f2 -d ',')
echo $poc_name
if [ "$poc_name" == POC1P ] ||  [ "$poc_name" == POC2P ] ||  [ "$poc_name" == POC3P ] ||  [ "$poc_name" == POC4P ] ||  [ "$poc_name" == POC5P ] ||  [ "$poc_name" == POC6P ] ||  [ "$poc_name" == POC7P ] ||  [ "$poc_name" == POC8P ]
then
path_rls="/Logs/rls1/Audit/$poc_name/User*"
echo $path_rls
elif [ "$poc_name" == POC9P ] || [ "$poc_name" == POC10P ] || [ "$poc_name" == POC11P ] || [ "$poc_name" == POC12P ] || [ "$poc_name" == POC13P ] || [ "$poc_name" == POC14P ] || [ "$poc_name" == POC15P ]
then
path_rls="/Logs/rls2/Audit/$poc_name/User*"
echo $path_rls
fi
starttime=$(ssh rls2 "ls -ltr $path_rls" | awk '{print $8}'| head -1)
endtime=$(ssh rls2 "ls -ltr $path_rls" | awk '{print $8}'| tail -1)
if [[ -z "$starttime" ]] && [[ -z "$endtime" ]]
then
echo "<h4 align=center>No Audit logs available</h4>">$audit_info_html
else
cp -f $audit_template $audit_info_html
echo "<h4 align=center>Please find the Logs from $starttime to $endtime</h4>" >>$audit_info_html
echo "<hr>">>$audit_info_html

set -o xtrace
test -f $temp
if [ $? == 0 ] 
then
	mv $temp $temp1
fi
set +o xtrace
ssh rls2 "grep \"$mdn\" $path_rls" >>$temp
Login_register=0
Refresh_register=0
Transition_wifi=0
Location_change=0
Reconnect=0

while read -r line
do
time_stamp="$(echo $line | cut -f1 -d '|' | awk '{print $3}')"
Subsystem_id="$(echo $line | cut -f2 -d '|')"
MDN="$(echo $line | cut -f3 -d '|')"
IPType="$(echo $line | cut -f4 -d '|')"
TransportType="$(echo $line | cut -f5 -d '|')"
Client_IP="$(echo $line | cut -f6 -d '|')"
Client_port="$(echo $line | cut -f7 -d '|')"
OnlineStatus="$(echo $line | cut -f8 -d '|')"
OnlineStatusReasoncode="$(echo $line | cut -f9 -d '|')"
Path="$(echo $line | awk -F '|' '{print $10}')"
Path=$(echo "$Path" | tr -d '<>,')
REGRECVTIME="$(echo $line | cut -f11 -d '|')"
Kn_Poc="$(echo $line | cut -f12 -d '|')"
if [ $Kn_Poc -eq 1 ]
then 
Kn_Poc="Login Register"
Login_register=$(expr $Login_register + 1)
elif [ $Kn_Poc -eq 2 ]
then
Kn_Poc="Refresh Register"
Refresh_register="$(expr $Refresh_register + 1)"
elif [ $Kn_Poc -eq 3 ]
then
Kn_Poc="Transition Wifi"
Transition_wifi="$(expr $Transition_wifi + 1)"
elif [ $Kn_Poc -eq 4 ]
then
Kn_Poc="Location Change"
Location_change="(expr $Location_change + 1)"
elif [ $Kn_Poc -eq 5 ]
then
Kn_Poc="Reconnect"
Reconnect="(expr $Reconnect + 1)"
fi
PaccesInfo="$(echo $line | cut -f13 -d '|')"
F5PttServerId="$(echo $line | cut -f14 -d '|')"
GeoNotificationRoute="$(echo $line | cut -f15 -d '|')"
APN="$(echo $line | cut -f16 -d '|')"



echo "<TR><TD id=tcol1 name=tcol1>$time_stamp</TD><TD id=tcol2 name=tcol2><P ALIGN=Center>$Subsystem_id</TD><TD id=tcol3 name=tcol3><P ALIGN=Center>$MDN</TD><TD id=tcol4 name=tcol4><P ALIGN=Center>$IPType</TD><TD id=tcol5 name=tcol5><P ALIGN=Center>$TransportType</TD><TD id=tcol6 name=tcol6><P ALIGN=Center>$Client_IP</TD><TD id=tcol7 name=tcol7><P ALIGN=Center>$Client_port</TD><TD id=tcol8 name=tcol8><P ALIGN=Center>$OnlineStatus</TD><TD id=tcol9 name=tcol9><P ALIGN=Center>$OnlineStatusReasoncode</TD><TD id=tcol10 name=tcol10><P ALIGN=Center>$Path</TD><TD id=tcol11 name=tcol11><P ALIGN=Center>$REGRECVTIME</TD><TD id=tcol12 name=tcol12><P ALIGN=Center>$Kn_Poc</TD><TD id=tcol13 name=tcol13><P ALIGN=Center>$PaccesInfo</TD><TD id=tcol14 name=tcol14><P ALIGN=Center>$F5PttServerId</TD><TD id=tcol15 name=tcol15><P ALIGN=Center>$GeoNotificationRoute</TD><TD id=tcol16 name=tcol16><P ALIGN=Center>$APN</TD></TR>">>$audit_info_html
done<$temp


echo "<p>Login Register = $Login_register, Refresh Register = $Refresh_register, Transition Wifi = $Transition_wifi, Location Change = $Location_change, Reconnect = $Reconnect</p>">>$audit_info_html
fi 
