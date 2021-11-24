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

        <?php
        if(isset($_GET['record'])){

            echo $shipping_id= $_GET['record'];
            $get_data = mysqli_query($conn,"select * from tb_shipping_form_master where id='$shipping_id'");
            while ($row=mysqli_fetch_array($get_data)) {
                
                $tracking_no  = $row['tracking_no']; 
                $date = $row['date'];
                $from_Add =  $row['from_address'];
                $to_add = $row['to_address']; 
                $gl_Account =  $row['gl_account_number'];
                $requester_name = $row['requester_name'];
                $requester_email =  $row['requester_email'];
                $date2 =  $row['date'];
                $req_dept_name =  $row['requester_dept_name'];
                $requester_dept_no =  $row['requester_dept_no'];
                $domestic =  $row['domestic'];
                $international =  $row['international'];
                $desc_type =  $row['desc_type'];
                $total =  $row['total'];    
                $weight = $row['weight'];
                $no_of_pc = $row['no_of_pc'];
                    
            }
        
        ?>

        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Tracking No. <?php echo $tracking_no; ?> </h4>
                            
                        </div>
                    </div>
                    <!-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div> -->
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Shipping Detail</h4>
                            </div>
                            <hr>

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-2">
                                        <h5>Requester Name</h5>
                                        
                                    </div>

                                    <div class="col-md-2">
                                        <label> <?php echo $requester_name; ?> <label>
                                    </div>

                                    <div class="col-md-2">
                                    <h5>Requester Email</h5>
                                    </div>

                                    <div class="col-md-2">
                                    <label> <?php echo $requester_email; ?> <label>
                                    </div>

                                    <div class="col-md-2">
                                    <h5>Requester Dept Name</h5>
                                    </div>

                                    <div class="col-md-2">
                                    <label> <?php echo $req_dept_name; ?> <label>
                                    </div>

                                </div>

                                <br>
                                <div class="row">

                                    <div class="col-md-2">
                                        <h5>From Address</h5>
                                        
                                    </div>

                                    <div class="col-md-2">
                                        <label> <?php echo $from_Add; ?> <label>
                                    </div>

                                    <div class="col-md-2">
                                    <h5>To Address</h5>
                                    </div>

                                    <div class="col-md-2">
                                    <label> <?php echo $to_add; ?> <label>
                                    </div>

                                    <div class="col-md-2">
                                    <h5>Domestic/International</h5>
                                    </div>

                                    <div class="col-md-2">
                                    <label> <?php echo $domestic; ?> <label>
                                    </div>

                                </div>

                                <br>

                                <div class="row">

                                    <div class="col-md-2">
                                        <h5>total Pcs</h5>
                                        
                                    </div>

                                    <div class="col-md-2">
                                        <label> <?php echo $no_of_pc; ?> <label>
                                    </div>

                                    <div class="col-md-2">
                                    <h5>Weight</h5>
                                    </div>

                                    <div class="col-md-2">
                                    <label> <?php echo $weight; ?> <label>
                                    </div>

                                    <div class="col-md-2">
                                    <h5>Total Amount</h5>
                                    </div>

                                    <div class="col-md-2">
                                    <label> <?php echo $total; ?> <label>
                                    </div>

                                </div>
                            </div>


                            <div class="card-header">
                                <h4 class="card-title">Item Details</h4>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered table-striped my-4" style="min-width: 480px;">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>HS Code</th>
                                                <th>Unit Detail</th>
                                                <th>Unit Qty</th>
                                                <th>Unit Value</th>
                                                <th>Unit Total</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php

    
                                                $get_data2 = mysqli_query($conn,"select * from tb_shipping_form_detail where master_id='$shipping_id'");

                                                $i = 1;

                                                if($get_data2){
                                                
                                                while ($row2=mysqli_fetch_array($get_data2)) {
                                                    ?>

                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $row2['hs_code']; ?></td>
                                                        <td><?php echo $row2['unit_detail']; ?></td>
                                                        <td><?php echo $row2['unit_qty']; ?></td>
                                                        <td><?php echo $row2['unit_value']; ?></td>
                                                        <td><?php echo $row2['unit_total']; ?></td>
                                                        
                                                    </tr>

                                                    <?php
                                                $i++; }
                                            
                                            }
                                            ?>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>S.No</th>
                                                <th>HS Code</th>
                                                <th>Unit Detail</th>
                                                <th>Unit Qty</th>
                                                <th>Unit Value</th>
                                                <th>Unit Total</th>
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

        <?php

       }

        ?>
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