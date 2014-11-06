<?php 

$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$comment=$_POST['comment'];


   $to = "enquiry@appconcur.com";
   $subject = "Enquiry done at website";
   $message = "<b>Enquiry Details</b>";
   $message = '<html><body>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
			$message .= "<tr><td><strong>Subject:</strong> </td><td>" . $sub . "</td></tr>";
			$message .= "<tr><td><strong>Message :</strong> </td><td>" . $comment. "</td></tr>";
			
			$message .= "</table>";
			$message .= "</body></html>";
     $header = "From: " . $email . "\r\n";
   //$header = "Cc:afgh@somedomain.com \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )
   {
      echo "Message sent successfully...";
	  ?>
	  <script type="text/javascript">
			  window.location.href = 'http://www.appconcur.com/';
			  </script>
  <?php  }
   else
   {
      echo "Message could not be sent...";
	  ?>
	   <script type="text/javascript">
			  window.location.href = 'http://www.appconcur.com/';
			  </script>
  <?php }
?>
