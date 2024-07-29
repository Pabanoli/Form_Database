<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $photo = $_FILES['photo'];
    $photoPath = 'uploads/' . basename($photo['name']);
    move_uploaded_file($photo['tmp_name'], $photoPath);
    session_start();
    $_SESSION['exeForm'] = $_POST;
    $_SESSION['photoPath'] = $photoPath;
}
?>
<!DOCTYPE html>
<head>
    <title>Confirmation</title>
</head>
<body>
    <h2>Are you sure you want to continue?</h2>
    <form action="submit.php" method="post">
        <button type="submit" name="confirm" value="yes">OK</button>
        <button type="submit" name="confirm" value="no">Ignore</button>
    </form>
</body>
</html>
