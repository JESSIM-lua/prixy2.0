
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>

</head>

<body>



    <div class="container" id="container">
        
        <div class="form-container sign-in">
            <form method="POST" action="signup.php">
                <h1>Créer un compte !</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Ou utilisez votre email</span>
                <input type="email" name="Email" placeholder="Email" required>
                <input type="password" name="Password" placeholder="Mot de passe" required>
                
                <button name="submit">S'inscrire</button>
            
                <p>Déjà client ? <a href="index.php">Se connecter</a> </p>
            </form>
        </div>
        
    </div>

    <script src="script.js"></script>
</body>

</html>