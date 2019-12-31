
<?php 
 
    include("DBConnection.php");
 
    if(isset($_POST['update']))
    {
        $isbn = $_GET['ISBN'];
        $title = $_POST['Title'];
        $author = $_POST['Author'];
        $edition = $_POST['Edition'];
 
        $query = " update books SET ISBN = '".$isbn."', Title='".$title."',Author='".$author."',Publication='".$publication."' where ISBN='".$isbn."'";
        $result = mysqli_query($db,$query);
 
        if($result)
        {
            header("location:DisplayBooks.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:DisplayBooks.php");
    }
 
 
?>