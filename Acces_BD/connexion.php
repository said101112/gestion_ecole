<?php
session_start();

function Connect() {
    // Charger les paramètres de connexion
    $env = parse_ini_file(__DIR__ . '/.env');
    $conn = new mysqli(
        $env['Serveur'],
        $env['Utilisateur'],
        $env['Password'],
        $env['db_name']
    );

    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }
    return $conn;
}

// Si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Connexion à la BD
    $conn = Connect();

    // Préparer la requête pour éviter les injections SQL
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $hashed_password = md5($password); // Mot de passe chiffré
    $stmt->bind_param("ss", $email, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Vérifier si un utilisateur existe
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];
        header("Location: ../IHM/accueil.php");
        exit();
    } else {
        echo "<p style='color:red; text-align:center;'>Email ou mot de passe incorrect</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
