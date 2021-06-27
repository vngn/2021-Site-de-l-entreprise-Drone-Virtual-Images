<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRONE VIRTUAL IMAGES</title>
    <meta name="description"
        content="DRONE VIRTUAL IMAGES est une entreprise spécialisée dans la prise de vues aériennes avec drone et la réalisation de visites virtuelles" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lightbox.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/dc423ef783.js" crossorigin="anonymous"></script>

    <script src="scripts.js"></script>
</head>

<body>
    <div class="bloc-page">
        <div class="row menu">
            <?php
            require "navbar.php";
            ?>
        </div>

        <div>
            <button class="btn-menu-id">Prestations avec drones</button>
        </div>

        <div class="bloc">
            <div class="accordion" id="accordionExample">
                <div class="accordion-bloc">
                    <h2 class="accordion-header" id="headingUn">
                        <button class="accordion-cadre-question" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseUn" aria-expanded="true" aria-controls="collapseUn">
                            <h3>LES PRESTATIONS <i class="fas fa-arrow-circle-down"></i></h3>
                        </button>


                    </h2>
                    <div id="collapseUn" class="accordion-collapse collapse show" aria-labelledby="headingUn"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Les prises de vues avec drones proposées par DRONE VIRTUAL IMAGES sont essentiellement
                                destinées aux professionnels du BTP, de l’immobilier et du multimédia :
                            </p>
                            <ul>
                                <li>Présentation et mise en valeur de propriétés, d’installations, de domaines</li>
                                <li>Inspections de toitures, de bâtiments, de monuments</li>
                                <li>Inspections de chantiers, suivis de travaux</li>
                                <li>Images de reportage, repérages</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-bloc">
                    <h2 class="accordion-header" id="headingDeux">
                        <button class="accordion-cadre-question collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseDeux" aria-expanded="false" aria-controls="collapseDeux">
                            <h3>FORMATS ET DEFINITIONS DES VIDEOS <i class="fas fa-arrow-circle-down"></i></h3>
                        </button>
                    </h2>
                    <div id="collapseDeux" class="accordion-collapse collapse" aria-labelledby="headingDeux"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>MP4/MOV (H.6264/MPEG-4 AVC, H.265/HEVC)</li><br>
                                <li>4K Ultra HD : 3 840 x 2 160 à 24/25/30/48/50/60 ips</li>
                                <li>2,7K : 2 688 x 1 512 à 24/25/30/48/50/60 ips</li>
                                <li>Full HD : 1 920 x 1 080 à 24/25/30/48/50/60 ips</li>
                                <li>4K Ultra HD HDR : 3 840 x 2 160 à 24/25/30 ips</li>
                                <li>2,7K HDR : 2 688 x 1 512 à 24/25/30 ips</li>
                                <li>Full HD HDR : 1 920 x 1 080 à 24/25/30 ips</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-bloc">
                    <h2 class="accordion-header" id="headingTrois">
                        <button class="accordion-cadre-question collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTrois" aria-expanded="false" aria-controls="collapseTrois">
                            <h3>FORMATS ET DEFINITIONS DES PHOTOGRAPHIES <i class="fas fa-arrow-circle-down"></i></h3>
                        </button>
                    </h2>
                    <div id="collapseTrois" class="accordion-collapse collapse" aria-labelledby="headingTrois"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>JPEG/DNG(RAW)</li>
                                <li>12 MP /48 MP</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-bloc">
                    <h2 class="accordion-header" id="headingQuatre">
                        <button class="accordion-cadre-question collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseQuatre" aria-expanded="false" aria-controls="collapseQuatre">
                            <h3>DEVIS <i class="fas fa-arrow-circle-down"></i></h3>
                        </button>
                    </h2>
                    <div id="collapseQuatre" class="accordion-collapse collapse" aria-labelledby="headingQuatre"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Le prix de base d’une prestation est de 600 euros TTC pour une demi-journée de tournage.
                            </p>
                            <p>Ce devis comprend toutes les phases de préparation et d’exécution de la mission :
                            </p>
                            <ul>
                                <li>Etude préalable des conditions de faisabilité (repérage des lieux, détection des
                                    difficultés particulières, détection des zones à vols restreints ou interdits…)</li>
                                <li>Constitution du dossier de vol (plans, cartes, liste des contacts à joindre,
                                    définition des zones de vol et des zones de sécurité, prévisions météo, informations
                                    permanentes et journalières…)</li>
                                <li>Déclarations préalables et/ou demandes d’autorisation de vol (Préfecture, armée…)
                                </li>
                                <li>Etablissement, si nécessaire, de procédures de vol avec les gestionnaires de sites
                                    aériens (aéroports, héliports, hôpitaux, casernes…)</li>
                                <li>La veille du vol : information de la mission aux forces de l’ordre, aux pompiers et
                                    au voisinage</li>
                                <li>Le jour du vol : mise en place des mesures de sécurité, applications des procédures
                                    établies</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-bloc">
                    <h2 class="accordion-header" id="headingCinq">
                        <button class="accordion-cadre-question collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseCinq" aria-expanded="false" aria-controls="collapseCinq">
                            <h3>LIVRAISON <i class="fas fa-arrow-circle-down"></i></h3>
                        </button>
                    </h2>
                    <div id="collapseCinq" class="accordion-collapse collapse" aria-labelledby="headingCinq"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Après deux jours de postproduction sont remis au client :</p>
                            <ul>
                                <li>Une copie du dossier de vol</li>
                                <li>Une clé USB comprenant tous les fichiers des vidéos et photographies réalisées lors
                                    du vol</li>
                                <li>Une liste détaillée des plans vidéos (sujets, valeurs de plans, durées, formats)
                                </li>
                                <li>Une planche contact des photographies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bloc">
            <p class="contacts">N’hésitez pas à nous contacter pour tout renseignement supplémentaire.</p>
        </div>

        <?php
            require "footer.php";
        ?>
    </div>

    <!-- ============================== xx. JS POUR MODAL IMAGES ============================== -->

    <script src="lightbox-plus-jquery.js"></script>

    <!-- ============================== xx. JS POUR BOUTON RETOUR EN HAUT ============================== -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

    <script>
        jQuery(document).ready(function () {
            var duration = 500;
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > 100) {
                    // Si un défillement de 100 pixels ou plus.
                    // Ajoute le bouton
                    jQuery('.cRetour').fadeIn(duration);
                } else {
                    // Sinon enlève le bouton
                    jQuery('.cRetour').fadeOut(duration);
                }
            });

            jQuery('.cRetour').click(function (event) {
                // Un clic provoque le retour en haut animé.
                event.preventDefault();
                jQuery('html, body').animate({
                    scrollTop: 0
                }, duration);
                return false;
            })
        });
    </script>

    <div class="cRetour"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

</body>

</html>