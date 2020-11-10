<?php 

    require_once('includes/db5.php');
    require_once('includes/functions.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = prep_input($_POST['username']);
        $email = prep_input($_POST['email']);
$feed = prep_input($_POST['feed']);

;

        $sql = "INSERT INTO feed (username,email,feed) VALUES ('";
        $sql .= $username. "', '" . $email . "', '" . $feed.  "')";



if(($username=="") || $feed=""){

    echo "<h3>enter correct details in mentioned way #all fields are required</h3>";


}
else{
 if (mysqli_query($conn, $sql)){   
header("Location:submit1.php");
                    
        
          }
    }

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Notes App</title>
<link rel="stylesheet" href="assets/css/style.css">

    </
    </head>
    <center><header>
                <h1>RENTAL APP</h1>
    </header></center>
<body bgcolor="red">
    <div class="titleDiv">
            <div class="backLink"><a class="nav-link" href="home.html"> BACK</a></div>
            </div>
<div class="main" >
<div class="wrapper">
<div class="book-house">
<div class="booking-detils">
<center><h3>enter details</h3>

   <form action="feedback.php" method="post">    
<span class="username">FULL NAME</span>
<input type="text" name="username" placeholder="enter first name less than 15 characters "/><br/>
<span class="email">E-mail</span>
<input type="email" name="email" placeholder="E-mail @gmail.com "/><br/>
<span class="feed">FEEDBACK</span>

<input type="text"   name="feed" placeholder="enter your feedback "/><br/>

<input type="submit" name="submit" placeholder="SEND"/>
<input type="reset" name="reset" placeholder="RESET"/></center>

</form>
</div>

</div>
</div>

 
</body>
           </html>