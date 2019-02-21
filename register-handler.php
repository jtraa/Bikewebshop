<?php
     
        
        $email = $_POST["email"];
        $user_password = $_POST["password"];      
 
      
    
        include "db-connection.php";
        try {
                $sql = "INSERT INTO account (UserEmail, UserPassword)
                VALUES ('$email', '$user_password')";
                
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "New record created successfully";
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
    
          header("Location: inloggen.php");  
    
?>