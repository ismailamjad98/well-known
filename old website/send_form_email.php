<?php
if(isset($_POST['EmailAddress'])) {
    $email_to = "sales@colarusgroup.ca";
    $email_subject = "From Website";
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    if(!isset($_POST['FullName']) ||
        !isset($_POST['PhoneNumber']) ||
        !isset($_POST['EmailAddress']) ||
        !isset($_POST['Message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    $fullName = $_POST['FullName'];
    $phoneNumber = $_POST['PhoneNumber']; 
    $email_from = $_POST['EmailAddress']; 
    $comments = $_POST['Message']; 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$fullName)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Please check email details below.\n\n";
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message .= "First Name: ".clean_string($fullName)."\n";
    $email_message .= "Phone Number: ".clean_string($phoneNumber)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
Thank you for contacting us. We will be in touch with you very soon.
<a href="contact.php">Go back to Contact Page !</a>
<?php
}
?>