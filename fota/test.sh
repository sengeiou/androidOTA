#!/bin/bash
for((i=0;i<500;i++))
do
{
sleep 1
php -f insertLocation.php
}&
done
wait
