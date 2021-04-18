<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $unqcode = $_POST['unqcode'];

    $email_from = 'houserentalsunq@gmail.com';
    $email_subject = "New Rental Request:";
    $email_subject_users = "FROM HOUSE RENTALS:";

    $email_body = "User Name: $lname $fname\n".
                  "User Email: $email\n".
                  "Phone Number: $phone\n\n\n".
                  "UNQ CODE: $unqcode\n";

    $email_body_users = "Hello ,$fname\n".
                        "You've placed a request for a house with ".
                        "UNQ CODE: $unqcode\nThis is just a conformation message...\nThanks for using House Rentals\n";
                            
    $toadmin = "houserentalsunq@gmail.com";
    $touser = "$email";   

    $headers = "From: $email_from\r\n";
    $headers .= "Reply-To: $email \r\n";

    if(mail($touser,$email_subject_users,$email_body_users,$headers) && 
           mail($toadmin,$email_subject,$email_body,$headers)){
            header("Location: search.php");
        }
        else{
            echo "SOMETHING WENT WRONG!";
        }

    

?>


























