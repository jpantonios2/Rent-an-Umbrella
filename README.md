# Rent-an-Umbrella
An umbrella rental website.

* Languages: HTML5, CSS3, PHP, mySQL
* Database: PHPmyadmin
* Library: Bootstrap

# About
* Two user interface for renting and returning umbrellas are forms surronded by a particles.js background
  * Rent and Return forms send a POST request where the data is handled using PHP and SQL. Submitted forms are handled by checking if the client is already renting or not. Depending on this result, data will either be stored, deleted or moved in the database. 
* Interfaces for administrators to manage the logs of users who have rented umbrellas
  * Adminstrator login form is handeled by checked if a row in the database matches the submitted form
  * Logs for umbrellas are gathered by sending a qeury to the database and displaying them in an HTML table
* The administrator is able to click a button which will send an email to a client who has an overdue umbrella. This is done through PHPMailer.

# Pictures

