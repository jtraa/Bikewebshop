<?php
    include "db-connection.php";        

    $sql_querie = "SELECT name, color, image, price FROM bikes";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {      

      echo '<div class="products bikes debug">' .
       
            
             
                     
             '<h4>' . $row['name']  .'</h4>' .
             '<img src="' . $row['image'] . '" alt="' . '" style="width: 100%">' . 
             '<h4>'. '€'  . $row['price']  .'</h4>' .
             '<h4>' . $row['color'] .'</h4>' .           
            '</div>';
    }   
           
 
    $conn = null;
    
?>       
        



