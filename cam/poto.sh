#!/bin/sh
/etc/init.d/mjpg_streamkick.sh stop
sleep 1
filename=$(date +"%m-%d-%y||%H%M")
fswebcam -p YUYV -r 640x480 -d /dev/video0 --no-banner  --jpeg 95 $filename.jpg
./dropbox_uploader.sh upload $filename.jpg /kamera
sleep 1
/etc/init.d/mjpg_streamkick.sh start
sleep 1
rm -R $filename.jpg