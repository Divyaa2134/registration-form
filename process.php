<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$dob = htmlspecialchars($_POST['dob']);
$gender = htmlspecialchars($_POST['gender']);
$address = htmlspecialchars($_POST['address']);

echo "<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Submission Successful</title>
<link rel='stylesheet' href='styles.css'>
</head>
<body>
<header>
<h1>Submission Successful</h1>
</header>
<main>
<h2>Submitted Details</h2>
<p><strong>Full Name:</strong> $name</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Phone:</strong> $phone</p>
<p><strong>Date of Birth:</strong> $dob</p>
<p><strong>Gender:</strong> $gender</p>
<p><strong>Address:</strong> $address</p>

<a href='index.html' style='display:inline-block; margin-top:20px; padding:10px 15px;
background:#8e24aa; color:white; text-decoration:none; border-radius:5px;'>Back to Form</a>
</main>
</body>
</html>";
} else {
header('Location: index.html');
}
?>