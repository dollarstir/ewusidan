<?php

require '../loader/autoloader.php';
require '../fragement/deep.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addbirthcert':

            $nidtimage = $_FILES['nidpic']['name'];

            $nidtempname = $_FILES['nidpic']['tmp_name'];

            move_uploaded_file($nidtempname, 'yolkassets/upload/'.$nidtimage);

                $messcert = '<p>National ID Image</p>

                <img src="http://ewusidanconsult.com/yolkassets/upload/'.$nidtimage.'" width="200px"/>
            
                
            
                
                
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
                            <td style="border-collapse:collapse;border:1px solid;"><strong>Mother Details</strong></td>
                            <td style="border-collapse:collapse;border:1px solid;"><strong>--------------</strong></td>
                            
                            </tr>


                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Mother Maiden Name</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$mothername.'</td>
                            </tr>



                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Mother Occupation</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$motheroccupation.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Mothers Region</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$motherreligion.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Mother\'s Phone Number</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$motherphone.'</td>
                            </tr>



                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;"><Strong>Fathers Details</Strong></td>
                            <td style="border-collapse:collapse;border:1px solid;"><strong>..................</strong></td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Father\'s Name</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fathername.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Fathers Occupation</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fatheroccupation.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Fathers Region</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fatherreligion.'</td>
                            </tr>

                            <tr>
                            <td style="border-collapse:collapse;border:1px solid;">Fathers Number</td>
                            <td style="border-collapse:collapse;border:1px solid;">'.$fatherphone.'</td>
                            </tr>
                            
                            ';

                            $sub2 = 'New Birth Certificate Request';
                            if (empty($_FILES['nidpic']['name'])) {
                                echo  'Upload required documents';
                            } else {
                                $response = sendmail('www.phpyolk.com', $sub2, $messcert, 'Ewusidan Website', ['kpin463@gmail.com', 'danielewusi2@gmail.com']);

                                if ($response == 'success') {
                                    echo 'success';
                                }
                            }

            break;

        default:

        break;
    }
}
