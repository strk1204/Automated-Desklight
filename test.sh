level=`sudo sh light.sh` 
if [ $level -lt 10 ]; then 
light='1' 
fi
echo $level 
