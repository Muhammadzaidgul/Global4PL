<?php
include 'include/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Shipping Authorization Form </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php require 'include/nav-header.php'; ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php require 'include/header.php'; ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
         <?php require 'include/sidebar.php'; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Shipping Records</h4>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Record Logs</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Tracking No.</th>
                                                <th>Date</th>
                                                <th>Ship From</th>
                                                <th>Ship To</th>
                                                <th>G/L Account</th>
                                                <th>Requester Name</th>
                                                <th>Email Address</th>
                                                <th>Date</th>
                                                <th>Dept Name</th>
                                                <th>Description Type</th>
                                                <th>Total Amount</th>
                                                <th>Weight</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php

                                            if(isset($_GET['client'])){
                                                $client_id = $_GET['client'];
                                                $get_data = mysqli_query($conn,"select * from tb_shipping_form_master where created_by='$client_id");

                                                $i = 1;

                                                if($get_data){

                                                
                                                while ($row=mysqli_fetch_array($get_data)) {
                                                    ?>

                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $row['tracking_no']; ?></td>
                                                        <td><?php echo $row['date']; ?></td>
                                                        <td><?php echo $row['from_address']; ?></td>
                                                        <td><?php echo $row['to_address']; ?></td>
                                                        <td><?php echo $row['gl_account_number']; ?></td>
                                                        <td><?php echo $row['requester_name']; ?></td>
                                                        <td><?php echo $row['requester_email']; ?></td>
                                                        <td><?php echo $row['date']; ?></td>
                                                        <td><?php echo $row['requester_dept_name']; ?></td>
                                                        <td><?php echo $row['desc_type']; ?></td>
                                                        <td><?php echo $row['total']; ?></td>
                                                        <td><?php echo $row['weight']; ?></td>
                                                    </tr>

                                                    <?php
                                                $i++; }
                                            }
                                            }else{
                                                $get_data = mysqli_query($conn,"select * from tb_shipping_form_master");    
                                                
                                                $i = 1;
                                                while ($row=mysqli_fetch_array($get_data)) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><a href="view_record.php?record=<?php echo $row['id']; ?>">
                                                        <?php echo $row['tracking_no']; ?></a>
                                                    </td>
                                                    <td><?php echo $row['date']; ?></td>
                                                    <td><?php echo $row['from_address']; ?></td>
                                                    <td><?php echo $row['to_address']; ?></td>
                                                    <td><?php echo $row['gl_account_number']; ?></td>
                                                    <td><?php echo $row['requester_name']; ?></td>
                                                    <td><?php echo $row['requester_email']; ?></td>
                                                    <td><?php echo $row['date']; ?></td>
                                                    <td><?php echo $row['requester_dept_name']; ?></td>
                                                    <td><?php echo $row['desc_type']; ?></td>
                                                    <td><?php echo $row['total']; ?></td>
                                                    <td><?php echo $row['weight']; ?></td>
                                                </tr>


                                            <?php
                                            $i++; }
                                        }
                                            ?>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Tracking No.</th>
                                                <th>Date</th>
                                                <th>Ship From</th>
                                                <th>Ship To</th>
                                                <th>G/L Account</th>
                                                <th>Requester Name</th>
                                                <th>Email Address</th>
                                                <th>Date</th>
                                                <th>Dept Name</th>
                                                <th>Description Type</th>
                                                <th>Total Amount</th>
                                                <th>Weight</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">ZedgeTech</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    


    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>

</body>

</html>