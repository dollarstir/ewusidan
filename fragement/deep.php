<?php

function addbirthcert($fname, $oname, $lname, $phone, $email, $gender, $dob, $pob, $cob, $rob, $mothername, $motheroccupation, $motherreligion, $motherphone, $fathername, $fatheroccupation, $fatherreligion, $fatherphone)
{
    if (empty(trim($fname)) || empty(trim($lname)) || empty(trim($phone))) {
        echo 'Name , and phone number must be field';
    } else {
        if (authenticate('applicant', [['email', '=', $email], ['phone', '=', $phone]], 'OR') == 'success') {
            $cc = customfetch('applicant', [['email', '=', $email], ['phone', '=', $phone]], 'OR');
            $coooo = countall('activity');
            $orderid = 'EWS'.date('Y').''.($coooo + 1);
            insert('activity', ['uid' => $cc[0]['id'], 'type' => 'Birth Certifacte', 'paystatus' => 'unpaid', 'status' => 'pending', 'dateadded' => date('jS F, Y'), 'timeadded' => date('h :i A'), 'orderid' => $orderid]);
            $nidtimage = $_FILES['nidpic']['name'];

            $nidtempname = $_FILES['nidpic']['tmp_name'];

            move_uploaded_file($nidtempname, '../yolkassets/upload/'.$nidtimage);

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
                    session_start();
                    $_SESSION['uid'] = $cc[0]['id'];
                    $_SESSION['orderid'] = $orderid;

                    echo 'successbirthcert';
                }
            }
        } else {
            if (insert('applicant', ['name' => $fname.' '.$lname, 'email' => $email, 'phone' => $phone, 'password' => md5($phone)]) == 'success') {
                $cc = customfetch('applicant', [['email', '=', $email], ['phone', '=', $phone]], 'OR');
                $coooo = countall('activity');
                $orderid = 'EWS'.date('Y').''.($coooo + 1);
                insert('activity', ['uid' => $cc[0]['id'], 'type' => 'Birth Certifacte', 'paystatus' => 'unpaid', 'status' => 'pending', 'dateadded' => date('jS F, Y'), 'timeadded' => date('h :i A'), 'orderid' => $orderid]);
                $nidtimage = $_FILES['nidpic']['name'];

                $nidtempname = $_FILES['nidpic']['tmp_name'];

                move_uploaded_file($nidtempname, '../yolkassets/upload/'.$nidtimage);

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
                        session_start();
                        $_SESSION['uid'] = $cc[0]['id'];
                        $_SESSION['orderid'] = $orderid;

                        echo 'successbirthcert';
                    }
                }
            } else {
                echo'something went wrong';
            }
        }
    }
}

function addpassport($fname, $oname, $lname, $phone, $email, $gender, $dob, $pob, $cob, $rob, $mothername, $motheroccupation, $motherreligion, $motherphone, $fathername, $fatheroccupation, $fatherreligion, $fatherphone)
{
}
