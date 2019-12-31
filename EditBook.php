<?php 
 
    include("DBConnection.php");
    $isbn = $_GET['GetID'];
    $query = " select ISBN from books where isbn='".$isbn."'";
    $result = mysqli_query($db,$query);
 
while($row = mysqli_fetch_assoc($result))


 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">
 
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">
 
                            <form action="update.php?ID=<?php echo $row["ISBN"]; ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Title " name="title" value="<?php echo $row["Title"]; ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Author " name="author" value="<?php echo $row["Author"]; ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Edition " name="edition" value="<?php echo $row["Edition"]; ?>">
								<input type="text" class="form-control mb-2" placeholder=" Publication " name="publication" value="<?php echo $row["Publication"]; ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>