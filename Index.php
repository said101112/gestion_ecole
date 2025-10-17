<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Connexion</title>
 <style>
 body {
 margin: 0;
 font-family: Arial, sans-serif;
 background: linear-gradient(to right, #4e63d7, #76bfe9); /* Dégradé de bleu pour le fond */
 display: flex;
 justify-content: center;
 align-items: center;
 height: 100vh;
}

.login-container {
 background-color: #ffffff;
 padding: 40px;
 border-radius: 10px;
 box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
 width: 100%;
 max-width: 500px; /* Largeur maximale du formulaire */
 box-sizing: border-box;
}

.login-form h2 {
 margin-bottom: 30px;
 color: #333;
 text-align: center;
 font-size: 2em; /* Titre plus grand */
}

.input-group {
 margin-bottom: 25px;
}

.input-group label {
 display: block;
 margin-bottom: 10px;
 color: #555;
 font-size: 1.1em; /* Étiquettes plus grandes */
}

.input-group input {
 width: 100%;
 padding: 15px; /* Champs de saisie plus grands */
 border: 1px solid #ccc;
 border-radius: 5px;
 box-sizing: border-box;
 font-size: 1.1em; /* Police plus grande dans les champs de saisie */
}

button {
 width: 100%;
 padding: 15px; /* Bouton plus grand */
 background-color: #4e63d7;
 color: white;
 border: none;
 border-radius: 5px;
 cursor: pointer;
 font-size: 1.2em; /* Texte du bouton plus grand */
 transition: background-color 0.3s;
}

button:hover {
 background-color: #3b4fa5;
}</style>
 <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="login-container">
 <form action="Acces_BD/connexion.php" method="post" class="login-form">
 <h2>Connexion</h2>
 <div class="input-group">
 <label for="email">Email</label>
 <input type="email" name="email" id="email" required>
 </div>
 <div class="input-group">
 <label for="password">Mot de passe</label>
 <input type="password" name="password" id="password" required>
 </div>
 <button type="submit">Se connecter</button>
 </form>
 </div>
</body>
</html>