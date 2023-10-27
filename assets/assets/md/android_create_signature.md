```bash
#!/bin/bash
storepass=$(dd if=/dev/urandom bs=1 count=12 2>/dev/null | base64)
keypass=$storepass
alias=$1
developer=$2
developer=${developer:-$1}
if test ! -n "$alias"
then
    echo "mkjks <alias> [developer]"
    exit 1
fi
rm -f $alias.jks
keytool -genkey -v -keystore $alias.jks -storepass $storepass -alias $alias -keypass $keypass -keyalg RSA -keysize 2048 -validity 10000 -dname "CN=$developer, OU=$alias, O=$developer, L=China, ST=China, C=CN";
base64 $alias.jks | tr -d '\n' >$alias.jks.txt
cat > signing.properties <<EOF
# suppress inspection "UnusedProperty" for whole file
storeFile=$alias.jks
storePassword=$storepass
keyAlias=$alias
keyPassword=$keypass
EOF
```

不知道什么时候起，storepass和keypass必须一样了，否则报错，

> Different store and key passwords not supported for PKCS12 KeyStores.
android sign Get Key failed: Given final block not properly padded
>

签名信息也不知道写的对不对，虽然并不要紧，但是参考下别人的，

这是微信的，

> certificate DN: CN=Tencent, OU=Tencent Guangzhou Research and Development Center, O=Tencent Technology(Shenzhen) Company Limited, L=Shenzhen, ST=Guangdong, C=86
>

这是Google的，

> certificate DN: CN=Android, OU=Android, O=Google Inc., L=Mountain View, ST=California, C=US
>

来个检查签名的脚本，

```bash
#!/bin/bash
if test -r ./signing.properties
then
    source ./signing.properties
fi
if test -r ./key.properties
then
    source ./key.properties
fi
keytool -list -v -keystore $storeFile -storepass $storePassword  -alias $keyAlias
```

来个签名的脚本，

```bash
#!/bin/sh
set -e
signedApk=$1
unsignedApk=$2
apksigner="$ANDROID_HOME/build-tools/29.0.3/apksigner"
. ./signing.properties
"$apksigner" sign  --v1-signing-enabled true --v2-signing-enabled true --v3-signing-enabled true --v4-signing-enabled true  --ks "$storeFile"  --ks-key-alias $keyAlias --ks-pass "pass:$storePassword"  --key-pass pass:$keyPassword --out "$signedApk" "$unsignedApk"
```

再来个检查apk签名的脚本，

```bash
#!/bin/bash
apksigner="third_party/android_sdk/public/build-tools/29.0.2/apksigner"
apk="$1"
if test ! -n "$apk"
then
    echo 'chapk <apkFile>'
    exit 1
fi
#jarsigner -verify -verbose -certs "$apk"
"$apksigner" verify --verbose --print-certs "$apk"
```