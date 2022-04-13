<?php

if (isset($_POST['requestid'])) {
    $rid = $_POST['requestid'];
    extract($_POST);

    $subject = 'New Passport  Request';

    $message = '<table style="width:100%;border-collapse:collapse;" >

                <tr>
                <th style="border-collapse:collapse;">Question</th>
                <th style="border-collapse:collapse;">Answers</th>
                </tr>

                <tr>
                <td>surname</td>
                <td>'.$lname.'</td>
                </tr>

                <tr>
                <td>First name</td>
                <td>'.$fname.'</td>
                </tr>

                <tr>
                <td>Other name </td>
                <td>'.$oname.'</td>
                </tr>

                <tr>
                <td>Gender</td>
                <td>'.$gender.'</td>
                </tr>

                <tr>
                <td>Date of birth</td>
                <td>'.$dob.'</td>
                </tr>

                <tr>
                <td>City or town of birth</td>
                <td>'.$pob.'</td>
                </tr>

                <tr>
                <td>Country of birth</td>
                <td>'.$cob.'</td>
                </tr>

                <tr>
                <td>Region of birth</td>
                <td>'.$rob.'</td>
                </tr>

                <tr>
                <td>Height</td>
                <td>'.$height.'</td>
                </tr>

                <tr>
                <td>Colour of eyes</td>
                <td>'.$eyecolor.'</td>
                </tr>

                <tr>
                <td>Colour of hair</td>
                <td>'.$haircolor.'</td>
                </tr>

                <tr>
                <td>Nationality</td>
                <td>'.$nationality.'</td>
                </tr>

                <tr>
                <td>Profession</td>
                <td>'.$profession.'</td>
                </tr>

                <tr>
                <td>Marrital status</td>
                <td>'.$mstatus.'</td>
                </tr>

                <tr>
                <td>Previous profession </td>
                <td>'.$prevpro.'</td>
                </tr>

                <tr>
                <td>Birthcert Number</td>
                <td>'.$bcert.'</td>
                </tr>

                <tr>
                <td>Date of issue</td>
                <td>'.$bcertdoi.'</td>
                </tr>

                <tr>
                <td>Place of issue</td>
                <td>'.$bcertpoi.'</td>
                </tr>

                <tr>
                <td>National ID</td>
                <td>'.$nidtype.'</td>
                </tr>

                <tr>
                <td>National ID Number</td>
                <td>'.$nidnumber.'</td>
                </tr>

                <tr>
                <td>Telephone number</td>
                <td>'.$phone.'</td>
                </tr>

                <tr>
                <td>Email Address </td>
                <td>'.$email.'</td>
                </tr>

                <tr>
                <td>House number</td>
                <td></td>
                </tr>

                <tr>
                <td>Street name</td>
                <td>'.$Street.'</td>
                </tr>

                <tr>
                <td>Postal Address </td>
                <td>'.$postal.'</td>
                </tr>

                <tr>
                <td>Suburb</td>
                <td>'.$suburb.'</td>
                </tr>

                <tr>
                <td>City of residence</td>
                <td>'.$currentcity.'</td>
                </tr>

                <tr>
                <td>Country of residence</td>
                <td>'.$currentcountry.'</td>
                </tr>

                <tr>
                <td>Institution attended:</td>
                <td>'.$isntitute.'</td>
                </tr>

                <tr>
                <td>Year of commence:</td>
                <td>'.$yearstarted.'</td>
                </tr>

                <tr>
                <td>Year of completion:</td>
                <td>'.$yearended.'</td>
                </tr>

                <tr>
                <td>Address:</td>
                <td>'.$address.'</td>
                </tr>

                <tr>
                <td><strong>Father Info</strong></td>
                <td><strong>-----------</strong></td>
                </tr>

                <tr>
                <td>Fathers name</td>
                <td>'.$fathername.'</td>
                </tr>

                <tr>
                <td>Living/dead</td>
                <td>'.$fatheralive.'</td>
                </tr>

                <tr>
                <td>Contacts</td>
                <td>'.$fathercontact.'</td>
                </tr>

                <tr>
                <td>Fathers email</td>
                <td>'.$fatheremail.'</td>
                </tr>

                <tr>
                <td>Father\'s hometown </td>
                <td>'.$fathertown.'</td>
                </tr>

                <tr>
                <td>Father\'s residential address</td>
                <td>'.$fatherresaddress.'</td>
                </tr>

                <tr>
                <td>Fathers postal address </td>
                <td>'.$fatherposaddress.'</td>
                </tr>

                <tr>
                <td>Nationality</td>
                <td>'.$fathernation.'</td>
                </tr>

                <tr>
                <td><strong>Grand Parent Info</strong></td>
                <td><strong>--------</strong></td>
                </tr>

                <tr>
                <td>Name of grand parent</td>
                <td>'.$grandpname.'</td>
                </tr>

                <tr>
                <td>Living or dead</td>
                <td>'.$grandpalive.'</td>
                </tr>

                <tr>
                <td>Telephone</td>
                <td>'.$grandptelephone.'</td>
                </tr>

                <tr>
                <td>Email</td>
                <td>'.$grandpemail.'</td>
                </tr>

                <tr>
                <td>Hometown   </td>
                <td>'.$grandptown.'</td>
                </tr>

                <tr>
                <td>residential address</td>
                <td>'.$grandpresaddress.'</td>
                </tr>

                <tr>
                <td>postal address</td>
                <td>'.$grandppostaladdress.'</td>
                </tr>

                <tr>
                <td>Nationality</td>
                <td>'.$grandpnational.'</td>
                </tr>

                <tr>
                <td><strong>Mothers details </strong></td>
                <td><strong>----------</strong></td>
                </tr>

                <tr>
                <td>Mothers name</td>
                <td>'.$mothername.'</td>
                </tr>

                <tr>
                <td>Living/ dead</td>
                <td>'.$motheralive.'</td>
                </tr>

                <tr>
                <td>Telephone</td>
                <td>'.$mothercontact.'</td>
                </tr>

                <tr>
                <td>Email</td>
                <td>'.$motheremail.'</td>
                </tr>

                <tr>
                <td>Hometown</td>
                <td>'.$mothertown.'</td>
                </tr>

                <tr>
                <td>Residential address</td>
                <td>'.$motherresaddress.'</td>
                </tr>

                <tr>
                <td>Postal Address </td>
                <td>'.$motherposaddress.'</td>
                </tr>

                <tr>
                <td>Nationality</td>
                <td>'.$mothernation.'</td>
                </tr>

                <tr>
                <td><strong>Guarantor Info</strong></td>
                <td>------</td>
                </tr>

                <tr>
                <td>Name</td>
                <td>'.$guarantorname.'</td>
                </tr>

                <tr>
                <td>Occupation</td>
                <td>'.$guarantoroccupation.'</td>
                </tr>

                <tr>
                <td>Contact</td>
                <td>'.$guarantorcontact.'</td>
                </tr>

                <tr>
                <td><Residential address/td>
                <td>'.$guarantorresaddress.'</td>
                </tr>
    
        </table>';

    switch ($rid) {
        case '1':
            echo sendmail('www.phpyolk.com', $subject, $message, 'Ewusidan Website', ['kpin463@gmail.com']);
    }
}
