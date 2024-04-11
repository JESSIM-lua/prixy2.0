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

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PRIXY - Formation Professionnelle</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="styleDash.css"> 
</head>

<body>
    <div class="main-content">

        <header>
            <h2>Reservation Beryl</h2>
        </header>

        <table class="emploi-du-temps">
            <thead>
                <tr>
                    <th></th> <!-- Cellule vide pour aligner avec les horaires -->
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>
                </tr>
            </thead>
            <tbody>
                <!-- Lignes pour les horaires -->
                <tr>
                    <td>8h - 12h</td>
                    <td><button onclick="showReservationModal('lundi', '8h-12h')" data-day="lundi" data-time="8h-12h">Réserver</button></td> 
                    <td><button onclick="showReservationModal('mardi', '8h-12h')" data-day="mardi" data-time="8h-12h">Réserver</button></td>
                    <td><button onclick="showReservationModal('mercredi', '8h-12h')" data-day="mercredi" data-time="8h-12h">Réserver</button></td>
                    <td><button onclick="showReservationModal('jeudi', '8h-12h')" data-day="jeudi" data-time="8h-12h">Réserver</button></td>
                    <td><button onclick="showReservationModal('vendredi', '8h-12h')" data-day="vendredi" data-time="8h-12h">Réserver</button></td>
                    <td><button onclick="showReservationModal('samedi', '8h-12h')" data-day="samedi" data-time="8h-12h">Réserver</button></td>
                    <td><button onclick="showReservationModal('dimanche', '8h-12h')" data-day="dimanche" data-time="8h-12h">Réserver</button></td>
                </tr>
                <tr>
                    <td>14h - 18h</td>
                    <td><button onclick="showReservationModal('lundi', '14h-18h')" data-day="lundi" data-time="14h-18h">Réserver</button></td> 
                    <td><button onclick="showReservationModal('mardi', '14h-18h')" data-day="mardi" data-time="14h-18h">Réserver</button></td>
                    <td><button onclick="showReservationModal('mercredi', '14h-18h')" data-day="mercredi" data-time="14h-18h">Réserver</button></td>
                    <td><button onclick="showReservationModal('jeudi', '14h-18h')" data-day="jeudi" data-time="14h-18h">Réserver</button></td>
                    <td><button onclick="showReservationModal('vendredi', '14h-18h')" data-day="vendredi" data-time="14h-18h">Réserver</button></td>
                    <td><button onclick="showReservationModal('samedi', '14h-18h')" data-day="samedi" data-time="14h-18h">Réserver</button></td>
                    <td><button onclick="showReservationModal('dimanche', '14h-18h')" data-day="dimanche" data-time="14h-18h">Réserver</button></td>
                </tr>
                <!-- Other rows for different time slots -->
                <!-- Repeat the structure for other time slots -->
            </tbody>
        </table>
        
    </div>
    <div class="top-section">
        <div class="sidebar">
            <h1 class="logo">ResAppli</h1>
            <ul>
                <li><a href="#planning">Planning</a></li>
                <li><a href="#reservation">Réservation</a></li>
                <li><a href="#notifications">Notifications</a></li>
                <li><a href="#parametres">Paramètres</a></li>
                <li><a href="#signaler">Signaler</a></li>
                <li><a href="#paiements">Paiements</a></li>
                <li><a href="#transactions">Transactions</a></li>
                <li><a href="#rapports">Rapports</a></li>
                <li><a href="#quitter">Quitter</a></li>
            </ul>
        </div>
    </div>

<!-- Modal for reservation -->
<div class="modal" id="reservationModal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Réserver un créneau</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal Body -->
      <div class="modal-body">
        <form id="reservationForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="form-group">
            <label for="motif">Motif de la réservation:</label>
            <input type="text" class="form-control" id="motif" name="motif">
          </div>
          <input type="hidden" id="dayInput" name="day">
          <input type="hidden" id="timeInput" name="time">
          <input type="hidden" id="salleNumInput" name="salle_num" value="1"> <!-- Assuming salle_num is always 1 for now -->
        </form>
      </div>
      
      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="submitReservation()">Confirmer</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
      
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="scriptDash.js"></script>

<script>
    // Function to show reservation modal
    function showReservationModal(day, time) {
        $("#dayInput").val(day);
        $("#timeInput").val(time);
        $("#reservationModal").modal("show");
    }

    // Function to submit reservation
    function submitReservation() {
        var motif = $("#motif").val();
        var day = $("#dayInput").val();
        var time = $("#timeInput").val();

        // Here you can add code to handle the reservation, such as making an AJAX request to your server
        // After successful reservation, you can update the UI to show the reservation as reserved for all users
        // For now, let's just close the modal to simulate the reservation
        $("#reservationModal").modal("hide");
        alert("Vous avez réservé " + time + " le " + day + " avec le motif: " + motif);
        $("button[data-day='" + day + "'][data-time='" + time + "']").text("Réservé").prop("disabled", true);
        
        // Submit the reservation form
        $("#reservationForm").submit();
    }
</script>

</body>
</html>
