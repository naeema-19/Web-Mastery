<?php  
if (isset($_POST['submit'])) {
	$mailto = "naeemaziyad9@gmail.com";
	$from = $_POST['email'];
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$subject2 = "Your message Submitted Successfully ";
	$message = $_POST['message'];
	$message2 = "Dear " . $name . "\n\n" . "Thank you for connecting with us! We'll get back to you shortly ";
    $headers = "From: " . $form;
    $headers2 = "From: " . $mailto;
    $result = mail($mailto, $subject, $message, $headers);
    $result2 = mail($mailto, $subject2, $message2, $headers2);
    if($result){
    	echo '<script type="text/javascript">alert("MEssage Sent. Thank you we will contactto you shortly.")</script>'
    }else{
    	echo '<script type="text/javascript">alert("Submission failed! Try again later.")</script>'
    }
}



?>