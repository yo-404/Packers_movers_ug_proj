<?php
	session_start();
	use PHPMailer\PHPMailer\PHPMailer;
	if(isset($_POST['confirm']))
	{
		$payment_status="";
		$name = $_SESSION['name'];
		$email = $_SESSION['email'];
		date_default_timezone_set("Asia/Kolkata");
		$time = date("h:i:sa");
		$date = date("y-m-d");
		$cardnumbers = $_POST['cardnumber'];
		$advance_payment = intval($_SESSION['calculated_cost']) * 0.3;
		$_SESSION['calculated_cost'] = "";
		$con = new mysqli('localhost', 'root', '12345678', 'packers');
		include_once "PHPMailer/PHPMailer.php";
		if( $con->query("INSERT INTO payments (email, name, amount, timess, dates, cardnumber)
					VALUES ('$email', '$name', '$advance_payment', '$time', '$date', '$cardnumbers');
				") )
		{
			$payment_status = "Booking Completed! Check your mail!";
			

                $mail = new PHPMailer();
                $mail->setFrom('ghostridernetflix@gmail.com');
                $mail->addAddress($email, $name);
                $mail->Subject = "Booking confirmation";
                $mail->isHTML(true);
                $mail->Body = "We are delighted to inform you that your booking has been confirmed. We have successfully received Rs.".$advance_payment." from your bank. Our executive will contact you soon.<br>Happy moving! :-)";
                $mail->send();
        }
		else
		{
			$payment_status = "One Booking Already Done! Please wait till its completion!";
		}

		$_SESSION['payment_status'] = $payment_status;
		header("Location: index.php");
		exit();

	}
?>