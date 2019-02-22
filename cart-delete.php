<?php
     
        
        // $email = $_POST["email"];
        // session_start();      
        $userID=$_SESSION['UserID'];
      
    
        include "db-connection.php";
       // $bikesID="bikeID";
       // $userID="UserID";
        try {
                $sql = "DELETE FROM ordertable WHERE UserID = userID";
                
                
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "Delete All";
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
    
        // header("Location: cart.php");  
    
?>