<?php
    include "db-connection.php";        
 
    $sql_querie = "SELECT name, color, image, price FROM bikes";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {      

      echo '<div class="product debug">' .
       
            
             
                     
             '<h2>' . $row['name']  .'</h2>' .
             '<h6>' . $row['color'] .'</h6>' . 
             '<img src="' . $row['image'] . '" alt="' . '" style="width: 100%">' .
             
             '<div id="add" class="cart"><a href=
             "cart.php?name=' . $row['name'] . 
             '&color=' . $row['color'] . 
             '&price=' . $row['price'] .  '"><h2>Reserve</h2></a></div>' .


             '<h5>'. '€ '  . $row['price']  . ',-' .'</h5>' . 
            
             
            '</div>';
    }   
           
 
    $conn = null;
    
?>       
        



