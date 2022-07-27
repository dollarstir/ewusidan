<?php

function begin($title)
{
    echo '<!DOCTYPE html>
    <html lang="zxx">
    
    <head>
    
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>'.$title.'</title>
    
    
        <link rel="stylesheet" href="backend/css/bootstrap1.min.css" />
    
        <link rel="stylesheet" href="backend/vendors/themefy_icon/themify-icons.css" />
    
        <link rel="stylesheet" href="backend/vendors/scroll/scrollable.css" />
    
        <link rel="stylesheet" href="backend/vendors/font_awesome/css/all.min.css" />
    
        <link rel="stylesheet" href="backend/vendors/datatable/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="backend/vendors/datatable/css/responsive.dataTables.min.css" />
        <link rel="stylesheet" href="backend/vendors/datatable/css/buttons.dataTables.min.css" />
    
    
        <link rel="stylesheet" href="backend/css/metisMenu.css">
    
        <link rel="stylesheet" href="backend/css/style1.css" />
    </head>';
}

function script()
{
    echo'<script src="backend/js/jquery1-3.4.1.min.js"></script>

    <script src="backend/js/popper1.min.js"></script>

    <script src="backend/js/bootstrap.min.js.php"></script>

    <script src="backend/js/metisMenu.js"></script>

    <script src="backend/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="backend/vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="backend/vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="backend/vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="backend/vendors/datatable/js/jszip.min.js"></script>
    <script src="backend/vendors/datatable/js/pdfmake.min.js"></script>
    <script src="backend/vendors/datatable/js/vfs_fonts.js"></script>
    <script src="backend/vendors/datatable/js/buttons.php5.min.js"></script>
    <script src="backend/vendors/datatable/js/buttons.print.min.js"></script>

    <script src="backend/vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="backend/vendors/scroll/scrollable-custom.js"></script>

    <script src="backend/js/custom.js"></script>';
}

function admintopbar()
{
    echo'<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0 ">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="header_notification_warp d-flex align-items-center">
                        <li>
                            <a class="bell_notification_clicker nav-link-notify" href="viewreviews"> <img src="backend/img/icon/bell.svg" alt="">
                            </a>

                            <div class="Menu_NOtification_Wrap">
                                <div class="notification_Header">
                                    <h4>Notifications</h4>
                                </div>
                                <div class="Notification_body">

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href=""><img src="backend/img/staf/2.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="backend/#">
                                                <h5>Cool Marketing </h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href=""><img src="backend/img/staf/4.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="backend/#">
                                                <h5>Awesome packages</h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="backend/#"><img src="backend/img/staf/3.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="backend/#">
                                                <h5>what a packages</h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="backend/#"><img src="backend/img/staf/2.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="backend/#">
                                                <h5>Cool Marketing </h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="backend/#"><img src="backend/img/staf/4.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="backend/#">
                                                <h5>Awesome packages</h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="backend/#"><img src="backend/img/staf/3.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="backend/#">
                                                <h5>what a packages</h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nofity_footer">
                                    <div class="submit_button text-center pt_20">
                                        <a href="backend/#" class="btn_1">See More</a>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li>
                            <a class="CHATBOX_open nav-link-notify" href="viewmessages"> <img src="backend/img/icon/msg.svg" alt=""> </a>
                        </li>
                    </div>
                    <div class="profile_info">
                        <img src="yolkassets/upload/'.$_SESSION['admin']['pic'].'" alt="#">
                        <div class="profile_info_iner">
                            <div class="profile_author_name">
                                <!--<p>Neurologist </p>-->
                                <h5>'.$_SESSION['admin']['name'].'</h5>
                            </div>
                            <div class="profile_info_details">
                                <a href="profile">My Profile </a>
                                <a href="app">Settings</a>
                                <button class="adminlogout"  style="border:none;background-color:transparent;padding:4px;">Log Out </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
}

function users()
{
    $res = fetchall('applicant');
    foreach ($res as $row) {
        echo '<tr>
        <th scope="row"> <a href="" class="question_content"> '.$row['name'].'</a></th>
        <td>'.$row['email'].'</td>
        <td>'.$row['phone'].'</td>
        
    </tr>';
    }
}

function orders()
{
    $res = fetchall('activity');
    foreach ($res as $row) {
        $res2 = customfetch('applicant', [['id', '=', $row['uid']]]);
        $rr = $res2[0];

        echo '<tr>
        <th scope="row"> <a href="" class="question_content"> '.$rr['name'].'</a></th>
        <td>'.$row['type'].'</td>
        <td>'.$row['paystatus'].'</td>
        <td>'.$row['status'].'</td>
        <td>'.$row['dateadded'].'</td>
        <td>'.$row['timeadded'].'</td>
        <td><a class="btn btn-primary" href="updateactivity?token='.$row['id'].'"><i class="fa fa-edit"></i>Update</a></td>
        
    </tr>';
    }
}

function neworders()
{
    $res = customfetch('activity', [['status', '=', 'pending']]);
    foreach ($res as $row) {
        $res2 = customfetch('applicant', [['id', '=', $row['uid']]]);
        $rr = $res2[0];

        echo '<tr>
        <th scope="row"> <a href="" class="question_content"> '.$rr['name'].'</a></th>
        <td>'.$row['type'].'</td>
        <td>'.$row['paystatus'].'</td>
        <td>'.$row['status'].'</td>
        <td>'.$row['dateadded'].'</td>
        <td>'.$row['timeadded'].'</td>
        <td><a class="btn btn-primary" href="updateactivity?token='.$row['id'].'"><i class="fa fa-edit"></i>Update</a></td>
        
    </tr>';
    }
}

function recievedorders()
{
    $res = customfetch('activity', [['status', '=', 'recieved']]);
    foreach ($res as $row) {
        $res2 = customfetch('applicant', [['id', '=', $row['uid']]]);
        $rr = $res2[0];

        echo '<tr>
        <th scope="row"> <a href="" class="question_content"> '.$rr['name'].'</a></th>
        <td>'.$row['type'].'</td>
        <td>'.$row['paystatus'].'</td>
        <td>'.$row['status'].'</td>
        <td>'.$row['dateadded'].'</td>
        <td>'.$row['timeadded'].'</td>
        <td><a class="btn btn-primary" href="updateactivity?token='.$row['id'].'"><i class="fa fa-edit"></i>Update</a></td>
        
    </tr>';
    }
}

function proccessedorders()
{
    $res = customfetch('activity', [['status', '=', 'processed']]);
    foreach ($res as $row) {
        $res2 = customfetch('applicant', [['id', '=', $row['uid']]]);
        $rr = $res2[0];

        echo '<tr>
        <th scope="row"> <a href="" class="question_content"> '.$rr['name'].'</a></th>
        <td>'.$row['type'].'</td>
        <td>'.$row['paystatus'].'</td>
        <td>'.$row['status'].'</td>
        <td>'.$row['dateadded'].'</td>
        <td>'.$row['timeadded'].'</td>
        <td><a class="btn btn-primary" href="updateactivity?token='.$row['id'].'"><i class="fa fa-edit"></i>Update</a></td>
        
    </tr>';
    }
}
