<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styleC.css">

<title>COMPTE</title>
</head>
<body>

<h1>COMPTE</h1>




<form method="post" action="compteaction.php">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom" value=" "><br><br>
  <label for="prenom">Prénom :</label>
  <input type="text" id="prenom" name="prenom" value=""><br><br>
  <label for="telephone">Téléphone :</label>
 <input type="text" id="telephone" name="telephone" value="" maxlength="20"><br><br>

  <label for="adresse">Adresse :</label>
  <input type="text" id="adresse" name="adresse" value=""><br><br>
  <input type="submit" name="submit" value="Enregistrer">
</form>

</body>
</html>
