<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos atouts - ResAPPLI</title>
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
                    <a href="1.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-900 transition duration-300">Nos services</a> 
                    <a href="nosatouts.php" class="py-4 px-2 text-gray-500 border-b-4 border-orange-500 font-semibold">Nos atouts</a> 
                    <a href="contact.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-900 transition duration-300">Nous contacter</a>
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
    

    <main class="container mx-auto mt-8 px-4">
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-4xl font-bold text-gray-800">Nos atouts</h1>
      
    </div>

    <section>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="equipe.png" alt="Excel" class="w-full h-32 sm:h-48 object-cover">
          <div class="p-4">
            <h2 class="text-lg font-semibold">Notre equipe</h2>
            <p class="text-gray-600">Chez ResAPPLI, notre équipe est dévouée à fournir un service exceptionnel à nos utilisateurs. Nous croyons fermement en l'importance d'un soutien solide et d'une assistance de qualité pour garantir une expérience utilisateur optimale.</p>
          </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="technicienne.jpg" alt="Word" class="w-full h-32 sm:h-48 object-cover">
          <div class="p-4">
            <h2 class="text-lg font-semibold">Sécurité et confidentialité</h2>
            <p class="text-gray-600">Nous accordons une grande importance à la sécurité et à la confidentialité de vos données. Avec ResAPPLI, vos informations personnelles sont sécurisées et protégées en tout temps.</p>
          </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="calendrier.jpg" alt="PowerPoint" class="w-full h-32 sm:h-48 object-cover">
          <div class="p-4">
            <h2 class="text-lg font-semibold">Flexibilité de réservation</h2>
            <p class="text-gray-600">Avec ResAPPLI, vous avez la liberté de planifier vos événements et formations selon vos propres disponibilités, grâce à notre système de réservation flexible.</p>
          </div>
        </div>
      </div>
    </section>
  </main>



</body>
</html>