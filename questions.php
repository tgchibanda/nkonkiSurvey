<?php
if(isset($_POST['learning_opportunity'])) {
	
$name= "My manager is. ".$_POST['name'];
$division= "May division is. ".$_POST['division'];
$q1= "I feel I have the opportunity to learn, improve my skills and grow during the course of my work. ".$_POST['learning_opportunity']; 
$q2= "Working in my current job provides me with career development opportunities. ".$_POST['career_development']; 
$q3= "I know where to find the job opportunities available and how to pursue job opportunities at Nkonki Inc. ".$_POST['find_jobs'];
$q4= "My line manager and I discuss my current job development and longer term career goals within the Company. ".$_POST['discuss'];
$q5= "The learning and development opportunities I've participated in have had a positive impact on my performance. ".$_POST['participated']; 
$q6= "Learning and development opportunities are well promoted. ".$_POST['promoted']; 


$message = $name."\n".$division."\n".$q1."\n".$q2."\n".$q3."\n".$q4."\n".$q5."\n".$q6."\n";



 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "mbalimk@nkonki.com";
    $email_subject = "Website Survey";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
 
    $error_message = "";
 
 
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= $message;
	
// create email headers
$headers = 'From: websitesurvey@nkonki.com\r\n'.
'Reply-To: \r\n' .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<script>
	alert("Thank you sor the survey answers!");
	location='../index.php'
</script>
<?php
}
?>