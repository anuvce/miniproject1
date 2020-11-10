<?php
require_once('includes/db6.php');
    require_once('includes/functions.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = prep_input($_POST['username']);
        $email = prep_input($_POST['email']);
$mobileno = prep_input($_POST['mobileno']);
$imgname = prep_input($_POST['imgname']);

  $sql = "INSERT INTO upload (username,email,mobileno,imgname) VALUES ('";
   $sql .= $username. "', '" . $email . "', '" . $mobileno. "', '" . $imgname. "')";


if(isset($_POST['upload'])){
$fname=$_FILES['file']['name'];
$ftype=$_FILES['file']['type'];
$fsize=$_FILES['file']['size'];
$ftloc=$_FILES['file']['tmp_name'];
$store="upload/".$fname;
if(($username=="") || strlen($username)>15 || strlen($mobileno)<10 || strlen($mobileno)>10 ||strlen($imgname)>10 ){

    echo "<h3>enter correct details in mentioned way #all fields are required</h3>";


}
else{
 if (mysqli_query($conn, $sql)&& (move_uploaded_file($ftloc,$store))){   
header("Location:submit1.php");
                    
        
          }
else
{
echo "enter details in correct and upload image of your property";
}
    }
}
}

?>

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="assets/css/style.css">

<title>uploading files</title>
</head>
<body bgcolor="indigo">
<center><img src="images/sale.jfif"  width="100" height="100"></center>

<div class="main" >
<div class="wrapper">
<div class="book-house">
<div class="booking-detils">
<center><h2>enter details to sale your property</h2><br><br>


<form action="upload.php" method="POST" enctype="multipart/form-data">

<span class="username">username</span>
<input type="text" name="username" placeholder="enter username name less than 15 characters "/><br/>
<span class="email">email</span>
<input type="email" name="email" placeholder="enter email of person"/><br/>
<span class="mobileno">mobileno</span>
<input type="text" name="mobileno" placeholder="enter mobileno"/><br/><br></center>


<center><label>Uploading files</label>
<input type="file" name="file"/><br><br>
<span class="imgname">imgname</span>

<input type="text" name="imgname" placeholder="enter image name uploaded either jpg or png or jfif"/><br><br>
<p><input type="submit" name="upload" value="SUBMIT"></p>

<a href="home.html">HOME</a></center>

</form>
</div>

</div>
</div>
</div>
</body>

</html>