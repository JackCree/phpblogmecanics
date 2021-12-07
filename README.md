# Blog mechanics
Create the post and get method for an blog plus adding the MySql database to save all articles.

## Create the Basic
Into documents with php extension, create the index, create and logic page.
With Bootstrap, add a simple format for an archive blog

## Create the database
Generate a database of 3 columns with id (auto-increment), title (varchar 255) and content (longtext)

## Convert into PHP pages
Connect to the database with mysqli_connect :
```
$conn = mysqli_connect($server, $username, $password, $database)
```
## Create the methods
Into the logic.php file, create the methods for Post, Get, Update, and Delete methods

[Contribution guidelines for this project](https://www.youtube.com/watch?v=OofP9BhzQMU&t=224s&ab_channel=packetcode)

## Connect to InifnityFree
After creating an account on [Infinity](https://infinityfree.net/), create a database on the MySQL on the server delivered by Inifnity. Get the elements to to connect to the Infinity database. Drag and Drop the folder with the code into the htdocs in the File Manager 

