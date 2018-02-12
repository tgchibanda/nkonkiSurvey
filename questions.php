<?php
session_start();
$date = date('d/m/Y');
$conn = mysqli_connect('localhost', 'root', '', 'nkonki');
mysqli_query($conn, "insert into 
leadership_and_management(`1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `date`, `session`) values 
(
'$_POST[direction]',
'$_POST[qualities]',
'$_POST[corporate]',
'$_POST[proactive]',
'$_POST[consistency]',
'$_POST[well]',
'$_POST[managerv]',
'$_POST[talk]',
'$_POST[interactions]',
'$_POST[holds]',
'$_POST[updated]',
'$_POST[grow]',
'$_POST[great]',
'$_POST[latest]',
'$_POST[supportv]',
'$date',
'$_SESSION[session]')")or die(mysqli_error($conn));


mysqli_query($conn, "insert into 
job_role(`1`, `2`, `3`, `4`, `5`, `6`, `date`, `session`) values 
(
'$_POST[know]',
'$_POST[inspiresv]',
'$_POST[knowledge]',
'$_POST[achieving]',
'$_POST[contributionv]',
'$_POST[committed]',
'$date',
'$_SESSION[session]')")or die(mysqli_error($conn));


mysqli_query($conn, "insert into 
work_environment(`1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `date`, `session`) values 
(
'$_POST[teammorale]',
'$_POST[fosters]',
'$_POST[comfortable]',
'$_POST[healthn]',
'$_POST[awares]',
'$_POST[progressv]',
'$_POST[site]',
'$_POST[town]',
'$date',
'$_SESSION[session]')")or die(mysqli_error($conn));


            
mysqli_query($conn, "insert into 
communication(`1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `date`, `session`) values 
(
'$_POST[internal]',
'$_POST[months]',
'$_POST[regular]',
'$_POST[team]',
'$_POST[timely]',
'$_POST[intranet]',
'$_POST[research]',
'$_POST[making]',
'$date',
'$_SESSION[session]')")or die(mysqli_error($conn));






mysqli_query($conn, "insert into 
culture(`1`, `2`, `3`, `4`, `5`, `6`, `date`, `session`) values 
(
'$_POST[counts]',
'$_POST[trust]',
'$_POST[meaningful]',
'$_POST[balance]',
'$_POST[communities]',
'$_POST[participate]',
'$date',
'$_SESSION[session]')")or die(mysqli_error($conn));





mysqli_query($conn, "insert into 
performance_namagement(`1`, `2`, `3`, `4`, `date`, `session`) values 
(
'$_POST[realistic]',
'$_POST[honest]',
'$_POST[fairly]',
'$_POST[appreciated]',
'$date',
'$_SESSION[session]')")or die(mysqli_error($conn));





mysqli_query($conn, "insert into 
compensation(`1`, `2`, `3`, `4`, `date`, `session`) values 
(
'$_POST[remuneration]',
'$_POST[bonus]',
'$_POST[employee]',
'$_POST[offered]',
'$date',
'$_SESSION[session]')")or die(mysqli_error($conn));



mysqli_query($conn, "insert into 
company_image(`1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `date`, `session`) values 
(
'$_POST[proud]',
'$_POST[recommend]',
'$_POST[likely]',
'$_POST[leave]',
'$_POST[contribute]',
'$_POST[utilization]',
'$_POST[significant]',
'$_POST[feedback]',
'$_POST[dissatisfaction]',
'$_POST[like]',
'$_POST[improve]',
'$date',
'$_SESSION[session]')")or die(mysqli_error($conn));


mysqli_query($conn, "insert into 
job_role(`1`, `2`, `3`, `4`, `5`, `6`, `date`, `session`) values 
(
'$_POST[know]',
'$_POST[inspiresv]',
'$_POST[knowledge]',
'$_POST[achieving]',
'$_POST[contributionv]',
'$_POST[committed]',
'$date',
'$_SESSION[session]')")or die(mysqli_error($conn));



            
mysqli_query($conn, "insert into 
learning_and_development(`1`, `2`, `3`, `4`, `5`, `6`, `name`, `division`, `date`, `session`) values 
(
'$_POST[learning_opportunity]',
'$_POST[career_development]',
'$_POST[find_jobs]',
'$_POST[discuss]',
'$_POST[participated]',
'$_POST[promoted]',
'$_POST[name]',
'$_POST[division]',
'$date',
'$_SESSION[session]')")or die(mysqli_error($conn));          
    /*
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

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Survey Complete</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron">
  <h1>Survey Complete</h1>      
  <p>Thank you for your time.</p>
</div>