# 教你用50种语言写Hello, World
当我们学习一门新的语言时，“Hello, World!“通常是我们所写的第一个程序。相信作为一名程序员的你，职业生涯中至少完成了一个“Hello, World!“程序。程序员一般也都会使用多门语言，甚至有多数人都会使用十几种语言。

甚至有一个名为TTHW的指标来衡量一个程序员接触一门新的编程语言时，成功写出“Hello, World!“并运行所需要的时间。

然而，如果我问你，你会用多少种编程语言写“Hello, World!“？你的答案会是多少？

为了刷新你的记忆，我会带你经历一段计算机编程领域的时空之旅。为此，我将向你展示50种不同的编程语言的

“Hello, World!“程序的写法。你也会了解计算机语言随着时间的推进发生了哪些变化。

### 1. 汇编语言 - 1949

汇编语言诞生于1949年。本文我向你展示的是适用于Intel 8080的8位处理器的，发布于1974年4月的汇编语言经典代码。

```text
bdos    equ    0005H    ; BDOS entry point
start:  mvi    c,9      ; BDOS function: output string
        lxi    d,msg$   ; address of msg
        call   bdos
        ret             ; return to CCP
  
msg$:   db    'Hello, world!$'
end     start
```

### 2. Fortran - 1957

Fortran是Formula Translation的衍生物，这是一种通用的交互式编程语言，特别适合于数值和科学计算。Fortran创建于1957年，下面是它的第一个“Hello, World!”程序：

```text
PROGRAM Hello
WRITE (*,*) 'Hello, World!'
STOP
END
```

Fortran 90 或 95的写法有所不同：

```text
PROGRAM Hello
WRITE (*,*) 'Hello, World!'
END PROGRAM Hello
```

### 3. Lisp - 1958

Lisp是最古老的编程语言系列，它既是交互式的又是函数式的。1958年，Lisp作为一种实用的演示程序模型被创建出来，但是直到1970和1980年代，Lisp才成为人工智能世界中非常流行的语言。

下面是Lisp的“Hello, World!”程序：

```text
(write-line "Hello, World!")
```

### 4. Cobol - 1959

Cobol语言于1959年正式创立，并且在2019年刚刚庆祝过创立60周年。Cobol表示面向通用业务的语言（COmmon Business Oriented Language），目标是成为编程业务应用程序的通用语言。在2019年，Cobol仍被广泛应用于银行和保险的相关系统中。

下面是Cobol的“Hello, World!”程序：

```text
IDENTIFICATION DIVISION.
PROGRAM-ID. HELLO-WORLD.
PROCEDURE DIVISION.
    DISPLAY "Hello, World!"
    STOP RUN.
```

### 5. BASIC - 1964

BASIC是Beginner’s All-purpose Symbolic Instruction Code（初学者通用符号说明代码）的缩写。它是一门高级编程语言，其主要目标在于易用。它的“Hello, World!”程序如下：

```text
PRINT "Hello, World!"
END
```

### 6. Logo - 1968

Logo旨在成为易用的Lisp，通常被称为“Lisp without brackets”，Logs并不是面向对象编程语言，但它可以帮助你入门计算机编程。

```text
print [Hello World !]
```

### 7. B - 1969

B语言创建于1969年，它现在已经过时了，但它的计算机编程语言的发展史上发挥着重要的作用。因为正是B语言启发了现在广泛应用的C语言。

```text
main()
{
  putstr("Hello world!*n");
  return(0);
}
```

是不是语法层面就非常像C语言了。

### 8. Pascal - 1970

Pascal是一种交互式编程语言，它创建于1970年。它被设计出来主要出于教学目的，因为这个语言的特点是清晰，且严格的语法有助于良好的程序结构。

```text
begin
  writeln('Hello, World!')
end.
```

Turbo Pascal是Pascal语言的集成开发环境，在1983年被创建，并在1980年代和1990年代取得了巨大的成功。

Turbo Pascal的“Hello, World!“程序如下：

```text
program HelloWorld(output);
begin
  writeln('Hello, World!');
  readln;
end.
```

### 9. Forth - 1970

Forth是一门基于栈的交互式编程语言，由Charles H. Moore在1960年代发明。但它的第一个大版本是在1970年发布的。它于1994年被ANSI标准化，并于1997年被ISO采纳。2014年的Forth2012为语言的发展又焕发了生机。

下面是1970年版本Forth语言的“Hello, World!” 程序：

```text
: HELLO  ( -- )  ." Hello, World!" CR ;
  HELLO
```

### 10. C - 1972

1972年的贝尔实验室中，Dennis Ritchie和Ken Thompson两位大佬为了开发UNIX发明了C语言。Ken Thompson曾开发过B语言，Dennis Ritchie决定通过对B语言添加类型来创造C语言。所以说B语言为C语言提供了灵感。

```text
#include <stdio.h>

int main(void) {
  printf("Hello, World!\n");
  return 0;
}
```

### 11. Smalltalk - 1972

Smalltalk受到Lisp的启发，它是一门面向对象的，动态类型的编程语言，它被发明于1972年。Smalltalk是最早具有集成开发环境的编程语言之一。

```text
Transcript show: 'Hello, world!'; cr.
```

### 12. Prolog - 1972

Prolog是与人工智能和计算语言学相关的逻辑编程语言，被创建于1972年。

```text
:- write('Hello, World!'),nl.
```

### 13. ML - 1973

ML是Meta Language的简称，是一种以Lisp为基础的函数型编程语言。ML通常以Lisp为特征，具有类型。

```text
print "Hello, World!\n";
```

### 14. Scheme - 1975

Scheme创建于1975年，是一种多范式编程语言，支持函数式和交互式编程。它是Lisp三种重要的变种之一，由Common Lisp和Clojure共同开发。

```text
(display "Hello, World!") (newline)
```

### 15. SQL - 1978

SQL即结构化查询语言，是用于操作关系数据库的标准计算机编程语言。虽然在设计时不能创建简单的“Hello, World!“程序，但我想写出来应该是一个有趣的程序。

```text
CREATE TABLE message (text char(15));
INSERT INTO message (text) VALUES ('Hello, World!');
SELECT text FROM message;
DROP TABLE message;
```

### 16. C++ - 1980

C++是由Bjarne Stroustrup在1980年创建，他为C语言增加了类，在1983年得名C++。现在C++已经通过了ISO标准化，并广泛应用于工业和其他领域。

```text
#include <iostream>
using namespace std;

int main() {
  cout << "Hello, World!" << endl;
  return 0;
}
```

### 17. Ada - 1983

Ada是一种面向对象编程语言，其开发始于1980年初，并在1983年完成发布。之所以叫做Ada是为了纪念Ada Lovelace，这可能是历史上第一位女性计算机科学家。

Ada通常用于需要很高可靠性和安全性的实时系统和嵌入式系统中。

```text
with Ada.Text_IO;
procedure Hello is
begin
   Ada.Text_IO.Put_Line ("Hello, World!");
end Hello;
```

### 18. Common Lisp - 1984

Common Lisp，通常缩写为CL，是ANSI标准化的Lisp语言规范。

```text
(princ "Hello, World!")
```

### 19. MATLAB - 1984

MATLAB是一种用于数值计算的脚本语言，被用于“Matrix Laboratory”。MATLAB是由同名的开发环境模拟的。

```text
disp('Hello, World!')
```

### 20. Eiffel - 1985

Eiffel是一种围绕设计方法设计的面向对象编程语言，它具有当下非常流行的概念，例如“按约定编程”或复用。

```text
class
    HELLO_WORLD
create
    make
feature
    make
        do
            print ("Hello, world!%N")
        end
end
```

### 21. Objective-C - 1986

Objective-C是一种面向对象编程语言，它像C++一样，是C语言的扩展，而与C++的区别在于它的动态消息分发或动态加载。

现在，它主要用于Apple操作系统：macOS以及iOS的衍生品。

```text
#import <Foundation/Foundation.h>
 
int main() {
    @autoreleasepool {
        NSLog(@"Hello, World!");
    }
}
```

### 22. Erlang - 1986

Erlang是一种支持多种范式的编程语言：并发、实时、分布式。它基于Actor Model，具有容错能力以及代码热更新能力，所以Erlang开发的应用可用性通常很高。

```text
io:format("Hello world!~n").
```

### 23. Perl - 1987

Perl是由Larry Wall在1987年创建的编程语言，它可以轻松处理基于文本的消息。Perl是一种解释型语言，它受C语言的控制和打印结构以及shell脚本的启发。

```text
print "Hello, World!\n";
```

### 24. Caml - 1987

Caml代表Categorical Abstract Machine Language（分类抽象机器语言），是一种通用的编程语言，旨在提高程序的安全性和可靠性。Caml是一种致力于函数式、交互式和面向对象风格，这也是一种非常独特的语言。

```text
print_string "Hello, World!\n";;
```

### 25. Tcl - 1988

Tool Command Language（工具命令行语言），是John Ousterhout在1988年开发的一种脚本语言。它是一种动态类型语言，具有跨平台、可扩展、易学习等特点。并且可以轻松和C语言进行交互。

在1990年， John Ousterhout又开发了Tcl的扩展——Tk，这是一个可移植的用于创建图形界面的库。我们今天所讨论的Tcl，多数情况是指Tcl和Tk的组合。

```text
puts "Hello, World!"
```

### 26. Haskell - 1990

Haskell是一种基于lambda计算和组合逻辑的函数式编程语言。

```text
main = putStrLn "Hello, World!"
```

### 27. Python - 1991

相信大家对Python都比较熟悉，即使没有过，基本上也都听说过。它是一门解释型语言，可以跨平台。Python支持结构体，函数和面向对象的交互式编程。随着AI的发展，近几年Python的热度也是持续上涨。

下面是Python3.0以后版本“Hello, World“程序的写法。

```text
print("Hello, World!")
```

### 28. Visual Basic - 1991

Visual Basic，通常简称为VB，是第三代事件编程语言。微软也为其创建了集成开发环境。

```text
Public Sub Main()
    Debug.Print "Hello, World!"
End Sub
```

### 29. Lua - 1993

Lua创建于1993年，是交互式编程语言。它专注于嵌入其他应用程序以对其进行扩展。

```text
print("Hello, World!")
```

### 30. Ruby - 1995

由于对Smalltalk和Lisp的开发感到沮丧，Yukihiro Matsumoto从1993年起开始在Emacs上设计Ruby语言，并于1995年发布了第一版。Ruby是解释型、面向对象、多范式的编程语言。

```text
puts 'Hello, World!'
```

### 31. Java - 1995

Java是James Gosling（我们常说的高司令）在1995年时创建的一门面向对象编程语言，到目前为止，Java仍然是业界最流行、使用最广泛的语言。使用Java可以开发从客户端到服务端到各种应用，Google选择Java作为Android开发语言这件事使得Java得到了更进一步的发展。

```text
class HelloWorld {
  public static void main(String[] args) {
    System.out.println("Hello, World!");
  }
}
```

### 32. JavaScript - 1995

JavaScript是一门主要用于开发Web页面的脚本语言，但现在也可以用作服务端开发，如Nodejs。

```text
document.write('Hello, World!');
```

### 33. PHP - 1995

1995年对于编程语言而言绝对是非常重要的一年，在Java和JavaScript之后，PHP也于同年诞生。PHP是一门解释型的面向对象编程语言。

```text
<? echo "Hello, World!" ?>
```

### 34. Rebol - 1997

Rebol是一种高级脚本语言，自称“消息传递语言”。

```text
print "Hello, World!"
```

### 35. ActionScript — 1998

ActionScript可以用于开发客户端应用程序，如Adobe Flash和Adobe Flex；也可以用于服务端开发（Flash media server, JRun, Macromedia Generator）。现在，ActionScript在Unity图形引擎中被当作脚本语言使用。

```text
package {
  public class HelloWorld {
    public function HelloWorld() {
      trace("Hello World !");
    }
  }
}
```

### 36. D - 1999

D语言是一门面向对象编程语言，它的设计借鉴于许多语言，包括C++、Java和Eiffel。D语言是一门优秀的语言，但是一直都没有像它的创造者期望的那样获得成功。

```text
import std.stdio;

void main () {
  writefln("Hello, World!");
}
```

### 37. C# - 2000

2000年，微软就Java语言与Sun公司发生争议，随后便创造了C#，C#是一种被设计为在[http://Microsoft.NET](https://link.zhihu.com/?target=http%3A//Microsoft.NET)平台上开发的面向对象的编程语言，它是由C++和Java派生而来，使用了许多它们的通用特性和概念。C#也可以用来在[http://ASP.NET](https://link.zhihu.com/?target=http%3A//ASP.NET)平台上开发Web应用。

```text
using System;

internal static class HelloWorld {
  private static void Main() {
    Console.WriteLine("Hello, World!");
  }
}
```

### 38. Groovy - 2003

Groovy是运行在Java虚拟机上的一门面向对象编程语言，它是Java的超集，其设计受到了Python、Ruby和Smalltalk的启发。

```text
println "Hello, World!"
```

### 39. Scala - 2003

Scala是一种多范式编程语言，旨在以简洁、优雅的形式表达常见的编程模型。Scala通过静态类型集成了面向对象和函数式编程的范例。

```text
object HelloWorld extends App {
  println("Hello, World!")
}
```

### 40. F# - 2005

F#是一门在.NET平台上开发的函数式、面向对象编程语言。F#源自与它高度兼容的OCaml，它们都属于ML语言这一系列的。

```text
printfn "Hello, World!"
```

### 41. Windows PowerShell - 2006

Windows PowerShell是Microsoft开发的软件套件，包括命令行界面，称为PowerShell的脚本语言和开发套件。 从Windows 7开始，PowerShell已作为标准配置提供。

```text
echo "Hello, World!"
```

### 42. Clojure - 2007

Clojure是编译型、跨平台的函数式编程语言，它可以安全、简单的开发分布式系统。Clojure是Lisp的三种主要方言之一。Clojure可以编译成Java字节码，JavaScript代码或者是.NET字节码，因此它可以运行在JVM、CLR和浏览器上。

```text
(println "Hello, World!")
```

### 43. Go - 2009

Go是一种编译型的支持并发的编程语言，它的设计受到了C和Pascal的启发，该语言由Google从Robert Griesemer，Rob Pike和Ken Thompson的最初概念开发而来。没错，这个Ken Thompson就是在1969年设计B语言的人！

```text
package main

import "fmt"

func main() {
  fmt.Println("Hello, World!")
}
```

### 44. Rust - 2010

Rust是由Mozilla设计并开发的一门多范式的编译型编程语言。Rust被设计为“安全、并发、实用的语言”，在某些方面支持函数式编程风格，面向对象编程。Rust被认为有望替代C++。

```text
fn main() {
    println("Hello, World!");
}
```

### 45. Dart - 2011

Dart是由Google开发的用于web应用的编程语言，它最初的目标是替代JavaScript。目前，Dart的目标还没有实现，开发人员的首要任务是可以将Dart转换成与所有现代浏览器兼容的JavaScript代码。Dart也可以用于服务端的开发。

Dart最近的势头很猛，主要是因为它是手机端流行框架Flutter的开发语言。

```text
main() {
  print('Hello, World!');
}
```

### 46. Kotlin — 2011

Kotlin是一门面向对象编程语言，支持静态类型，可以被编译成字节码运行在Java虚拟机上。也可以编译成JavaScript语言，或者在其他多个平台运行的语言。（感谢LLVM）2017年，Google使Kotlin成为继Java之后Android正式支持的第二种语言。

```text
fun main(args: Array<String>) {
    println("Hello, World!")
}

```

### 47. Ceylon - 2011

Ceylon是由“红帽”创建的开源的强类型和静态类型的高级编程语言，它的语法类似于Java。可以将其编译成Java字节码和JavaScript。

```text
void hello() {
    print("Hello, World!");
}
```

### 48. TypeScript - 2012

TypeScript是由微软开发的免费、开源的编程语言。用于改善和保护JavaScript代码的生产。TypeScript是JavaScript的超集，可以转换为JavaScript，以便由任何Web浏览器或JavaScript引擎解释。

```text
console.log("Hello, World!");
```

### 49. Julia - 2012

Julia是用于科学计算的高级、强大、动态的编程语言，使用的是其他类似开发环境（例如MATLAB、R或Python）的用户熟悉的语法。

```text
println("Hello, World!")
```

### 50. Swift - 2014

Swift是一门编译型、多范式的编程语言，它简单、高效、安全。它由苹果开发并开源。使其成为与Objective-C一样开发iOS移动应用的解决方案。

```text
print("Hello, World!")
```

### 结论

我们的旅行到此就要告一段落了，我想你介绍了50种语言的“Hello, World!“程序的写法。本文所提供的编程语言列表远非详尽。希望你能和我分享你喜欢的语言的“Hello, World!“程序。

### 原文地址

[https://zhuanlan.zhihu.com/p/123191996](https://zhuanlan.zhihu.com/p/123191996)