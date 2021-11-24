<?php
include 'include/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Client Setup </title>
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
    <!--******************* Preloader end ********************-->

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
                            <h4>Client Setup</h4>
                          <!--   <span class="ml-1">Element</span> -->
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="#" name="frm" onkeydown="return (event.keyCode!=13);" enctype="multipart/form-data">

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Client Name </label>
                                                
                                                <input type="text" placeholder="Client/Company Name" class="form-control" name="client_name" required="required">

                                            </div>
                                            
                                            <div class="form-group col-md-4">
                                                <label>Phone Number:</label>
                                                
                                                <input type="text" placeholder="Contact Details" class="form-control" name="phone" required="required">

                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Upload Logo</label>
                                                <input type="file" name="file" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-primary" style="float:right;">Submit</button>
                                        
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
        <?php client_setup(); ?>
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
    <script language="javascript">

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
        document.frm.name11.value=parseInt(document.frm.name21.value)*parseInt(document.frm.name31.value);
        document.frm.name12.value=parseInt(document.frm.name42.value)*parseInt(document.frm.name142.value);
        document.frm.name13.value=parseInt(document.frm.name43.value)*parseInt(document.frm.name143.value);
        document.frm.name14.value=parseInt(document.frm.name44.value)*parseInt(document.frm.name442.value);
        // document.frm.name15.value=parseInt(document.frm.name45.value)*parseInt(document.frm.name145.value);
        
        document.frm.name16.value=parseInt(document.frm.name12.value)+parseInt(document.frm.name13.value)+parseInt(document.frm.name14.value)+parseInt(document.frm.name11.value);
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