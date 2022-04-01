#!/bin/sh

echo -e "$FTP_PASS\n$FTP_PASS" | adduser $FTP_USER
echo $FTP_USER >> /etc/vsftpd.userlist

mkdir /home/myamani/wp
### chown to change the owner of the directory to the user myamani ###
chown -R myamani:myamani /home/myamani/
exec /usr/sbin/vsftpd /etc/vsftpd/vsftpd.conf
