<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $text = $_POST['text'];

    $email_from = 'houserentalsunq@gmail.com';
    
    $email_subject = "Feedback/Request:";
    $email_subject_users = "FROM HOUSE RENTALS:";

    $email_body = "User Name: $name\n".
                  "User Email: $email\n".
                  "Phone Number: $phone\n".
                  "Subject: $subject\n".
                  "Text: $text\n";
                   
    $toadmin = "houserentalsunq@gmail.com";

    $headers = "From: $email_from\r\n";
    $headers .= "Reply-To: $email \r\n";
    
    if(mail($toadmin,$email_subject,$email_body,$headers)){
            header("Location: index.html");
        }
        else{
            echo "SOMETHING WENT WRONG!";
        }
?>






























