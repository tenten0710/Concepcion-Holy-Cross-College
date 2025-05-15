<?php
$host = 'localhost';
$db   = 'contact_db';
$user = 'root';
$pass = ''; // Empty password for local server like XAMPP

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$first_name = $conn->real_escape_string($_POST['First_Name']);
$last_name = $conn->real_escape_string($_POST['Last_Name']);
$contact_number = $conn->real_escape_string($_POST['Contact_Number']);
$email = $conn->real_escape_string($_POST['Email']);
$message = $conn->real_escape_string($_POST['Message']);

$sql = "INSERT INTO contact_messages (first_name, last_name, contact_number, email, message)
        VALUES ('$first_name', '$last_name', '$contact_number', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  // Success message with inline CSS and design
  echo '
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Success</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0; padding: 0; background: #e6f0fa; , sans-serif; display: flex; align-items: center; justify-content: center; height: 100vh;">
  <div style="background: #ffffff; padding: 50px 30px; border-radius: 15px; box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12); text-align: center; max-width: 420px;">
    
    <div style="font-size: 60px; color: #007BFF; margin-bottom: 20px;">&#10004;</div>
    <h1 style="color: #007BFF; font-size: 28px; margin-bottom: 10px;">Message Sent!</h1>
    <p style="color: #333; font-size: 16px; margin-bottom: 30px;">
      Thank you for contacting us. Your message was sent successfully.
    </p>
    
    <a href="index.php" style="background-color: #007BFF; color: white; padding: 12px 28px; text-decoration: none; border-radius: 6px; font-weight: 600; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3); transition: background 0.3s;">
      Back to Home
    </a>
  </div>
</body>
</html>
';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
