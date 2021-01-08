<?php
	if(isset($_POST['submit'])) {
		$name = strtoupper($_POST['name']);
		$from = $_POST['email'];
		$number = $_POST['number'];
		$event = strtoupper($_POST['event']);
		$date = $_POST['date'];
		$newDate = date("F d, Y", strtotime($date));
		$venue = $_POST['venue'];
		$message = $_POST['message'];
		
		$to = "christianocol12@gmail.com";
		$subject = "$event - $name";
		$messageVal = "$message \n\n Event:  $event \n Date:  $newDate \n Venue:  $venue \n Contact Number:  $number \n Email:  $from";
		$headers = "From: ".$from."";

		$send = mail($to,$subject,$messageVal,$headers);

		$success ="Message sent successfully! We'll connect with you as soon as possible. Thank you!!";
		$error ="Sorry, message could not be sent. Please try again later.";
		
		$location = $_SERVER['HTTP_REFERER'];

		if($send == true) {
			echo "<script>
alert('Message sent successfully! We will connect with you as soon as possible to let you know if we are available on your special day. Have a great day! :) ');
window.location.href='$location';
</script>";
		    exit;
         }
		else {
			echo "<script>alert('Sorry, message could not be sent. Please try again later or message us directly on Facebook. Thank you for unbderstanding :) ');
			</script>";
			exit;
         }  
		
	}
         
?>
<!--window.location.href='$location';-->
