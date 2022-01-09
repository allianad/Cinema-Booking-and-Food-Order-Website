# Cinema-Ticket-and-Food-Order-Website

## Functionality
Users can login or create a new account and depending on the type of account, they are directed to different pages. There are three types of users: <br />
### 1. Customer <br />
  Can book tickets for available movie showings, reserve seats, order food to be delivered to their seat prior to movie start time and see their account information.
   
### 2. Employee <br />
   Can view food orders for their theatre location status, set the status of the order(in progress or delivered), and view their account information. Food orders let employees know when food should be delivered and which seat to deliver to.
    
### 3. Manager <br />
   Can add/remove movies, add/remove movie showings located in their theatre and view account information. When adding a movie, managers input the movie name, genre and duration. When adding a movie showing, managers select an existing movie and input the room number, date and start time.

## How to compile and run
Copy the project folder in www of AppServ (i.e. C:\AppServ\www\Project).

Load the sql file into your database. In the file Project\Database\connection.php,
change the username and password to your own mysql user and password.
$con=mysqli_connect("127.0.0.1", "<username here>", "<password here>").

Open browser and in the search bar type localhost.
Then type Project and the path to the php file name you want to open. (i.e. http://localhost/Project/Customer Login/filename.php).
Below is the paths for the php files you want to execute:

Customer Login: http://localhost/Project/Customer Login/existingCustomerAccountF.php

Employee Login: http://localhost/Project/Employee Login/existingEmployeeAccountF.php

User guide of how to use website is included in the FINAL REPORT.
