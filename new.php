<?php 

    require_once('includes/db.php');
    require_once('includes/functions.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = prep_input($_POST['username']);
        $lastname = prep_input($_POST['lastname']);
        $email = prep_input($_POST['email']);
;
        $tel = prep_input($_POST['tel']);
        $houseno=prep_input($_POST['houseno']);
         $location=prep_input($_POST['location']);
             

        $sql = "INSERT INTO notes (username, lastname,email,tel,houseno,location) VALUES ('";
        $sql .= $username. "', '" . $lastname . "', '" . $email. "', '" . $tel. "', '" . $houseno. "','" .$location. "')";



if(($username=="") || strlen($username)>15 || $lastname=="" || strlen($lastname)>15 ||strlen($tel)<10 || $email=="" || $houseno>6 ||strlen($tel)>10 || ((strcmp($location,"HYD")!==0) && (strcmp($location,"KODAD")!==0))){

    echo "<h3>enter correct details in mentioned way #all fields are required</h3>";


}
else{
 if (mysqli_query($conn, $sql)){   
header("Location:submit.php");
                    
        
          }
    }

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Notes App</title>
        <link rel="stylesheet" href="styles/style.css">
 <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <header>
                RENTAL App
    </header>

    <div class="titleDiv">
            <div class="backLink"><a class="nav-link" href="index.php"> BACK</a></div>
            </div>
<body bgcolor="green">
<div class="main" >
<div class="wrapper">
<div class="book-house">
<div class="booking-detils">
<center><h3>enter details</h3>

   <form action="new.php" method="post">    
<span class="username">first name</span>
<input type="text" name="username" placeholder="enter first name less than 15 characters "/><br/>
<span class="lastname">last name</span>
<input type="text" name="lastname" placeholder="enter last name less than 15 characters"/><br/>
<span class="email">E-mail</span>
<input type="email" name="email" placeholder="E-mail @gmail.com "/><br/>
<span class="name">contact no.</span>
<input type="text" name="tel" placeholder=" 10 digit contact number "/><br/>
<span class="name">selected House no</span>
<input type="text" name="houseno" placeholder="selected house number less than 6"/><br/>
<span class="name">select Location you want</span>
<input type="text" name="location" placeholder="selected location either HYD or KODAD"/><br/>

<input type="submit" name="submit" placeholder="SEND"/>
<input type="reset" name="reset" placeholder="RESET"/></center>

</form>
</div>

</div>
</div>

 </body>
           </html>