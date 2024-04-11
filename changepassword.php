<?php
// Start session
session_start();

// Connection to database
$db = new PDO('mysql:host=localhost;dbname=logsystem', 'root', 'root');

// Check if the email and token cookies are set
if (isset($_COOKIE['email']) && isset($_COOKIE['token'])) {
    $email = $_COOKIE['email'];
    $token = $_COOKIE['token'];

    // SQL query to fetch data
    $sql = "SELECT * FROM client WHERE Client_email=:email AND token=:token";

    // Prepare and execute the query
    $req = $db->prepare($sql);
    $req->bindParam(':email', $email, PDO::PARAM_STR);
    $req->bindParam(':token', $token, PDO::PARAM_STR);
    $req->execute();

    // Fetch the data
    $row = $req->fetch(PDO::FETCH_ASSOC);

    // Check if the user with the provided email and token exists
    if (!$row) {
        // Redirect to logout or login page
        header("Location: index.php"); // Modify the redirection to your connection page
        exit;
    }

    // Check if form is submitted for updating password
    if (isset($_POST['submit'])) {
        $password = $_POST['password'];

        // Hash the new password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Update the password in the database
        $updateSql = "UPDATE client SET Client_password = :password WHERE Client_email = :email";
        $updateStmt = $db->prepare($updateSql);
        $updateStmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        $updateStmt->bindParam(':email', $email, PDO::PARAM_STR);
        $updateStmt->execute();

        // Redirect to compte.php after password change
        header('Location: compte.php');
        exit;
    }
} else {
    // Handle the case when the email or token cookie is not set
    header("Location: index.php"); // Modify the redirection to your connection page
    exit; // Stop further execution
}
?>
