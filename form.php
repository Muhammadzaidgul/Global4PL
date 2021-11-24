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
                            <h4>Shipping Authorization Form</h4>
                          <!--   <span class="ml-1">Element</span> -->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        
                    </div>
                    
                </div>

               <div class="row" >
               <div class="col-sm-12 col-md-12 ">
                        <div class="alert alert-dark notification">
                                <p class="notificaiton-title"><strong>Alert! </strong> Following fields are mandatory to submit the form.
                                </p>

                                <ul class="list-icons">
                                    <li> <span class="align-middle"><i class="ti-angle-right"></i></span> From Address</li>
                                    <li> <span class="align-middle"><i class="ti-angle-right"></i></span> To Address</li>
                                    <li> <span class="align-middle"><i class="ti-angle-right"></i></span> Requester Name</li>
                                    <li> <span class="align-middle"><i class="ti-angle-right"></i></span> Requester Email</li>
                                </ul>
                                <!-- <p>What is the loop of Creation? How is there something from nothing? In spite of the fact.. </p>
                                <button class="btn btn-danger btn-sm rounded-0">Confirm</button>
                                <button class="btn btn-link btn-sm">Cancel</button> -->
                            </div>
                    </div>

                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <!-- <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div> -->
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="#" name="frm" onkeydown="return (event.keyCode!=13);" >

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>SHIP FROM </label>
                                               <!--  <label>State</label> -->
                                                <select name="counname" id="counname" onchange="country1();" class="form-control" required>
                                                    <option value="Select the Address" selected="selected">Select the Address</option>
                                                          <option value="1322 Bordeaux Drive Sunnyvale, CA 94089 Phone: 408-572-5200">1322 Bordeaux Drive</option>

                                                          <option value="Building 100 Suite 100 Allentown PA 18106 USA
                                                          610-366-9004, 610.366.5049">7520 Morris Court,</option>
                                                          
                                                          <option value="Dr.Annapolis Junction MD 20701 USA 240.264.5500, 240.264.5501">9020 Junction </option>
                                                          <option value="Andy Liu Suite 234 Woodland Hills CA 91364 USA 818-226-6060, 818-226-6062">21243 Ventura Blvd.</option>
                                                          
                                                          <option value="94089 USA 408.572.5200, 408.572.5343">169 Java Drive Sunnyvale CA</option>

                                                          <option value="London, EC2Y 9HT 94089 United Kingdom +44 (0)1162 793941 Colin Rhodes">1 Ropemaker Street</option>

                                                          <option value="391B Orchard Road, #23-01 Ngee Ann City Tower B Singapore 238874 +65 6832 8099, +65 6244 9604">Infinera Asia Limited</option>

                                                          <option value="OYA Bldg 3rd Floor 3-9-6, Nishi-Shinjuku Sinjuku-ku, Tokyo 160-0023, Japan">Infinera Japan K.K.</option>
                                                          
                                                          <option value="401 Level 4, 6, Brunton Road Bangalore 560001 India +91-80-25321402/3/4/5 +91-80-25321401">Prestige Solitaire</option>

                                                          <option value="Office Tower W1 Oriental Plaza No.1 East Chang An Avenue Dong Cheng District Beijing, 100738, China">Suite 806, 8/F</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>SHIP TO</label>
                                                <!-- <label>State</label> -->
                                                <select name="shipname" id="shipname" onchange="javascript: shipto()" class="form-control" required>

                                                    <option value="Select the Address" selected="selected">Select the Address</option>
<option value="Please fill the shipping authorization form">New Address</option>
                                                    <option value="1322 Bordeaux Drive Sunnyvale, CA 94089 Phone: 408-572-5200">1322 Bordeaux Drive</option>

                                                          <option value="Building 100 Suite 100 Allentown PA 18106 USA
                                                          610-366-9004, 610.366.5049">7520 Morris Court,</option>
                                                          
                                                          <option value="Dr.Annapolis Junction MD 20701 USA 240.264.5500, 240.264.5501">9020 Junction </option>
                                                          <option value="Andy Liu Suite 234 Woodland Hills CA 91364 USA 818-226-6060, 818-226-6062">21243 Ventura Blvd.</option>
                                                          
                                                          <option value="94089 USA 408.572.5200, 408.572.5343">169 Java Drive Sunnyvale CA</option>

                                                          <option value="London, EC2Y 9HT 94089 United Kingdom +44 (0)1162 793941 Colin Rhodes">1 Ropemaker Street</option>

                                                          <option value="391B Orchard Road, #23-01 Ngee Ann City Tower B Singapore 238874 +65 6832 8099, +65 6244 9604">Infinera Asia Limited</option>

                                                          <option value="OYA Bldg 3rd Floor 3-9-6, Nishi-Shinjuku Sinjuku-ku, Tokyo 160-0023, Japan">Infinera Japan K.K.</option>
                                                          
                                                          <option value="401 Level 4, 6, Brunton Road Bangalore 560001 India +91-80-25321402/3/4/5 +91-80-25321401">Prestige Solitaire</option>

                                                          <option value="Office Tower W1 Oriental Plaza No.1 East Chang An Avenue Dong Cheng District Beijing, 100738, China">Suite 806, 8/F</option>
                                                    
                                                </select>
                                            </div>
                                            
                                            
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <div id="name"></div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <div id="nameto"></div>
                                            </div>
                                        </div>





                                        <!-- FEDEX Rate Response -->

                                        <!-- FEDEX Rate Response -->

                                        <!-- New address form -->
                                        <div id="Please fill the shipping authorization form" style="display:none">
                                            
                                            <div class="form-row">
                                                
                                                    <h4 class="card-title" style="padding-left: 5px; margin-top: 10px;">Address Form</h4>
                                                
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label>Company or Name</label>
                                                    <input type="text" name="comp_name" class="form-control">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>Attention</label>
                                                    <input type="text" name="attention" class="form-control">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>Address</label>
                                                    <input type="text" name="address" class="form-control">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>Country</label>
                                                    <input type="text" name="country" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label>Postal Zipcode:</label>
                                                    <input type="text" id="postalCode" name="zipcode" class="form-control">
                                                    <!-- onblur="getPostalDetail()" -->
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>City</label>
                                                    <input type="text" name="city" class="form-control">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>State</label>
                                                    <input type="text" name="state" class="form-control">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" class="form-control">
                                                </div>
                                            </div>


                                            <div class="form-row">
                                         
                                            <p id="txtHint5"></p>
                                        </div>

                                        </div>
                                        
                                        <!-- End New address form -->

                                        <div class="form-row">
                                            
                                                <h4 class="card-title" style="padding-left: 5px; margin-top: 10px;">Domestic:</h4>
                                            
                                        </div>




                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Next Day Air Early AM" name="domestic[]">
                                                    <label class="form-check-label">
                                                        Next Day Air Early AM
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="Next Day Air" type="radio" name="domestic[]">
                                                    <label class="form-check-label">
                                                        Next Day Air
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="Next Day Saver" type="radio" name="domestic[]">
                                                    <label class="form-check-label">
                                                        Next Day Saver
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="2nd Day Air AM" name="domestic[]">
                                                    <label class="form-check-label">
                                                        2nd Day Air AM
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="2nd Day Air" type="radio" name="domestic[]">
                                                    <label class="form-check-label">
                                                        2nd Day Air
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="3 Day Select" type="radio" name="domestic[]">
                                                    <label class="form-check-label">
                                                        3 Day Select
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="domestic[]">
                                                    <label class="form-check-label">
                                                        Ground
                                                    </label>
                                                </div>
                                            </div>
                                            
                                        </div>


                                        <div class="form-row">
                                            
                                                <h4 class="card-title" style="padding-left: 5px; margin-top: 10px;">International:</h4>
                                            
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="1 Day Freight" type="radio" name="international[]">
                                                    <label class="form-check-label">
                                                        1 Day Freight
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="2 Day Freight" type="radio" name="international[]">
                                                    <label class="form-check-label">
                                                        2 Day Freight
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="3 Day Freight" type="radio" name="international[]">
                                                    <label class="form-check-label">
                                                        3 Day Freight
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="International Priority" type="radio" name="international[]">
                                                    <label class="form-check-label">
                                                        International Priority
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="International Economy" type="radio" name="international[]">
                                                    <label class="form-check-label">
                                                        International Economy
                                                    </label>
                                                </div>
                                            </div>
                                           
                                        </div>

                                        <div class="form-row">
                                            
                                                <h4 class="card-title" style="padding-left: 5px; margin-top: 10px;">Extra Services:</h4>
                                            
                                        </div>

                                         <div class="form-row">
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="No Signature Required" type="checkbox" name="extra[]">
                                                    <label class="form-check-label">
                                                        No Signature Required
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="Residential Delivery" type="checkbox" name="extra[]">
                                                    <label class="form-check-label">
                                                        Residential Delivery
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="Saturday Delivery" type="checkbox" name="extra[]">
                                                    <label class="form-check-label">
                                                        Saturday Delivery
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="Post Office Box Delivery (USPS Only)" type="checkbox" name="extra[]">
                                                    <label class="form-check-label">
                                                        Post Office Box Delivery (USPS Only)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <div class="form-check">
                                                    <input class="form-check-input" value="Other, Please specify" type="checkbox" name="extra[]">
                                                    <label class="form-check-label">
                                                        Other, Please specify
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                               <input type="text" class="form-control" name="other_service">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            
                                                <h4 class="card-title" style="padding-left: 5px; margin-top: 10px;">Description Type:</h4>
                                            
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label><small>(Must declare a value for International shipments other than documents.)</small></label>
                                               
                                               <textarea class="form-control" name="desc"></textarea>
                                            </div>

                                            <div class="form-group col-md-3">
                                               <div class="form-check">
                                                  
                                                    <label class="form-check-label">
                                                        Description Type
                                                    </label>
                                                    <select name="descp" id="descp" onchange="javascript: stateChange()" class="form-control" required>
                                                        <option value="Please select the option" selected="selected">Please select the option</option>
                                                         <option value="00-00-9100-66305">Documents / Site Services Misc</option>
                                                            <option value="Need G/L">Credit Memo </option>
                                                            <option value="00-00-8100-66305">Internal Shipments </option>
                                                            <option value="00-00-8100-66305">Lab Trial </option>
                                                            <option value="Need G/L">Manual Invoices </option>
                                                            <option value="Need G/L">R&amp;D Invoices </option>
                                                            <option value="00-00-0000-57455">Recall Invoices </option>
                                                            <option value="00-00-0000-57050">DOA Invoices </option>
                                                            <option value="00-00-0000-54100">Vendor Invoices </option>
                                                            <option value="00-00-0000-57455">RMA Return </option>
                                                            <option value="00-00-0000-57455">RMA Invoice </option>
                                                            <option value="00-00-0000-51805">Sales Invoice </option>
                                                            <option value="00-00-0000-51805">Sales Return </option>
                                                            <option value="Need G/L">Manual Return </option>
                                                            <option value="00-00-1666-66305">Spare Management </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label>G/L Account:</label>
                                                <input type="text" name="gl_account" id="down" class="form-control" readonly>
                                            </div>
                                          
                                        </div>

                                         <div class="form-row col-md-12">
                                            
                                                <h4 class="card-title" style="padding-left: 5px; margin-top: 10px;">Description:</h4>
                                                
                                                <div style="float: right;">

                                                <input type="button"  class="btn btn-primary btn-sm add-row" style="margin-left: 15px !important;" value="Add More">
                                                <button type="button" class="btn btn-danger btn-sm delete-row">Remove</button>

                                                </div>
                                                
                                        </div>


                                        <div class="table-responsive">
                                            <table class="table addrow">
                                                <thead>
                                                    <tr>
                                                        <th>Select</th>
                                                        <th>Description Detail</th>
                                                        <th>HS Code:</th>
                                                        <th>Unit Quantity</th>
                                                        <th>Unit Value</th>
                                                        <th>Unit Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php
                                                for($k=1; $k <= 10; $k++){
                                                    ?>

                                                    <tr>
                                                        <td><input type="checkbox" name="record"></td>
                                                        <td><input type="text" value="" name="unit_detail[]" class="form-control"></td>
                                                        <td><input type="text" name="hs_code[]" id="hs_code" class="form-control"></td>
                                                        <td><input type="text" name="name21[]" id="unitQty" value="0" class="form-control"></td>
                                                        <td><input type="text" name="name31[]" id="unitVal" value="0" class="form-control calcAmount"></td>
                                                        <td><input type="text" name="name11" id="total" value="0"  class="form-control" readonly></td>
                                                    </tr>

                                                <?php
                                                }
                                                ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                        
                                        <div class="form-row">
                                            
                                            <div class="form-group col-md-2">
                                                &nbsp;
                                            </div>

                                            <div class="form-group col-md-2">
                                                &nbsp;
                                            </div>

                                            <div class="form-group col-md-2" style="text-align: right;">
                                                <label style="padding-top: 7px;"><strong>Total Qty:</strong> </label>
                                            </div>

                                            <div class="form-group col-md-2">       
                                                <input type="text" name="totQty" id="totQty" class="form-control" readonly>
                                            </div>
                                            
                                            <div class="form-group col-md-2"  style="text-align: right;">
                                                
                                                <label style="padding-top: 7px;"><strong>Total Amount:</strong> </label>
                                               
                                            </div>

                                            <div class="form-group col-md-2">
                                                
                                                <input type="text" name="name16" id="name16" value="0" class="form-control" readonly>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            
                                            <h4 class="card-title" style="padding-left: 5px; margin-top: 10px;">Requester Information:</h4>
                                            
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label>Name:</label>
                                                <input type="text" name="req_name" class="form-control" required>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label>Email Address:</label>
                                                <input type="email" name="req_email" class="form-control" required>
                                            </div>
                                            
                                            <div class="form-group col-md-2">
                                                <label>Date:</label>
                                                <input type="date" name="req_date" class="form-control" required>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label>Dept Name:</label>
                                                <input type="text" name="req_dept" class="form-control" required>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label>Dept No #:</label>
                                                <input type="text" name="req_dept_no" class="form-control">
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label>Comment:</label>
                                                <textarea  name="req_sign" class="form-control"> </textarea>
                                                
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            
                                            <h4 class="card-title" style="padding-left: 5px; margin-top: 10px;">For Shipping Use Only:</h4>
                                            
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label>Request #:</label>
                                                <input type="text" value="<?php echo rand(); ?>" name="tracking_no" class="form-control" readonly>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label>No. of Pcs:</label>
                                                <input type="text" name="no_of_pc" id="no_of_pc" class="form-control">
                                            </div>
                                            
                                            <div class="form-group col-md-2">
                                                <label>Date:</label>
                                                <input type="date" name="date" class="form-control">
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label>Total:</label>
                                                <input type="text" id="formtotal" value="0"  name="total" class="form-control">
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label>Weight:</label>
                                                <input type="text" name="weight" class="form-control">
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label>INIT:</label>
                                                <input type="text" name="init" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                           <!--  <div class="form-group col-md-2">
                                                <label>G/L Account:</label>
                                                <input type="text" name="gl_account" id="down" class="form-control" readonly>
                                            </div> -->
                                           <!--  <div class="form-group col-md-4">
                                                <button type="button" class="btn btn-primary" style="margin-top: 30px;margin-left: 10px;" onclick ="showRates();" onsubmit="return false;">Get Rates</button>
                                            </div> -->
                                        </div>

                                      <!--   <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <h4 class="card-title" style="padding-left: 5px; margin-top: 10px;">Shipping Rates:(FedEx Response)</h4>
                                                <p id="txtHint4"></p>
                                            </div>
                                        </div> -->

                                        <button type="submit" name="submit" class="btn btn-primary" style="float:right;">Submit</button>
                                        <!-- <input type="submit" name="submit"> -->
                                    </form>
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

        <!-- PHP Script -->
        <?php save_form(); ?>
        <!-- PHP Script end -->

        <!--**********************************
            Footer start
        ***********************************-->
        <?php require 'include/footer.php'; ?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    

    <script language="javascript">
    
    var tAmount = document.getElementById("name16").value;
    var tQty = document.getElementById("totQty").value;
    


    $(document).ready(function(){

    $(".add-row").click(function(){
        var name = $("#chargestype").val();
        var email = $("#charges").val();
        var amount = $("#amount").val();
        var markup = "<tr><td><input type='checkbox' name='record'></td><td><input type='text' value='' name='unit_detail[]' class='form-control'></td><td><input type='text' name='hs_code[]' id='hs_code' class='form-control'></td><td><input type='text' name='name21[]' id='unitQty' value='0' class='form-control'></td><td><input type='text' name='name31[]' id='unitVal' value='0' class='form-control calcAmount'></td><td><input type='text' name='name11' id='total' value='0' class='form-control' readonly></td></tr>";
        $(".addrow tbody").append(markup);
    });
    
    // Find and remove selected table rows
    $(".delete-row").click(function(){
            $(".addrow tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    }); 

    $(".calcAmount").keyup(function(){

        var currentRow=$(this).closest("tr"); 

        // var dueAmount = parseFloat(document.getElementById("due_amount").value.replace(/,/g, ''));

        var currentRow=$(this).closest("tr"); 
        var col2=currentRow.find("#unitQty").val(); // get unit qty
        var col3=currentRow.find("#unitVal").val(); // get unit value

        var totalAmount = parseInt(col2)*parseInt(col3);
        currentRow.find("#total").val(totalAmount);

        var total = parseInt(tAmount) + totalAmount;
        var totalQty = tQty+col2;

        document.getElementById("name16").value = total;
        document.getElementById("formtotal").value = total;
        document.getElementById("totQty").value = totalQty;
        document.getElementById("no_of_pc").value = totalQty;
        

    });

      function stateChange(){
        document.getElementById("down").value = document.getElementById("descp").value;
      }

      function shipto(){
        
        document.getElementById("nameto").innerHTML = document.getElementById("shipname").value ;

        if(document.getElementById("shipname").value =="Please fill the shipping authorization form")
        //alert(document.getElementById("shipname").value);
            document.getElementById("Please fill the shipping authorization form").style.display="block";
        else
            document.getElementById("Please fill the shipping authorization form").style.display="none";        
      }

      function country1(){
        document.getElementById("name").innerHTML = document.getElementById("counname").value;
      }

      function sumIt(){
            document.frm.name11.value=parseInt(document.getElementById("name21").value)*parseInt(document.getElementById("name31").value);
            document.frm.name12.value=parseInt(document.getElementById("name42").value)*parseInt(document.getElementById("name142").value);
            document.frm.name13.value=parseInt(document.getElementById("name43").value)*parseInt(document.getElementById("name143").value);
            document.frm.name14.value=parseInt(document.getElementById("name44").value)*parseInt(document.getElementById("name442").value);
            // document.frm.name15.value=parseInt(document.frm.name45.value)*parseInt(document.frm.name145.value);
            
            document.frm.name16.value=parseInt(document.frm.name12.value)+parseInt(document.frm.name13.value)+parseInt(document.frm.name14.value)+parseInt(document.frm.name11.value);

            document.frm.total.value=parseInt(document.frm.name12.value)+parseInt(document.frm.name13.value)+parseInt(document.frm.name14.value)+parseInt(document.frm.name11.value);

            document.frm.total.value=parseInt(document.frm.name12.value)+parseInt(document.frm.name13.value)+parseInt(document.frm.name14.value)+parseInt(document.frm.name11.value);
        }

        function getPostalDetail(){
            var postalCode = document.getElementById("postalCode").value;

            if (postalCode=="") {
                 document.getElementById("txtHint5").innerHTML="";
                 return;
             }
             if (window.XMLHttpRequest) {
                 // code for IE7+, Firefox, Chrome, Opera, Safari
                 xmlhttp=new XMLHttpRequest();
             } else { // code for IE6, IE5
                 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
             }
             xmlhttp.onreadystatechange=function() {
                 if (this.readyState==4 && this.status==200) {
                     document.getElementById("txtHint5").innerHTML=this.responseText;
                 }
             }
             xmlhttp.open("GET","fedex_apis/country-service.php?code="+postalCode,true);
             xmlhttp.send();
        }

        function showRates(){
            
            var fromAdd = document.getElementById("counname").value;
            var toAdd = document.getElementById("shipname").value;

            if (fromAdd=="") {
                 document.getElementById("txtHint4").innerHTML="";
                 return;
             }
             if (window.XMLHttpRequest) {
                 // code for IE7+, Firefox, Chrome, Opera, Safari
                 xmlhttp=new XMLHttpRequest();
             } else { // code for IE6, IE5
                 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
             }
             xmlhttp.onreadystatechange=function() {
                 if (this.readyState==4 && this.status==200) {
                     document.getElementById("txtHint4").innerHTML=this.responseText;
                 }
             }
             xmlhttp.open("GET","fedex_apis/rate_request.php?frm="+fromAdd+"&to="+toAdd,true);
             xmlhttp.send();

        }

    </script>

    <!-- Required vendors -->
    <?php require 'include/scripts.php'; ?>


    
</body>

</html>