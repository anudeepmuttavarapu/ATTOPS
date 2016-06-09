#!/bin/bash
path=`pwd`
rm -f $path/backupdata.html
rm -f $path/backup_temp
backup_input="$path/backupdetails"
backup_info_html="$path/backupdata.html"
backup_template="$path/backup_template"
backup_temp="$path/backup_temp"
card=$(cat $backup_input | cut -f1 -d ',')
logname=$(cat $backup_input | cut -f2 -d ',')
date=$(cat $backup_input | cut -f3 -d ',')
echo $logname
cp -f $backup_template $backup_info_html
echo "<h4 align=center>Please find the $logname logs for $card on $date</h4>" >>$backup_info_html
nice -19 
ssh kodiak@clb "cd /Logs/DGlogs/"$card" && ls -ltr *"$logname"*"$date"* ">>$backup_temp
#for f in `cat $path/backup_temp`$;do

while read -r line
do
file=`echo $line | awk '{print $9}'`
scp $file kodiak@ems:/home/kodiak
echo $file
done<$backup_temp
