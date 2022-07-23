<?php

require '../loader/autoloader.php';
require '../fragement/deep.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addbirthcert':
            extract($_POST);

            addbirthcert($fname, $oname, $lname, $phone, $email, $gender, $dob, $pob, $cob, $rob, $mothername, $motheroccupation, $motherreligion, $motherphone, $fathername, $fatheroccupation, $fatherreligion, $fatherphone);

            break;

        case 'addpassport':
            extract($_POST);

            addpassport($fname, $oname, $lname, $phone, $email, $gender, $dob, $pob, $cob, $rob, $mothername, $motheroccupation, $motherreligion, $motherphone, $fathername, $fatheroccupation, $fatherreligion, $fatherphone);

            break;

        default:

        break;
    }
}
