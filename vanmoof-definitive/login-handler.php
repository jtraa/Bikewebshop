

<?php
    session_start();
   
    


    include "db-connection.php";

    $user_email = $_POST['user_email']; 
   
    $user_password = $_POST['user_password'];

    $result = "SELECT UserEmail, UserID
               FROM account
               WHERE UserEmail = '$user_email' 
               AND UserPassword = '$user_password'";

    $db_result = $conn->query($result);

    if ($db_result->rowCount()==1){
        foreach($db_result as $row){
            $firstname = $row['UserEmail'];
            $_SESSION['UserEmail']=$row['UserEmail'];
            $_SESSION['UserID']=$row['UserID'];
        }
               
        header("Location: index.php");
        
    } else{
        echo "Failed, email or password wrong"; 
    }


?>