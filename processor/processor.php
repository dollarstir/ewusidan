<?php

require '../loader/autoloader.php';
require '../fragement/deep.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addbirthcert':
            extract($_POST);
            echo 'hi';

            // addbirthcert($fname, $oname, $lname, $phone, $gender, $dob, $pob, $cob, $rob, $mothername, $motheroccupation, $motherreligion, $motherphone, $fathername, $fatheroccupation, $fatherreligion, $fatherphone);

            break;

        default:

        break;
    }
}
