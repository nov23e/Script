#!/bin/bash

## This is the magically modified version of the one-click reload script.
## It can reinstall CentOS, Debian, Ubuntu and other Linux systems (continuously added) over the network in one click.
## It can reinstall Windwos 2003, 7, 2008R2, 2012R2, 2016, 2019 and other Windows systems (continuously added) via the network in one click.
## Technical support is provided by the technical blog. (based on the original version of Vicer)

## Magic Modify version author:
## Support GRUB or GRUB2 for installing a clean minimal system.
## Default root password: cxthhhhh.com
## Blog: https://tech.cxthhhhh.com
## Written By Technical Blog

## Original version author:
## Suitable for using by GRUB.
## Blog: https://moeclub.org
## Written By Vicer


echo -e "\n\n\n"
clear
echo -e "\n"
echo "---------------------------------------------------------------------------------------------------------------------"
echo -e "\033[33m Network-Reinstall-System-Modify Tools V2.1.0 2019/03/22 \033[0m"
echo -e "\033[33m [Magic Modify] Reinstall the system (any Windows / Linux) requires only network and one click \033[0m"
echo -e "\033[33m System requirements: Any Linux system with GRUB or GRUB2, recommended CentOS7/Debian9/Ubuntu18.04 \033[0m"
echo -e "\n"
echo -e "\033[33m [Original] One-click Network Reinstall System - Magic Modify version (For Linux/Windows) \033[0m"
echo -e "\033[33m https://tech.cxthhhhh.com/linux/2018/11/27/original-one-click-network-reinstall-system-magic-modify-version-for-linux-windows-en.html \033[0m"
echo "---------------------------------------------------------------------------------------------------------------------"
echo -e "\n"
sleep 5s

if [ $1 = '-Debian_10' ]
then
	echo -e "\033[33m You have chosen to install the latest Debian_10 \033[0m"
	echo -e "\n"
	sleep 2s
	wget --no-check-certificate -qO koiok.sh 'https://github.com/ikym/script/raw/master/koiok.sh' && bash koiok.sh -d 10 -v 64 -a --mirror 'http://deb.debian.org/debian'
fi

if [ $1 = '-Debian_9' ]
then
	echo -e "\033[33m You have chosen to install the latest Debian_9 \033[0m"
	echo -e "\n"
	sleep 2s
	wget --no-check-certificate -qO koiok.sh 'https://github.com/ikym/script/raw/master/koiok.sh' && bash koiok.sh -d 9 -v 64 -a --mirror 'http://deb.debian.org/debian'
fi

if [ $1 = '-Debian_8' ]
then
	echo -e "\033[33m You have chosen to install the latest Debian_8 \033[0m"
	echo -e "\n"
	sleep 2s
	wget --no-check-certificate -qO koiok.sh 'https://github.com/ikym/script/raw/master/koiok.sh' && bash koiok.sh -d 8 -v 64 -a --mirror 'https://snapshot.debian.org/archive/debian/20190321T212815Z/'
fi

if [ $1 = '-Debian_7' ]
then
	echo -e "\033[33m You have chosen to install the latest Debian_7 \033[0m"
	echo -e "\n"
	sleep 2s
	wget --no-check-certificate -qO koiok.sh 'https://github.com/ikym/script/raw/master/koiok.sh' && bash koiok.sh -d 7 -v 64 -a --mirror 'https://snapshot.debian.org/archive/debian/20190321T212815Z/'
fi

if [ $1 = '-Windows_Server_2019' ]
then
	echo -e "\033[33m You have chosen to install the latest Windows_Server_2019 \033[0m"
	echo -e "\n"
	sleep 2s
	wget --no-check-certificate -qO koiok.sh 'https://github.com/ikym/script/raw/master/koiok.sh' && bash koiok.sh -dd 'https://opendisk.cxthhhhh.com/OperatingSystem/Windows/Disk_Windows_DD/Disk_Windows_Server_2019_DataCenter_CN.vhd.gz' --mirror 'http://deb.debian.org/debian'
fi

if [ $1 = '-Windows_Server_2016' ]
then
	echo -e "\033[33m You have chosen to install the latest Windows_Server_2016 \033[0m"
	echo -e "\n"
	sleep 2s
	wget --no-check-certificate -qO koiok.sh 'https://github.com/ikym/script/raw/master/koiok.sh' && bash koiok.sh -dd 'https://opendisk.cxthhhhh.com/OperatingSystem/Windows/Disk_Windows_DD/Disk_Windows_Server_2016_DataCenter_CN.vhd.gz' --mirror 'http://deb.debian.org/debian'
fi

if [ $1 = '-Windows_Server_2008R2' ]
then
	echo -e "\033[33m You have chosen to install the latest Windows_Server_2008R2 \033[0m"
	echo -e "\n"
	sleep 2s
	wget --no-check-certificate -qO koiok.sh 'https://github.com/ikym/script/raw/master/koiok.sh' && bash koiok.sh -dd 'https://file.lia.im/DD/Windows/Windows_Server_2008R2_DataCenter_CN.vhd.gz' --mirror 'http://deb.debian.org/debian'
fi

if [ $1 = '-Windows_7_Vienna' ]
then
	echo -e "\033[33m You have chosen to install the latest Windows_7_Vienna \033[0m"
	echo -e "\n"
	sleep 2s
	wget --no-check-certificate -qO koiok.sh 'https://github.com/ikym/script/raw/master/koiok.sh' && bash koiok.sh -dd 'https://file.lia.im/DD/Windows/Windows_7_Vienna_Ultimate_CN.vhd.gz' --mirror 'http://deb.debian.org/debian'
fi

if [ $1 = '-DD' ]
then
	echo -e "\033[33m You have chosen to install the DD package provided by you \033[0m"
	echo -e "\n"
	sleep 2s
	wget --no-check-certificate -qO koiok.sh 'https://github.com/ikym/script/raw/master/koiok.sh' && bash koiok.sh -dd $2 --mirror 'http://deb.debian.org/debian'
fi


echo "---------------------------------------------------------------------------------------------------------------------"
echo -e "\033[33m Enjoy It ! \033[0m"
echo "---------------------------------------------------------------------------------------------------------------------"
echo -e "\n"
exit
