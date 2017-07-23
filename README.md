# Task Board

An online Task Board that can be used by teams to track work on multiple projects concurrently and divvy up tasks between team members. 

## Getting Started

These are the steps you'll need to follow to get a local version of the task board running on your machine for demonstration or testing purposes.

### Prerequisites

An IDE, Local Web Server, and an internet connection to access the remote MySQL Database.
```
Our team used Eclipse and XAMPP during development
```

### Installing

Example installation using Eclipse and XAMPP

Download Eclipse from
```
http://www.eclipse.org/downloads/eclipse-packages/
```

Download XAMPP from
```
https://www.apachefriends.org/download.html
```
Unzip or install XAMPP
```
In Windows: Install into a top level directory like C:/
In Linux: Unzip into /opt
``` 
Store or copy the Task Board source code directory into the xampp/htdocs/
Rename the Task Board directory in XAMPP to taskboard
At this point your XAMPP directory should contain Task Board source code such that xampp/htdocs/taskboard/application exists 

### Running the application 

Start the Apache Web Server through XAMPP
```
In Windows: run \xampp\apache_start.bat
In Linux execute: sudo /opt/lampp/lampp startapache
```

Navigate to localhost/taskboard (ideally in Firefox or Chrome)

You should see the login page for the Task Board

To try out the application feel free to log in using the following credentials
```
Username: jon.tester
Password: tester
```

## Authors

* Jabrea McDaniel -- Team Lead
* Shawn Swaagman
* Milu Franz
* Nikhil Vengal

## Acknowledgments

* Made using the CodeIgnitor Framework

