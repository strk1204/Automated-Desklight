cd data
mo='1'
mo=`cat man.txt`
if [ $mo = '1' ] || [ $mo = '0' ]; then
if [ $mo = '1' ]; then
m='0'
rm man.txt
touch man.txt
echo $m >> man.txt
chmod 777 man.txt
fi
if [ "$mo" = '0' ]; then
m='1'
rm man.txt
touch man.txt
echo $m >> man.txt
chmod 777 man.txt
fi
else
rm man.txt
touch man.txt
echo '0' >> man.txt
chmod 777 man.txt
fi
