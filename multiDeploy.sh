#!/bin/bash

if [ -d "$PHP_MAINDIR" ]; then
  mkdir /PHP_MAINDIR
fi

n=4000
GOAL=$(($1 + 4000))
while [ $n -le $GOAL ]
do
        docker run -d -p $n:80 -v /PHP_MAINDIR/:/app/ noxid/full_lamp:v1
	sleep 5
  	echo "Welcome $n times."
        n=$(( n+1 ))     # increments $n
done

sysctl net.ipv4.conf.all.forwarding=1
sudo iptables -P FORWARD ACCEPT
