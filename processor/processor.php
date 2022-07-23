<?php

require '../loader/autoloader.php';
require '../fragement/deep.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addbirthcert':
            extract($_POST);

            addbirthcert();

            break;

        default:

        break;
    }
}
