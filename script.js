/**
 * Attend que le contenu de la page soit entièrement chargé avant d'exécuter le script.
 * C'est une bonne pratique pour éviter les erreurs liées à des éléments non encore créés.
 */
document.addEventListener('DOMContentLoaded', () => {

    // ========================================================================
    // 1. GESTION DU HEADER ET DE LA NAVIGATION
    // ========================================================================

    const header = document.getElementById('header');
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navbar = document.querySelector('.navbar');

    // --- Header "Sticky" au défilement ---
    window.addEventListener('scroll', () => {
        // Ajoute la classe 'sticky' si l'utilisateur a défilé de plus de 50px
        if (window.scrollY > 50) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    });

    // --- Menu Hamburger pour mobile ---
    hamburgerMenu.addEventListener('click', () => {
        // Ajoute/retire la classe 'active' sur le menu hamburger (pour l'animation en croix)
        hamburgerMenu.classList.toggle('active');
        // Ajoute/retire la classe 'active' sur la barre de navigation (pour la faire apparaître/disparaître)
        navbar.classList.toggle('active');
    });


    // ========================================================================
    // 2. GESTION DE LA MODALE DE CONNEXION
    // ========================================================================

    const modal = document.getElementById('loginModal');
    const signInBtn = document.getElementById('signInBtn');
    const closeBtn = document.querySelector('.modal .close-btn');

    // --- Ouverture de la modale ---
    // On utilise classList.add() pour déclencher les animations CSS
    if (signInBtn) {
        signInBtn.addEventListener('click', () => {
            modal.classList.add('active');
        });
    }

    // --- Fermeture de la modale (via le bouton 'X' ou en cliquant à l'extérieur) ---
    // On utilise classList.remove()
    const closeModal = () => {
        modal.classList.remove('active');
    }
    
    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    
    // Ferme la modale si l'utilisateur clique sur le fond sombre
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });


    // ========================================================================
    // 3. COMPTEURS DE STATISTIQUES ANIMÉS
    // ========================================================================

    const statsSection = document.getElementById('statistics');
    const statNumbers = document.querySelectorAll('.stat-number');
    let hasAnimatedStats = false; // Pour s'assurer que l'animation ne se lance qu'une fois

    const animateCounters = () => {
        statNumbers.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const speed = 200; // Un chiffre plus petit rend l'animation plus rapide
            const increment = target / speed;

            const updateCount = () => {
                if (count < target) {
                    count += increment;
                    counter.innerText = Math.ceil(count);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    // L'Intersection Observer surveille quand la section des statistiques devient visible
    const statsObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimatedStats) {
                animateCounters();
                hasAnimatedStats = true;
                observer.unobserve(entry.target); // On arrête d'observer après l'animation
            }
        });
    }, { threshold: 0.5 }); // Se déclenche quand 50% de la section est visible

    if (statsSection) {
        statsObserver.observe(statsSection);
    }


    // ========================================================================
    // 4. ANIMATIONS D'APPARITION AU DÉFILEMENT (NOUVEAUTÉ)
    // ========================================================================
    
    // Sélectionne tous les éléments qui doivent apparaître en fondu
    const fadeElements = document.querySelectorAll('.fade-in');

    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            // Si l'élément est visible à l'écran
            if (entry.isIntersecting) {
                // On ajoute la classe 'visible' qui déclenche l'animation CSS
                entry.target.classList.add('visible');
                // On arrête de surveiller cet élément pour optimiser les performances
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 }); // Se déclenche dès que 10% de l'élément est visible

    // On demande à l'observer de surveiller chaque élément
    fadeElements.forEach(element => {
        fadeObserver.observe(element);
    });

});