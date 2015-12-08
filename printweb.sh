#! /bin/sh
### BEGIN INIT INFO
# Provides:          Print_web_daemon
# Required-Start:    $networking
# Required-Stop:     
# Default-Start:     2 3 4 5
# Default-Stop:      0 1 6
# Short-Description: Very simple python PDF print webserver
# Description:       This web server is used to print PDF in this machine.
### END INIT INFO

# Author: Draft Ideader
# Web: drafidea.tk

#It needs root privileges
PIDFILE="/var/run/pyprint.pid"

case "$1" in
  start)
	echo STARTING PRINTING ON WEB DAEMON
	if [ -f $PIDFILE ];
	then
		#Comprobar si existe el pid
		pid=`cat $PIDFILE`
		if kill -0 &>1 > /dev/null $pid; then
			echo DAEMON ALREADY RUNNING
			exit 1
		fi
		rm $PIDFILE
	fi
		start-stop-daemon --make-pidfile --pidfile $PIDFILE --start --background --exec /opt/pyprint/printserver.py
	;;
  stop)
	echo STOPING SCANNING ON WEB DAEMON

	if [ -f $PIDFILE ];
	then
			start-stop-daemon --stop --pidfile $PIDFILE
			rm $PIDFILE
	else
			echo DAEMON IS NOT RUNNING
	fi
	;;

  *)
	echo "Usage: printweb {start|stop}" >&2
	exit 3
	;;
esac

:
