<?php 
    require_once('includes/db2.php');
    require_once('includes/functions.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
       
        $adminname= prep_input($_POST['adminname']);
        $adminpassword = prep_input($_POST['adminpassword']);

        $sql = "INSERT INTO admin (adminname,adminpassword) VALUES ('";
        $sql .= $adminname. "', '" . $adminpassword .  "')";
        
 if($adminname=="anu")
{
if($adminpassword==123)
{
       if (mysqli_query($conn, $sql))
{                   
header("Location:auth\login.php");
                    
        
          }

    }
}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>HOUSE MANAGAEMENT SYSTEM</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <center><header>
                <h1>HOUSE-MANAGEMENT SYSTEM</h1>
    </header></center>
<body bgcolor="blue">
    <div class="titleDiv">
            </div>
<div class="main" >
<div class="wrapper">
<div class="book-house">
<div class="booking-detils">
<center><h3>ENTER DETAILS</h3>

    <form action="admin.php" method="post">    
<span class="adminname">admin name</span>
<input type="text" name="adminname" placeholder="admin name "/><br/>
<span class="adminpassword">adminpassword</span>
<input type="password" name="adminpassword" placeholder="adminpassword "/><br/>
<input type="submit" name="submit" placeholder="submit"/>
<input type="reset" name="reset" placeholder="reset"/>

</form>
<a class="nav-link" href="http://localhost:8080/notes/home.html">HOME</a>

           
</div>

</div>
</div>
</div>
</body>
</html>