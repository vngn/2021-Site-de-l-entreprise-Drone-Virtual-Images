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
            <button class="btn-menu-id">Visites virtuelles 3D</button>
        </div>
        <div class="bloc">
            <!-- <div class="video-4">
                <iframe class="iframe-responsive-4" src="https://my.matterport.com/show/?m=RvPiYRnZxPM"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope" allowfullscreen>
                </iframe>
            </div> -->

            <div class="accordion" id="accordionExample">
                <div class="accordion-bloc">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-cadre-question" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3>QU’EST- CE QU’UNE VISITE VIRTUELLE 3D ? <i class="fas fa-arrow-circle-down"></i></h3>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Il n’y a pas si longtemps encore, les visites virtuelles n’étaient que de
                                simples assemblages de
                                photographies dans lesquels les visiteurs n’étaient que spectateurs et ne faisaient que
                                passer d’une vue
                                plate à une autre.
                            </p>
                            <p>Aujourd’hui, les visites virtuelles sont devenues de véritables environnements
                                immersifs. Ce sont des
                                espaces et volumes reproduits en haute résolution et en trois dimensions, dans lesquels
                                il est possible
                                et toujours amusant de se glisser.
                            </p>
                            <p>A présent, les personnes s’aventurant dans des visites virtuelles 3D sont des
                                promeneurs qui peuvent s’y
                                déplacer à leur gré, à grandes ou à petites enjambées flottantes. Ils peuvent y orienter
                                leurs regards
                                dans tous les sens, du sol au plafond, traverser des portes et admirer des paysages au
                                travers de
                                fenêtres, tourner autour des objets ou s’en approcher pour les examiner en détails… et
                                faire bien
                                d’autres choses encore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-bloc">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-cadre-question collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h3>A QUI S’ADRESSENT LES VISITES VIRTUELLES 3D ? <i class="fas fa-arrow-circle-down"></i>
                            </h3>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>En tant que reproductions fidèles et précises d’espaces et de lieux, les
                                visites virtuelles 3D sont d’excellents outils de communication et de promotion pour
                                tous les
                                professionnels qui souhaitent proposer un bien à leurs clients, mettre en valeur une
                                offre ou présenter
                                un savoir-faire.
                            </p>
                            <p>Mais les visites virtuelles 3D sont tout aussi intéressantes pour les milieux
                                de l’Art, de la Culture, du Patrimoine et du tourisme. Et de nombreuses autres
                                applications sont encore
                                assurément à découvrir.</p>
                            <p>
                                Voici quelques exemples, parmi d’autres, de ce que permettent les visites virtuelles 3D
                                :
                            </p>
                            <ul>
                                <li><span>Architectes, entrepreneurs, chantiers navals,
                                        archéologues</span><br>
                                    Analysez régulièrement et faites suivre à vos clients les étapes et les avancements
                                    de vos
                                    chantiers.
                                </li>
                                <li><span>Agents immobiliers</span><br>
                                    Augmentez l’attrait et la visibilité de vos offres de ventes et de locations, tout
                                    en bénéficiant
                                    d’un considérable gain de temps et de sécurité.
                                </li>
                                <li><span>Assureurs</span><br>
                                    Etablissez et conservez l’empreinte parfaite de l’état d’un bien lors de la
                                    signature d’un contrat.
                                </li>
                                <li><span>Commerçants, artisans, concessionnaires</span><br>
                                    Proposez à vos clients de flâner dans votre boutique ou votre hall d’exposition, et
                                    faites-leur
                                    découvrir la qualité et la variété de vos produits, articles et modèles.
                                </li>
                                <li><span>Salles de sport, de spectacle, de séminaire</span><br>
                                    Montrez vos équipements, vos installations et les volumes de vos locaux à vos futurs
                                    adhérents.
                                </li>
                                <li><span>Etablissements scolaires, crèches</span><br>
                                    Montrez aux parents dans quels environnements étudieront et vivront leurs enfants.
                                </li>
                                <li><span>Entreprises, usines, ateliers</span><br>
                                    Donnez un aperçu de vos domaines de compétences, de votre outillage et de vos
                                    capacités de
                                    production.
                                </li>
                                <li><span>Restaurants, hôtels, auberges, campings</span><br>
                                    Mettez en valeur le cadre dans lequel vous accueillerez vos clients.
                                </li>
                                <li><span>Musées, galeries d’Art, salles d’exposition</span><br>
                                    Présentez vos collections et donnez envie aux visiteurs virtuels de venir les
                                    admirer véritablement
                                    sur place.
                                </li>
                                <li><span>Service Culturel, Service Patrimoine, Office du Tourisme</span><br>
                                    Faites découvrir l’Histoire et les richesses de votre commune, et contribuez à leur
                                    préservation.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-bloc">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-cadre-question collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h3>LES AVANTAGES <i class="fas fa-arrow-circle-down"></i></h3>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Elles sont gratuites pour les visiteurs.</li>
                                <li>Elles sont facilement accessibles, effectuables à volonté et à tout moment de la
                                    journée.</li>
                                <li>Elles sont rapides, immédiatement disponibles et ne nécessitent pas de prise de
                                    rendez-vous.</li>
                                <li>Elles permettent d’énormes économies de temps, de déplacements, d’énergie et
                                    d’argent.</li>
                                <li>Elles peuvent être archivées, comparées et partagées.</li>
                                <li>Elles ne sont pas soumises aux contraintes sanitaires.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-bloc">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-cadre-question collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h3>LA REALISATION <i class="fas fa-arrow-circle-down"></i></h3>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Pour réaliser chacune de nos missions nous utilisons les tous derniers appareils et
                                outils informatiques
                                de la société MATTERPORT, leader mondial de la visite virtuelle 3D.
                            </p>
                            <p>A titre indicatif, avec ce matériel la visite virtuelle d’un appartement de 100 mètres
                                carrés se réalise
                                en moins de 60 minutes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-bloc">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-cadre-question collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <h3>LE PARTAGE <i class="fas fa-arrow-circle-down"></i></h3>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Une fois votre visite virtuelle 3D finalisée, nous vous fournirons un lien URL, un
                                Iframe, et un QR Code,
                                qui vous permettront de la diffuser sur internet et de la partager avec vos partenaires
                                et vos clients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-bloc">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-cadre-question collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <h3>LES PETITS PLUS <i class="fas fa-arrow-circle-down"></i></h3>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Outre la visite d’un lieu et l’exploration de ses moindres recoins, une visite virtuelle
                                3D s’accompagne
                                de nombreuses possibilités.
                            </p>
                            <p>Si vous êtes visiteur, vous pouvez par exemple conserver des photographies de votre
                                visite et prendre des
                                mesures (votre canapé va-t-il trouver sa place dans ce salon ?).
                            </p>
                            <p>Si vous êtes l’organisateur de la visite, vous pouvez y ajouter des commentaires et des
                                annotations,
                                ainsi que des photographies et des vidéos complémentaires. Et vous pouvez également
                                agrémenter la visite
                                de plans et d’une intégration sur Google Earth, sur Google Maps et sur Google Street
                                View.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-bloc">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-cadre-question collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <h3>LE PRIX <i class="fas fa-arrow-circle-down"></i></h3>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Le prix d’une visite virtuelle est établi par devis gratuit et se calcule en fonction de
                                la surface à
                                numériser.
                            </p>
                            <p>Le prix de départ est de 350 euros (pour une surface allant jusqu’à 100 mètres carrés),
                                auquel nous
                                ajoutons une majoration dégressive pour chaque mètre carré supplémentaire.
                            </p>
                            <p>Un devis forfaitaire peut être proposé pour les très grandes surfaces.
                            </p>
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