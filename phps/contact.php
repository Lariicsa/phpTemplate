
<?php 
 header('Content-type: application/json');

    $subject = 'Contact from YEHUDA Our Diamonds and special jewerly'; 
    $name = @trim(stripslashes($_POST['cname'])); 
    $phone = @trim(stripslashes($_POST['cphone']));    
    $email = @trim(stripslashes($_POST['cmail'])); 
    $message = @trim(stripslashes($_POST['cques'])); 

    $email_from = $email;
    $email_to = 'guy@biggerdiamonds.com';

    $body = 'Name: ' . $name . "\n\n" . 'Phone: ' . $phone . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: '  . "\n\n" .  $message;

    $success = mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
    if (empty($success)){
        echo "<p>error</p>";
    }else{
        header('Location: http://lariicsa.com/yehuda/contactUs.php?success=true');

    }
    die;
    
    
    
?>