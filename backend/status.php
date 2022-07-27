<?php

$id = $_GET['token'];
$c = customfetch('activity', [['id', '=', $id]], ['id' => $id]);
$cc = $c[0];
switch ($cc['status']) {
    case 'pending':
        $result = update('activity', ['status' => 'recieved'], ['id' => $id]);

        break;

    case 'recieved':
        $result = update('activity', ['status' => 'processed'], ['id' => $id]);
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
} else {
    echo '
    <script>alert("failed to update );
    window.location="orders"
    </script>
    ';
}
