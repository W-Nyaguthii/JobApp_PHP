<?php
session_start();
include("connect.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // to Capture the applicant's data
    $position = $_POST['dropdown'];
    $name = $_POST['name'];
    $nationality = $_POST['Nationality'];
    $date_of_birth = $_POST['date'];
    $address = $_POST['address'];
    $phone_number = $_POST['Phone_number'];
    $email = $_POST['Email'];
    $work_experience = $_POST['work'];
    $referees = $_POST['description'];
    $resume = ''; 

    //To insert data into the database
    $stmt = $conn->prepare("INSERT INTO applicants (position, name, nationality, date_of_birth, address, phone_number, email, work_experience, referees, resume) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $position, $name, $nationality, $date_of_birth, $address, $phone_number, $email, $work_experience, $referees, $resume);

    if ($stmt->execute()) {
        // this part redirect to send.php once application has been submitted
        header("Location: send.php?submit=true");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

