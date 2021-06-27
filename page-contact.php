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

        <div class="bloc-contact">
            <button class="btn-menu-id marge-bouton-contact">Contact</button>
            <div class="bloc bloc-center">
                <p class="bloc-center">Besoin de renseignements ou d'un devis ?</p>
                <p class="bloc-center">N'hésitez pas à contacter <span class="name">DRONE VIRTUAL IMAGES</span> :</p>
                <br>
                <p class="contenu-bloc-texte contacts">
                    <a href="mailto:dronevirtualimages@orange.fr">
                        <i class="fas fa-envelope icone-envelope"></i><span
                            class="mail">dronevirtualimages@orange.fr</span>
                    </a>
                    <br><br>
                    <a href="https://www.facebook.com/Drone-Virtual-Images-110701784453684" target="_blank">
                        <i class="fab fa-facebook-square facebook-icon"></i><span class="mail">drone virtual
                            images</span></a>
                    <br><br>
                    <i class="fas fa-phone icone-phone"></i><span class="mots-cles-competences">06 49 75 02 52</span>
                </p>
            </div>
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