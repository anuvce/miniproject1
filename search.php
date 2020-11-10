<?php 

    require_once('includes/db3.php');
    require_once('includes/functions.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $place = prep_input($_POST['place']);
        $sql = "INSERT INTO search (place) VALUES ('";
        $sql .= $place. "')";


if($place!="HYD" &&  $place!="KODAD" ){
            echo " HOMES ARE AVAILABLE  IN HYD AND KODAD ";
            }
else
{

 if (mysqli_query($conn, $sql)){   
header("Location:index.html");


                    
        
          }
    }
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8"/>
<meta name="author" content="ANUSHA"/>
<meta name="description" content="SELECTION HOUSE"/>
<meta name="keywords" content="GIVE YOUR KEYWORDS FOR"/>
<title>ANU-HOUSE</title>
<link rel="stylesheet" href="styles/style.css">
    
</head>
<body bgcolor="lightgreen">
<header class="header">
<div class="wrapper">
<h1>HOUSE RENTAL SYSTEM</h1>
</div>

</header>
<nav class="menu">
<div class="wrapper">
<ul>
<a href="home.html"><li>HOME</li></a>


</ul>
</div>

</nav>
<div class="main" >
<div class="wrapper">
<div class="book-house">
<div class="booking-detils">
<center><h3>enter details to search</h3>
<h3>Only houses are available in HYD and KODAD</h3>

<form action="search.php" method="post">    
<span class="search">search</span>
<input type="text" name="place" placeholder="enter place HYD or KODAD "/><center><br/>

<center><input type="submit" name="submit" placeholder="SEND"/>
<input type="reset" name="reset" placeholder="RESET"/></center><br>
<a href="search1.php" >ARE U WANT TO SEARCH BASED ON COST?</a>

</form>
</div>
</div>
</div>
</div>
</body>
</html>
