# Perfect_Contact_Form

This contact form takes the input and returns the output after validating the input and then sends a mail to the site owner after pushing the data to an sql table.  

To run the program, follow the steps below :  
  
1. Download the XAMPP server and install it.
2. Download the form.html and action.php file and save them in a new folder named 'contact'.  
3. Go to 'htdocs' folder in xampp in C-drive. Rename the 'index.php' to 'home.php' and paste the 'contact' folder here.
4. Open XAMPP and run the Apache server and SQL server. In case the SQL server is not starting then open Task Manager and kill the already running mysql instances and then start SQL server.
5. Open localhost on any browser with port number as mentioned in XAMPP window.
6. Cick on the 'contact' folder and then the form.html. This opens the contact form.  
7. In a new tab open the localhost server again and click the 'home.php' file.
8. Click on the 'phpmyadmin' tab and then create a new database.
9. In this database create a new table named 'contact_form' with columns as 'name', 'phone', 'email', 'subject', 'message', 'datetime', 'ipaddress' (follow the same order). The phone column shall be of type bigint and len 20.
10. Next follow the steps in the mentioned link to establish the SMTP service on the desktop. Link : http://msdn.microsoft.com/en-us/library/8b83ac7t.aspx
11. Next, change the database name in the action.php code and match all the column names and other required attributes to make a connection.
12. Fill the form and submit it to see different outputs.
13. To check the database table, go to SQL tab and write the select query and click on 'GO'.


In case there are any difficulties in running thr program, you can ping me up.  
  
Open to suggestions, feedback, comments and/or queries.
