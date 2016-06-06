#!/bin/bash
NOW=$(date +"%Y-%m-%d-%T");
LOGFILE="a-$NOW.txt";
cp /var/log/secure /home/dmd/html/logs/$LOGFILE;
LOGFILE="h-$NOW.txt";
cp /var/log/httpd/access_log /home/dmd/html/logs/$LOGFILE;
LOGFILE="s-$NOW.txt";
chmod 755 -R /home/dmd/html/logs/*
