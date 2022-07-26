<?php

$id = $_GET['token'];
$c = customfetch('activity', [['id', '=', $id]]);
$cc = $c[0];
switch ($cc['status']) {
    case 'pending':
        $result = update('activity', ['status'=>]);
        break;

    default:
        // code...
        break;
}
