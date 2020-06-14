# GRC Syllabus Generator
By Scarlett Kim and Cody Zipp, and Brian Kiehn
### Description
The faculty at Green River College wanted a way to simplify the process of generating instructor syllabi. Students worked with client Tim Mason, an IT faculty member here at Green River, to create a form that populates form fields with auto generated data based on input values. The website displays a simple form for instructors to fill out and submits to a preview page where instructors can preview and download the completed syllabus to a word document file.

### Requirements
##### Separates all database/business logic using the MVC pattern.
All Session handling is performed by the controller class 
(/controller/controller.php). Data validation and 
database access is handled by the model classes (/model/database.php and 
model/validate php). 
##### Routes all URLs and leverages a templating language using the Fat-Free framework.
All routing handled by the index page through the creation of an 
controller object. All views contained in /view and access the
controller through the Fat-free framework templating to display dynamic content.
##### Has a clearly defined database layer using PDO and prepared statements.
The Database class (/model/database.php) handles all database access through
a PDO instance variable. Each method of Database uses a prepared statement to 
access the database and return a result for use in the controller. The iCollect
database consists of five interconnected tables to manage user data.
##### Data can be viewed, added, and edited.
Once an instructor has finished filling out the form, they can then view the 
generated syllabus and make edits to their syllabus if needed. Syllabus can then be
generated to a word document file.
##### Uses OOP, and defines multiple classes.
GRC Syllabus Generator uses two classes to handle all aspects routing and MVC. 
A syllabus class is implemented to hold all form values of the syllabus, and a CSV class
is implemented to grab required data from an external CSV file.
##### Contains full Docblocks for all PHP files and follows PEAR standards.
Code is thoroughly commented and follows PEAR standards.
