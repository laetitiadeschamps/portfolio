<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../node_modules/@sidsbrmnn/scrollspy/dist/scrollspy.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI']?>/css/reset.css">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI']?>/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <script src="https://unpkg.com/scrollreveal"></script> -->

    <title>Présentation</title>
</head>
<body id='top'>
<div class="container">
    <header id="header" id="top">
        <div class="title"><h1><a href="#top">
            Laetitia Deschamps - Développeuse web fullstack</a></h1>
        <small> Prête pour travailler sur des projets passionants... </small></div>
       
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
       
        <nav id="hamb-nav">

        <ul class="hamburger-nav">
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