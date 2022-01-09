#!/bin/sh
grep sh$ /etc/passwd
cat /etc/shadow | awk -F: '{ if ($2 == "") print $1 "does not have a password "}'
echo "Utilisateurs avec mot de passe vide"
for i in $(cat /etc/shadow|cut -d':' -f1)
do
     password=$(cat /etc/shadow|grep "^$i:"|cut -d':' -f2)
     if [ "$password." = "." ]; then
         echo "password of $i empty"
     fi
done
find / -perm -1000
find / -perm -4000
