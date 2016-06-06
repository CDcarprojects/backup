#!/bin/bash
for i in {1..1000}
do
	DATE=$(date +"%m-%d-%Y_%H:%M:%S");
		echo $DATE;
		sleep 1;

done
