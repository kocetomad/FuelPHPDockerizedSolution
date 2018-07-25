#!/bin/bash
re='^[0-9]+$'
check=0
usage() { echo "Usage: $0 [-p <Avialble port number>] [-d <directory>] [-u <Toggles USB support>] [-n (set name)<string>]" 1>&2; exit 1; }

while getopts ":p:d:n:u" o; do
    case "${o}" in
        p)
            p=${OPTARG}
	    if ! [[ $p =~ $re ]] ; then
   		 echo "Invalid Port Number" >&2; exit 1
            fi
            ;;
        d)
            d=${OPTARG}
	    if [ ! -d "$d" ]; then
		  echo "$d is not a valid directory."
  	          exit 1
	    fi
            ;;
	u)
	    u="-t -i --privileged -v /dev/bus/usb:/dev/bus/usb"
	    check=1
	    ;;
	n)
	    n=${OPTARG}
	    n="--name $n"
	    ;;
        *)
            usage
            ;;
    esac
done
shift $((OPTIND-1))

if [ -z "${p}" ] || [ -z "${d}" ]; then
    usage
fi

echo "port : ${p}"
echo "dir : ${d}"
if [ $check == 1 ];
then
     echo "USB support enabled"
else 
     echo "USB support not enabled"
fi;


docker run -d -p $p:80 -v $d:/var/www/fuel/ $u $n  noxid/fuel:v1
sleep 5
sysctl net.ipv4.conf.all.forwarding=1
sudo iptables -P FORWARD ACCEPT


