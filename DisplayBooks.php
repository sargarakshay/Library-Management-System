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

.displaybox {
    width: 920px;
    height: 450px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 20px 30px;
    border-radius: 3%;
}


table {
  border-collapse: collapse;
  width: 80%;
}

th {
  background-color: #fb2525;
  color: white;
  height: 50px;
  font-size: 25px;
}

th, td{
padding: 15px;
text-align: center;
border-bottom: 1px solid #ddd;
}

td{
		
	vertical-align: bottom;
	font-size: 20px;
}

h1{
	margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
	color : #fff;
}
</style>
<body>
<?php
include("DBConnection.php");
$search = $_REQUEST["search"];
$query = "select ISBN,Title,Author,Edition,Publication from books where title like '%$search%'"; 
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
{
?>
<div class="displaybox">
<center><h1>LIBRARY MANAGEMENT SYSTEM</h1></center>
<br>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> ISBN </th>
<th> TITLE </th>
<th> AUTHOR </th>
<th> EDITION </th>
<th> PUBLICATION </th>
<th> Edit </th>
<th> Delete </th>
</tr>
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["Title"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><?php echo $row["Edition"];?> </td>
<td><?php echo $row["Publication"];?> </td>
<td><a href="EditBook.php?GetID=<?php echo $row["ISBN"]; ?>">Edit</a></td>
<td><a href="DeleteBook.php?Del=<?php echo $row["ISBN"]; ?>">Delete</a></td>
</tr>
</div>
<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>
</body>
</html>
<br>