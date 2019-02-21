<?php
     
        
        // $email = $_POST["email"];
        // session_start();      
       
        $userID = $_SESSION['UserID'];
      
        include "db-connection.php";        
     
        $sql_querie = "SELECT bikeID, name, color, image, price FROM bikes INNER JOIN ordertable ON bikesID=bikeID WHERE UserID='$userID'";
        
        $db_result = $conn->query($sql_querie);  
    
        foreach ($db_result as $row)
        {      
    
          echo '<div class="product2 debug">' .
                   
                 
                         
                 '<h2>' . $row['name'] . " " . $row['color'] . '    '.'€ '. $row['price']  . ',-' .'</h2>' . 
                
                 
                '</div>';
        }   
               
     
        $conn = null;