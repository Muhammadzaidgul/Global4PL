<?php
session_start();
$conn = mysqli_connect('localhost','root','','db_shipping');

$user_id = $_SESSION['user'];

function save_form(){

	global $conn;

	if(isset($_POST['submit'])){

		 $ship_from = $_POST['counname'];
		 $shipname = $_POST['shipname'];

		 $comp_name = $_POST['comp_name'];
		 $attention = $_POST['attention'];
		 $address = $_POST['address'];
		 $country = $_POST['country'];
		 $zipcode = $_POST['zipcode'];
		 $city = $_POST['city'];
		 $state = $_POST['state'];
		 $phone = $_POST['phone'];

		 $domestic_arr = $_POST['domestic'];
		 $domestic_list = implode(', ', $domestic_arr);

		 $international_arr = $_POST['international'];
		 $international_list = implode(', ', $international_arr);

		 $extra_arr = $_POST['extra'];
		 $extra_list = implode(', ', $extra_arr);

		 $other_service = $_POST['other_service'];

		 $desc = $_POST['desc'];
		 $descp = $_POST['descp'];

		 $unit_detail_arr = $_POST['unit_detail'];
		 $hs_code_arr = $_POST['hs_code'];
		 $unit_qty_arr = $_POST['name21'];
		 $unit_val_arr = $_POST['name31'];
		 $unit_tot_arr = $_POST['unit_tot'];

		 $req_name = $_POST['req_name'];
		 $req_email = $_POST['req_email'];
		 $req_date = $_POST['req_date'];
		 $req_dept = $_POST['req_dept'];
		 $req_dept_no = $_POST['req_dept_no'];
		 $req_sign = $_POST['req_sign'];

		 $tracking_no = $_POST['tracking_no'];
		 $no_of_pc = $_POST['no_of_pc'];
		 $date = $_POST['date'];
		 $total = $_POST['total'];
		 $weight = $_POST['weight'];
		 $init = $_POST['init'];
		 $gl_account = $_POST['gl_account'];

		 $keyone = array_keys($unit_detail_arr);
		 $keytwo = array_keys($hs_code_arr);
		 $keythree = array_keys($unit_qty_arr);
		 $keyfour = array_keys($unit_val_arr);

		 $min = min(count($unit_detail_arr),count($unit_val_arr));

		 if($shipname == "Please fill the shipping authorization form"){

		 	$save_add = mysqli_query($conn,"insert into tb_address(company_name,address,country,postal_zip_code,city,state,phone) values('$comp_name','$address','$country','$zipcode','$city','$state','$phone')");

		 	if($save_add){

		 		$get_add_id = mysqli_query($conn,"select id from tb_address order by 1 desc limit 1");
		 		$getrow = mysqli_fetch_array($get_add_id);
		 		$address_id = $getrow['id'][0];

		 	}
		 }else{

		 	$ins = mysqli_query($conn,"insert into tb_shipping_form_master(from_address,to_address,domestic,international,extra_service,description,desc_type,requester_name,requester_email,date,requester_dept_name,requester_dept_no,requester_signature,tracking_no,no_of_pc,shipping_form_date,total,weight,init,gl_account_number,created_by) values ('$ship_from','$shipname','$domestic_list','$international_list','$extra_list','$desc','$descp','$req_name','$req_email','$req_date','$req_dept','$req_dept_no','$req_sign','$tracking_no','$no_of_pc','$date','$total','$weight','$init','$gl_account','$user_id')");

		 	if($ins){

		 		$get_ins_id = mysqli_query($conn,"select id from tb_shipping_form_master order by 1 desc limit 1");
		 		$getrow = mysqli_fetch_array($get_ins_id);
		 		$shipping_id = $getrow['id'][0];

		 		for($i=0; $i < $min; $i++){

		 			if(array_key_exists($keyone[$i], $unit_detail_arr)){
		 				if(array_key_exists($keytwo[$i], $hs_code_arr)){
		 					if(array_key_exists($keythree[$i], $unit_qty_arr)){
		 						if(array_key_exists($keyfour[$i], $unit_val_arr)){
		 							
		 							$unit_name = $unit_detail_arr[$keyone[$i]];
		 							$hs_code = $hs_code_arr[$keytwo[$i]];
		 							$unit_qty = $unit_qty_arr[$keythree[$i]];
		 							$unit_val = $unit_val_arr[$keyfour[$i]];
		 							$unit_TOTAL = $unit_qty*$unit_val;

		 							$ins_det = mysqli_query($conn,"insert into tb_shipping_form_detail(master_id,hs_code,unit_detail,unit_qty,unit_value,unit_total)values('$shipping_id','$hs_code','$unit_name','$unit_qty','$unit_val','$unit_TOTAL')");	
		 						}
		 					}
		 				}
		 			}

		 		}




		 		echo "<script>alert('Record Saved')</script>";
		 	}

		 }

		 
		 
		 // $ins=mysqli_query($conn,"insert into tb_shipping_form_master('from_address_id','to_address_id') values ('1','1')");
		 // if($ins){

		 // 	echo "<script>alert('Record Saved')</script>";


		 // }else{

		 // 	echo "<script>alert('Error')</script>";


		 // }
		 
		 
	}
}

function user_setup(){
	global $conn;

	if(isset($_POST['submit'])){

	$comp_name = $_POST['comp_name'];
	$user_name = $_POST['user_name'];
	$password=md5($_POST['user_pass']);
	$user_type = $_POST['user_type'];
	$phone_no = $_POST['phone_no'];

	$file_nam = $_FILES['file']['name'];
      	$file_size =$_FILES['file']['size'];
      	$file_tmp =$_FILES['file']['tmp_name'];
      	$file_type=$_FILES['file']['type'];
      	$file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));

      $expensions= array("jpg","jpeg","png");

      if(in_array($file_ext,$expensions)=== false){
             $errors[]="extension not allowed, please choose a PDF or DOC file.";
      }

      if($file_size > 100000000){
             $errors[]='File size must be exactely 100 MB';
      }
		$file_name=$randomNumber.$file_nam;
      if(empty($errors)==true){
		  
             move_uploaded_file($file_tmp,"client_logos/".$file_name);
             //echo "Success";
      }else{
             print_r($errors);
      }


      $ins_client = mysqli_query($conn,"insert into tb_user(username,password,user_type,company,logo,phone_no)values('$user_name','$password','$user_type','$comp_name','$file_name','$phone_no')");

      if($ins_client){
      	echo "<script>alert('Record Saved')</script>";
      }

	}
}

function client_setup(){
	global $conn;

	if(isset($_POST['submit'])){

	  $client_name = $_POST['client_name'];	

	  $file_nam = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));

      $expensions= array("jpg","jpeg","png");

      if(in_array($file_ext,$expensions)=== false){
             $errors[]="extension not allowed, please choose a PDF or DOC file.";
      }

      if($file_size > 100000000){
             $errors[]='File size must be exactely 100 MB';
      }
		$file_name=$randomNumber.$file_nam;
      if(empty($errors)==true){
		  
             move_uploaded_file($file_tmp,"client_logos/".$file_name);
             //echo "Success";
      }else{
             print_r($errors);
      }


      $ins_client = mysqli_query($conn,"insert into tb_clients(name,logo)values('$client_name','$file_name')");

      if($ins_client){
      	echo "<script>alert('Record Saved')</script>";
      }

	}
}

function get_client_logo(){
	global $conn;

	$get_logo = mysqli_query($conn,"select * from tb_clients order by 1 asc LIMIT 1");
    $logo_row = mysqli_fetch_array($get_logo);
    $logo = $logo_row['logo'];
    
    echo $logo;
}

function get_client_name(){
	global $conn;

	$get_name = mysqli_query($conn,"select * from tb_clients order by 1 asc LIMIT 1");
    $name_row = mysqli_fetch_array($get_name);
    $name = $name_row['name'];
    
    echo $name;
}
?>