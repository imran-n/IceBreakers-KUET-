import 'package:flutter/material.dart';

class GetLicense extends StatefulWidget {
  @override
  _GetLicenseState createState() => _GetLicenseState();
}

class _GetLicenseState extends State<GetLicense> {
  @override
  Widget build(BuildContext context) {
    return SafeArea(
      child: Scaffold(
        appBar: AppBar(
          automaticallyImplyLeading: true,
          title: Text("Drive Dive"),
          centerTitle: true,
        ),
        body: Center(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.start,
            children: <Widget>[
              Image(
                image: AssetImage('images/license1.jpg'),
                width: 300.0,
              ),
              Padding(
                padding: const EdgeInsets.all(15.0),
                child: Text(
                  "Driver Name",
                  style: TextStyle(fontSize: 25.0),
                ),
              ),
              Text(
                'Progress: 99%',
                style: TextStyle(
                  color: Colors.pinkAccent,
                ),
              ),
              SizedBox(
                height: 10.0,
              ),
              Center(
                child: Row(
                  mainAxisAlignment: MainAxisAlignment.center,
                  children: <Widget>[
                    Padding(
                      padding: const EdgeInsets.symmetric(
                          horizontal: 30.0, vertical: 40),
                      child: Text(
                        "Ratings",
                        style: TextStyle(fontSize: 21, color: Colors.brown),
                      ),
                    ),
                    Column(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: <Widget>[
                        Text(
                          "Beginner: 100%",
                          style: TextStyle(fontSize: 16, color: Colors.brown),
                        ),
                        Text(
                          "Intermidiate: 93%",
                          style: TextStyle(fontSize: 16, color: Colors.brown),
                        ),
                        Text(
                          "Expert: 91%",
                          style: TextStyle(fontSize: 16, color: Colors.brown),
                        ),
                      ],
                    ),
                  ],
                ),
              )
            ],
          ),
        ),
      ),
    );
  }
}
