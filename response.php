<?php 
//echo "<pre>"; print_r($_POST);exit;
error_reporting(E_ALL); ini_set('display_errors', 1);
include 'db_config.php';
/*require_once('class.smtp.php');
require_once('class.phpmailer.php');*/


$order_id = $_POST['txnid'];
$bank_ref_num = $_POST['bank_ref_num'];
$net_amount_debit = $_POST['net_amount_debit'];
$easepayid = $_POST['easepayid'];
$status = $_POST['status'];
$productinfo = $_POST['productinfo'];
$mode = $_POST['mode'];
$error = $_POST['error'];
$email = $_POST['email'];
$name= $_POST['firstname'];
    
   $sql = "update vacietappliedscience set bank_ref_num = '$bank_ref_num',easepayid='$easepayid',amount='$net_amount_debit',mode='$mode',error='$error',status='2',event_type='$productinfo' where order_id = '$order_id'";
   $result = $conn->query($sql);  
   
  echo "<script type='text/javascript'>window.alert('Thank You.. Registration Form Submitted Successfully.');
			window.location.href='https://sageuniversity.in/sage_events/vac_iet_applied_science/thankyou.php';
		</script>"; 
?>