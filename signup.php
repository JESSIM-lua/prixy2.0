<?php 
session_start();

if (isset($_POST['submit'])) 
{
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $db = new PDO('mysql:host=localhost;dbname=logsystem', 'root','root');
    
    // Check if the client already exists 
    $sql = "SELECT * FROM client WHERE CLIENT_email=:email";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) 
    {   
        // Client already exists
        header("location: message.php");
        exit();
    }
    else 
    {
        // Hash the password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert the client into the database
        $sql = "INSERT INTO client (CLIENT_email, CLIENT_password) VALUES (:email, :password)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        
        if ($stmt->execute()) 
        {
            header("location: comptecree.php");
            exit();
        } 
        else 
        {
            echo "Error inserting client.";
            // Handle error
        }
    }
}
?>
