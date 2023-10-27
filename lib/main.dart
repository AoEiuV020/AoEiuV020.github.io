import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:flutter_markdown/flutter_markdown.dart';
import 'package:url_launcher/url_launcher_string.dart';

void main() {
  runApp(const PersonalWebsite());
}

class PersonalWebsite extends StatefulWidget {
  const PersonalWebsite({super.key});

  @override
  State<PersonalWebsite> createState() => _PersonalWebsiteState();
}

class _PersonalWebsiteState extends State<PersonalWebsite> {
  String selectedArticle = 'hello_world.md';

  void onItemSelected(ArticleItem item) {
    setState(() {
      selectedArticle = item.key; // 更新选中的项目
    });
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: '编程开发知识分享',
      home: Scaffold(
        body: Center(
          child: Container(
            constraints: const BoxConstraints(maxWidth: 1000),
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.stretch,
              children: <Widget>[
                Expanded(
                  child: Row(
                    children: <Widget>[
                      Flexible(
                        flex: 1,
                        fit: FlexFit.tight,
                        child: LeftSection(onItemSelected),
                      ),
                      Flexible(
                        flex: 2,
                        fit: FlexFit.tight,
                        child: RightSection(selectedArticle),
                      ),
                    ],
                  ),
                ),
                const Footer(),
              ],
            ),
          ),
        ),
      ),
    );
  }
}

class ArticleItem {
  final String key;
  final String title;

  ArticleItem(this.key, this.title);
}

class LeftSection extends StatelessWidget {
  final void Function(ArticleItem item) onItemSelected;

  const LeftSection(this.onItemSelected, {super.key});

  Future<List<ArticleItem>> loadArticleList() {
    return Stream.fromFuture(rootBundle.loadString('assets/md/list.txt'))
        .transform(const LineSplitter())
        .where((event) => event.isNotEmpty)
        .map((event) => event.split('/'))
        .map((event) => ArticleItem(event[0], event[1]))
        .toList();
  }

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
          const SizedBox(height: 10),
          const Text('文章列表', style: TextStyle(fontSize: 14)),
          const SizedBox(height: 10),
          Expanded(
            child: FutureBuilder(
                future: loadArticleList(),
                builder: (context, snapshot) {
                  if (snapshot.connectionState == ConnectionState.waiting) {
                    return const Center(child: CircularProgressIndicator());
                  } else if (snapshot.hasError) {
                    return const Text('Error!');
                  }
                  final items = snapshot.requireData;
                  return ListView.builder(
                    itemCount: items.length,
                    itemBuilder: (context, index) {
                      return ListTile(
                        dense: true,
                        title: Text(
                          '${index + 1}. ${items[index].title}',
                          style: const TextStyle(
                            fontSize: 14,
                            color: Colors.blue,
                          ),
                        ),
                        onTap: () {
                          onItemSelected(items[index]); // 当点击列表项时，将项目传递给父级
                        },
                      );
                    },
                  );
                }),
          ),
        ],
      ),
    );
  }
}

class RightSection extends StatelessWidget {
  final String selectedArticle;

  const RightSection(this.selectedArticle, {super.key});

  @override
  Widget build(BuildContext context) {
    return FutureBuilder(
        future: rootBundle.loadString('assets/md/$selectedArticle'),
        builder: (context, snapshot) {
          if (snapshot.connectionState == ConnectionState.waiting) {
            return const Center(child: CircularProgressIndicator());
          } else if (snapshot.hasError) {
            return const Text('Error!');
          }
          var data = snapshot.requireData;
          return Markdown(
            data: data,
            onTapLink: (text, href, title) {
              if (href != null) {
                launchUrlString(href);
              }
            },
          );
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
              launchUrlString(
                  'http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44030702003946');
            },
            child: const Text('粤公网安备 44030702003946号',
                style: TextStyle(color: Colors.white)),
          ),
          TextButton(
            onPressed: () {
              launchUrlString('http://beian.miit.gov.cn/');
            },
            child: const Text('闽ICP备19026052号',
                style: TextStyle(color: Colors.white)),
          ),
        ],
      ),
    );
  }
}
