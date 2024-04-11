<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Choisir Un Horaire</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom scrollbar style */
    ::-webkit-scrollbar {
      width: 10px;
    }
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }
    ::-webkit-scrollbar-thumb {
      background: #888;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
  </style>
</head>
<body class="bg-gray-100">
<header class="bg-white py-4 shadow">
    <div class="container mx-auto flex items-center justify-between px-4">
      <div class="flex items-center">
        <img class="h-10" src="logo.png" alt="Prixy Logo">
        <nav class="ml-10">
          <a href="#" class="text-gray-600 mr-4 hover:text-orange-600 transition duration-300">Nous connaître</a>
          <a href="#" class="text-gray-600 mr-4 hover:text-orange-600 transition duration-300">Nos atouts</a>
          <a href="#" class="text-gray-600 mr-4 hover:text-orange-600 transition duration-300">Nous contacter</a>
        </nav>
      </div>
      <button class="text-white bg-orange-500 hover:bg-orange-600 transition duration-300 px-6 py-2 rounded-md">Réservation</button>
    </div>
  </header>
  <div class="flex flex-col md:flex-row">
    <!-- Calendar section -->
    <div class="md:w-2/3 p-8">
      <h1 class="text-3xl font-bold text-gray-800 mb-6">Choisir Un Horaire</h1>
 
      <div class="mb-4">
        <div class="flex justify-between items-center mb-2">
          <span class="text-gray-600">July</span>
          <div class="flex space-x-2">
            <button class="text-gray-600">&lt;</button>
            <button class="text-gray-600">&gt;</button>
          </div>
        </div>
        <div class="grid grid-cols-7 gap-2">
          <!-- Generate the dates using JavaScript -->
          <script>
            // Simplified example of generating the dates
            const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            days.forEach(day => {
              document.write(`<div class="text-center font-semibold">${day}</div>`);
            });
          </script>
        </div>
      </div>
 
      <!-- Time slots -->
      <div class="max-h-screen overflow-y-auto">
        <!-- Generate time slots using JavaScript -->
        <script>
          // Simplified example of generating time slots
          for (let hour = 9; hour <= 17; hour++) {
            document.write(`<div class="flex justify-between items-center py-2 border-b border-gray-300">
              <span>${hour}:00h</span>
              <button class="text-gray-600">></button>
            </div>`);
          }
        </script>
      </div>
    </div>
 
    <!-- Sidebar for reservation summary -->
    <div class="md:w-1/3 bg-white p-8">
      <div class="flex justify-between items-center mb-4">
        <span class="font-bold text-xl">Prixy</span>
        <button class="text-gray-500 text-xl">×</button>
      </div>
      <div class="mb-4">
        <div class="mb-2">
          <h3 class="font-semibold">Salle - BERYL</h3>
          <p>Excel</p>
        </div>
        <div>
          <p>1h</p>
          <p class="font-bold">EUR 900</p>
        </div>
      </div>
      <div class="flex justify-between items-center">
        <span class="font-bold text-lg">Total</span>
        <span class="font-bold text-lg">EUR 900</span>
      </div>
      <button class="w-full bg-orange-500 text-white py-2 mt-4 rounded-md">Continue</button>
    </div>
  </div>
 
</body>
</html>