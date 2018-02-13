<?php
error_reporting(0);
session_start();
$date = date('d/m/Y');

/*
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

*/


$aheading = "Learning and Development";
$name= "1. My manager is ".$_POST['name']."<br>";
$division= "2. May division is. ".$_POST['division']."<br>";
$q1= "3. I feel I have the opportunity to learn, improve my skills and grow during the course of my work. ".$_POST['learning_opportunity']."<br>"; 
$q2= "4. Working in my current job provides me with career development opportunities. ".$_POST['career_development']."<br>"; 
$q3= "5. I know where to find the job opportunities available and how to pursue job opportunities at Nkonki Inc. ".$_POST['find_jobs']."<br>";
$q4= "6. My line manager and I discuss my current job development and longer term career goals within the Company. ".$_POST['discuss']."<br>";
$q5= "7. The learning and development opportunities I've participated in have had a positive impact on my performance. ".$_POST['participated']."<br>"; 
$q6= "8. Learning and development opportunities are well promoted. ".$_POST['promoted']."<br>"; 



$bheading = "Company Image Satisfaction";
$bq1= "1. I am proud to work for Nkonki Inc. ".$_POST['proud']."<br>";
$bq2= "2. I would recommend Nkonki Inc as a great place to work. ".$_POST['recommend']."<br>"; 
$bq3= "3. I am likely to be working for Nkonki Inc two years from now. ".$_POST['likely']."<br>"; 
$bq4= "4. It would take a lot to get me to leave Nkonki Inc. ".$_POST['leave']."<br>";
$bq5= "5. Nkonki Inc motivates me to contribute more than is normally required to complete my work. ".$_POST['contribute']."<br>";
$bq6= "6. I believe that the utilization of resources across the Nkonki Network will result in market penetration/growth and opportunities. ".$_POST['utilization']."<br>"; 
$bq7= "7. I do not anticipate a significant change in my job as a result of the Network Offices leveraging off each other in terms of resources and knowledge. ".$_POST['significant']."<br>"; 
$bq8= "8. I am confident that feedback from these employee surveys will be used for organisational planning and improvement purposes. ".$_POST['feedback']."<br>"; 
$bq9= "9. Overall I would rate my level of satisfaction or dissatisfaction with the Company as: ".$_POST['dissatisfaction']."<br>"; 
$bq10= "10. What do you like best about working at Nkonki Inc? List one factor. ".$_POST['like']."<br>"; 
$bq11= "11. What factor(s) would improve your satisfaction at work? List one or two factors. ".$_POST['improve']."<br>"; 




$cheading = "Compensation and Reward";
$cq1= "1. When I consider my total remuneration package (salary, bonus/commission/incentive arrangements and benefits), I feel  my total remuneration is competitive with the industry/market compensation. ".$_POST['remuneration']."<br>";
$cq2= "2. The current bonus scheme provides a fair means for incentivising and rewarding me when my Region/BU and/or I perform well. ".$_POST['bonus']."<br>"; 
$cq3= "3. I understand the range of benefits offered to me as an employee of Nkonki Inc. ".$_POST['employee']."<br>";


$dheading = "Performance Management Feedback";
$dq1= "1. My Individual Performance Goals (general role expectations, KPIs and values) are realistic and challenging. ".$_POST['realistic']."<br>";
$dq2= "2. My line manager gives me honest, constructive and timely feedback about my performance. ".$_POST['honest']."<br>"; 
$dq3= "3. I think my performance on the job is evaluated fairly. ".$_POST['fairly']."<br>"; 
$dq4= "4. I feel appreciated and recognised for the contributions I make. ".$_POST['appreciated']."<br>";


$eheading = "Culture";
$eq1= "1. At work, my opinion counts. ".$_POST['counts']."<br>";
$eq2= "2. I believe there is strong trust between management and employees. ".$_POST['trust']."<br>"; 
$eq3= "3. The six Nkonki Inc values Operational Excellence, Benchmarking, Quality Control, Teamwork, Performance Management, Knowledge Sharing and the i5 Nkonki Inc Personal Brand are meaningful and important to me. ".$_POST['meaningful']."<br>"; 
$eq4= "4. I have a good balance in my life between work, family, social life and leisure time. ".$_POST['balance']."<br>";
$eq5= "5. I believe the business is supportive of employees giving back to their communities. (CSR). ".$_POST['communities']."<br>";
$eq6= "6. I would like to participate in our Corporate Social Responsibility programme in the future (e.g. through fundraising, volunteering, donations, mentoring, environmental projects). ".$_POST['participate']."<br>"; 


$fheading = "Communcation";
$fq1= "1. I find internal communication from the CEO, Mitesh Patel, to be adequate and informative. ".$_POST['internal']."<br>";
$fq2= "2. I believe internal communication within my Region has improved in the last 12 months. ".$_POST['months']."<br>"; 
$fq3= "3. My Senior Management team provides us with regular business updates and communicates our progress to date. ".$_POST['regular']."<br>"; 
$fq4= "4. There is effective communication within my team / department / business unit. ".$_POST['team']."<br>";
$fq5= "5. Internal communication is relevant and timely. ".$_POST['timely']."<br>";
$fq6= "6. I think having intranet in the Company will be useful. ".$_POST['intranet']."<br>"; 
$fq7= "7. In my opinion intranet will allow effective research and access to Nkonki Inc intellectual property and materials. ".$_POST['research']."<br>"; 
$fq8= "8. I believe Nkonki is making good use of social media (wikis, blogs, micro blogs, communities) to promote knowledge sharing. ".$_POST['making']."<br>"; 


$gheading = "Work Environment and Relationships";
$gq1= "1. Morale is good in my team. ".$_POST['teammorale']."<br>";
$gq2= "2. Nkonki Inc fosters a friendly working environment. ".$_POST['fosters']."<br>"; 
$gq3= "3. My work environment is comfortable and conducive for excellent performance. ".$_POST['comfortable']."<br>"; 
$gq4= "4. I am satisfied with the health and safety measures that are in place at my work place. ".$_POST['healthn']."<br>";
$gq5= "5. I am aware of Nkonki Inc Environment Strategy. ".$_POST['awares']."<br>";
$gq6= "6. I believe Nkonki Inc is making progress in our Environmental Strategy. ".$_POST['progressv']."<br>"; 
$gq7= "7. As an employee working at a client site, I feel that I am part of the Nkonki Inc team. ".$_POST['site']."<br>"; 
$gq8= "8. When out of town working at a client site, there is a sufficient level of support provided by Nkonki Network ".$_POST['town']."<br>"; 



$hheading = "Job Role Contribution";
$hq1= "1. I clearly understand and know what my role and responsibilities are. ".$_POST['know']."<br>";
$hq2= "2. Nkonki Inc inspires me to do my best work every day. ".$_POST['inspiresv']."<br>"; 
$hq3= "3. The work I do makes good use of my knowledge and ability. ".$_POST['knowledge']."<br>"; 
$hq4= "4. I know how I can contribute to the Company achieving its objectives. ".$_POST['achieving']."<br>";
$hq5= "5. At work, I know my contribution is valued. ".$_POST['contributionv']."<br>";
$hq6= "6. The members of my team are committed to doing quality work. ".$_POST['committed']."<br>"; 



$iheading = "Leadership and Management";
$iq1= "1. I have confidence that Nkonki Inc CEO, Mitesh Patel, and his Executive team are leading the company in the right direction. ".$_POST['direction']."<br>";
$iq2= "2. I believe that the Senior Management Team in my Region possesses strong leadership qualities and is able and committed to execute the strategic priorities. ".$_POST['qualities']."<br>"; 
$iq3= "3. The Senior Management team in my Region has communicated the FY19 corporate strategy clearly and effectively to me. ".$_POST['corporate']."<br>"; 
$iq4= "4. The Senior Management team in my Region is proactive in handling changes in our business environment. ".$_POST['proactive']."<br>";
$iq5= "5. I believe that the Senior Management Team in my Region demonstrates consistency between what they say is important and what they do. ".$_POST['consistency']."<br>";
$iq6= "6. My line manager communicates well with the team. ".$_POST['well']."<br>"; 
$iq7= "7. My line manager is an effective manager. ".$_POST['managerv']."<br>"; 
$iq8= "8. I am able to talk to my line manager whenever I am faced with difficulties, challenges or concerns. ".$_POST['talk']."<br>"; 
$iq9= "9. My line manager demonstrates the six Nkonki Inc values:Operational Excellence, Benchmarking, Quality Control, Teamwork, Performance Management, Knowledge Sharing and the i5 Nkonki Inc Personal Brand in his/her daily interactions. ".$_POST['interactions']."<br>"; 
$iq10= "10. My line manager takes personal accountability for the position he/she holds. ".$_POST['holds']."<br>"; 
$iq11= "11. My line manager and I have met and updated my Personal Development Plan in the past 6 months. ".$_POST['updated']."<br>"; 
$iq12= "12. I have the opportunity to grow and develop my career. ".$_POST['grow']."<br>"; 
$iq13= "13. I am part of a great, global organisation. ".$_POST['great']."<br>"; 
$iq14= "14. I have the opportunity to work with the latest technology and world-class clients. ".$_POST['latest']."<br>"; 
$iq15= "15. I have the support, inspiration and friendship of great colleagues. ".$_POST['supportv']."<br>"; 



$message = "<html><body>";
$message .= "<h1><b>".$aheading."</b></h1>\n";
$message .= $name."\n".$division."\n".$q1."\n".$q2."\n".$q3."\n".$q4."\n".$q5."\n".$q6."\n\n\n";

$message .= "<h1><b>".$bheading."</b></h1>\n";
$message .= $bq1."\n".$bq2."\n".$bq3."\n".$bq4."\n".$bq5."\n".$bq6."\n".$bq7."\n".$bq8."\n".$bq9."\n".$bq10."\n".$bq11."\n\n\n";

$message .= "<h1><b>".$cheading."</b></h1>\n";
$message .= $cq1."\n".$cq2."\n".$cq3."\n".$cq4."\n\n\n";

$message .= "<h1><b>".$dheading."</b></h1>\n";
$message .= $dq1."\n".$dq2."\n".$dq3."\n".$dq4."\n\n\n";

$message .= "<h1><b>".$eheading."</b></h1>\n";
$message .= $eq1."\n".$eq2."\n".$eq3."\n".$eq4."\n".$eq5."\n".$eq6."\n\n\n";

$message .= "<h1><b>".$fheading."</b></h1>\n";
$message .= $fq1."\n".$fq2."\n".$fq3."\n".$fq4."\n".$fq5."\n".$fq6."\n".$fq7."\n".$fq8."\n\n\n";

$message .= "<h1><b>".$gheading."</b></h1>\n";
$message .= $gq1."\n".$gq2."\n".$gq3."\n".$gq4."\n".$gq5."\n".$gq6."\n".$gq7."\n".$gq8."\n\n\n";

$message .= "<h1><b>".$hheading."</b></h1>\n";
$message .= $hq1."\n".$hq2."\n".$hq3."\n".$hq4."\n".$hq5."\n".$hq6."\n\n\n";

$message .= "<h1><b>".$iheading."</b></h1>\n";
$message .= $iq1."\n".$iq2."\n".$iq3."\n".$iq4."\n".$iq5."\n".$bq6."\n".$iq7."\n".$iq8."\n".$iq9."\n".$iq10."\n".$iq11."\n".$iq12."\n".$iq13."\n".$iq14."\n".$iq15."\n\n\n";
$message .= "</body></html>";




 
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

$headers = "From: websitesurvey@nkonki.com\r\n";
$headers .= "Reply-To: websitesurvey@nkonki.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

@mail($email_to, $email_subject, $message, $headers);  


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