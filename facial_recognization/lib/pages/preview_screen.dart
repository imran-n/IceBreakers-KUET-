import 'dart:io';
import 'dart:typed_data';

import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:facial_recognization/main.dart';
import 'package:facial_recognization/pages/get_licenses.dart';

class PreviewScreen extends StatefulWidget {
  final String imgPath;

  PreviewScreen({this.imgPath});

  @override
  _PreviewScreenState createState() => _PreviewScreenState();
}

class _PreviewScreenState extends State<PreviewScreen> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        automaticallyImplyLeading: true,
        title: Text("Drive Dive"),
        centerTitle: true,
      ),
      body: Container(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.stretch,
          children: <Widget>[
            Expanded(
              flex: 2,
              child: Image.file(
                File(widget.imgPath),
                fit: BoxFit.cover,
              ),
            ),
            Align(
              alignment: Alignment.bottomCenter,
              child: Container(
                width: double.infinity,
                height: 60.0,
                color: Colors.black,
                child: Center(
                    child: Wrap(
                  children: <Widget>[
                    FlatButton(
                      onPressed: () {
                        Navigator.push(
                          context,
                          MaterialPageRoute(builder: (context) => CameraApp()),
                        );
                      },
                      padding: const EdgeInsets.all(10.0),
                      color: Colors.blueAccent,
                      child: Text(
                        "Take another picture",
                        style: TextStyle(color: Colors.white, fontSize: 15.0),
                      ),
                    ),
                    SizedBox(
                      width: 40.0,
                    ),
                    FlatButton(
                      onPressed: () {
                        Navigator.push(
                          context,
                          MaterialPageRoute(builder: (context) => GetLicense()),
                        );
                      },
                      padding: const EdgeInsets.all(10.0),
                      color: Colors.greenAccent,
                      child: Text(
                        "Get license",
                        style: TextStyle(color: Colors.white, fontSize: 15.0),
                      ),
                    )
                  ],
                )),
              ),
            )
          ],
        ),
      ),
    );
  }

  Future<ByteData> getBytesFromFile() async {
    Uint8List bytes = File(widget.imgPath).readAsBytesSync() as Uint8List;
    return ByteData.view(bytes.buffer);
  }
}
