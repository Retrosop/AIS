<?php
$adminemail = "youremailhere@googlemail.com";

if ($_GET['send'] == 'comments')
{
						
	$_uname = $_POST['fullname'];
	$_uemail = $_POST['uremail'];	
	$_date = $_POST['date1'];
	$_time = $_POST['time'];
	$_numberofpersons = $_POST['numberofpersons'];
	$_phonenumber = $_POST['phonenumber'];
	$_branchname = $_POST['branchname'];
	$_comments	=	stripslashes($_POST['urmessage']);
						
	$email_check = '';
	$return_arr = array();

	if($_uname=="" || $_uemail=="" || $_date=="" || $_time=="" || $_numberofpersons=="" || $_phonenumber=="" || $_branchname=="" || $_comments=="")
	{
		$return_arr["frm_check"] = 'error';
		$return_arr["msg"] = "Please fill in all required fields!";
	} 
	else if(filter_var($_uemail, FILTER_VALIDATE_EMAIL)) 
	{
	
	$to = $adminemail;
	$from = $_uemail;
	$subject = "Delicieux Reservation ";
	
	$message =  'Name: &nbsp;&nbsp;' . $_uname . '<br><br> Email: &nbsp;&nbsp;' . $_uemail . '<br><br> Date: &nbsp;&nbsp;' . $_date .  '<br><br> Time: &nbsp;&nbsp;' . $_time .  '<br><br> Number of Persons: &nbsp;&nbsp;' . $_numberofpersons .  '<br><br> Phone Number: &nbsp;&nbsp;' . $_phonenumber .  '<br><br> Branch Name: &nbsp;&nbsp;' . $_branchname .  '<br><br> Comment:&nbsp;&nbsp;' . $_comments;	

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "Content-Transfer-Encoding: 7bit\r\n";
	$headers .= "From: " . $from . "\r\n";

	@mail($to, $subject, $message, $headers);	
	
	} else {
    
	$return_arr["frm_check"] = 'error';
	$return_arr["msg"] = "Please enter a valid email address!";

}

echo json_encode($return_arr);
}

?>