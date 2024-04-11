<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formations - Prixy</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<style>
  /* Custom styles can go here if needed */
</style>
</head>
<body class="font-roboto bg-white">
  <header class="bg-white py-4 shadow">
    <div class="container mx-auto flex items-center justify-between px-4">
      <div class="flex items-center">
        <img class="h-10" src="logo.png" alt="Prixy Logo">
        <nav class="ml-10">
          <a href="#" class="text-gray-600 mr-4 hover:text-orange-600 transition duration-300">Nous connaître</a>
          <a href="nosatouts.php" class="text-gray-600 mr-4 hover:text-orange-600 transition duration-300">Nos atouts</a>
          <a href="NousContactez.php" class="text-gray-600 mr-4 hover:text-orange-600 transition duration-300">Nous contacter</a>
        </nav>
      </div>
      <button class="text-white bg-orange-500 hover:bg-orange-600 transition duration-300 px-6 py-2 rounded-md">Réservation</button>
    </div>
  </header>

  <main class="container mx-auto mt-8 px-4">
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-4xl font-bold text-gray-800">Disposition de la salle</h1>
      <div class="flex items-center space-x-2">
        <input type="search" placeholder="Rechercher" class="border-2 border-gray-200 p-2 rounded-md">
        <button class="bg-orange-500 p-2 rounded-md text-white">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6H6v6H6m12 0H6m6 0H6"></path></svg>
        </button>
      </div>
    </div>

    <section>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="Ilot.png" alt="Excel" class="w-full h-32 sm:h-48 object-cover">
          <div class="p-4">
            <h2 class="text-lg font-semibold">Disposition en îlots</h2>
            <p class="text-gray-600">Configuration : Les tables sont regroupées en petits îlots de quelques tables, permettant aux participants de travailler en petits groupes. Cette disposition favorise la collaboration et les échanges entre les participants.</p>
          </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="conference.png" alt="Word" class="w-full h-32 sm:h-48 object-cover">
          <div class="p-4">
            <h2 class="text-lg font-semibold">Disposition en conférence</h2>
            <p class="text-gray-600">Configuration : Des tables rondes sont disposées dans la salle, permettant une communication facile entre les participants. Cette disposition est souvent utilisée pour des réunions ou des séminaires où les participants doivent discuter en petits groupes.</p>
          </div>
        </div>

        <!-- PowerPoint Training Card -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="Theatre.png" alt="PowerPoint" class="w-full h-32 sm:h-48 object-cover">
          <div class="p-4">
            <h2 class="text-lg font-semibold">Disposition en théâtre</h2>
            <p class="text-gray-600">Configuration : Les chaises sont alignées en rangées, toutes orientées vers l'avant où se trouve le formateur. Cette disposition est idéale pour des présentations ou des conférences où l'interaction entre les participants est limitée.</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script>
    // Optional: Write JavaScript here if interactive elements are needed
  </script>
</body>
</html>
