<!DOCTYPE HTML>
<html>
<style>
body{
	width: 1820px;
    height: 720px;
    margin: 0;
    padding: 0;
    background: url(pic1.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.insertbox {
    width: 720px;
    height: 250px;
    background: #000;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 20px 30px;
    border-radius: 3%;
}
h1{
	margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
	color : #fff;
}

input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
	width: 100%;
    margin-bottom: 20px;
}

input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}

h3{
	margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 20px;
	color : #fff;
}
</style>
<body>
<br>
<?php
include("DBConnection.php");
$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];
$query = "insert into books(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
?>
<div class="insertbox">
<center><h1>LIBRARY MANAGEMENT SYSTEM</h1></center>
<h3> Book information is inserted successfully </h3>
<a href="SearchBooks.php"><input type="submit" value="Search Book"</a>
</div>
</body>
</html>