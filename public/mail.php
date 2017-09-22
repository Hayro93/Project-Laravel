<?php
sleep(2);
    $name = $_POST['Nname'];
    $cname = $_POST['Cname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $mssg = $_POST['message'];
    $to      = 'info@teleyan.com';
    $subject = 'Teleyan Web Site';
    $message = 'Name: '.$name. "\r\n" .
        'Company Name: '.$cname. "\r\n" .
        'E-Mail: '.$email. "\r\n" .
        'Phone: '.$phone. "\r\n" .
        'Message: '.$mssg. "\r\n" ;
    $headers = 'From: '.$email . "\r\n";
    //mail($to, $subject, $message, $headers);

    echo 'Thenk youuuuu <b style="text-transform: uppercase">'.$_POST['Nname']. "</b> \r\n" .
                ".Our manager will contact you within 24 hours.";
    return false;
?>