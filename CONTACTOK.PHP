<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Message Sent</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style>
  body {
    font-family: 'Roboto', sans-serif;
    text-align: center;
    margin-top: 50px;
  }
  .confirmation {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
  }
  .confirmation h2 {
    color: #333;
  }
  .check-icon {
    color: green;
    font-size: 48px;
    margin-bottom: 20px;
  }
</style>
</head>
<body>
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
            if (confirm("Voulez vous vraiment vous déconnecter ?")) {
                <?php $email = "" ?>
                <?php $token = "" ?>
                
                window.location.href = "logout.php";
            }
            
        }
</script>
<div class="confirmation">
  <i class="fas fa-check-circle check-icon"></i>
  <h2>Message envoyé avec succès </h2>
  <p>Nous vous ferrons un retour à l'email renseingné dans les plus brefs délai</p>
</div>

</body>
</html>
