<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation Service</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          'brand': '#1a202c',
          'primary': '#f6ad55',
        }
      }
    }
  }
</script>
<style>
  body {
    font-family: 'Roboto', sans-serif;
  }
  .modal {
    transition: opacity 0.25s ease;
  }
  body.modal-active {
    overflow-x: hidden;
    overflow-y: visible !important;
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
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  margin-top: 15%; /* Ajustement de la marge pour centrer verticalement */
  padding: 20px;
  border: 1px solid #888;
  max-width: 80%; /* Ajustement pour rendre la fenêtre modale plus carrée */
  width: 300px; /* Taille de la fenêtre modale */
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
  border-radius: 10px; /* Coins arrondis */
}

.button-container {
  display: flex;
  justify-content: space-between; /* Les boutons seront alignés sur les côtés */
  margin-top: 20px; /* Marge au-dessus des boutons */
  padding : auto;
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
/* Style de base du bouton */
button {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

/* Style du bouton au survol */
button:hover {
  background-color: #f6ad55 ; /* Change la couleur de l'arrière-plan au survol */
  color: white; /* Change la couleur du texte au survol */
}





  
</style>
</head>
<body class="bg-gray-100">

<div id="myCustomModal" class="custom-modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Entrez des informations complementaires :</p>
    <input type="text" id="userInputCustom">
    <!-- Conteneur pour les boutons -->
    <div class="button-container">
      <button onclick="submitCustomInfo()">  Aller vers compte  </button>
      <button onclick="closeCustomModal()"> Plus tard </button>
    </div>
  </div>
</div>



<script>
  // Get the custom modal
var customModal = document.getElementById("myCustomModal");

// Get the button that opens the custom modal
var customBtn = document.querySelector("button");

// Get the <span> element that closes the custom modal
var customSpan = document.getElementsByClassName("close")[0];

// Function to open the custom modal only if it has not been shown in this session
function openCustomModalOnce() {
  if (!hasPopupBeenShown()) {
    customModal.style.display = "block";
    setPopupShown();
  }
}

// Appel de la fonction pour ouvrir la pop-up lors du chargement de la page
window.onload = function() {
  openCustomModalOnce();
}


// Function to close the custom modal
customSpan.onclick = function() {
  customModal.style.display = "none";
}

// When the user clicks anywhere outside of the custom modal, close it
window.onclick = function(event) {
  if (event.target == customModal) {
    customModal.style.display = "none";
  }
}

// Function to handle submitting custom information
function submitCustomInfo() {
  window.location.href = "compte.php";
}

// Function to close custom modal without submitting custom information
function closeCustomModal() {
  customModal.style.display = "none";
}
// Function to check if the pop-up has already been shown in this session
function hasPopupBeenShown() {
  return sessionStorage.getItem('popupShown') === 'true';
}

// Function to set a flag indicating that the pop-up has been shown in this session
function setPopupShown() {
  sessionStorage.setItem('popupShown', 'true');
}

// Function to open the custom modal only if it has not been shown in this session
function openCustomModalOnce() {
  if (!hasPopupBeenShown()) {
    customModal.style.display = "block";
    setPopupShown();
  }
}



</script>
<nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a href="1.PHP" class="flex items-center py-4 px-2">
                            <img src="logo.png" alt="Logo" class="h-8 w-8 mr-2">
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">

                        <a href="#" class="py-4 px-2 text-gray-500 border-b-4 border-orange-500 font-semibold">Service</a>
                        <a href="nosatouts.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-900 transition duration-300">Nos atouts</a>
                        <a href="contact.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-900 transition duration-300">Nous contacter</a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3 ">
                    
                    <button  id=reservation class="py-2 px-2 font-medium text-white bg-orange-500 rounded hover:bg-orange-400 transition duration-300">Réservation</button>
                    <a href="compte.php" id='compte' class="py-2 px-2 font-medium text-gray-700 bg-white-200 rounded hover:bg-gray-300 transition duration-300"><i class="fa fa-user-circle"
                            aria-hidden="true"></i></a>
                    <a href="#" onclick="confirmLogout()" class="py-2 px-2 font-medium text-gray-700 bg-white-200 rounded hover:bg-gray-300 transition duration-300"><i class="fa-solid fa-right-from-bracket"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        function confirmLogout() {
            if (confirm("Voulez vous vraiment vous déconnecter ?")) {
                <?php $email = "" ?>
                <?php $token = "" ?>
                
                window.location.href = "logout.php";
            }
            
        }
</script>



<script>
  function contact() {
    window.location.href = 'compte.php';
  }
</script>
    

<script>
function confirmLogout() {
                                        if (confirm("Voulez vous vraiment vous déconnecter ?")) {
                                            <?php $email = "" ?>
                                            <?php $token = "" ?>
                                            
                                            window.location.href = "logout.php";
                                        } }
  // Fonction pour rediriger l'utilisateur vers la page de paramètres
  function redirectToParametres() {
    window.location.href = "compte.php";
  }

  // Ajoute un écouteur d'événements au bouton "Paramètre"
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('compte').addEventListener('click', redirectToParametres);

    


// Fonction pour fermer la pop-up personnalisée
function closeCustomModal() {
  document.getElementById("myCustomModal").style.display = "none";
}

// Fonction pour ouvrir la pop-up personnalisée
function openCustomModal() {
  document.getElementById("myCustomModal").style.display = "block";
}

// Fonction pour vérifier si la pop-up a déjà été affichée dans cette session
function hasPopupBeenShown() {
  return sessionStorage.getItem('popupShown') === 'true';
}

// Fonction pour définir que la pop-up a été affichée dans cette session
function setPopupShown() {
  sessionStorage.setItem('popupShown', 'true');
}

// Appel de la fonction pour ouvrir la pop-up lors du chargement de la page
window.onload = function() {
  if (!hasPopupBeenShown()) {
    openCustomModal();
    setPopupShown();
  }
}

  });
</script>




<!-- Main Content -->
<div class="max-w-4xl mx-auto py-10">
  <!-- Step Indicator -->
  <div class="text-center mb-10">
    <h1 class="mt-2 text-3xl font-bold text-gray-800">Selectionnez votre service</h1>
  </div>

  <!-- Service Selection -->
  <div class="bg-white p-8 rounded-md shadow-md">
    <div class="flex flex-wrap items-center space-x-4 mb-6">
      <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded">Formation</button>
      <button class="text-gray-700 px-6 py-2 rounded hover:bg-gray-200"></button>
      <button class="text-gray-700 px-6 py-2 rounded hover:bg-gray-200"></button>
      <button class="text-gray-700 px-6 py-2 rounded hover:bg-gray-200"></button>
      <button class="ml-auto bg-orange-500 text-white px-6 py-2 rounded shadow-lg hover:bg-orange-400"><a href="formations.php">Continuer</a> →</button>
    </div>
  </div>

  <!-- Reservation List -->
  <div class="mt-8 bg-white p-8 rounded-md shadow-md">
  <div class="flex flex-col">
    <div class="flex items-center">
      <div id="formationButton" class="rounded-full bg-green-500 h-8 w-8 flex items-center justify-center mr-3">
        <svg class="text-white checkmark" fill="none" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
      </div>
      <div class="flex flex-col">
        <span class="font-bold text-gray-800">Formation</span>
        <span class="text-sm text-gray-500">Salle Beryl | 1h</span>
      </div>
    </div>
    <div class="flex items-center mt-3">
      <div id="reservationButton" class="rounded-full bg-gray-200 h-8 w-8 flex items-center justify-center mr-3">
        <svg class="text-white checkmark hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
      </div>
      <div class="flex flex-col">
        <span class="font-bold text-gray-800">Réservation externe</span>
        <span class="text-sm text-gray-500">Salle Beryl | 1h</span>
      </div>
    </div>
  </div>
</div>



    <!-- Navigation Buttons -->
    <div class="flex justify-between mt-10">
      <a href="#" class="text-orange-500 text-sm font-semibold hover:underline">← étape précédente</a>
      <a href="horaire.php" class="text-orange-500 text-sm font-semibold hover:underline">étape suivante →</a>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50">
  </div>
  <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
    <div class="modal-content py-4 text-left px-6">
      <div class="flex justify-end pt-2 space-x-4">
        <button class="px-4 bg-gray-500 p-3 rounded text-white hover:bg-gray-400" onclick="toggleModal()">Cancel</button>
        <button class="px-4 bg-orange-500 p-3 rounded text-white hover:bg-orange-400">Continue</button>
      </div>
    </div>
  </div>
</div>

<!-- Script pour inverser les boutons -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#formationButton, #reservationButton').click(function() {
      // Inverser les styles des boutons
      $('#formationButton').toggleClass('bg-gray-200 bg-green-500');
      $('#reservationButton').toggleClass('bg-green-500 bg-gray-200');
      
      // Afficher/masquer les icônes de coche
      $('.checkmark').toggleClass('hidden');
    });
  });
</script>



</body>
<!-- <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDIpLpdfFTSFzrqrFHK74z1NAjjwzhiThE",
    authDomain: "logsystem-f5e1f.firebaseapp.com",
    projectId: "logsystem-f5e1f",
    storageBucket: "logsystem-f5e1f.appspot.com",
    messagingSenderId: "476759423663",
    appId: "1:476759423663:web:2524fd7ba59192a49d725a",
    measurementId: "G-4EQCZRPS1D"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script> -->
</html>
