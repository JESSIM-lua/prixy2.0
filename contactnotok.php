<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Message non envoyé</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
                        <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-900 transition duration-300">Nos atouts</a>
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
            if (confirm("Voulez vous vraiment vous déconnecter ?") {
                <?php $email = "" ?>
                <?php $token = "" ?>
                
                window.location.href = "logout.php";
            }
            
        }
</script>





<style>
  body {
    font-family: 'Roboto', sans-serif;
    text-align: center;
    margin-top: 50px;
  }
  .error {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
  }
  .error h2 {
    color: #333;
  }
  .error-icon {
    color: red;
    font-size: 48px;
    margin-bottom: 20px;
  }
</style>
</head>
<body>

<div class="error">
  <i class="fas fa-times-circle error-icon"></i>
  <h2>Message non envoyé</h2>
  <p>Désolé, mais une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer plus tard.</p>
</div>

</body>
</html>
