<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio BTS SIO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Header -->
    <header class="sticky top-0 z-50 bg-slate-900/80 backdrop-blur-md border-b border-slate-800">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <span class="text-2xl font-bold"><span class="tech-text">Truong Son Vu</span></span>
            </div>
            
            <!-- Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#bts-sio" class="nav-link text-slate-300 hover:text-white">BTS SIO</a>
                <a href="#parcours" class="nav-link text-slate-300 hover:text-white">Parcours</a>
                <a href="#projets" class="nav-link text-slate-300 hover:text-white">Projets</a>
                <a href="#veille" class="nav-link text-slate-300 hover:text-white">Veille</a>
                <a href="#contact" class="nav-link text-slate-300 hover:text-white">Contact</a>
            </nav>
            
            <!-- Social Icons -->
            <div class="flex items-center space-x-4">
                <a href="#" class="text-slate-300 hover:text-blue-400 transition-colors" title="Télécharger mon CV">
                    <i class="fas fa-file-pdf text-xl"></i>
                </a>
                <a href="#" class="text-slate-300 hover:text-blue-500 transition-colors" title="LinkedIn">
                    <i class="fab fa-linkedin text-xl"></i>
                </a>
                <a href="#" class="text-slate-300 hover:text-white transition-colors" title="GitHub">
                    <i class="fab fa-github text-xl"></i>
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <button class="md:hidden text-slate-300 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="accueil" class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 to-slate-800">
            <div class="container mx-auto px-4 py-20 flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        <span class="text-white">Bonjour, je suis</span> <span class="tech-text">Truong Son Vu</span>
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-semibold mb-6 text-slate-300">
                        Étudiant en <span class="tech-text">BTS SIO</span> Option SLAM
                    </h2>
                    <p class="text-lg text-slate-300 mb-8 max-w-lg">
                        Passionné par le développement logiciel.
                        Je crée des solutions innovantes pour répondre aux besoins des utilisateurs.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#contact" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-md text-white font-medium hover:opacity-90 transition-opacity">
                            Me contacter
                        </a>
                        <a href="#projets" class="px-6 py-3 border border-slate-600 rounded-md text-white font-medium hover:bg-slate-800 transition-colors">
                            Voir mes projets
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <div class="w-72 h-72 md:w-96 md:h-96 rounded-full overflow-hidden border-4 border-slate-700 relative">
                            <img src="img/avatar.jpg" alt="Photo de profil" class="absolute inset-0 w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-5 -right-5 bg-slate-800 px-4 py-2 rounded-full border border-slate-700">
                            <span class="text-blue-400 font-medium">Développeur</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BTS SIO Section -->
        <section id="bts-sio" class="py-20 bg-slate-800">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">
                    <span class="tech-text">BTS SIO</span> <span class="text-white">Services Informatiques aux Organisations</span>
                </h2>
                
                <div class="max-w-4xl mx-auto mb-16">
                    <p class="text-lg text-slate-300 mb-8">
                        Le BTS SIO (Services Informatiques aux Organisations) est un diplôme d'État de niveau 5 (Bac+2) qui forme des professionnels capables de répondre aux besoins informatiques des entreprises.
                    </p>
                    <p class="text-lg text-slate-300 mb-8">
                        Cette formation permet d'acquérir des compétences en développement d'applications, en administration des systèmes et réseaux, ainsi qu'en cybersécurité.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8 mb-16">
                    <div class="bg-slate-900 p-8 rounded-xl border border-slate-700 hover:border-blue-500 transition-colors">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-full bg-blue-900/30 flex items-center justify-center mr-4">
                                <i class="fas fa-code text-blue-400 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white">Option SLAM</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            <span class="font-semibold text-blue-400">Solutions Logicielles et Applications Métiers</span> : Cette option forme des spécialistes du développement d'applications et de la maintenance des parcs applicatifs.
                        </p>
                        <ul class="text-slate-300 space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-400 mt-1 mr-2"></i>
                                <span>Développement d'applications web et mobiles</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-400 mt-1 mr-2"></i>
                                <span>Conception et maintenance de solutions logicielles</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-400 mt-1 mr-2"></i>
                                <span>Gestion de bases de données</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-400 mt-1 mr-2"></i>
                                <span>Cybersécurité des applications</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-slate-900 p-8 rounded-xl border border-slate-700 hover:border-indigo-500 transition-colors">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-full bg-indigo-900/30 flex items-center justify-center mr-4">
                                <i class="fas fa-network-wired text-indigo-400 text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white">Option SISR</h3>
                        </div>
                        <p class="text-slate-300 mb-4">
                            <span class="font-semibold text-indigo-400">Solutions d'Infrastructure, Systèmes et Réseaux</span> : Cette option forme des experts en administration des systèmes et réseaux, ainsi qu'en cybersécurité.
                        </p>
                        <ul class="text-slate-300 space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-indigo-400 mt-1 mr-2"></i>
                                <span>Installation et maintenance des infrastructures réseaux</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-indigo-400 mt-1 mr-2"></i>
                                <span>Administration des systèmes et des serveurs</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-indigo-400 mt-1 mr-2"></i>
                                <span>Sécurisation des infrastructures</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-indigo-400 mt-1 mr-2"></i>
                                <span>Virtualisation et cloud computing</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="max-w-4xl mx-auto bg-slate-900 p-8 rounded-xl border border-slate-700">
                    <h3 class="text-2xl font-bold text-white mb-6">Débouchés professionnels</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="text-lg font-semibold text-blue-400 mb-3">Pour l'option SLAM</h4>
                            <ul class="text-slate-300 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-arrow-right text-blue-400 mt-1 mr-2 text-xs"></i>
                                    <span>Développeur d'applications</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-arrow-right text-blue-400 mt-1 mr-2 text-xs"></i>
                                    <span>Programmeur analyste</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-arrow-right text-blue-400 mt-1 mr-2 text-xs"></i>
                                    <span>Technicien d'études informatiques</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-arrow-right text-blue-400 mt-1 mr-2 text-xs"></i>
                                    <span>Développeur web</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-indigo-400 mb-3">Pour l'option SISR</h4>
                            <ul class="text-slate-300 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-arrow-right text-indigo-400 mt-1 mr-2 text-xs"></i>
                                    <span>Administrateur systèmes et réseaux</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-arrow-right text-indigo-400 mt-1 mr-2 text-xs"></i>
                                    <span>Technicien support</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-arrow-right text-indigo-400 mt-1 mr-2 text-xs"></i>
                                    <span>Technicien d'infrastructure</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-arrow-right text-indigo-400 mt-1 mr-2 text-xs"></i>
                                    <span>Spécialiste cybersécurité</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Parcours Section -->
        <section id="parcours" class="py-20 bg-slate-900">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">
                    <span class="text-white">Mon</span> <span class="tech-text">Parcours</span>
                </h2>
                
                <!-- Diplômes -->
                <div class="max-w-4xl mx-auto mb-16">
                    <h3 class="text-2xl font-bold text-white mb-8 flex items-center">
                        <i class="fas fa-graduation-cap text-blue-400 mr-3"></i>
                        <span>Formations et diplômes</span>
                    </h3>
                    
                    <div class="space-y-6">
                        <!-- Diplôme 1 -->
                        <div class="bg-slate-800 p-6 rounded-xl border-l-4 border-blue-500">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                                <h4 class="text-xl font-bold text-white">BTS SIO - Option SLAM</h4>
                                <span class="text-blue-400 font-medium">2023 - 2025</span>
                            </div>
                            <p class="text-slate-300 mb-2">IRIS - École Informatique & Numérique, 75017 Paris</p>
                            <p class="text-slate-400">Formation en initiale avec spécialisation en développement d'applications</p>
                        </div>
                        
                        <!-- Diplôme 2 -->
                        <div class="bg-slate-800 p-6 rounded-xl border-l-4 border-indigo-500">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                                <h4 class="text-xl font-bold text-white">BUT Informatique</h4>
                                <span class="text-indigo-400 font-medium">2021 - 2023</span>
                            </div>
                            <p class="text-slate-300 mb-2">IUT d'Orsay, 91190 Gif-Sur-Yvettes</p>
                            <p class="text-slate-400">Formation en initiale avec spécialisation en développement d'applications</p>
                        </div>

                        <!-- Diplôme 3 -->
                        <div class="bg-slate-800 p-6 rounded-xl border-l-4 border-indigo-500">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                                <h4 class="text-xl font-bold text-white">DU FLE - Cours Langage</h4>
                                <span class="text-indigo-400 font-medium">2020 - 2021</span>
                            </div>
                            <p class="text-slate-300 mb-2">IUT d'Orsay, 91190 Gif-Sur-Yvettes</p>
                            <p class="text-slate-400">Formation en langage francais en classe préparatoire</p>
                        </div>
                        
                        <!-- Diplôme 4 -->
                        <div class="bg-slate-800 p-6 rounded-xl border-l-4 border-blue-500">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                                <h4 class="text-xl font-bold text-white">BAC Général, Spécialités Scientifiques</h4>
                                <span class="text-blue-400 font-medium">2017 - 2020</span>
                            </div>
                            <p class="text-slate-300 mb-2">High School For Gifted Student, Hanoi, Vietnam</p>
                            <p class="text-slate-400">Mention Très Bien</p>
                        </div>
                    </div>
                </div>
                
                <!-- Compétences -->
                <div class="max-w-4xl mx-auto mb-16">
                    <h3 class="text-2xl font-bold text-white mb-8 flex items-center">
                        <i class="fas fa-code text-blue-400 mr-3"></i>
                        <span>Compétences</span>
                    </h3>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Front-end -->
                        <div class="bg-slate-800 p-6 rounded-xl border border-slate-700 skill-card transition-all">
                            <h4 class="text-lg font-bold text-white mb-4 flex items-center">
                                <i class="fas fa-laptop-code text-blue-400 mr-2"></i>
                                <span>Front-end</span>
                            </h4>
                            <div class="flex flex-wrap gap-3">
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-html5-plain colored text-xl mr-2"></i>
                                    <span>HTML5</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-css3-plain colored text-xl mr-2"></i>
                                    <span>CSS3</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-javascript-plain colored text-xl mr-2"></i>
                                    <span>JavaScript</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-react-original colored text-xl mr-2"></i>
                                    <span>React.js</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-tailwindcss-plain colored text-xl mr-2"></i>
                                    <span>Tailwind CSS</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Back-end -->
                        <div class="bg-slate-800 p-6 rounded-xl border border-slate-700 skill-card transition-all">
                            <h4 class="text-lg font-bold text-white mb-4 flex items-center">
                                <i class="fas fa-server text-indigo-400 mr-2"></i>
                                <span>Back-end</span>
                            </h4>
                            <div class="flex flex-wrap gap-3">
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-php-plain colored text-xl mr-2"></i>
                                    <span>PHP</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-java-plain colored text-xl mr-2"></i>
                                    <span>Java</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-python-plain colored text-xl mr-2"></i>
                                    <span>Python</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-c-plain colored text-xl mr-2"></i>
                                    <span>C</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-cplusplus-plain colored text-xl mr-2"></i>
                                    <span>C++</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bases de données -->
                        <div class="bg-slate-800 p-6 rounded-xl border border-slate-700 skill-card transition-all">
                            <h4 class="text-lg font-bold text-white mb-4 flex items-center">
                                <i class="fas fa-database text-blue-400 mr-2"></i>
                                <span>Bases de données</span>
                            </h4>
                            <div class="flex flex-wrap gap-3">
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-mysql-plain colored text-xl mr-2"></i>
                                    <span>MySQL</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-phpmyadmin-plain colored text-xl mr-2"></i>
                                    <span>phpMyAdmin</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Outils -->
                        <div class="bg-slate-800 p-6 rounded-xl border border-slate-700 skill-card transition-all md:col-span-3">
                            <h4 class="text-lg font-bold text-white mb-4 flex items-center">
                                <i class="fas fa-tools text-indigo-400 mr-2"></i>
                                <span>Outils et environnements</span>
                            </h4>
                            <div class="flex flex-wrap gap-3">
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-git-plain colored text-xl mr-2"></i>
                                    <span>Git</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-github-original colored text-xl mr-2"></i>
                                    <span>GitHub</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-trello-plain colored text-xl mr-2"></i>
                                    <span>Trello</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-vscode-plain colored text-xl mr-2"></i>
                                    <span>VSCode</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="devicon-eclipse-plain colored text-xl mr-2"></i>
                                    <span>Eclipse</span>
                                </div>
                                <div class="flex items-center bg-slate-900/50 px-3 py-2 rounded-md">
                                    <i class="fas fa-robot text-blue-400 mr-2"></i>
                                    <span>OpenAI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Expériences -->
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-2xl font-bold text-white mb-8 flex items-center">
                        <i class="fas fa-briefcase text-blue-400 mr-3"></i>
                        <span>Expériences Professionnelles</span>
                    </h3>
                    
                    <div class="space-y-6">
                        <!-- Expérience 1 -->
                        <div class="bg-slate-800 p-6 rounded-xl border-l-4 border-blue-500">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                                <h4 class="text-xl font-bold text-white">STAGE : Développement Application Web</h4>
                                <span class="text-blue-400 font-medium">Novembre - Decembre 2024</span>
                            </div>
                            <p class="text-slate-300 mb-2">Groupe IPF , Paris</p>
                            <p class="text-slate-300 mb-3"><b>Mission :</b></p>
                            <p class="text-slate-300 mb-4">Développement un site pour gestion les notes des eleves.<br>
                             Fonctionnalités CRUD et fonctionnalités avancées. </p>
                            <p class="text-slate-300 mb-3"><b>Comptétences Acquired :</b></p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">PHP</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">HTML</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">CSS</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">MySQL</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">PHPMyAdmin</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">Bootstrap</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">Git</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">GitHub</span>
                            </div>
                        </div>
                        
                        <!-- Expérience 2 -->
                        <div class="bg-slate-800 p-6 rounded-xl border-l-4 border-indigo-500">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                                <h4 class="text-xl font-bold text-white">STAGE : Développement Application Web</h4>
                                <span class="text-indigo-400 font-medium">Juillet - Auot 2024</span>
                            </div>
                            <p class="text-slate-300 mb-2">Entreprise Auto-Entrepreneur, Paris</p>
                            <p class="text-slate-300 mb-3"><b>Mission :</b></p>
                            <p class="text-slate-300 mb-4">Développement un site pour vendre des billets événements. <br>
                            Fonctionnalités CRUD et fonctionnalités avancées. <br>
                            Gestion et maintenance des système avec la base de données solide. <br>
                        </p>
                            <p class="text-slate-300 mb-3"><b>Comptétences Acquired :</b></p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">PHP</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">HTML</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">CSS</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">MySQL</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">PHPMyAdmin</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">Bootstrap</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">Git</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">GitHub</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projets Section -->
        <section id="projets" class="py-20 bg-slate-800">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">
                    <span class="text-white">Mes</span> <span class="tech-text">Projets</span>
                </h2>
                
                <!-- Projets Scolaires -->
                <div class="max-w-6xl mx-auto mb-16">
                    <h3 class="text-2xl font-bold text-white mb-8 flex items-center">
                        <i class="fas fa-graduation-cap text-blue-400 mr-3"></i>
                        <span>Projets scolaires</span>
                    </h3>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Projet 1 -->
                        <div class="project-card rounded-xl p-6 border border-slate-700">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-md bg-blue-900/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-globe text-blue-400 text-xl"></i>
                                </div>
                                <h4 class="text-xl font-bold text-white">E-Enseignement en PHP</h4>
                            </div>
                            <p class="text-slate-300 mb-4">
                                Plateforme d'apprentissage en ligne avec gestion des cours, des étudiants et des évaluations.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">PHP</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">MySQL</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">HTML/CSS</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="#" class="text-blue-400 hover:text-blue-300 text-sm font-medium flex items-center">
                                    <i class="fas fa-external-link-alt mr-2"></i> Liens GitHub
                                </a>
                                <a href="#" class="text-slate-400 hover:text-white text-sm">
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Projet 2 -->
                        <div class="project-card rounded-xl p-6 border border-slate-700">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-md bg-indigo-900/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-gamepad text-indigo-400 text-xl"></i>
                                </div>
                                <h4 class="text-xl font-bold text-white">Jeu Snake en C</h4>
                            </div>
                            <p class="text-slate-300 mb-4">
                                Implémentation du jeu classique Snake avec interface console et gestion des scores.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">C</span>
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">Algorithmie</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="#" class="text-indigo-400 hover:text-indigo-300 text-sm font-medium flex items-center">
                                    <i class="fas fa-external-link-alt mr-2"></i> Liens GitHub
                                </a>
                                <a href="#" class="text-slate-400 hover:text-white text-sm">
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Projet 3 -->
                        <div class="project-card rounded-xl p-6 border border-slate-700">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-md bg-blue-900/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-tools text-blue-400 text-xl"></i>
                                </div>
                                <h4 class="text-xl font-bold text-white">GLPI</h4>
                            </div>
                            <p class="text-slate-300 mb-4">
                                Mise en place et configuration de GLPI pour la gestion des incidents informatiques.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">GLPI</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">Helpdesk</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">ITIL</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="#" class="text-blue-400 hover:text-blue-300 text-sm font-medium flex items-center">
                                    <i class="fas fa-external-link-alt mr-2"></i> Liens GitHub
                                </a>
                                <a href="#" class="text-slate-400 hover:text-white text-sm">
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Projet 4 -->
                        <div class="project-card rounded-xl p-6 border border-slate-700">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-md bg-indigo-900/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-laptop-code text-indigo-400 text-xl"></i>
                                </div>
                                <h4 class="text-xl font-bold text-white">Client Léger PHP</h4>
                            </div>
                            <p class="text-slate-300 mb-4">
                                Application client léger pour accéder à des services gestion les équipements d'entreprise.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">PHP</span>
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">API REST</span>
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">JSON</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="#" class="text-indigo-400 hover:text-indigo-300 text-sm font-medium flex items-center">
                                    <i class="fas fa-external-link-alt mr-2"></i> Liens GitHub
                                </a>
                                <a href="#" class="text-slate-400 hover:text-white text-sm">
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Projet 5 -->
                        <div class="project-card rounded-xl p-6 border border-slate-700">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-md bg-blue-900/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-calculator text-blue-400 text-xl"></i>
                                </div>
                                <h4 class="text-xl font-bold text-white">Calculatrice Java</h4>
                            </div>
                            <p class="text-slate-300 mb-4">
                                Calculatrice graphique avec interface utilisateur implémentant les opérations de base.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">Java</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">Swing</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="#" class="text-blue-400 hover:text-blue-300 text-sm font-medium flex items-center">
                                    <i class="fas fa-external-link-alt mr-2"></i> Liens GitHub
                                </a>
                                <a href="#" class="text-slate-400 hover:text-white text-sm">
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Projet 6 -->
                        <div class="project-card rounded-xl p-6 border border-slate-700">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-md bg-indigo-900/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-file-alt text-indigo-400 text-xl"></i>
                                </div>
                                <h4 class="text-xl font-bold text-white">Tableau de synthèse</h4>
                            </div>
                            <p class="text-slate-300 mb-4">
                                Document récapitulatif des réalisations professionnelles avec analyse et réflexion.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">Bilan</span>
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">Compétences</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="#" class="text-indigo-400 hover:text-indigo-300 text-sm font-medium flex items-center">
                                    <i class="fas fa-download mr-2"></i> Télécharger
                                </a>
                                <a href="#" class="text-slate-400 hover:text-white text-sm">
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Projets en Entreprise -->
                <div class="max-w-6xl mx-auto">
                    <h3 class="text-2xl font-bold text-white mb-8 flex items-center">
                        <i class="fas fa-building text-blue-400 mr-3"></i>
                        <span>Projets en entreprise</span>
                    </h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Projet 1 -->
                        <div class="project-card rounded-xl p-6 border border-slate-700">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-md bg-blue-900/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-ticket-alt text-blue-400 text-xl"></i>
                                </div>
                                <h4 class="text-xl font-bold text-white">Paris Event Ticket</h4>
                            </div>
                            <p class="text-slate-300 mb-4">
                                <b>Mission :</b>
                            </p>
                            <p class="text-slate-300 mb-4">
                                Plateforme de réservation de billets pour événements culturels à Paris avec système de paiement sécurisé.
                            </p>
                            <p class="text-slate-300 mb-4">
                                <b>Compétences Acquired :</b>
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">PHP</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">HTML</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">CSS</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">MySQL</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">Git</span>
                                <span class="text-xs bg-blue-900/30 text-blue-400 px-3 py-1 rounded-full">PHPMyAdmin</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="#" class="text-blue-400 hover:text-blue-300 text-sm font-medium flex items-center">
                                    <i class="fas fa-external-link-alt mr-2"></i> Liens GitHub
                                </a>
                                <div class="flex space-x-3">
                                    <a href="#" class="text-slate-400 hover:text-white text-sm" title="Documentation">
                                        <i class="fas fa-file-alt"></i>
                                    </a>
                                    <a href="#" class="text-slate-400 hover:text-white text-sm" title="Code source">
                                        <i class="fas fa-code"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Projet 2 -->
                        <div class="project-card rounded-xl p-6 border border-slate-700">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-md bg-indigo-900/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-school text-indigo-400 text-xl"></i>
                                </div>
                                <h4 class="text-xl font-bold text-white">Gestion Les Notes Des Élèves</h4>
                            </div>
                            <p class="text-slate-300 mb-4">
                                <b>Mission :</b>
                            </p>
                            <p class="text-slate-300 mb-4">
                                Système interne de gestion et de suivi des notes des élèves avec statistiques et rapports.
                            </p>
                            <p class="text-slate-300 mb-4">
                                <b>Comptétences Acquired :</b>
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">PHP</span>
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">JavaScript</span>
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">MYSQL</span>
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">HTML</span>
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">CSS</span>
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">Git</span>
                                <span class="text-xs bg-indigo-900/30 text-indigo-400 px-3 py-1 rounded-full">PHPMyAdmin</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="#" class="text-indigo-400 hover:text-indigo-300 text-sm font-medium flex items-center">
                                    <i class="fas fa-external-link-alt mr-2"></i> Liens GitHub
                                </a>
                                <div class="flex space-x-3">
                                    <a href="#" class="text-slate-400 hover:text-white text-sm" title="Documentation">
                                        <i class="fas fa-file-alt"></i>
                                    </a>
                                    <a href="#" class="text-slate-400 hover:text-white text-sm" title="Présentation">
                                        <i class="fas fa-file-powerpoint"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Veille Technologique Section -->
        <section id="veille" class="py-20 bg-slate-900">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">
                    <span class="text-white">Veille</span> <span class="tech-text">Technologique</span>
                </h2>
                
                <div class="max-w-4xl mx-auto">
                    <div class="bg-slate-800 p-8 rounded-xl border border-slate-700 mb-12">
                        <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                            <i class="fas fa-brain text-blue-400 mr-3"></i>
                            <span>Les LLM (Large Language Models)</span>
                        </h3>
                        <p class="text-slate-300 mb-4">
                            Les modèles de langage de grande taille (LLM) sont des systèmes d'IA avancés capables de comprendre, générer et manipuler le langage humain à un niveau sans précédent.
                        </p>
                        <p class="text-slate-300 mb-6">
                            Ces modèles, comme GPT-4, Claude ou Gemini, sont entraînés sur des quantités massives de données textuelles et peuvent effectuer une variété de tâches linguistiques avec une grande précision.
                        </p>
                        
                        <h4 class="text-xl font-bold text-white mb-4">Impact sur le développement</h4>
                        <ul class="text-slate-300 space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-400 mt-1 mr-2"></i>
                                <span><strong>Productivité accrue</strong> : Génération rapide de code, documentation et tests unitaires</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-400 mt-1 mr-2"></i>
                                <span><strong>Apprentissage accéléré</strong> : Explications claires de concepts complexes et résolution de problèmes</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-400 mt-1 mr-2"></i>
                                <span><strong>Débogage intelligent</strong> : Identification et correction des erreurs dans le code</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-400 mt-1 mr-2"></i>
                                <span><strong>Automatisation</strong> : Création de scripts et tâches répétitives</span>
                            </li>
                        </ul>
                        
                        <h4 class="text-xl font-bold text-white mb-4">Outils testés</h4>
                        <div class="grid md:grid-cols-2 gap-4 mb-6">
                            <div class="flex items-center bg-slate-700/50 p-4 rounded-lg">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/ChatGPT_logo.svg" alt="ChatGPT" class="w-10 h-10 mr-3">
                                <div>
                                    <h5 class="font-bold text-white">ChatGPT</h5>
                                    <p class="text-sm text-slate-300">OpenAI - Version 4.0</p>
                                </div>
                            </div>
                            <div class="flex items-center bg-slate-700/50 p-4 rounded-lg">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/7/76/GithubCopilot_logo.svg" alt="GitHub Copilot" class="w-10 h-10 mr-3">
                                <div>
                                    <h5 class="font-bold text-white">GitHub Copilot</h5>
                                    <p class="text-sm text-slate-300">Microsoft/GitHub</p>
                                </div>
                            </div>
                            <div class="flex items-center bg-slate-700/50 p-4 rounded-lg">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Notion_app_logo.png" alt="Notion AI" class="w-10 h-10 mr-3">
                                <div>
                                    <h5 class="font-bold text-white">Notion AI</h5>
                                    <p class="text-sm text-slate-300">Notion</p>
                                </div>
                            </div>
                            <div class="flex items-center bg-slate-700/50 p-4 rounded-lg">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3f/Claude_AI_logo.svg" alt="Claude" class="w-10 h-10 mr-3">
                                <div>
                                    <h5 class="font-bold text-white">Claude</h5>
                                    <p class="text-sm text-slate-300">Anthropic - Version 3</p>
                                </div>
                            </div>
                            <div class="flex items-center bg-slate-700/50 p-4 rounded-lg md:col-span-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Google_Gemini_logo.svg" alt="Gemini" class="w-10 h-10 mr-3">
                                <div>
                                    <h5 class="font-bold text-white">Gemini</h5>
                                    <p class="text-sm text-slate-300">Google - Version 1.5</p>
                                </div>
                            </div>
                        </div>
                        
                        <h4 class="text-xl font-bold text-white mb-4">Sources de veille</h4>
                        <div class="flex flex-wrap gap-3 mb-6">
                            <div class="flex items-center bg-slate-700/50 px-4 py-2 rounded-full">
                                <i class="fas fa-bell text-blue-400 mr-2"></i>
                                <span>Google Alerts</span>
                            </div>
                            <div class="flex items-center bg-slate-700/50 px-4 py-2 rounded-full">
                                <i class="fas fa-rss text-orange-400 mr-2"></i>
                                <span>Feedly</span>
                            </div>
                            <div class="flex items-center bg-slate-700/50 px-4 py-2 rounded-full">
                                <i class="fas fa-envelope text-purple-400 mr-2"></i>
                                <span>Newsletters</span>
                            </div>
                            <div class="flex items-center bg-slate-700/50 px-4 py-2 rounded-full">
                                <i class="fab fa-youtube text-red-400 mr-2"></i>
                                <span>YouTube</span>
                            </div>
                            <div class="flex items-center bg-slate-700/50 px-4 py-2 rounded-full">
                                <i class="fab fa-linkedin text-blue-300 mr-2"></i>
                                <span>LinkedIn</span>
                            </div>
                            <div class="flex items-center bg-slate-700/50 px-4 py-2 rounded-full">
                                <i class="fas fa-globe text-green-400 mr-2"></i>
                                <span>Sites spécialisés</span>
                            </div>
                        </div>
                        
                        <div class="flex justify-center">
                            <a href="#" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-md text-white font-medium hover:opacity-90 transition-opacity flex items-center">
                                <i class="fas fa-download mr-2"></i> Télécharger le dossier de veille (PDF)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-slate-800">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">
                    <span class="text-white">Me</span> <span class="tech-text">Contacter</span>
                </h2>
                
                <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-12">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-6">Envoyez-moi un message</h3>
                        
                        <form class="space-y-6">
                            <div>
                                <label for="name" class="block text-slate-300 mb-2">Nom complet</label>
                                <input type="text" id="name" class="form-input w-full px-4 py-3 rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-slate-300 mb-2">Adresse email</label>
                                <input type="email" id="email" class="form-input w-full px-4 py-3 rounded-md focus:ring-2 focus:ring-blue-500">
                            </div>
                            
                            <div>
                                <label for="message" class="block text-slate-300 mb-2">Message</label>
                                <textarea id="message" rows="5" class="form-input w-full px-4 py-3 rounded-md focus:ring-2 focus:ring-blue-500"></textarea>
                            </div>
                            
                            <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-md text-white font-medium hover:opacity-90 transition-opacity">
                                Envoyer
                            </button>
                        </form>
                    </div>
                    
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-6">Coordonnées</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-blue-900/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-blue-400 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Email</h4>
                                    <a href="mailto:truong-son.vu@mediaschool.me" class="text-slate-300 hover:text-blue-400 transition-colors">truong-son.vu@mediaschool.me</a>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-indigo-900/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-indigo-400 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Localisation</h4>
                                    <p class="text-slate-300">Paris, France</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-blue-900/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-file-alt text-blue-400 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Curriculum Vitae</h4>
                                    <a href="#" class="text-slate-300 hover:text-blue-400 transition-colors flex items-center">
                                        <i class="fas fa-download mr-2"></i> Télécharger mon CV (PDF)
                                    </a>
                                </div>
                            </div>
                            
                            <div class="pt-6">
                                <h4 class="text-lg font-semibold text-white mb-4">Réseaux sociaux</h4>
                                <div class="flex space-x-4">
                                    <a href="#" class="w-12 h-12 rounded-full bg-slate-700 hover:bg-blue-600 flex items-center justify-center transition-colors" title="LinkedIn">
                                        <i class="fab fa-linkedin-in text-xl text-white"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 rounded-full bg-slate-700 hover:bg-gray-800 flex items-center justify-center transition-colors" title="GitHub">
                                        <i class="fab fa-github text-xl text-white"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 rounded-full bg-slate-700 hover:bg-blue-400 flex items-center justify-center transition-colors" title="Twitter">
                                        <i class="fab fa-twitter text-xl text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 border-t border-slate-800 py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <span class="text-lg font-bold"><span class="tech-text">Truong Son Vu</span></span>
                </div>
                
                <div class="flex space-x-6 mb-4 md:mb-0">
                    <a href="#bts-sio" class="text-slate-300 hover:text-white transition-colors">BTS SIO</a>
                    <a href="#parcours" class="text-slate-300 hover:text-white transition-colors">Parcours</a>
                    <a href="#projets" class="text-slate-300 hover:text-white transition-colors">Projets</a>
                    <a href="#veille" class="text-slate-300 hover:text-white transition-colors">Veille</a>
                    <a href="#contact" class="text-slate-300 hover:text-white transition-colors">Contact</a>
                </div>
                
                <div class="flex space-x-4">
                    <a href="#" class="text-slate-300 hover:text-blue-400 transition-colors">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="#" class="text-slate-300 hover:text-white transition-colors">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="#" class="text-slate-300 hover:text-blue-500 transition-colors">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                </div>
            </div>
            
            <div class="border-t border-slate-800 mt-8 pt-8 text-center text-slate-500">
                <p>&copy; 2025 Truong Son Vu. Tous droits réservés.</p>
                <p class="mt-2 text-sm">Portfolio réalisé dans le cadre du BTS SIO.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Update active nav link
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
        
        // Highlight active nav link based on scroll position
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (pageYOffset >= (sectionTop - 300)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
        
        // Mobile menu toggle (placeholder - would need implementation)
        document.querySelector('button').addEventListener('click', function() {
            alert('Menu mobile à implémenter');
        });
    </script>
<p style="border-radius: 8px; text-align: center; font-size: 12px; color: #fff; margin-top: 16px;position: fixed; left: 8px; bottom: 8px; z-index: 10; background: rgba(0, 0, 0, 0.8); padding: 4px 8px;">Made with <img src="https://enzostvs-deepsite.hf.space/logo.svg" alt="DeepSite Logo" style="width: 16px; height: 16px; vertical-align: middle;display:inline-block;margin-right:3px;filter:brightness(0) invert(1);"><a href="https://enzostvs-deepsite.hf.space" style="color: #fff;text-decoration: underline;" target="_blank" >DeepSite</a> - 🧬 <a href="https://enzostvs-deepsite.hf.space?remix=crtedbyegnrs/portfolio-bts" style="color: #fff;text-decoration: underline;" target="_blank" >Remix</a></p></body>
</html>