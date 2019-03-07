<?php
     
        
        // $email = $_POST["email"];
        session_start();      
        $bikesID=$_GET["bikeID"];
        $userID=$_SESSION['UserID'];
      
    
        include "db-connection.php";
       // $bikesID="bikeID";
       // $userID="UserID";
        try {
                $sql = "INSERT INTO ordertable(userID, bikesID)
                VALUES('$userID','$bikesID')";
                
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "New product is successfully added";
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
    
        header("Location: cart.php");  
    
?>