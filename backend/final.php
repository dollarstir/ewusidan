<?php

if (!isset($_GET['ref'])) {
    echo'<script>window.location="home"</script>';
} else {
    session_start();
    $orderid = $_SESSION['orderid'];
    $amount = $_SESSION['servicefee'];
    $uid = $_SESSION['uid'];
    $user = customfetch('applicant', [['id', '=', $uid]]);
    update('activity', ['paystatus' => 'paid'], ['orderid' => $orderid]);
    $message = '

    <html>
    <body>
    <center><img src="http://ewusidanconsult.com/main/assets/images/logo/logo.png"/></center>
    <p> Dear '.$user[0]['name'].', Your payment of GHS'.$amount.' has been recieved  </p>
    </body>
    </html>
    
    ';
    sendmail('www.phpyolk.com', 'Payment Successful;', $message, 'Ewusidan Consult', ['kpin463@gmail.com', 'danielewusi2@gmail.com']);
}
