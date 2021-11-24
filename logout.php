<?php
session_start();
// include_once('include/db.php');

// date_default_timezone_set("Asia/Karachi");
// $std_id = $_SESSION["user"];
// $hostname = $_SERVER['REMOTE_ADDR'];
// $agent = $_SERVER['HTTP_USER_AGENT'];
// $datetim =date("Y-m-d H:i:sa");
// $user_role = $_SESSION['userrole'];
// 	if($user_role == 3){
//         $db_que = mysqli_query($conn,"insert into login_activity(user_id,pc_ip,browser,login_status,activity_time) values('$std_id','$hostname','$agent','Logout','$datetim')");
// 	}
// if($_SESSION['usertype']=="admin"){
// 	unset($_SESSION["user"]); 
//     session_unset();
//     session_destroy();
//     header('location:login');
// }
// else{
// 	unset($_SESSION["user"]); 
//     session_unset();
//     session_destroy();
// 	header('location:login');
// }

session_unset();
session_destroy();
header('location:login.php');
?>