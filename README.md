# Some Linux scripts

## Superbench.sh
- Description: Auto test download & I/O speed & network to China script

```bash
Usage:

| No.      | Bash Command                    |
|----------|---------------------------------|
| 1        | wget -qO- https://github.com/ikym/script/raw/master/bench.sh | bash       |
| 2        | curl -Lso- https://github.com/ikym/script/raw/master/bench.sh | bash      |
```

## shadowsocksR.sh
- Description: Auto Install ShadowsocksR Server for CentOS/Debian/Ubuntu

```bash
Usage:

| No.      | Bash Command                    |
|----------|---------------------------------|
| 1        | wget -N --no-check-certificate https://github.com/ikym/script/raw/master/shadowsocksR.sh && chmod +x shadowsocksR.sh && bash shadowsocksR.sh       |
```

## bbr.sh
- Description: Auto install latest kernel for TCP BBR

```bash
Usage:

| No.      | Bash Command                    |
|----------|---------------------------------|
| 1        | wget --no-check-certificate https://github.com/ikym/script/raw/master/bbr.sh && chmod +x bbr.sh && ./bbr.sh       |
```
