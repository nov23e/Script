# Some Linux Scripts

## Superbench.sh
- Description: Auto test download & I/O speed & network to China script

```
wget --no-check-certificate https://github.com/hsce/Script/raw/master/bench.sh && chmod +x bench.sh && ./bench.sh
```

## Shadowsocks
- Description: Auto Install ShadowsocksR Server for CentOS/Debian/Ubuntu

- Please enter the [Github](https://github.com/hsce/Shadowsocks)

## bbr.sh
- Description: Auto install latest kernel for TCP BBR

```
wget --no-check-certificate https://github.com/hsce/Script/raw/master/bbr.sh && chmod +x bbr.sh && ./bbr.sh
```

## prober-https.php
- PHP7和SSL修正版
- 修改了探针里不被PHP7支持的函数，并且调用资源全部https化

## prober-https-NoIP.php
- 无本机IP显示（NoIP）版
- 有些套了CDN的服务器挂探针会暴露源站IP，于是去掉IP显示

## prober-light.php
- 简洁Light版
- 去除了IP、探针显示以及所有的主动测试功能，挂在服务器上不用太担心被刷……

## LNMP-p.php
 - LNMP.ORG 默认探针

## lnmp-index.html
 - LNMP默认主页
 - lnmp.gif LNMP图片

## License

Unless otherwise stated, everything on this GitHub is released under the [MIT](https://cyrilwong.mit-license.org/) license.
