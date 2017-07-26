#!/bin/bash
sleep 30
cd data/
#START LOOP
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
echo 'full on'
light='1'
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
fi 
#END AUTOLIGHT
else
#LIGHT SENSOR
if [ $ls = '1' ]; then
echo 'check light on'
light='1'
#END LIGHT SENSOR
else
echo 'none'
fi
fi
fi
echo $light
rm light.txt
touch light.txt
echo $light >> light.txt
sleep 5
#END LOOP
