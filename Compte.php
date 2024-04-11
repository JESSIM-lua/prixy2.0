<?php
// Connection to the database
$db = new PDO('mysql:host=localhost;dbname=logsystem', 'root', 'root');

// Check if the email cookie is set
if(isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];

    // SQL query to fetch data
    $sql = "SELECT * FROM client WHERE Client_email=:email";  

    // Prepare and execute the query
    $req = $db->prepare($sql);
    $req->bindParam(':email', $email, PDO::PARAM_STR);
    $req->execute();

    // Fetch the data
    $row = $req->fetch(PDO::FETCH_ASSOC);

    // Initialize $phoneNumber
    $phoneNumber = "";

    // Check if form is submitted
    if(isset($_POST['submit'])) {
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
        header('Location: Compte.php');
        exit;
    }

    // Format phone number if available
    if (!empty($row['CLIENT_Tel'])) {
        // Remove any non-digit characters from the phone number
        $cleanedPhoneNumber = preg_replace('/\D/', '', $row['CLIENT_Tel']);
        
        // Split the phone number into chunks of two characters
        $formattedPhoneNumber = implode(' ', str_split($cleanedPhoneNumber, 2));
        
        // Assign formatted phone number
        $phoneNumber = $formattedPhoneNumber;
    }
} else {
    // Handle the case when the email cookie is not set
    exit; // Stop further execution
}
?>






<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Compte</title>
    <style>
        .card:hover {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
    </style>
</head>

<body class="bg-white-600 font-sans leading-normal tracking-normal">

    <!-- Navigation -->
<nav class="bg-white shadow-lg">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex justify-between items-center">
      <!-- Primary Navbar items aligned to the left -->
      <div class="flex items-center space-x-1">
        
        <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-900 transition duration-300">Nos atouts</a>
        <a href="" class="py-4 px-2 text-gray-500 border-b-4 border-orange-500 font-semibold ">Service</a>
        <a href="Contact.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-900 transition duration-300">Nous contacter</a>
      </div>

      <!-- Reservation, Compte, Logout links -->
      <div class="hidden md:flex items-center space-x-3 ">
      <button  id=reservation class="py-2 px-2 font-medium text-white bg-orange-500 rounded hover:bg-orange-400 transition duration-300">Réservation</button>
        <a href="compte.php" id="compte" class="font-medium text-gray-700 bg-white-200 rounded px-4 py-2 hover:bg-gray-300 transition duration-300"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
        <a href="#" onclick="confirmLogout()" class="font-medium text-gray-700 bg-white-200 rounded px-4 py-2 hover:bg-gray-300 transition duration-300"><i class="fa-solid fa-right-from-bracket"></i></a>
      </div>

      <!-- Hamburger icon for mobile -->
      <div class="md:hidden">
        <button id="mobile-menu-toggle" class="block text-gray-500 hover:text-gray-900 focus:outline-none">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navbar items -->
  <div id="mobile-menu" class="md:hidden hidden">
    <div class="flex flex-col items-center space-y-4 py-4">
      
      <button  id=reservation class="py-2 px-2 font-medium text-white bg-orange-500 rounded hover:bg-orange-400 transition duration-300">Réservation</button>
      <a href="compte.php" id="compte" class="font-medium text-gray-700 bg-white-200 rounded px-4 py-2 hover:bg-gray-300 transition duration-300"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
      <a href="#" onclick="confirmLogout()" class="font-medium text-gray-700 bg-white-200 rounded px-4 py-2 hover:bg-gray-300 transition duration-300"><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
  </div>
</nav>


<script>
  // Toggle mobile menu
  document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
    document.getElementById('mobile-menu').classList.toggle('hidden');
  });
</script>
    <script>
  // Get the reservation button
  var reservationButton = document.getElementById("reservation");

  // Add event listener to the reservation button
  reservationButton.addEventListener("click", function() {
    // Redirect to reservation.php
    window.location.href = "reservation.php";
  });
</script>
    <div class="container mx-auto my-4 px-4 sm:px-6 lg:px-8 py-8 bg-white shadow-lg rounded-lg">
        <div class="flex flex-col sm:flex-row justify-between">
            <div class="w-full sm:w-1/4 bg-gray-200 p-5">
                <div class="mb-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <h2 class="text-2xl font-semibold mt-4">VOUS:</h2>
                            <p class="text-gray-600"><?= $row['CLIENT_Nom'] ?> <?= $row['CLIENT_Prenom'] ?></p>
                        </div>
                        <div class="col-span-2">
                            <h2 class="text-2xl font-semibold mt-4">Email:</h2>
                            <p class="text-gray-600"><?= $row['CLIENT_email'] ?></p>
                        </div>
                        <div class="col-span-2">
                            <h2 class="text-2xl font-semibold mt-4">Téléphone:</h2>
                            <p class="text-gray-600"><?= $phoneNumber ?></p>
                        </div>
                        <div class="col-span-2">
                            <h2 class="text-2xl font-semibold mt-4">Adresse:</h2>
                            <p class="text-gray-600"><?= $row['CLIENT_Adresse'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-3/4 bg-white p-5">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="card bg-white p-4 rounded-lg text-center">
                        <div class="text-xl font-semibold">Informations</div>
                        <p class="text-gray-600 mt-2">Tenez vos informations à jour.</p>
                        <form id="updateForm">
                            <button onclick="openModal()" class="mt-4 px-4 py-2 bg-orange-600 text-white rounded hover:bg-orange-700 focus:outline-none">Mettre à jour ses Informations</button>
                        </form>
                    </div>
                    <div class="card bg-white p-4 rounded-lg text-center">
    <div class="text-xl font-semibold">Mot de passe</div>
    <p class="text-gray-600 mt-2">Changez votre mot de passe</p>
    <button onclick="openChangePasswordModal()" class="mt-4 px-4 py-2 bg-black-600 text-white rounded hover:bg-orange-700 focus:outline-none">Changer mot de passe</button>
</div>
                </div>
            </div>
        </div>
    </div>

    <div id="myCustomModal" class="custom-modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form method="post" action="compteaction.php">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" value="<?= $row['CLIENT_Nom'] ?> "><br><br>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" value="<?= $row['CLIENT_Prenom'] ?>"><br><br>
                <label for="telephone">Téléphone :</label>
                <input type="text" id="telephone" name="telephone" value="<?php $phonenumber?>" maxlength="10"><br><br>
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" value="<?= $row['CLIENT_Adresse'] ?>"><br><br>
                <input type="submit" name="submit" value="Enregistrer">
            </form>
        </div>
    </div>
    <div id="changePasswordModal" class="custom-modal">
    <div class="modal-content">
        <span class="close" onclick="closeChangePasswordModal()">&times;</span>
        <form method="post" action="changepassword.php" onsubmit="return validatePassword()">
            <label for="password">Nouveau mot de passe :</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" name="submit" value="Changer mot de passe">
        </form>
    </div>
</div>

<script>
  function openChangePasswordModal() {
    var changePasswordModal = document.getElementById('changePasswordModal');
    changePasswordModal.style.display = 'block';
}
// Function to close the modal for changing password
function closeChangePasswordModal() {
    var changePasswordModal = document.getElementById('changePasswordModal');
    changePasswordModal.style.display = 'none';
}

// Function to validate the password input
function validatePassword() {
    var password = document.getElementById('password').value.trim();

    if (password === '') {
        alert('Veuillez entrer votre nouveau mot de passe.');
        return false;
    }

    return true;
}
</script>

    <script>
        function confirmLogout() {
            if (confirm("Voulez vous vraiment vous déconnecter ?")) {
                <?php $email = "" ?>
                <?php $token = "" ?>
                
                window.location.href = "logout.php";
            }
            
        }

       

        // Get the modal element
        var modal = document.getElementById('myCustomModal');

        // Get the button that opens the modal
        var btn = document.querySelector('.custom-modal-button');

        // Get the <span> element that closes the modal
        var span = document.querySelector('.close');

        // Function to open the modal
        function openModal() {
            modal.style.display = 'block';
        }

        // Function to close the modal when the close button is clicked
        span.onclick = function () {
            modal.style.display = 'none';
        }

        // Function to close the modal when the user clicks outside the modal
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }

        // Prevent form submission when opening modal
        document.getElementById('updateForm').addEventListener('submit', function (event) {
            event.preventDefault();
        });

        
        
    </script>
<script>
    function validateForm() {
        var nom = document.getElementById('nom').value.trim();
        var prenom = document.getElementById('prenom').value.trim();
        var telephone = document.getElementById('telephone').value.trim();
        var adresse = document.getElementById('adresse').value.trim();

        if (nom === '') {
            alert('Veuillez entrer votre nom.');
            return false;
        }

        if (prenom === '') {
            alert('Veuillez entrer votre prénom.');
            return false;
        }

        if (telephone === '') {
            alert('Veuillez entrer votre numéro de téléphone.');
            return false;
        } else if (!/^\d{10}$/.test(telephone)) {
            alert('Veuillez entrer un numéro de téléphone valide.');
            return false;
        }

        if (adresse === '') {
            alert('Veuillez entrer votre adresse.');
            return false;
        }

        return true;
    }
</script>

<style>


#reservation {
  background-color: #f3721a;
  
}

.card button {

  background-color: #f3721a;
}
    #myCustomModal input[type="text"] {
        background-color: #CECECE;
        border: 1px solid #ccc;
        padding: 5px;
        width: 100%;
        border-radius: 15px;
    }
    #changePasswordModal input[type="password"] {
        background-color: #CECECE;
        border: 1px solid #ccc;
        padding: 5px;
        width: 100%;
        border-radius: 15px;
    }
    

    #changePasswordModal input[type="submit"] {
    background-color: #f3721a;
    color: white; /* Change the text color to black */
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
    display: block;
    margin: 0 auto;
}


    #myCustomModal input[type="submit"] {
    background-color: #f3721a;
    color: white; /* Change the text color to black */
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
    display: block;
    margin: 0 auto;
}

#myCustomModal input[type="submit"]:hover {
    background-color: grey;
}


    .custom-modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
        
    }

    .modal-content {
        background-color: #fefefe;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        box-shadow:15px;
        max-width: 80%;
        border-radius: 5px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Override button background color */
    #myCustomModal input[type="submit"].white-on-white {
        background-color: orange;
    }
</style>


</body>

</html>

