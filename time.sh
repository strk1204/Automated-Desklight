sleep 30
while true
do
time=`cat data/time.txt`
yes=`cat data/yes.txt`
if [ $yes = '1' ]; then
echo $time
sudo date $time
rm data/yes.txt
touch data/yes.txt
chmod 777 data/yes.txt
fi
sleep 5
done
