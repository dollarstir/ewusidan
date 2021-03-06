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
            if (empty(trim($fname)) || empty(trim($lname)) || empty(trim($phone))) {
                echo 'Name and phone number must be field';
            } else {
                if (authenticate('applicant', [['email', '=', $email], ['phone', '=', $phone]], 'OR') == 'success') {
                    $cc = customfetch('applicant', [['email', '=', $email], ['phone', '=', $phone]], 'OR');
                    insert('activity', ['uid' => $cc[0]['id'], 'type' => 'Passport', 'paystatus' => 'unpaid', 'status' => 'pending', 'dateadded' => date('jS F, Y'), 'timeadded' => date('h :i A')]);
                    $bcertimage = $_FILES['bcertimage']['name'];
                    $nidtimage = $_FILES['nidpic']['name'];
                    $ppicimage = $_FILES['ppic']['name'];

                    $bcerttempname = $_FILES['bcertimage']['tmp_name'];
                    $nidtempname = $_FILES['nidpic']['tmp_name'];
                    $ppictempname = $_FILES['ppic']['tmp_name'];
                    // $imgEncoded = base64_encode(file_get_contents($bcerttempname));

                    move_uploaded_file($bcerttempname, '../yolkassets/upload/'.$bcertimage);
                    move_uploaded_file($nidtempname, '../yolkassets/upload/'.$nidtimage);
                    move_uploaded_file($ppictempname, '../yolkassets/upload/'.$ppicimage);
                    $subject = 'New Passport  Request';

                    // $emm = "<img alt='Embedded Image' src='data:image/png;base64,$imgEncoded' />";

                    $message = '
                <p>Birth Certificate Image</p>

                <img src="http://ewusidanconsult.com/yolkassets/upload/'.$bcertimage.'" width="200px"/>

                <p>National ID Image</p>

                <img src="http://ewusidanconsult.com/yolkassets/upload/'.$nidtimage.'" width="200px"/>

                <p>Passport Size Picture</p>

                <img src="http://ewusidanconsult.com/yolkassets/upload/'.$ppicimage.'" width="200px"/>
                
                <table style="width:100%;border-collapse:collapse;border:1px solid;" >

                            <tr>
                            <th style="border-collapse:collapse;border:1px solid;">Question</th>
                            <th style="border-collapse:collapse;border:1px solid;">Answers</th>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">surname</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$lname.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">First name</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fname.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Other name </td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$oname.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Gender</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$gender.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Date of birth</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$dob.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">City or town of birth</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$pob.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Country of birth</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$cob.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Region of birth</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$rob.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Height</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$height.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Colour of eyes</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$eyecolor.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Colour of hair</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$haircolor.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Nationality</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$nationality.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Profession</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$profession.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Marrital status</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$mstatus.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Previous profession </td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$prevpro.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Birthcert Number</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$bcert.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Date of issue</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$bcertdoi.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Place of issue</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$bcertpoi.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">National ID</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$nidtype.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">National ID Number</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$nidnumber.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Telephone number</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$phone.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Email Address </td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$email.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">House number</td>
                            <td style="border-collapse:collapse;border:1px solid;"></td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Street name</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$Street.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Postal Address </td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$postal.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Suburb</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$suburb.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">City of residence</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$currentcity.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Country of residence</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$currentcountry.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Institution attended:</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$isntitute.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Year of commence:</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$yearstarted.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Year of completion:</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$yearended.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Address:</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$address.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;"><strong>Father Info</strong></td>
                            <td style="border-collapse:collapse;border:1px solid;"><strong>--------------</strong></td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Fathers name</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fathername.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Living/dead</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fatheralive.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Contacts</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fathercontact.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Fathers email</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fatheremail.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Father\'s hometown </td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fathertown.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Father\'s residential address</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fatherresaddress.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Fathers postal address </td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fatherposaddress.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Nationality</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fathernation.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;"><strong>Grand Parent Info</strong></td>
                            <td style="border-collapse:collapse;border:1px solid;"><strong>--------------</strong></td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Name of grand parent</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$grandpname.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Living or dead</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$grandpalive.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Telephone</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$grandptelephone.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Email</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$grandpemail.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Hometown   </td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$grandptown.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">residential address</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$grandpresaddress.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">postal address</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$grandppostaladdress.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Nationality</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$grandpnational.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;"><strong>Mothers details </strong></td>
                            <td style="border-collapse:collapse;border:1px solid;"><strong>----------------</strong></td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Mothers name</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$mothername.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Living/ dead</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$motheralive.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Telephone</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$mothercontact.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Email</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$motheremail.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Hometown</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$mothertown.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Residential address</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$motherresaddress.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Postal Address </td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$motherposaddress.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Nationality</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$mothernation.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;"><strong>Guarantor Info</strong></td>
                            <td style="border-collapse:collapse;border:1px solid;">-----------</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Name</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$guarantorname.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Occupation</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$guarantoroccupation.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Contact</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$guarantorcontact.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Residential Address</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$guarantorresaddress.'</td>
                            </tr>
                
                    </table>';

                    if (empty($_FILES['nidpic']['name']) || empty($_FILES['ppic']['name']) || empty($_FILES['bcertimage']['name'])) {
                        echo  'Upload required documents';
                    } else {
                        $response = sendmail('www.phpyolk.com', $subject, $message, 'Ewusidan Website', ['kpin463@gmail.com', 'danielewusi2@gmail.com']);

                        if ($response == 'success') {
                            echo 'success';
                        }
                    }
                } else {
                    if (insert('applicant', ['name' => $fname.' '.$lname, 'email' => $email, 'phone' => $phone, 'password' => md5($phone)]) == 'success') {
                        $cc = customfetch('applicant', [['email', '=', $email], ['phone', '=', $phone]], 'OR');
                        insert('activity', ['uid' => $cc[0]['id'], 'type' => 'Passport', 'paystatus' => 'unpaid', 'status' => 'pending', 'dateadded' => date('jS F, Y'), 'timeadded' => date('h :i A')]);
                        $bcertimage = $_FILES['bcertimage']['name'];
                        $nidtimage = $_FILES['nidpic']['name'];
                        $ppicimage = $_FILES['ppic']['name'];

                        $bcerttempname = $_FILES['bcertimage']['tmp_name'];
                        $nidtempname = $_FILES['nidpic']['tmp_name'];
                        $ppictempname = $_FILES['ppic']['tmp_name'];
                        // $imgEncoded = base64_encode(file_get_contents($bcerttempname));

                        move_uploaded_file($bcerttempname, '../yolkassets/upload/'.$bcertimage);
                        move_uploaded_file($nidtempname, '../yolkassets/upload/'.$nidtimage);
                        move_uploaded_file($ppictempname, '../yolkassets/upload/'.$ppicimage);
                        $subject = 'New Passport  Request';

                        // $emm = "<img alt='Embedded Image' src='data:image/png;base64,$imgEncoded' />";

                        $message = '
                    <p>Birth Certificate Image</p>

                    <img src="http://ewusidanconsult.com/yolkassets/upload/'.$bcertimage.'" width="200px"/>

                    <p>National ID Image</p>

                    <img src="http://ewusidanconsult.com/yolkassets/upload/'.$nidtimage.'" width="200px"/>

                    <p>Passport Size Picture</p>

                    <img src="http://ewusidanconsult.com/yolkassets/upload/'.$ppicimage.'" width="200px"/>
                    
                    <table style="width:100%;border-collapse:collapse;border:1px solid;" >

                                <tr>
                                <th style="border-collapse:collapse;border:1px solid;">Question</th>
                                <th style="border-collapse:collapse;border:1px solid;">Answers</th>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">surname</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$lname.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">First name</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$fname.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Other name </td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$oname.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Gender</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$gender.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Date of birth</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$dob.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">City or town of birth</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$pob.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Country of birth</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$cob.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Region of birth</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$rob.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Height</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$height.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Colour of eyes</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$eyecolor.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Colour of hair</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$haircolor.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Nationality</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$nationality.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Profession</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$profession.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Marrital status</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$mstatus.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Previous profession </td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$prevpro.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Birthcert Number</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$bcert.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Date of issue</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$bcertdoi.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Place of issue</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$bcertpoi.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">National ID</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$nidtype.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">National ID Number</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$nidnumber.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Telephone number</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$phone.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Email Address </td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$email.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">House number</td>
                                <td style="border-collapse:collapse;border:1px solid;"></td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Street name</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$Street.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Postal Address </td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$postal.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Suburb</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$suburb.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">City of residence</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$currentcity.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Country of residence</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$currentcountry.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Institution attended:</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$isntitute.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Year of commence:</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$yearstarted.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Year of completion:</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$yearended.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Address:</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$address.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;"><strong>Father Info</strong></td>
                                <td style="border-collapse:collapse;border:1px solid;"><strong>--------------</strong></td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Fathers name</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$fathername.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Living/dead</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$fatheralive.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Contacts</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$fathercontact.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Fathers email</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$fatheremail.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Father\'s hometown </td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$fathertown.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Father\'s residential address</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$fatherresaddress.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Fathers postal address </td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$fatherposaddress.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Nationality</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$fathernation.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;"><strong>Grand Parent Info</strong></td>
                                <td style="border-collapse:collapse;border:1px solid;"><strong>--------------</strong></td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Name of grand parent</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$grandpname.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Living or dead</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$grandpalive.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Telephone</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$grandptelephone.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Email</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$grandpemail.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Hometown   </td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$grandptown.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">residential address</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$grandpresaddress.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">postal address</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$grandppostaladdress.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Nationality</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$grandpnational.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;"><strong>Mothers details </strong></td>
                                <td style="border-collapse:collapse;border:1px solid;"><strong>----------------</strong></td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Mothers name</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$mothername.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Living/ dead</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$motheralive.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Telephone</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$mothercontact.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Email</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$motheremail.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Hometown</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$mothertown.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Residential address</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$motherresaddress.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Postal Address </td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$motherposaddress.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Nationality</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$mothernation.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;"><strong>Guarantor Info</strong></td>
                                <td style="border-collapse:collapse;border:1px solid;">-----------</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Name</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$guarantorname.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Occupation</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$guarantoroccupation.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Contact</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$guarantorcontact.'</td>
                                </tr>

                                <tr>
                                <td style="border-collapse:collapse;border:1px solid;">Residential Address</td>
                                <td style="border-collapse:collapse;border:1px solid;">'.$guarantorresaddress.'</td>
                                </tr>
                    
                        </table>';

                        if (empty($_FILES['nidpic']['name']) || empty($_FILES['ppic']['name']) || empty($_FILES['bcertimage']['name'])) {
                            echo  'Upload required documents';
                        } else {
                            $response = sendmail('www.phpyolk.com', $subject, $message, 'Ewusidan Website', ['kpin463@gmail.com', 'danielewusi2@gmail.com']);

                            if ($response == 'success') {
                                echo 'success';
                            }
                        }
                    } else {
                        echo'something went wrong';
                    }
                }
            }

            break;

        default:

        break;
    }
}
