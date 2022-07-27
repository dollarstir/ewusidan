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
        <td><a class="btn btn-primary" href="updateactivity?token='.$row['timeadded'].'"><i class="fa fa-edit"></i></a></td>
        
    </tr>';
    }
}
