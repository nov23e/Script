# Some Linux Scripts

## Superbench.sh
- Description: Auto test download & I/O speed & network to China script

```
wget --no-check-certificate https://github.com/ikym/script/raw/master/bench.sh && chmod +x bench.sh && ./bench.sh
```

## shadowsocksR.sh
- Description: Auto Install ShadowsocksR Server for CentOS/Debian/Ubuntu

```
wget -N --no-check-certificate https://github.com/ikym/script/raw/master/shadowsocksR.sh && chmod +x shadowsocksR.sh && bash shadowsocksR.sh
```

## bbr.sh
- Description: Auto install latest kernel for TCP BBR

```
wget --no-check-certificate https://github.com/ikym/script/raw/master/bbr.sh && chmod +x bbr.sh && ./bbr.sh
```

## InstallNET.sh

 - Applicable to CentOS, Ubuntu, Debian systems booted by GRUB.
 - Use the official distribution to remove the pre-installed software from the template.
 - At the same time, it can also solve the problem that the kernel version is incompatible with the software.
 - As long as you have root privileges, you also have a pure system.
