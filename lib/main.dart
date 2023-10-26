import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:flutter_markdown/flutter_markdown.dart';
import 'package:url_launcher/url_launcher_string.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Demo',
      theme: ThemeData(
        // This is the theme of your application.
        //
        // TRY THIS: Try running your application with "flutter run". You'll see
        // the application has a blue toolbar. Then, without quitting the app,
        // try changing the seedColor in the colorScheme below to Colors.green
        // and then invoke "hot reload" (save your changes or press the "hot
        // reload" button in a Flutter-supported IDE, or press "r" if you used
        // the command line to start the app).
        //
        // Notice that the counter didn't reset back to zero; the application
        // state is not lost during the reload. To reset the state, use hot
        // restart instead.
        //
        // This works for code too, not just values: Most code changes can be
        // tested with just a hot reload.
        colorScheme: ColorScheme.fromSeed(seedColor: Colors.deepPurple),
        useMaterial3: true,
      ),
      home: const PersonalWebsite(),
    );
  }
}

class PersonalWebsite extends StatelessWidget {
  const PersonalWebsite({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        body: Column(
          crossAxisAlignment: CrossAxisAlignment.stretch,
          children: <Widget>[
            Expanded(
              child: Row(
                children: <Widget>[
                  Flexible(
                    flex: 1,
                    child: LeftSection(),
                  ),
                  Flexible(
                    flex: 2,
                    child: RightSection(),
                  ),
                ],
              ),
            ),
            Footer(),
          ],
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
      padding: EdgeInsets.all(20),
      child: Column(
        children: <Widget>[
          CircleAvatar(
            radius: 50,
            backgroundImage: AssetImage('assets/images/avatar-128.jpeg'),
          ),
          Text('啊o额iu鱼', style: TextStyle(fontSize: 20)),
          Text('软件工程师', style: TextStyle(fontSize: 16)),
          SizedBox(height: 10),
          Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: <Widget>[
              TextButton(
                onPressed: () {
                  launchUrlString('https://www.zhihu.com/people/aoeiuv020');
                },
                child: Text('知乎'),
              ),
              TextButton(
                onPressed: () {
                  launchUrlString('https://github.com/AoEiuV020');
                },
                child: Text('GitHub'),
              ),
            ],
          ),
        ],
      ),
    );
  }
}

class RightSection extends StatelessWidget {
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
  @override
  Widget build(BuildContext context) {
    return Container(
      padding: EdgeInsets.all(10),
      color: Colors.black,
      child: Row(
        mainAxisAlignment: MainAxisAlignment.center,
        children: <Widget>[
          Image.asset('assets/images/beian.png'),
          TextButton(
            onPressed: () {
              launchUrlString('http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44030702003946');
            },
            child: Text('粤公网安备 44030702003946号', style: TextStyle(color: Colors.white)),
          ),
          TextButton(
            onPressed: () {
              launchUrlString('http://beian.miit.gov.cn/');
            },
            child: Text('闽ICP备19026052号', style: TextStyle(color: Colors.white)),
          ),
        ],
      ),
    );
  }
}
