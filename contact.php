<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nous contacter</title>
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
  /* Style pour la barre de navigation */
  nav {
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 10px 0;
  }
  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }
  /* Styles pour le formulaire de contact */
  .contact-form {
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
  }
  .contact-form h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #333;
  }
  .contact-form input[type="text"],
  .contact-form input[type="email"],
  .contact-form input[type="object"],
  .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }
  .contact-form textarea {
    height: 150px;
  }
  .contact-form button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #f3721a;
    color: #fff;
    cursor: pointer;
  }
  .contact-form button:hover {
    background-color: #e6993f;
  }
</style>
</head>
<body class="bg-gray-100">

 <!-- Navigation -->
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
                        <a href="1.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-900 transition duration-300">Service</a>
                        <a href="nosatouts.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-900 transition duration-300">Nos atouts</a>
                        <a href="contact.php" class="py-4 px-2 text-gray-500 border-b-4 border-orange-500 font-semibold">Nous contacter</a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3 ">
                    
                    <button  id=reservation class="py-2 px-2 font-medium text-white bg-orange-500 rounded hover:bg-orange-400 transition duration-300">Réservation</button>
                    <a href="compte.php" id='compte' class="py-2 px-2 font-medium text-gray-700 bg-white-200 rounded hover:bg-gray-300 transition duration-300"><i class="fa fa-user-circle"
                            aria-hidden="true"></i></a>
                    <a href="#" onclick="confirmLogout()" class="py-2 px-2 font-medium text-gray-700 bg-white-200 rounded hover:bg-gray-300 transition duration-300"><i class="fa-solid fa-right-from-bracket"></i></a>
                        <script>
                            function confirmLogout() {
                                        if (confirm("Voulez vous vraiment vous déconnecter ?")) {
                                            <?php $email = "" ?>
                                            <?php $token = "" ?>
                                            
                                            window.location.href = "logout.php";
                                        } }
                        </script>
                </div>
            </div>
        </div>
    </nav>
<!-- Contenu principal -->
<div class="container mt-10">
  <!-- Formulaire de contact -->
  <div class="contact-form">
    <h2>Nous contacter</h2>
    <form action="contactpost.php" method="post">
  <input type="text" name="name" placeholder="Nom" required>
  <input type="object" name="object" placeholder="Sujet" required>
  <input type="email" name="email" placeholder="Email" required>
  <textarea name="message" placeholder="Message" required></textarea>
  <button type="submit">Envoyer</button>
</form>
  </div>
</div>

</body>
</html>
