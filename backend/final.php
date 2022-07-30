<?php

if (!isset($_GET['ref'])) {
    echo'<script>window.location="home"</script>';
} else {
    session_start();
    $orderid = $_SESSION['orderid'];
    $uid = $_SESSION['uid'];
    customfetch('applicant', [['id', '=', $uid]]);
    update('activity', ['paystatus' => 'paid'], ['orderid' => $orderid]);
}
