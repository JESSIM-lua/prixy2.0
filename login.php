<?php
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    // Database connection
    $db = new PDO('mysql:host=localhost;dbname=logsystem', 'root', 'root');

    // Check if the user already exists
    $sql = "SELECT * FROM client WHERE CLIENT_email = :email";
    
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    
    // If user exists
    if ($stmt->rowCount() > 0) {
        $data = $stmt->fetch();
        // Verify password
        if (password_verify($password, $data["CLIENT_password"])) {
            echo "Password verified. Welcome!";
            $_SESSION['email'] = $email;

            // Generate a token
            $token = bin2hex(random_bytes(32));

            // Update the user's token in the database
            $updateTokenSql = "UPDATE client SET token = :token WHERE CLIENT_email = :email";
            $updateTokenStmt = $db->prepare($updateTokenSql);
            $updateTokenStmt->bindParam(':token', $token, PDO::PARAM_STR);
            $updateTokenStmt->bindParam(':email', $email, PDO::PARAM_STR);
            $updateTokenStmt->execute();

            // Set the token as a cookie
            setcookie("token", $token, time() + 3600, "/");
            setcookie("email", $email, time() + 3600, "/");
            // Check if user is an admin
            if ($data['admin'] == 1) {
                // Redirect to admin dashboard
                header("Location: dashboard.html");
                exit();
            } else {
                // Redirect to user dashboard
                header("Location: 1.PHP");
                exit();
            }
        } else {
            header("Location: echecconnection.php");
            exit();
        }
    } else {
        header("Location: echecconnection.php");
        exit();
    }
}
?>
