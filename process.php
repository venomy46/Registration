<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
 // Retrieve and sanitize user input
 $name = htmlspecialchars($_POST['name']);
 $email = htmlspecialchars($_POST['email']);
 $phone = htmlspecialchars($_POST['phone']);
 $gender = htmlspecialchars($_POST['gender']);
 $message = htmlspecialchars($_POST['message']);
 // Basic validation
 if (empty($name) || empty($email) || empty($phone) || empty($gender)) {
 echo "<!DOCTYPE html>
 <html lang='en'>
 <head>
 <meta charset='UTF-8'>
 <meta name='viewport' content='width=device-width, initialscale=1.0'>
 <title>Error - Fields Required</title>
 <link rel='stylesheet' href='styles.css'>
 </head>
 <body>
 <header>
 <h1>Error: Missing Fields</h1>
 </header>
 <main class='error-container'>
 <h2>Please fill out all required fields (name, email, phone,
gender).</h2>
 <a class='btn-back' href='index.html'>Go Back</a>
 </main>
 </body>
 </html>";
 exit();
 }
 // Output the submitted information
 echo "<!DOCTYPE html>
 <html lang='en'>
 <head>
 <meta charset='UTF-8'>
 <meta name='viewport' content='width=device-width, initial-scale=1.0'>
 <title>Submission Success</title>
 <link rel='stylesheet' href='styles.css'>
 </head>
 <body>
 <header>
 <h1>Submission Successful</h1>
 </header>
 <main class='success-container'>
 <h2>Your Submitted Information:</h2>
 <div class='info'>
 <p><strong>Name:</strong> $name</p>
 <p><strong>Email:</strong> $email</p>
 <p><strong>Phone:</strong> $phone</p>
 <p><strong>Gender:</strong> $gender</p>
 <p><strong>Message:</strong> $message</p>
 </div>
 <a class='btn-back' href='index.html'>Go Back</a>
 </main>
 </body>
 </html>";
}
?>