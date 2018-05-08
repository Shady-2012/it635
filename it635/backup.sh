#!/bin/bash


DATADIR=”/home/ubuntu/mysqlbackup”
USERNAME=root
PASSWORD=Shady2010
NOW=$(date +”%d-%m-%Y_%H-%M”)

mysqldump -u $USERNAME $PASSWORD -p --all-databases > /home/ubuntu/mysqlbackup/MySQLDatabase.$NOW.sql


find /home/ubuntu/mysqlbackup/* -mmin +35 -exec rm {} \;


2>&1 > /var/log/mysqldump.log; echo "Exit code: $?" >> /var/log/mysqldump.log
