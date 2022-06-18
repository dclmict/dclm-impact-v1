<?php
    session_start();
	
	include("database.php");

	if(isset($_POST['submit']))
	{	
	    $sname = $_POST['Sname'];
		$sname = stripslashes($sname);
		$sname = addslashes($sname);
		
		$name = $_POST['name'];
		$name = stripslashes($name);
		$name = addslashes($name);

		$email = $_POST['email'];
		$email = stripslashes($email);
		$email = addslashes($email);

		$phone = $_POST['phone'];
		$phone = stripslashes($phone);
		$phone = addslashes($phone);

		$address = $_POST['address'];
		$address = stripslashes($address);
		$address = addslashes($address);
		
		$country = $_POST['country'];
		$country = stripslashes($country);
		$country = addslashes($country);

		$lga = $_POST['lga'];
		$lga = stripslashes($lga);
		$lga = addslashes($lga);

		$state = $_POST['state'];
		$state = stripslashes($state);
		$state = addslashes($state);

		$attend = $_POST['attend'];
		$attend = stripslashes($attend);
		$attend = addslashes($attend);

		$avail = $_POST['available'];
		$avail = stripslashes($avail);
		$avail = addslashes($avail);
		
		//set email variables 
        $from = 'support@impact2022.org';
		$reply = 'sam@localhost';
        //$reply = 'theyoungprofessionalsforum@gmail.com, dclmict@gmail.com';

    	// To send HTML mail, the Content-type header must be set
        $headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: '.$from."\r\n" .
        'Reply-To: '.$reply."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
		//Create Subject
		$subject = 'Registration For IMPACT 2022';
		
		// Compose a simple HTML email message
        $message = '<html><body>';
        $message .= '<h2 style="color:#080;">Hello $name </h2>';
        $message .= '<p style="color:#3e3f3e;font-size:16px;">This is to confirm that we have received your registration for the IMPACT 2022</p>';
        $message .= '<p style="color:#3e3f3e;font-size:16px;">You can add the event to your calendar by clicking the link <a href="http://www.google.com/calendar/event?action=TEMPLATE&dates=20220105T150000Z%2F20220109T070000Z&text=IMPACT%202022&location=Deeper%20Life%20International%20Conference%20Centre%20KM%2042%2C%20Lagos-Ibadan%20Expressway%2C%20Nigeria&details=IMPACT%E2%80%9D%20is%20a%205-day%20youth%20global%20convocation%20where%20the%20world%20renowned%20minister%2C%20mentor%20and%20youth%20lover%2C%20Pastor%20Dr.%20W.F%20Kumuyi%20will%20address%20fundamental%20issues%20affecting%20teenagers%2C%20campus%20students%20and%20young%20adults..%0A"> ADD TO CALENDAR</a>';
        $message .= '<p style="color:#3e3f3e;font-size:20px;"> Join The event live on YouTube and Facebook. <a href="https://www.youtube.com/channel/dclmhq"><strong> Watch Now</strong></a></p>';
        $message .= '<p style="color:#3e3f3e;font-size:16px;"> Remember to follow us on all social media channel @dclmhq </p>';
        $message .= '<p style="color:#080;font-size:16px;">Signed</p>';
        $message .= '<p style="color:#080;font-size:16px;">Global Youth Convocation Team</p>';
        $message .= '</body></html>';
		$message = str_replace('$name', $name, $message);
        
        //check if email exists 
		$str="SELECT email from lead_2022 WHERE email='$email'";
		$result=mysqli_query($con,$str);

        //check if phone number exist
        $str2="SELECT phone from lead_2022 WHERE phone='$phone'";
		$result2=mysqli_query($con,$str2);

		if((mysqli_num_rows($result))>0)	
		{
            echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
            //header("refresh:0;url=index.html");
        }
        
		if((mysqli_num_rows($result2))>0)	
		{
            echo "<center><h3><script>alert('Sorry.. This Phone Number is already registered !!');</script></h3></center>";
            //header("refresh:0;url=index.html");
        }
        
		else {
		    $str = " INSERT INTO lead_2022 (Sname , name , email , phone , address , lga , state , country , attend , avail) 
			VALUES ('$sname', '$name' , '$email' , '$phone' , '$address' , '$lga' , '$state' , '$country' , '$attend' , '$avail') ";
		}

		// ref: https://www.w3schools.com/php/php_mysql_insert.asp
		if ($con->query($str) === TRUE) {
			echo "<center><h3><script> 
				alert(' Congratulations! You have successfully registered for IMPACT 2022!!'); </script> </h3></center>";

			//mail(to,subject,message,headers,parameters);
			mail($email, $subject, $message, $headers);
			header('location: confirm.html?utm_source=impact2022&utm_medium=confirmed-registration');
		}
		else {
			echo "Error: " . $str . "<br>" . $con->error;
			header('location: confirm.html?error');
		}
    }
?>