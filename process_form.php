<?php
$con = mysqli_connect("localhost","root","ashy1234$");
if(!$con){
    echo "couldn't connect to server";
    die();
}
else{
    echo "<h2>Connected successfully";
}
$DB = mysqli_select_db($con,"home_vices");
if (!$DB){
    echo"Couldn't select database";
}
else{
    echo "<h2>Database selected sucessfully</h2>";
} 
//GETTING THE SELECTED SERVICE:

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption = $_POST["service"];
    
    // Use the selected option value
    if ($selectedOption == "" || $selectedOption == NULL){
        echo "No service Selected";
    } else{
    echo "Selected option: " . $selectedOption;
}
}

//ETUG
$cname = $_POST['name'];
$cphone = $_POST['phone'];
$cemail = $_POST['email'];
$cadd = $_POST['address'];
$client = "INSERT INTO client (clientName, clientPhone, clientEmail, clientAddress) values('$cname', $cphone, '$cemail', '$cadd')";

$cc = mysqli_query($con, $client);
if ($cc == True){
    echo "Record added";
}
else{
    echo "Couldnt add";
}

$bt = $_POST['booking_time'];
$quantity= $_POST['quantity'];
$hours = $_POST['hours'] ;

$que = mysqli_query($con, "SELECT serviceRate FROM service WHERE serviceName = '$selectedOption'");
$rate = null;
if ($que->num_rows > 0) {
    $row = $que->fetch_assoc();
    $rate = $row['serviceRate'];
} 

$cid_get = mysqli_query($con, "SELECT clientID FROM client WHERE clientPhone = $cphone");
$cid = null;
if($cid_get->num_rows > 0){
    $ros = $cid_get->fetch_assoc();
    $cid = $ros['clientID'];
}
$wid_get = mysqli_query($con, "SELECT workerID FROM worker_services WHERE serviceName = '$selectedOption'");
$wid = null;
if($wid_get->num_rows > 0){
    $wos = $wid_get->fetch_assoc();
    $wid = $wos['workerID'];
}

$schedule = "INSERT INTO schedule (clientID, workerID, quantity, hours, rate, booking_time) VALUES($cid, $wid, '$quantity','$hours', $rate, '$bt')";

$sc = mysqli_query($con, $schedule);
if ($sc == True){
    echo "Record added";
}
else{
    echo "Couldnt add";
}


$show = "SELECT client.clientName, schedule.total_price FROM client, schedule WHERE client.clientID = schedule.clientID ORDER BY scheduleID DESC LIMIT 1";
$sh = mysqli_query($con, $show);
if ($sh == True){
    while($rows=mysqli_fetch_assoc($sh)){
        echo "Client NAME : " . $rows['clientName']."<br>"."Your total Price is: ".$rows['total_price'],"<br>";
    }
}
else{
    echo "No record found";
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'E:\Softwares\Xampp\htdocs\weblabs\lab12\sendermail\phpmailer\src\Exception.php';
require 'E:\Softwares\Xampp\htdocs\weblabs\lab12\sendermail\phpmailer\src\PHPMailer.php';
require 'E:\Softwares\Xampp\htdocs\weblabs\lab12\sendermail\phpmailer\src\SMTP.php';

// Assuming you have retrieved the necessary details from the form
$cName = $_POST['name'];
$cEmail = $_POST['email'];
$service = $_POST['service'];

$qq = mysqli_query($con, "SELECT workerName FROM worker WHERE workerID = $wid");

$data = NULL;
if ($qq->num_rows > 0) {
    $row = $qq->fetch_assoc();
    $data = $row['workerName']; 
}

// Compose the email content
$subject = "Service Details";
$message = "Dear $cName,\n\nThank you for choosing our service. Here are the details:\n\nService: $service\n\n Worker Name: $data\n\nWe will contact you shortly to discuss further arrangements.\n\nRegards,\nHome Vices";

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Set up SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Your SMTP host
    $mail->SMTPAuth = true;
    $mail->Username = 'sarahsk002@gmail.com';  // Your SMTP username
    $mail->Password = 'nxqyplvnwdsildln';  // Your SMTP password
    $mail->SMTPSecure = 'tls';  // Enable TLS encryption
    $mail->Port = 587;  // Your SMTP port number

    // Set up email content and recipient
    $mail->setFrom('sarahsk002@gmail.com' ,'Sarah');  // Sender's email and name
    $mail->addAddress($cEmail, $cName);  // Recipient's email and name
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->SMTPDebug = 2;
    // Send the email
    $mail->send();
    echo 'Email sent successfully!';
    
} catch (Exception $e) {
    echo "Email sending failed: {$mail->ErrorInfo}";
}

?>