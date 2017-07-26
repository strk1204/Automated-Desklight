cd /home/Sean/Desklight
sudo python bh* | \
while read CMD; do
	int=${CMD%.*}
	light=`expr $light + $int`
	rm light.txt
	echo $light >> light.txt
done
light=`cat light.txt`
light=`expr $light / 10`
echo $light
