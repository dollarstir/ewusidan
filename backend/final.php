<?php

if (!isset($_GET['ref'])) {
    echo'<script>window.location="home"</script>';
} else {
    session_start();
    $orderid = $_SESSION['orderid'];
    $servicetype = $_SESSION['servicetype'];
    $amount = $_SESSION['servicefee'];
    $uid = $_SESSION['uid'];
    $user = customfetch('applicant', [['id', '=', $uid]]);
    update('activity', ['paystatus' => 'paid'], ['orderid' => $orderid]);
    $message = '

    <html>
    <body>
    <center><img src="http://ewusidanconsult.com/main/assets/images/logo/logo.png"/></center>
    <p> Dear '.$user[0]['name'].', Your payment of GHS'.$amount.' for '.$servicetype.' has been recieved . <br><strong>Order No : '.$orderid.' </strong> <br><strong>Transaction Ref : '.$_GET['ref'].' </strong> </p>
    </body>
    </html>
    
    ';
    sendmail('www.phpyolk.com', 'Payment Successful;', $message, 'Ewusidan Consult', [$user[0]['email']]);
}
