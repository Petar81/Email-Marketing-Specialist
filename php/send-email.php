<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// get the POST parameter from form
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$message = $_POST["message"];
$phone = $_POST["phone"];
$company = $_POST["company"];
$country = $_POST["country"];
$address = $_POST["address"];
$zip = $_POST["zip"];


$to = $email;
$subject = "Email Marketing Services Inquiry by ". $firstName . " " . $lastName ;

$email_message = "
<html>
<head>
<title>Serbona Apps Message Center</title>
</head>
<body>
<h3>Full name: " . $firstName . " " . $lastName . "</h3>
<h3>Email: " . $email . "</h3>
<h3>Phone: " . $phone . "</h3>
<h3>Company: " . $company . "</h3>
<h3>Address: " . $address . "</h3>
<h3>ZIP: " . $zip . "</h3>
<h3>Country: " . $country . "</h3>
<h4>Message: ". $message . "</h4>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <$email>" . "\r\n";
$headers .= "Bcc: serbonaapps@gmail.com, inquiry@email-marketing-outsourcing.com" . "\r\n";


if(mail($to,$subject,$email_message,$headers)){
    // Output "no suggestion" if no hint was found or output correct values
    echo "Hi " . $firstName . ", <br /> Your message is on the way to our inbox. <br /> Thanks for contacting us, we'll reply shortly. <br /> <img src='../images/email-is-on-the-way.gif' width='240' alt='a person running to send a massage' />";
};
}
?>