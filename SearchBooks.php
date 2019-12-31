<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>

input[type="text"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
p{
color : #fff;	
}
.searchbox {
    width: 720px;
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

.searchbox input{
    width: 100%;
    margin-bottom: 20px;
}

.searchbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}

.searchbox input[type="reset"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
</style>
</head>
<body>
<div class="searchbox">
<center><h1>LIBRARY MANAGEMENT SYSTEM</h1></center>
<form action = "DisplayBooks.php" method="get">
<br>
<center><p>ENTER THE TITLE OF BOOK TO BE SEARCHED :</p>
<input type="text" name="search" size="48" placeholder="Enter the Title of Book">
<br></br>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</center>
<br>

</form>
</div>
</body>
</html>