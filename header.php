<!DOCTYPE <?php language_attributes(); ?>>
<html>
    <head>
        <meta charset="utf-8">
        <title>Apical | Formation PUB020 : WordPress</title>
        <?php wp_head(); ?>
    </head>

    <body id="messtyles">
        <div class="aucunepubauto">
            <div class="logo fix-menu" id="zoneentete">
                <div class="container">
                    <div class="avant"></div>
                    <div class="apres">
                        <div id="menuicones" class="porteuroffset fix-menu" data-verticaloffset="47" data-horizontaloffset="0">
                            <a href="/index.php"><img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil" title="Accueil"></a>

                            <a href="#" class="ajouterfavori"><img src="https://apical.xyz/medias/commun/Favoris-MenuSecondaire.svg" alt="Favoris" title="Favoris"></a>
    
                            <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche" data-target="#popuprecherche"><img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" title="Rechercher"></a>
                            
                            <a href="#" id="bonhomme" class="ouvrirpopupchristiane ouvrirpopupauthentification" data-target="#popupauthentification"><img src="https://apical.xyz/medias/commun/LoginFait-MenuSecondaire.svg" alt="Authentification" title="Émile Béliveau"></a>
                        </div>
                    </div>
                    <div class="centre">
                        <a href="index.php"><img src="https://apical.xyz/medias/fr/LogoApical-blanc.svg" alt="Apical, ma plateforme d'apprentissage"></a>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light py-lg-3" id="mainNav">
                <div class="container">
                    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Apical</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Basculer">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav mx-auto">
                            <?php
                                $pages = get_pages();
                                foreach ($pages as $page) {
                                    $link = get_page_link($page->ID);
                                    $title = $page->post_title;
                            ?>
                                    <li class="nav-item px-lg-4">
                                        <a href="<?php echo $link; ?>" class="nav-link text-uppercase text-expanded"><?php echo $title; ?></a>
                                    </li>
                            <?php
                                }
                            ?>
                        </ul>
                        <div class="iconespourmobile">
                            <div id="menuicones" class="porteuroffset fix-menu" data-verticaloffset="47" data-horizontaloffset="0">
                                <a href="https://apical.xyz"><img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil" title="Accueil"></a>

                                <a href="#" class="ajouterfavori"><img src="https://apical.xyz/medias/commun/Favoris-MenuSecondaire.svg" alt="Favoris" title="Favoris"></a>

                                <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche" data-target="#popuprecherche"><img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" title="Rechercher"></a>

                                <a href="#" class="ouvrirpopupchristiane ouvrirpopupauthentification" data-target="#popupauthentification"><img src="https://apical.xyz/medias/commun/LoginFait-MenuSecondaire.svg" alt="Authentification" title="Émile Béliveau"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>