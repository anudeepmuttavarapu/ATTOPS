#!/bin/bash
path=`pwd`
mdn_input="$path/mdndetails_multiple"
dates_file="$path/dates"
poc="$path/poc_name"
temp="$path/temp_multiple"
temp1="$path/temp_multiple1"
audit_info_html="$path/auditdata_multiple.html"
audit_info_html1="$path/auditdata_multiple1.html"
audit_template="$path/audit_template"
mdn_file_name="$path/mdndetails_multiple1"
dates_file_name="$path/dates1"
#totmdns=`cat $mdn_input`
#dates=`cat $dates_file_name`
poc_name=`cat $poc`;
`cat $mdn_input| tr "," "\n" |sed s/" "//g > $mdn_file_name`
`echo "" >> $mdn_file_name`
totmdns=`cat $mdn_file_name`
`cat $dates_file| tr "," "\n" |sed s/" "//g > $dates_file_name`
`echo "" >> $dates_file_name`
dates=`cat $dates_file_name`
echo $poc_name
mv $audit_info_html $audit_info_html1
echo "<table border=1>">>$audit_info_html
echo "<th>MDN</th><th>Date</th><th>Login Register</th><th>Refresh Register</th><th>Transition Register</th><th>Location Change</th><th>Reconnect</th>">>$audit_info_html

for eachdate1 in $(echo $dates); do
eachdate=`echo $eachdate1 | sed s/-//g`
echo $eachdate
if [ "$poc_name" == POC1P ] ||  [ "$poc_name" == POC2P ] ||  [ "$poc_name" == POC3P ] ||  [ "$poc_name" == POC4P ] ||  [ "$poc_name" == POC5P ] ||  [ "$poc_name" == POC6P ] ||  [ "$poc_name" == POC7P ] ||  [ "$poc_name" == POC8P ]
then
path_rls="/Logs/rls1/DGReport/$poc_name/*User*$eachdate*"
echo $path_rls
else
path_rls="/Logs/rls2/DGReport/$poc_name/*User*$eachdate*"
fi
for eachmdn in $(echo $totmdns); do

set -o xtrace
echo $eachmdn
ssh rls1 "zgrep \"$eachmdn\" $path_rls" >>$temp
set +o xtrace
Login_register=0
Refresh_register=0
Transition_wifi=0
Location_change=0
Reconnect=0
while read -r line
do

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
Location_change="$(expr $Location_change + 1)"
elif [ $Kn_Poc -eq 5 ]
then
Kn_Poc="Reconnect"
Reconnect="$(expr $Reconnect + 1)"
else
Kn_Poc="No value"
fi 



done<$temp

echo "<tr><td>$eachmdn</td><td>$eachdate</td><td>$Login_register</td><td>$Refresh_register</td><td>$Transition_wifi</td><td>$Location_change</td><td>$Reconnect</td></tr>">>$audit_info_html
echo $eachdate"====>>"$eachmdn"====>>""Login Register="$Login_register"Refresh Register="$Refresh_register"Transition Wifi="$Transition_wifi"Location Change"=$Location_change"Reconnect="$Reconnect

mv $temp $temp1
done
done
