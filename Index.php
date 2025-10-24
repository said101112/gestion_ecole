<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de Gestion Scolaire</title>
    
    <!-- Polices Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <!-- ==================== Header ==================== -->
    <header id="header">
        <div class="container">
            <div class="logo">
                <a href="#">SchoolPlatform</a>
            </div>
            <nav class="navbar">
                <ul class="nav-links">
                    <li><a href="#hero">Accueil</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#statistics">Statistiques</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <button id="signInBtn" class="sign-in-btn">Connexion</button>
            </nav>
            <div class="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <main>
        <!-- ==================== Hero Section ==================== -->
        <section class="hero" id="hero">
            <div class="container hero-container">
                <div class="hero-content">
                    <h1>Gérez votre établissement scolaire efficacement</h1>
                    <p>Une plateforme complète pour simplifier la gestion des étudiants, des professeurs et des ressources éducatives.</p>
                    <div class="cta-buttons">
                        <button class="primary-btn">Découvrir nos services</button>
                        <button class="secondary-btn">Voir la démo</button>
                    </div>
                </div>
                <div class="hero-visual">
                    <!-- Remplacer par une illustration ou image pertinente -->
                    <img src="https://www.journalexpress.ca/wp-content/uploads/sites/6/2023/02/Image7-1600x900.png" alt="Illustration de la plateforme de gestion scolaire" style="max-width: 100%; height: 100%;">
                </div>
            </div>
        </section>

        <!-- ==================== Services Section ==================== -->
        <section class="services" id="services">
            <div class="container">
                <h2 class="section-title">Nos Services de Gestion</h2>
                <p class="section-subtitle">Une solution complète pour tous les aspects de votre établissement</p>
                <div class="cards-container">
                    <div class="service-card">
                        <div class="card-icon">[Icône Étudiant]</div>
                        <h3>Gestion des Étudiants</h3>
                        <p>Inscriptions, dossiers académiques, suivi des performances et bien plus.</p>
                        <a href="#" class="card-cta">En savoir plus →</a>
                    </div>
                    <div class="service-card">
                        <div class="card-icon">[Icône Professeur]</div>
                        <h3>Gestion des Professeurs</h3>
                        <p>Planning des cours, évaluations, communication avec les étudiants.</p>
                        <a href="#" class="card-cta">En savoir plus →</a>
                    </div>
                    <div class="service-card">
                        <div class="card-icon">[Icône Admin]</div>
                        <h3>Administration</h3>
                        <p>Gestion des ressources, finances, et rapports détaillés.</p>
                        <a href="#" class="card-cta">En savoir plus →</a>
                    </div>
                    <div class="service-card">
                        <div class="card-icon">[Icône Comm]</div>
                        <h3>Communication</h3>
                        <p>Messagerie intégrée, annonces, et portail parents-enseignants.</p>
                        <a href="#" class="card-cta">En savoir plus →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== Statistics Section ==================== -->
        <section class="statistics" id="statistics">
            <div class="container">
                <h2 class="section-title">Notre Impact</h2>
                <p class="section-subtitle">Des chiffres qui parlent d'eux-mêmes</p>
                <div class="stats-container">
                    <div class="stat-item">
                        <div class="stat-number" data-target="150">0</div>
                        <div class="stat-label">Établissements</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="5000">0</div>
                        <div class="stat-label">Professeurs</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="75000">0</div>
                        <div class="stat-label">Étudiants</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="98">0</div>
                        <div class="stat-label">% de Satisfaction</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== Contact Section ==================== -->
        <section class="contact" id="contact">
            <div class="container contact-container">
                <div class="contact-content">
                    <h2 class="section-title">Contactez-nous</h2>
                    <p>Vous avez des questions? Notre équipe est là pour vous aider.</p>
                    <form class="contact-form">
                        <div class="form-group"><input type="text" id="name" name="name" placeholder="Nom complet" required></div>
                        <div class="form-group"><input type="email" id="email" name="email" placeholder="Adresse email" required></div>
                        <div class="form-group"><textarea id="message" name="message" rows="5" placeholder="Votre message" required></textarea></div>
                        <button type="submit" class="primary-btn">Envoyer le message</button>
                    </form>
                </div>
                <div class="contact-info">
                    <h3>Informations de contact</h3>
                    <div class="contact-item"><p><span>[Icône Email]</span> contact@ecoleplatforme.fr</p></div>
                    <div class="contact-item"><p><span>[Icône Tél]</span> +33 1 23 45 67 89</p></div>
                    <div class="contact-item"><p><span>[Icône Lieu]</span> 123 Avenue de l'Éducation, Paris</p></div>
                </div>
            </div>
        </section>
    </main>

    <!-- ==================== Footer ==================== -->
    <footer>
        <div class="container footer-content">
            <div class="footer-section"><h3>SchoolPlatform</h3><p>Simplifiez la gestion de votre établissement.</p></div>
            <div class="footer-section"><h4>Navigation</h4><ul><li><a href="#hero">Accueil</a></li><li><a href="#services">Services</a></li></ul></div>
            <div class="footer-section"><h4>Légal</h4><ul><li><a href="#">Mentions légales</a></li><li><a href="#">Confidentialité</a></li></ul></div>
        </div>
        <div class="footer-bottom"><p>&copy; 2025 Plateforme de Gestion Scolaire. Tous droits réservés.</p></div>
    </footer>

    <!-- ==================== Login Modal ==================== -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Connexion</h2>
            <form action="Acces_BD/connexion.php" method="post" class="login-form">
                <div class="form-group"><label for="login-email">Email</label><input type="email" id="login-email" required></div>
                <div class="form-group"><label for="login-password">Mot de passe</label><input type="password" id="login-password" required></div>
                <div class="form-options"><label class="checkbox-container"><input type="checkbox"> Se souvenir de moi</label><a href="#" class="forgot-password">Mot de passe oublié?</a></div>
                <button type="submit" class="primary-btn login-btn">Se connecter</button>
            </form>
            <div class="login-divider"><span>Ou</span></div>
            <div class="alternative-login"><button class="google-login">[Icône Google] Se connecter avec Google</button></div>
            <p class="signup-link">Pas encore de compte? <a href="#">Créer un compte</a></p>
        </div>
    </div>
    
    <!-- Script JavaScript -->
    <script src="script.js"></script>
</body>
</html>