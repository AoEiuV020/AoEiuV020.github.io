svn合并过程中总有大量冲突并不在同一行，这些冲突可以被idea或者小乌龟自动合并，

但总要用它们打开这个文件再确定保存才能解决这个冲突，

打开，保存，关闭，打开，保存，关闭，就很机械，

有没有办法在合并时直接自动解决掉只有这类简单冲突的文件，

kdiff3可以，官网的只有旧版，

https://kdiff3.sourceforge.net/

github上有新版，带中文，

https://github.com/KDE/kdiff3

https://download.kde.org/stable/kdiff3/?C=M;O=D

写个脚本调用kdiff3并把脚本路径设置为环境变量SVN_MERGE，

```powershell
@echo off
set pwd=%~dp0
echo %pwd%bin\kdiff3.exe "%1" "%2" "%3" -o "%4" --auto
%pwd%bin\kdiff3.exe "%1" "%2" "%3" -o "%4" --auto
```

然后svn合并命令指定launch使用第三方工具合并，

```bash
svn merge svn://xxx --accept launch
```

必要的话在kdiff设置合并关闭信息对话框并打开无冲突自动保存并退出，

最终效果，简单冲突的直接合并保存成无冲突，行冲突和树冲突保留，

不过我这边有代码透明加密，外部工具打开都是乱码，

把exe改成小乌龟的合并工具TortoiseMerge.exe就可以了，

还差手动合并保存后自动变成已解决状态，

现在这样merge时tree conflicts也不能跳过了，得死等checking，否则后面的文件都不会触发合并工具，