import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:flutter_markdown/flutter_markdown.dart';
import 'package:url_launcher/url_launcher_string.dart';

void main() {
  runApp(const PersonalWebsite());
}

class PersonalWebsite extends StatelessWidget {
  const PersonalWebsite({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: '编程开发知识分享',
      home: Scaffold(
        body: Center(
          child: Container(
            constraints: const BoxConstraints(maxWidth: 1000),
            child: const Column(
              crossAxisAlignment: CrossAxisAlignment.stretch,
              children: <Widget>[
                Expanded(
                  child: Row(
                    children: <Widget>[
                      Flexible(
                        flex: 1,
                        fit: FlexFit.tight,
                        child: LeftSection(),
                      ),
                      Flexible(
                        flex: 2,
                        fit: FlexFit.tight,
                        child: RightSection(),
                      ),
                    ],
                  ),
                ),
                Footer(),
              ],
            ),
          ),
        ),
      ),
    );
  }
}

class LeftSection extends StatelessWidget {
  const LeftSection({super.key});

  @override
  Widget build(BuildContext context) {
    return Container(
      color: Colors.grey[200],
      padding: const EdgeInsets.all(20),
      child: Column(
        children: <Widget>[
          const CircleAvatar(
            radius: 50,
            backgroundImage: AssetImage('assets/images/avatar-128.jpeg'),
          ),
          const Text('啊o额iu鱼', style: TextStyle(fontSize: 20)),
          const Text('软件工程师', style: TextStyle(fontSize: 16)),
          const SizedBox(height: 10),
          Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: <Widget>[
              TextButton(
                onPressed: () {
                  launchUrlString('https://www.zhihu.com/people/aoeiuv020');
                },
                child: const Text('知乎'),
              ),
              TextButton(
                onPressed: () {
                  launchUrlString('https://github.com/AoEiuV020');
                },
                child: const Text('GitHub'),
              ),
            ],
          ),
        ],
      ),
    );
  }
}

class RightSection extends StatelessWidget {
  const RightSection({super.key});

  @override
  Widget build(BuildContext context) {
    return FutureBuilder(
        future: rootBundle.loadString('assets/md/helloWorld.md'),
        builder: (context, snapshot) {
          if (snapshot.connectionState == ConnectionState.waiting) {
            return const CircularProgressIndicator();
          } else if (snapshot.hasError) {
            return const Text('Error!');
          }
          var data = snapshot.requireData;
          return Markdown(data: data, onTapLink: (text, href, title) {
            if (href != null) {
              launchUrlString(href);
            }
          },);
        });
  }
}

class Footer extends StatelessWidget {
  const Footer({super.key});

  @override
  Widget build(BuildContext context) {
    return Container(
      padding: const EdgeInsets.all(10),
      color: Colors.black,
      child: Row(
        mainAxisAlignment: MainAxisAlignment.center,
        children: <Widget>[
          Image.asset('assets/images/beian.png'),
          TextButton(
            onPressed: () {
              launchUrlString('http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44030702003946');
            },
            child: const Text('粤公网安备 44030702003946号', style: TextStyle(color: Colors.white)),
          ),
          TextButton(
            onPressed: () {
              launchUrlString('http://beian.miit.gov.cn/');
            },
            child: const Text('闽ICP备19026052号', style: TextStyle(color: Colors.white)),
          ),
        ],
      ),
    );
  }
}
