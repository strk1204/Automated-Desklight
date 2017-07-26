#!/bin/bash
sudo python lightoff.py
#sleep 30
sudo python lighton.py
sleep 10
sudo python lightoff.py
sudo python lighton.py
sudo python lightoff.py
sleep 2
cd data/
#START LOOP
while true;
do
#GET VARS
mo=`cat man.txt`
ls=`cat ls.txt`
at=`cat at.txt`
ato=`cat ato.txt`
at2=`cat at2.txt`
light='0'
#MANUAL OVERRIDE
if [ $mo = '1' ]; then
echo 'mo on'
light='1'
else
#END MANUAL OVERRIDE
#AUTOLIGHT
if [ $at = '1' ]; then
if [ $ato = '1' ] && [ $ls = '1' ]; then
ls='2'
fi
echo 'autotimeon'
ct=`date +%R`
ct2=${ct:0:2}${ct:3:5}
t1=${at2:0:4}
t2=${at2:4:8}
if [ $t2 -gt $ct2 ] && [ $ct2 -gt $t1 ]; then
if [ $ato = '0' ] && [ $ls = '0' ]; then
echo 'full on'
light='1'
fi
if [ $ato = '1' ] && [ $ls = '2' ]; then
echo 'check light on'
light='1'
fi
if [ $ato = '0' ] && [ $ls = '1' ]; then
level=`sudo sh light.sh`
if [ $level -lt 10 ]; then
light='1'
fi
fi
if [ $ato = '1' ] && [ $ls = '0' ]; then
echo 'ato on'
light='1'
fi
else
if [ $ato = '0' ] && [ $ls = '1' ]; then
echo 'full on'
light='1'
fi 
#END AUTOLIGHT
fi
#LIGHT SENSOR
fi
if [ $ls = '1' ]; then
level=`sudo sh /home/Sean/Desklight/light.sh`
if [ $level -lt '10' ]; then
light='1'
fi
echo $level
#END LIGHT SENSOR
else
echo 'none'
fi
fi
cd /home/Sean/Desklight
if [ $light = '1' ]; then
sudo python lighton.py
else
sudo python lightoff.py
fi
cd data
echo $light
rm light.txt
touch light.txt
echo $light >> light.txt
#sleep 5
#END LOOP
done
