<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation</title>
    <link rel="icon" href="<?=$_SERVER['BASE_URI']?>/img/avatar-favicon.png?>" />
    <!-- Librairies -->
    <script src="../node_modules/@sidsbrmnn/scrollspy/dist/scrollspy.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
    <!-- Fonts & css -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI']?>/css/reset.css">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI']?>/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body id='top'>
    <div class="container">
        <header>
            <div class="header-title">
                <h1><a href="#top">
                Laetitia Deschamps - Développeuse web fullstack</a></h1>
                <small> Prête pour travailler sur des projets passionants... </small>
            </div>
            <nav id="main-nav">
                <ul>
                    <li><a href="#top"><i class="menu-icon fas fa-home"></i> Présentation</a></li>
                    <li><a href="#parcours">  <i class="menu-icon fas fa-code-branch"></i>Parcours</a></li>
                    <li><a href="#portfolio"><i class="menu-icon fas fa-briefcase"></i> </i>Portfolio</a></li>
                    <li><a href="#contact">  <i class="menu-icon fas fa-paper-plane"></i>Contact</a></li>
                </ul>
            </nav>
            <div id="hamburger">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>    
                    </div>
                    <nav id="hamburger-nav">
                        <ul class="hamburger-nav-list">
                            <li><a href="#home"> Accueil</a></li>
                            <li> <a href="#parcours-nav"> Parcours </a>
                                <ul>
                                    <li><a href="#formation"><i class="fas fa-long-arrow-alt-right"></i>Formation</a></li>
                                    <li><a href="#experiences"><i class="fas fa-long-arrow-alt-right"></i>Expériences professionnelles</a></li>
                                    <li><a href="#competences"><i class="fas fa-long-arrow-alt-right"></i>Compétences</a></li>
                                    <li><a href="#divers"><i class="fas fa-long-arrow-alt-right"></i>Divers</a></li>
                                </ul>
                            </li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
            </div>
    </header>