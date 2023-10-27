github actions ubuntu 22.04.2 自动打包的flutter linux平台程序，在debian 11运行报错，

```
demo: /lib/x86_64-linux-gnu/libc.so.6: version `GLIBC_2.34' not found (required by demo)
```

发现是debian上的glibc最高版本只有2.31， 而ubuntu上最高是2.35，

但奇怪的点是，我本地使用ubuntu 22.04.4打包出来的程序并不依赖这个GLIBC_2.34，可以正常在debian运行，

对比ldd发现两者只差一这一个GLIBC_2.34，莫名，

https://github.com/AoEiuV020/FlutterDemo/releases/tag/3.7.8