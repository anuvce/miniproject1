<?php 
    require_once('includes/db.php');
    require_once('includes/functions.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = prep_input($_POST['username']);
        $lastname = prep_input($_POST['lastname']);
        $email = prep_input($_POST['email']);
$tel = prep_input($_POST['tel']);
        
        $id = prep_input($_POST['id']);

        $sql = "UPDATE notes SET ";
        $sql .= "username ='" . $username  . "', ";
        $sql .= "lastname = '" . $lastname . "', ";
        $sql .= "email = '" . $email. "' ";
$sql .= "tel = '" . $tel. "' ";
        $sql .= "WHERE id ='" . $id . "' ";
        $sql .= "LIMIT 1";
        
       
       
        if (mysqli_query($conn, $sql)){
            header("Location: index.php");
        }
       
    }

    
    if (!isset($_GET['id'])){
        header("Location: index.php");
    }
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM notes WHERE id='" . $id . "' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $note = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Notes App</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <header>
                Notes App
    </header>

    <div class="titleDiv">
            <div class="backLink"><a class="nav-link" href="index.php"> Home</a></div>
            <div class="head">New Note</div>
    </div>
    <form action="edit.php" method="post">     
            <input type="hidden" name="id" value=<?php echo $note['id']; ?> />
            <span class="label">username</span>
            <input type="text" name="username" value=<?php echo $note['username']; ?> />
            
            <span class="label">lastname</span>
<input type="text" name="lastname" value=<?php echo $note['lastname']; ?> />
            
            <span class="label">email</span>
<input type="text" name="email" value=<?php echo $note['email']; ?> />
            
            <span class="label">tel</span>
            <input type="text" name="tel" value=<?php echo $note['tel']; ?> />



            
        <input type="submit" />
</html>