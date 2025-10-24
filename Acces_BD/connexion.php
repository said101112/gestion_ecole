<?php
session_start();

function Connect() {
    // Charger les paramètres depuis .env
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
    $hashed_password = md5($password);

    $conn = Connect();

    // 🔹 1️⃣ Vérifier dans la table Etudiant
    $stmt = $conn->prepare("SELECT * FROM etudiant WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $etudiant = $result->fetch_assoc();
        $_SESSION['email'] = $etudiant['email'];
        $_SESSION['nom'] = $etudiant['nom'];
        $_SESSION['role'] = 'etudiant';
        header("Location: ../IHM/accueil.php");
        exit();
    }

    // 🔹 2️⃣ Sinon, vérifier dans la table Prof
    $stmt = $conn->prepare("SELECT * FROM Prof WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $prof = $result->fetch_assoc();
        $_SESSION['email'] = $prof['email'];
        $_SESSION['nom'] = $prof['nom'];
        $_SESSION['role'] = 'prof';
        header("Location: ../IHM/accueil.php");
        exit();
    }

    
    echo "<p style='color:red; text-align:center;'>Email ou mot de passe incorrect</p>";

    $stmt->close();
    $conn->close();
}
?>
