<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'school_enrollment';

// Create DB connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Upload receipt file
$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$receiptName = basename($_FILES["paymentReceipt"]["name"]);
$targetFile = $uploadDir . time() . "_" . $receiptName;

if (!move_uploaded_file($_FILES["paymentReceipt"]["tmp_name"], $targetFile)) {
    die("❌ Error moving file. Check 'uploads/' folder and file permissions.");
}

// Prepare and bind statement
$stmt = $conn->prepare("
    INSERT INTO students 
    (first_name, middle_name, last_name, gender, birthdate, province, city, barangay, house_number, street, program, mobile, email, father_name, father_contact, mother_name, mother_contact, receipt_file) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "ssssssssssssssssss",
    $_POST['firstName'],
    $_POST['middleName'],
    $_POST['lastName'],
    $_POST['gender'],
    $_POST['birthdate'],
    $_POST['province'],
    $_POST['city'],
    $_POST['barangay'],
    $_POST['houseNumber'],
    $_POST['street'],
    $_POST['program'],
    $_POST['mobileNumber'],
    $_POST['emailAddress'],
    $_POST['fatherName'],
    $_POST['fatherContact'],
    $_POST['motherName'],
    $_POST['motherContact'],
    $targetFile
);

if ($stmt->execute()) {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Success</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="margin: 0; padding: 0; background: #e6f0fa; font-family: Arial, sans-serif; display: flex; align-items: center; justify-content: center; height: 100vh;">
      <div style="background: #ffffff; padding: 50px 30px; border-radius: 15px; box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12); text-align: center; max-width: 420px;">
        <div style="font-size: 60px; color: #007BFF; margin-bottom: 20px;">&#10004;</div>
        <h1 style="color: #007BFF; font-size: 28px; margin-bottom: 10px;">Enrollment Submitted!</h1>
        <p style="color: #333; font-size: 16px; margin-bottom: 30px;">
          Thank you for registering. We have received your application successfully.
        </p>
        <a href="index.php" style="background-color: #007BFF; color: white; padding: 12px 28px; text-decoration: none; border-radius: 6px; font-weight: 600; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3); transition: background 0.3s;">
          Back to Home
        </a>
      </div>
    </body>
    </html>
    ';
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
