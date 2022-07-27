<?php

$id = $_GET['token'];
$c = customfetch('activity', [['id', '=', $id]]);
$cc = $c[0];
switch ($cc['status']) {
    case 'pending':
        $result = update('activity', ['status' => 'recieved']);

        break;

    case 'recieved':
        $result = update('activity', ['status' => 'processed']);
        break;

    default:
        // code...
        break;
}

if ($result == 'success') {
    echo '
    <script>
    alert("Updated Successfuly");
    window.location="orders"</script>';
}
