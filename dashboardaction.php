<?php
session_start(); // Start the session to access session variables

// Establish a connection to your MySQL database using PDO
$db = new PDO('mysql:host=localhost;dbname=logsystem', 'root', 'root');
// Set PDO to throw exceptions for error handling
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $motif = $_POST["motif"];
    $time = $_POST["time"];

    try {
        // Prepare SQL statement
        $stmt = $db->prepare("INSERT INTO reservation_externes (RES_Motif, RES_Horaire, RES_Date, CLIENT_ID, SALLE_NUM) VALUES (?, ?, CURDATE(), ?, ?)");

        // Bind parameters
        $stmt->bindParam(1, $motif);
        $stmt->bindParam(2, $time);
        $stmt->bindParam(3, $client_id);
        $stmt->bindParam(4, $salle_num);

        // Execute the statement
        $stmt->execute();

        // Output success message
        echo "Reservation saved successfully.";
    } catch(PDOException $e) {
        // Output error message
        echo "Error: " . $e->getMessage();
    }
}
?>
