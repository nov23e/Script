# Some Linux Scripts

## Superbench.sh
- Description: Auto test download & I/O speed & network to China script

```
wget --no-check-certificate https://github.com/ikym/Script/raw/master/bench.sh && chmod +x bench.sh && ./bench.sh
```

## Shadowsocks
- Description: Auto Install ShadowsocksR Server for CentOS/Debian/Ubuntu

- Please enter the [Github](https://github.com/ikym/Shadowsocks)

## bbr.sh
- Description: Auto install latest kernel for TCP BBR

```
wget --no-check-certificate https://github.com/ikym/Script/raw/master/bbr.sh && chmod +x bbr.sh && ./bbr.sh
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

## prober.php
- PHP 探针(极速版)
- 这根针修改自雅黑探针，修复了一些bug，优化了性能，提高了加载速度，并且修改了CSS，适配移动端。加入了显示客户端 ip 地理位置和 ISP 信息（基于 ipip.net, 需要安装 php-curl)

```
雅黑的官网已经消失在了漫漫的时光中，致敬创作并分享它的人\(￣︶￣*\))

/* —————————————————- */
/* 程序名称: PHP探针-Yahei
/* 程序功能: 探测系统的Web服务器运行环境
/* 程序开发: Yahei.Net
/* 联系方式: info@Yahei.net
/* Date: 1970-01-01 / 2012-07-08
/* —————————————————- */
/* 使用条款:
/* 1.该软件免费使用.
/* 2.禁止任何衍生版本.
/* —————————————————- */
/* 感谢以下朋友为探针做出的贡献:
/* zyypp,酷を龙卷风,龙智超,菊花肿了,闲人,Clare Lou,hotsnow
/* 二戒,yexinzhu,wangyu1314,Kokgog,gibyasus,黃子珅,A大,huli
/* 小松,charwin,华景网络
/* —————————————————- */
```

## License

Unless otherwise stated, everything on this GitHub is released under the [MIT](https://mit-license.org) license.
