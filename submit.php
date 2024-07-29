<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['confirm'] == 'yes') {
        $data = $_SESSION['exeForm'];
        $photoPath = $_SESSION['photoPath'];
        $conn = new mysqli("localhost", "root", "", "exeForm");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
  $stmt = $conn->prepare("INSERT INTO usersdata (firstname, lastname, password, gender, nationality, mobile, email, address, photo) VALUES 
        (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $data['firstname'], $data['lastname'], $data['password'], $data['gender'], $data['nationality'], $data['mobile'], 
        $data['email'], $data['address'], $photoPath);
        if ($stmt->execute()) {
            echo "<h2>Congratulations! Your data has been successfully stored in the database.</h2>";
        } else {
            echo "<h2>There was an error storing your data. Please try again.</h2>";
        }
        $stmt->close();
        $conn->close();
    } else {
        echo "<h2>Your submission was cancelled by you.<br> Do you want to go back to the main page?</h2>";
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Submit</title>
</head>
<body>
    <a href="index.php"><button>Resubmit</button></a>
</body>
</html>
