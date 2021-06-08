# pwn_deploy_chroot

> A project for deploying ctf pwn challenge use chroot

中文请点击：

[README_CN.md](https://github.com/giantbranch/pwn_deploy_chroot/blob/master/README_CN.md)

常见问题：

[FAQ.md](https://github.com/giantbranch/pwn_deploy_chroot/blob/master/FAQ.md)

详细部署示例：

[如何安全快速地部署多道ctf pwn比赛题目 - How to deploy many ctf pwn game safely and quickly](http://www.giantbranch.cn/2018/09/24/%E5%A6%82%E4%BD%95%E5%AE%89%E5%85%A8%E5%BF%AB%E9%80%9F%E5%9C%B0%E9%83%A8%E7%BD%B2%E5%A4%9A%E9%81%93ctf%20pwn%E6%AF%94%E8%B5%9B%E9%A2%98%E7%9B%AE/)

## Before

```
# Install the latest version docker
curl -s https://get.docker.com/ | sh
# Install docker compose
apt install docker-compose
```

## How to use

```
1. Put your pwn program to ./bin （Note that the filename should not contain special characters.）
2. python initialize.py
3. docker-compose up --build -d     # please run as root
```

You can edit config.py to decide whether to replace /bin/sh with catflag

```
# Whether to replace /bin/sh

## replace(default)
REPLACE_BINSH = True
## not replace
REPLACE_BINSH = False
```

## Attention

The flag will be generated by the initialize.py and it store in flags.txt

The port information of the pwn program is also inside the flags.txt.

## Update

2018.09.17 version v1

2018.09.23 version v2：Use the catflag program instead of /bin/sh, which is more secure

## Reference

https://github.com/Eadom/ctf_xinetd

## Reward

paypal: https://www.paypal.me/giantbranch

![自愿打赏][1]


[1]: http://pic.giantbranch.cn/pic/1551450728861.jpg