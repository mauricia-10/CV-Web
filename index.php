<?php include 'contact.php'; ?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CV Web</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/style.css">
    </head>

    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="assets\swiper-bundle.min.css">



    <body>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ HEADER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav_logo">Mauricia</a>

                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list grid">
                        <li class="nav_item">
                            <a href="#home" class="nav_link">
                                <i class="uil uil-home nav_icon"></i> Accueil
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#about" class="nav_link">
                                <i class="uil uil-user-circle nav_icon"></i> A propos
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#parcours" class="nav_link"> 
                                <i class="uil uil-briefcase-alt nav_icon"></i> Parcours
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#skills" class="nav_link">
                                <i class="uil uil-file-check-alt nav_icon"></i> Compétences
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#websites" class="nav_link">
                            <i class="uil uil-desktop nav_icon"></i> Websites
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#danse" class="nav_link">
                            <i class="uil uil-trophy nav_icon"></i> Danse
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#contact" class="nav_link">
                                <i class="uil uil-message nav_icon"></i> Contact
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-multiply nav_close" id="nav-close"></i>
                </div>

                <div class="nav_btns">
                    <div class="nav_toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>

            </nav>
        </header>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ MAIN ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <main class="main">

            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ACCUEIL ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <section class="home section" id="home">

                <div class="home_container container grid">

                    <div class="home_content grid">
                        <div class="home_social">
                            <a href="https://www.linkedin.com/in/rimie-mauricia-nkou/" target="_blank" class="home_social-icon">
                                <i class="uil uil-linkedin"></i>
                            </a>
                            <a href="https://github.com/mauricia-10" target="_blank" class="home_social-icon">
                                <i class="uil uil-github"></i>
                            </a>
                        </div>

                        <div class="home_img">
                            <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>

                                    <image class="home_blob-img" x="18" y="18" href="assets/images/photo_CV.png"/>
                                </g>
                            </svg>
                        </div>

                        <div class="home_data">
                            <h1 class="home_title">Rimie Mauricia Nkou</h1>
                            <h3 class="home_subtitle">Etudiante à Neoma Business School</h3>
                            <p class="home_description">Actuellement à la recherche d'un stage de 6mois en Développement Web à partir de juin 2022</p>
                            <a href="#contact" class="button button--flex">
                                Me contacter <i class="uil uil-message button_icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="home_scroll">
                        <a href="#about" class="home_scroll-button button--flex">
                            <i class="uil uil-mouse home_scroll-mouse"></i>
                            <span class="home_scroll-name">Défiler vers le bas</span>
                            <i class="uil uil-arrow-down home_scroll-arrow"></i>
                        </a>
                    </div>

                </div>

            </section>

            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ A PROPOS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <section class="about section" id="about">

                <h2 class="section_title" id="a-propos">A propos de moi</h2>
                <span class="section_subtitle">Mes objectifs</span>

                <div class="about_container container grid">
                    <img src="assets/images/a-propos.jpeg" alt="" class="about_img">

                    <div class="about_data">
                        <p class="about_description">Passionnée de danse et d'informatique, je cherche un stage en Développement Web afin d'acquérir les compétences nécessaires pour atteindre mon objectif professionnel qui est de travailler dans la cybersécurité.</p>

                        <div class="about_info">
                            <div>
                                <span class="about_info-title">05+</span>
                                <span class="about_info-name">Projets Web <br> Réalisés</span>
                            </div>
                            <div>
                                <span class="about_info-title">20+</span>
                                <span class="about_info-name">Affiches <br> Réalisées</span>
                            </div>
                            <div>
                                <span class="about_info-title">12+</span>
                                <span class="about_info-name">Chorégraphies <br> Inventées</span>
                            </div>
                        </div>

                        <div class="about_buttons">
                            <a download="" href="assets/CV.pdf" target="_blank" class="button button--flex">
                                Télécharger CV <i class="uil uil-cloud-download button_icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </section>

            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ PARCOURS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <section class="parcours section" id="parcours">
                <h2 class="section_title">Mon parcours</h2>
                <span class="section_subtitle"></span> 

                <div class="parcours_container container">

                    <div class="parcours_tabs">
                        <div class="parcours_button button--flex" data-target="#formation">
                            <i class="uil uil-graduation-cap parcours_icon"></i> Formations
                        </div>

                        <div class="parcours_button button--flex" data-target="#experience">
                            <i class="uil uil-briefcase-alt parcours_icon"></i> Expériences
                        </div>
                    </div>

                    <div class="parcours_sections">

                            <!-- ~~~~~~~~~~~~~~~~~~~~ FORMATION 1 ~~~~~~~~~~~~~~~~~~~~ -->
                            <div class="parcours_data">
                                <div>
                                    <h3 class="parcours_title">Wild Code School</h3>
                                    <span class="parcours_subtitle">Formation PHP/Symfony</span>
                                    <div class="parcours_calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        09/2021 - 01/2022
                                    </div>
                                </div>
                                
                                <div>
                                    <span class="parcours_rounder"></span>
                                    <span class="parcours_line"></span>
                                </div>
                            </div>

                            <!-- ~~~~~~~~~~~~~~~~~~~~ EXPERIENCES 1 ~~~~~~~~~~~~~~~~~~~~ -->
                            <div class="parcours_data">
                                <div></div>

                                <div>
                                    <span class="parcours_rounder"></span>
                                    <span class="parcours_line"></span> 
                                </div>

                                <div>
                                    <h3 class="parcours_title">Assistante communication</h3>
                                    <span class="parcours_subtitle">Five Prestige - 75001 Paris</span>
                                    <div class="parcours_calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        06/2021 - 07/2021
                                    </div>
                                </div>
                                
                            </div>

                            <!-- ~~~~~~~~~~~~~~~~~~~~ FORMATION 2 ~~~~~~~~~~~~~~~~~~~~ -->
                            <div class="parcours_data">
                                <div>
                                    <h3 class="parcours_title">NEOMA Business School</h3>
                                    <span class="parcours_subtitle">TEMA Innovation & Digital Management</span>
                                    <div class="parcours_calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2020 - 2025
                                    </div>
                                </div>
                                <div>
                                    <span class="parcours_rounder"></span>
                                    <span class="parcours_line"></span>
                                </div>
                            </div>

                            <!-- ~~~~~~~~~~~~~~~~~~~~ EXPERIENCES 2 ~~~~~~~~~~~~~~~~~~~~ -->
                            <div class="parcours_data">
                                <div></div>

                                <div>
                                    <span class="parcours_rounder"></span>
                                    <span class="parcours_line"></span>
                                </div>

                                <div>
                                    <h3 class="parcours_title">Coach Danse - Comédie Musicale</h3>
                                    <span class="parcours_subtitle">NEOMA Business School - 51100 Reims</span>
                                    <div class="parcours_calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        10/2021 - 03/2022
                                    </div>
                                </div>
                                
                            </div>

                            <!-- ~~~~~~~~~~~~~~~~~~~~ FORMATION 3 ~~~~~~~~~~~~~~~~~~~~ -->
                            <div class="parcours_data">
                                <div>
                                    <h3 class="parcours_title">Pensionnat Sacré-Coeur</h3>
                                    <span class="parcours_subtitle">BAC ES - Spécialité Mathématiques</span>
                                    <div class="parcours_calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2017 - 2020
                                    </div>
                                </div>
                                <div>
                                    <span class="parcours_rounder"></span>
                                    <!-- <span class="parcours_line"></span> -->
                                </div>
                            </div>

                    </div>

                </div>
            </section>

            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ COMPETENCES ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <section class="skills section" id="skills">
                <h2 class="section_title">Compétences</h2>
                <span class="section_subtitle">Mon niveau technique</span>

                <div class="skills_container container grid">
                    <div>
                        <!-- ~~~~~~~~~~~~~~~~~~~~ COMPETENCES 1 ~~~~~~~~~~~~~~~~~~~~ -->
                        <div class="skills_content skills_close">
                            <div class="skills_header">
                                <i class="uil uil-brackets-curly skills_icon"></i>
                                <div>
                                    <h1 class="skills_title">Frontend Developer</h1>
                                    <span class="skills_subtitle">Languages maîtrisés</span>
                                </div>
                                <i class="uil uil-angle-down skills_arrow"></i>
                            </div>

                            <div class="skills_list grid">

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">HTML</h3>
                                        <span class="skills_number">90%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_html"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">CSS</h3>
                                        <span class="skills_number">80%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_css"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">JavaScript</h3>
                                        <span class="skills_number">60%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_js"></span>
                                </div>

                            </div>
                        </div>

                        <!-- ~~~~~~~~~~~~~~~~~~~~ COMPETENCES 2 ~~~~~~~~~~~~~~~~~~~~ -->
                        <div class="skills_content skills_close">
                            <div class="skills_header">
                                <i class="uil uil-server-network-alt skills_icon"></i>
                                <div>
                                    <h1 class="skills_title">Backend Developer</h1>
                                    <span class="skills_subtitle">Languages maîtrisés</span>
                                </div>
                                <i class="uil uil-angle-down skills_arrow"></i>
                            </div>

                            <div class="skills_list grid">
                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">PHP</h3>
                                        <span class="skills_number">80%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_php"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Symfony</h3>
                                        <span class="skills_number">60%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_symfony"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">MySQL</h3>
                                        <span class="skills_number">70%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_mysql"></span>
                                </div>

                            </div>
                        </div>

                        <!-- ~~~~~~~~~~~~~~~~~~~~ COMPETENCES 3 ~~~~~~~~~~~~~~~~~~~~ -->
                        <div class="skills_content skills_close">
                            <div class="skills_header">
                                <i class="uil uil-swatchbook skills_icon"></i>
                                <div>
                                    <h1 class="skills_title">Design</h1>
                                    <span class="skills_subtitle">Logiciels maîtrisés</span>
                                </div>
                                <i class="uil uil-angle-down skills_arrow"></i>
                            </div>

                            <div class="skills_list grid">

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Canva</h3>
                                        <span class="skills_number">90%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_canva"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Figma</h3>
                                        <span class="skills_number">80%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_figma"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Photoshop</h3>
                                        <span class="skills_number">70%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_photoshop"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Illustrator</h3>
                                        <span class="skills_number">50%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_illustrator"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">InDesign</h3>
                                        <span class="skills_number">50%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_indesign"></span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div>
                        <!-- ~~~~~~~~~~~~~~~~~~~~ COMPETENCES 4 ~~~~~~~~~~~~~~~~~~~~ -->
                        <div class="skills_content skills_close">
                            <div class="skills_header">
                                <i class="uil uil-globe skills_icon"></i>
                                <div>
                                    <h1 class="skills_title">Langues</h1>
                                    <span class="skills_subtitle">Niveau de langue</span>
                                </div>
                                <i class="uil uil-angle-down skills_arrow"></i>
                            </div>

                            <div class="skills_list grid">
                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Anglais (B2 - intermédiaire)</h3>
                                        <span class="skills_number">80%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_anglais"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Allemand (A2 - débutant)</h3>
                                        <span class="skills_number">50%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_allemand"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Espagnol (A2 - débutant)</h3>
                                        <span class="skills_number">50%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_espagnol"></span>
                                </div>

                            </div>
                        </div>

                        <!-- ~~~~~~~~~~~~~~~~~~~~ COMPETENCES 5 ~~~~~~~~~~~~~~~~~~~~ -->
                        <div class="skills_content skills_close">
                            <div class="skills_header">
                                <i class="uil uil-wrap-text skills_icon"></i>
                                <div>
                                    <h1 class="skills_title">Pack Office</h1>
                                    <span class="skills_subtitle">Logiciels maîtrisés</span>
                                </div>
                                <i class="uil uil-angle-down skills_arrow"></i>
                            </div>

                            <div class="skills_list grid">
                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Word</h3>
                                        <span class="skills_number">95%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_word"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">PowerPoint</h3>
                                        <span class="skills_number">80%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_powerpoint"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Excel</h3>
                                        <span class="skills_number">60%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_excel"></span>
                                </div>

                            </div>
                        </div>

                        <!-- ~~~~~~~~~~~~~~~~~~~~ COMPETENCES 6 ~~~~~~~~~~~~~~~~~~~~ -->
                        <div class="skills_content skills_close">
                            <div class="skills_header">
                                <i class="uil uil-users-alt skills_icon"></i>
                                <div>
                                    <h1 class="skills_title">Réseaux sociaux</h1>
                                    <span class="skills_subtitle">Applications maîtrisés</span>
                                </div>
                                <i class="uil uil-angle-down skills_arrow"></i>
                            </div>

                            <div class="skills_list grid">

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Instagram</h3>
                                        <span class="skills_number">90%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_instagram"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Facebook</h3>
                                        <span class="skills_number">90%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_facebook"></span>
                                </div>

                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">Twitter</h3>
                                        <span class="skills_number">70%</span>
                                    </div>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_twitter"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ WEBSITES ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            
            <section class="websites section" id="websites">
                <h2 class="section_title">Projets</h2>
                <span class="section_subtitle">Mes sites web</span>

                <div class="websites_container container swiper mySwiper">

                    <div class="swiper-wrapper">
                        <!-- ~~~~~~~~~~~~~~~~~~~~ PROJET 1 ~~~~~~~~~~~~~~~~~~~~ -->
                        <div class="websites_content grid swiper-slide">
                            <img src="assets\images\reims-quizz.jpg" alt="" class="websites_img">
                            <div class="websites_data">
                                <h3 class="websites_title">Reims Quiz</h3>
                                <span class="websites_subtitle">27/09/2021 - 08/10/2021</span>
                                <p class="websites_description">Reims Quiz est le 1er projet réalisé à la Wild Code School. Comme son nom l'indique, il s'agit d'un questionnaire 
                                    destiné à une population touristique afin qu'ils puissent en apprendre plus sur la ville de Reims de manière ludique. Le but était de créer 
                                    un site statique responsive en HTML & CSS et de nous entraîner à créer notre propre charte graphique.</p>
                                <a href="https://github.com/mauricia-10/Reims-Quiz" class="button button--flex button--small websites_button" target="_blank">
                                    Voir github
                                    <i class="uil uil-arrow-right button_icon"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ~~~~~~~~~~~~~~~~~~~~ PROJET 2 ~~~~~~~~~~~~~~~~~~~~ -->
                        <div class="websites_content grid swiper-slide">
                            <img src="assets\images\jouer-evasion-mobile.jpg" alt="" class="websites_img">
                            <div class="websites_data">
                                <h3 class="websites_title">La petite évasion</h3>
                                <span class="websites_subtitle">25/10/2021 - 19/11/2021</span>
                                <p class="websites_description">La petite évasion est le 2ème projet réalisé à la Wild Code School. Le but était de créer 
                                    un site responsive en HTML/CSS & PHP en utilisant le principe de structure MVC. Nous devions aussi créer des relations entre les objets liés à la base de données.
                                La petite évasion un jeu de labyrinthe où le personnage principal, Moriarty, s'est réfugié dans les égouts et tente de s'échapper du détective Sherlock Holmes. 
                                Le but est de trouver la sortie représentée par une échelle le plus vite possible. L'utilisateur découvre le temps qu'il a mis à trouver la sortie et accède à 
                                son classement une fois qu'il a fini la partie. Il peut également créer son propre labyrinthe.</p>
                                <a href="https://github.com/mauricia-10/La-petite-vasion" class="button button--flex button--small websites_button" target="_blank">
                                    Voir github
                                    <i class="uil uil-arrow-right button_icon"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ~~~~~~~~~~~~~~~~~~~~ PROJET 3 ~~~~~~~~~~~~~~~~~~~~ -->
                        <div class="websites_content grid swiper-slide">
                            <img src="assets/images/pushIn-accueil.jpg" alt="" class="websites_img">
                            <div class="websites_data">
                                <h3 class="websites_title">PushIn Lyrics</h3>
                                <span class="websites_subtitle">25/11/2021 - 26/11/2021</span>
                                <p class="websites_description">PushIn Lyrics est un projet d'Hackathon. Le but était de réaliser une application en 2 jours, fonctionnelle pour la présentation.
                                    Ce projet est une application faite pour tous ceux qui ont sans cesse des paroles de musiques en tête, mais qui ne se souviennent plus du titre ou du chanteur.
                                    En effet, avec PushIn Lyrics, il suffit de rentrer les paroles de la musique dans la barre de recherche et l'application nous propose toutes les musiques qui contiennent ces paroles.
                                </p>
                                <a href="https://github.com/mauricia-10/PushIn-Lyrics" class="button button--flex button--small websites_button" target="_blank">
                                    Voir github
                                    <i class="uil uil-arrow-right button_icon"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ~~~~~~~~~~~~~~~~~~~~ PROJET 4 ~~~~~~~~~~~~~~~~~~~~ -->
                        <div class="websites_content grid swiper-slide">
                            <img src="assets/images/econtact-accueil.png" alt="" class="websites_img">
                            <div class="websites_data">
                                <h3 class="websites_title">E-contact</h3>
                                <span class="websites_subtitle">29/11/2021 - 31/01/2021</span>
                                <p class="websites_description">E-contact est un projet de fin de semestre en HTML/SCSS/JS/PHP et Symfony. Il a été réalisé avec un camarade de Neoma en immersion avec moi à la Wild Code School. 
                                    Le but était de créer une application permettant à chaque utilisateur inscrit ou connecté de pouvoir gérer son annuaire de contact privé. Malgré le fait que nous avions jamais étudié symfony 
                                    dû aux modalités d'échange avec Neoma, nous avons décidé d'utiliser le framework pour notre projet. Ainsi, nous avons donc appris Symfony en autodidacte. </p>
                                <a href="https://github.com/mauricia-10/neoma-project" class="button button--flex button--small websites_button" target="_blank">
                                    Voir github
                                    <i class="uil uil-arrow-right button_icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-next">
                        <i class="uil uil-angle-right-b swiper-websites-icon"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="uil uil-angle-left-b swiper-websites-icon"></i>
                    </div>
                    <div class="swiper-pagination"></div>

                </div>

            </section>

            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ DANSE ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <section class="danse section" id="danse">
                <h2 class="section_title">Centres d'intérêts</h2>
                <span class="section_subtitle">Mes projets de danse</span>

                <div class="danse_container container grid">

                    <!-- ~~~~~~~~~~~~~~~~~~~~ PROJET 1 ~~~~~~~~~~~~~~~~~~~~ -->
                    <div class="danse-content">
                        <div class="card-img-height">
                            <img class="card-img" src="assets\images\DMT.jpeg" alt="">
                        </div>
                        
                        <h1 class="danse-title">Dementi'Art - BDA</h1>                                
                        <span class="button button--flex button--small button--link danse_button">
                            En savoir plus
                            <i class="uil uil-arrow-right button_icon"></i>
                        </span>

                        <div class="danse_modal">
                            <div class="danse_modal-content">
                                <h4 class="danse_modal-title">Danse à Neoma</h4>
                                <i class="uil uil-times-circle danse-modal-close"></i>
                                <p class="danse_modal-service">Dementi'Art est le nom du Bureau des Arts 2021-2022 de Neoma Business School dans lequel je fais partie.
                                    Je suis membre du pôle danse et j'ai été amené à réaliser plusieurs chorégraphies avec d'autres membres du pôle. Nous avons également
                                    participé à des compétitions inter-campus : le Derby Artistique, ou inter-écoles : le Trophée des Arts. </p>
                            </div>
                        </div>
                    </div>

                    <!-- ~~~~~~~~~~~~~~~~~~~~ PROJET 2 ~~~~~~~~~~~~~~~~~~~~ -->
                    <div class="danse-content">
                        <div class="card-img-height">
                            <img class="card-img" src="assets\images\studio511.jpeg" alt="">
                        </div>
                        
                        <h1 class="danse-title">Studio 511</h1> 
                        <span class="button button--flex button--small button--link danse_button">
                            En savoir plus
                            <i class="uil uil-arrow-right button_icon"></i>
                        </span>

                        <div class="danse_modal">
                            <div class="danse_modal-content">
                                <h4 class="danse_modal-title">Mes débuts en danse</h4>
                                <i class="uil uil-times-circle danse-modal-close"></i>
                                <p class="danse_modal-service">Le studio 511 est un studio de danse qui propose des cours de danse de plusieurs styles différents. 
                                    J'y ai fais de la danse 10heures par semaine pendant 3ans. J'ai pris des cours de Hip-Hop, Afro, Reggaeton et de Break dance. 
                                    J'ai pu participé au spectacle de fin d'année qui reprend toutes les chorégraphies que nous avons appris au cours de l'année. </p>
                            </div>
                        </div>
                    </div>

                    <!-- ~~~~~~~~~~~~~~~~~~~~ PROJET 3 ~~~~~~~~~~~~~~~~~~~~ -->
                    <div class="danse-content">
                        <div class="card-img-height">
                            <img class="card-img" src="assets\images\evolution.jpeg" alt="">
                        </div>
                        
                        <h1 class="danse-title">Evolution</h1>   
                        <span class="button button--flex button--small button--link danse_button">
                            En savoir plus
                            <i class="uil uil-arrow-right button_icon"></i>
                        </span>

                        <div class="danse_modal">
                            <div class="danse_modal-content">
                                <h4 class="danse_modal-title">Groupe professionnel</h4>
                                <i class="uil uil-times-circle danse-modal-close"></i>
                                <p class="danse_modal-service">Evolution est un groupe professionnel all style ados du studio 511. Nous avions des cours de 2h ou plus 
                                    en fonction des compétitions tous les samedis. Nous avons réalisés plusieurs show, notamment au Palais du Tau et Place du Forum au centre
                                    ville. Nous devions également danser au stade de Reims mais cela a été annulé en raison de la COVID19. </p>
                            </div>
                        </div>
                    </div>

                    <!-- ~~~~~~~~~~~~~~~~~~~~ PROJET 4 ~~~~~~~~~~~~~~~~~~~~
                    <div class="danse-content">
                        <div>
                            <img class="card-img" src="" alt="">
                            <h1 class="danse-title">Comédie Musicale</h1>
                        </div>
                                
                        <span class="button button--flex button--small button--link danse_button">
                            En savoir plus
                            <i class="uil uil-arrow-right button_icon"></i>
                        </span>

                        <div class="danse_modal">
                            <div class="danse_modal-content">
                                <h4 class="danse_modal-title">Coach Danse à la COMU</h4>
                                <i class="uil uil-times-circle danse-modal-close"></i>
                                <p class="danse_modal-service">En tant que membre du pôle danse du Bureau des Arts, je fais partie des coach danse de la Comédie Musicale.
                                    Je suis chargée de créer une vingtaine de chorégraphies avec d'autres coach pour les différents tableaux danse de la COMU. Nous sommes
                                    ensuite chergé de les apprendre aux danseurs, qui sont généralement des 1ère année à Neoma mais qui ont déjà fait de la danse auparavent.
                                </p>
                            </div>
                        </div>
                    </div>  -->

                </div>

            </section>

            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ CONTACT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <section class="contact section" id="contact">
                <h2 class="section_title">Me Contacter</h2>
                <span class="section_subtitle">Toujours joignable</span>

                <div class="contact_container container grid">
                    <div>
                        <div class="contact_information">
                            <i class="uil uil-phone-alt contact_icon"></i>

                            <div>
                                <h3 class="contact_title">Téléphone</h3>
                                <span class="contact_subtitle">+33 6 67 52 74 31</span>
                            </div>
                        </div>

                        <div class="contact_information">
                            <i class="uil uil-envelope-alt contact_icon"></i>

                            <div>
                                <h3 class="contact_title">E-mail</h3>
                                <span class="contact_subtitle">rimie.nkou.20@neoma-bs.com</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="contact_information">
                            <i class="uil uil-map-marker contact_icon"></i>

                            <div>
                                <h3 class="contact_title">Adresse principale</h3>
                                <span class="contact_subtitle">17A Avenue d'Epernay 51100 Reims</span>
                            </div>
                        </div>

                        <div class="contact_information">
                            <i class="uil uil-map-marker contact_icon"></i>

                            <div>
                                <h3 class="contact_title">Adresse secondaire</h3>
                                <span class="contact_subtitle">74 rue Simone de Beauvoir 94450 Limeil-Brévannes</span>
                            </div>
                        </div>
                    </div>

                    <!--
                    <form action="" method="POST" class="contact_form grid">

                        <div class="contact_inputs grid">
                            <div class="contact_content">
                                <label for="" class="contact_label">Nom</label>
                                <input type="text" name="nom" autocomplete="off" class="contact_input">
                            </div>
                            <div class="contact_content">
                                <label for="" class="contact_label">E-mail</label>
                                <input type="email" name="email" autocomplete="off" class="contact_input">
                            </div>
                        </div>

                        <div class="contact_content">
                            <label for="" class="contact_label">Sujet</label>
                            <input type="text" name="sujet" autocomplete="off" class="contact_input">
                        </div>
                        <div class="contact_content">
                            <label for="" class="contact_label">Message</label>
                            <textarea name="message" id="" cols="0" rows="7" class="contact_input"></textarea>
                        </div>

                        <div>
                            <button type="submit" name="submit" value="send" class="button button--flex">Envoyer un message
                            <i class="uil uil-message button_icon"></i>
                            </button>
                        </div>

                    </form> -->

                    <!--alert messages start-->
                        <?php echo $alert; ?>
                    <!--alert messages end-->

                </div>
            </section>

        </main>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ FOOTER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        
        <footer class="footer">
            <div class="footer_bg">
                <div class="footer_container container grid">
                    <div>
                        <h1 class="footer_title">Mauricia</h1>
                        <span class="footer_subtitle">NEOMA Business School</span>
                    </div>

                    <ul class="footer_links">
                        <li>
                            <a href="#skills" class="footer_link">Compétences</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer_link">Me contacter</a>
                        </li>
                    </ul>

                    <div class="footer_socials">
                        <a href="https://www.facebook.com/mauricia.mak.7" target="_blank" class="footer_social">
                            <i class="uil uil-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/__.mauricia.__/" target="_blank" class="footer_social">
                            <i class="uil uil-instagram-alt"></i>
                        </a>
                        <a href="https://twitter.com/MauriciaNkou" target="_blank" class="footer_social">
                            <i class="uil uil-twitter"></i>
                        </a>
                    </div>
                </div>

                <p class="footer_copy">&#169; Mauricia. All right reserved</p>
            </div>
        </footer>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ SCROLL TOP ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup_icon"></i>
        </a>

        <!-- SWIPER CSS -->
        <script src="assets\swiper-bundle.min.js"></script>

        <script src="assets/main.js" async defer></script>
    </body>

</html>