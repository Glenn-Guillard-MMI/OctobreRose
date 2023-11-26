<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Octobre rose : Un mouvement de solidarité</title>
    <link rel="stylesheet" href="styles.css?dsddsfdhhhkdkdsqs" type="text/css" />
    <link rel="icon" href="Ressources/img/logo.svg">
</head>

<body>

    <?php 
require_once 'header.html';
?>
    <main id="page">


        <section id="selections">
            <div id="ref">
                <p>
                    Projet documentaire de&nbsp;
                    <b> Valentin Lamour</b>,
                    <b> Glenn Guillard</b>,
                    <b> Yanis Wong </b> et
                    <b> Arno Le Moil</b>

                </p>


            </div>
            <p>
                Le 8 Octobre 2023, la Ferté-sous-Jouarre a organisé sa 6ème édition de la Fertoise, un événement
                permettant de récolter un maximum de dons pour Octobre rose, contre le cancer du sein. Cette édition à
                encore battu les records en termes de participant et des dons.
                <br>
                <br>
                Plongez vous dès maintenant au cœur d’Octobre rose !

            </p>


            <div id="menu">
                <article>
                    <img src="Ressources/img/img_coiffeur.jpg">
                    <div id="barre_jaune"></div>
                    <h1>PROFESSIONNEL DE SANTÉ</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsa corporis debitis ab aliquid
                        est eos tenetur earum ad quia!</p>
                    <button>Consulter</button>
                </article>
                <article>
                    <img src="Ressources/img/PXL_20231008_091640380.jpg">
                    <div id="barre_jaune"></div>
                    <h1>PARTICIPANTS À LA COURSE</h1>
                    <p>La 6e édition d'Octobre Rose à La Ferté-sous-Jouarre a été un véritable succès. Plus de 2100 ...
                    </p>
                    <a href="Participant_au_triathlon.php"><button> Consulter</button></a>
                </article>

            </div>
        </section>


        <section id="msg">

            <article>
                <h1 id="msg_msg">MESSAGE</h1>
                <div id="rd">
                    <img src="Ressources/img/card_message.svg" id="card_message">
                    <h1 id="card_nom">Cindy Pave</h1>
                    <p id="card_age">43 ans</p>
                    <p id="card_information">triathlète</p>
                    <p id="card_phrase">“Le dépistage, c'est la clé”</p>
                    <div id="card_btn">
                        <button onclick="vidéo1()">Voir la vidéo</button>
                    </div>
                </div>
            </article>
        </section>
        <section id="Maire_et_asso">
            <article>
                <h1 id="title_MS">MAIRE ET PRÉSIDENT D'ASSOCIATION</h1>
                <div id="flex_MS">
                    <div id="left_MS">
                        <iframe src="https://www.youtube.com/embed/yAY-fQHle8A"
                            title="How to bring a basket into the classroom" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <a href="https://don.ligue-cancer.net/" target="_blank"><button id="desktop_button_ms"><img
                                    src="Ressources/img/Ruban.svg">SOUTENIR
                                OCTOBRE
                                ROSE</button></a>
                    </div>
                    <div id="tsteFlex">
                        <p>Ugo Pezzetta, maire de La Ferté-sous-Jouarre, et Nicolas Mieszczelski, président de
                            l'Association
                            des Entrepreneurs du Pays Fertois (AEPF), ont participé à l'événement Octobre Rose.
                            <br>
                            <br>
                            L'AEPF, association à but non lucratif, vise à promouvoir le développement économique du
                            Pays
                            Fertois en rassemblant des entrepreneurs de divers secteurs. Leur présence à Octobre Rose
                            témoigne de leur soutien à la lutte contre le cancer du sein, soulignant leur engagement en
                            faveur de cette cause cruciale.
                        </p>
                        <h2>Chiffre à retenir </h2>
                        <p>9 femme sur 10 peuvent être guéris lorsqu’il est détecté à un stade précoce</p>
                    </div>
                    <a href="https://don.ligue-cancer.net/" target="_blank" id="btn_a_SOR"> <button
                            id="mobile_button_ms"><img src="Ressources/img/Ruban.svg">SOUTENIR OCTOBRE ROSE</button></a>
                </div>
            </article>
        </section>

        <section>
            <article id="audio">
                <h1 id="title_audio">TÉMOIGNAGE</h1>
                <div id="remoin">
                    <img src="Ressources/img/PXL_20231013_085354345.jpg">
                    <div id="coiffeuse">
                        <h2>
                            Chantal dubreuil
                        </h2>
                        <p id="profession">Coiffeuse</p>
                        <i>
                            <p id="phrase_coiffeuse">“Si vous constatez un changement, même minime, n'hésitez pas à
                                consulter un professionnel de
                                santé.”</p>
                        </i>
                        <h2 id="audio_title">Ecouter le témoignage de Chantal</h2>
                        <audio controls src="Ressources/audio/ZOOM0001_TrLR_1.mp3"></audio>

                    </div>
                </div>
            </article>
        </section>

        <section>
            <article id="all_article">
                <h1 id="title_article">ARTICLE</h1>

                <div class="flex_art">
                    <a href="article_un.html" class="article_a">

                        <div class="art">
                            <img src="Ressources/img/PXL_20231008_085553118.jpg">
                            <h1 class="justititre">Octobre rose : Danser pour l'espoir et la guérison</h1>
                            <p class="justitexte">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto
                                soluta vitae beatae
                                quaerat praesentium delectus cumque eos temporibus nisi quis.</p>
                            <p class="auteur">dsjfhsdjhf dsfsd</p>
                        </div>
                    </a>
                    <a href="article_deux.html" class="article_a">

                        <div class="art">
                            <img src="Ressources/img/PXL_20231008_085553118.jpg">
                            <h1 class="justititre">Octobre rose : Danser pour l'espoir et la guérison</h1>
                            <p class="justitexte">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Architecto
                                soluta vitae beatae
                                quaerat praesentium delectus cumque eos temporibus nisi quis.</p>
                            <p class="auteur">dsjfhsdjhf dsfsd</p>
                        </div>
                    </a>
                </div>
                <div class="flex_art">
                    <a href="article_trois.html" class="article_a">
                        <div class="art">
                            <img src="Ressources/img/PXL_20231008_085553118.jpg">
                            <h1 class="justititre">Octobre rose : Danser pour l'espoir et la guérison</h1>
                            <p class="justitexte">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Architecto
                                soluta vitae beatae
                                quaerat praesentium delectus cumque eos temporibus nisi quis.</p>
                            <p class="auteur">dsjfhsdjhf dsfsd</p>
                        </div>
                    </a>
                </div>
            </article>
        </section>
        <section id="rt_son">
            <article>
                <h1 id="title_son">RETOUR EN SON</h1>
                <div id="flex_son">
                    <div id="son_left">
                        <img src="Ressources/img/foule.png">
                        <p>Sous le ciel ensoleillé d'octobre, l'énergie palpite dans l'air alors que l'association de
                            danse locale prend d'assaut la scène. À quelques pas de la ligne de départ de la course
                            Octobre rose, une foule joyeuse s'est rassemblée pour partager des pas de danse et propager
                            la joie.</p>
                        <h2>Danser avec le coeur</h2>
                        <audio controls src="Ressources/audio/Danse.mp3"></audio>

                    </div>
                    <hr>
                    <div id="son_right">
                        <h2>Groupe de jeune musicien</h2>
                        <p>Au cœur de l'événement Octobre Rose, le groupe de musique LBD a apporté une note particulière
                            d'engagement et d'émotion. Le groupe s'est tout d'abord échauffé, créant une ambiance
                            électrique alors que les accords résonnaient, préparant le terrain pour leur performance à
                            venir. Les riffs de guitare, les battements de tambour et les harmonies vocales fusionnaient
                            dans une symphonie préliminaire, évoquant une énergie contagieuse qui se propageait parmi
                            les membres du groupe.</p>
                        <h2>Préparations Enchantées</h2>
                        <audio controls src="Ressources/audio/Musique.mp3"></audio>

                    </div>
                </div>
            </article>
        </section>
        <section id="rt_image">
            <article>
                <h1 id="title_image">RETOUR EN IMAGE</h1>
                <div id="rt_flex">
                    <div class="img_rt_img">
                        <img src="Ressources/img/PXL_20231008_094038988.jpg" id="rt_img1">
                        <img src="Ressources/img/IMG_20231008_103605.jpg" id="rt_img6">
                    </div>
                    <img src="Ressources/img/PXL_20231008_085553118.jpg" id="rt_img5">

                    <div class="img_rt_img">
                        <img src="Ressources/img/IMG_20231008_120227.jpg" id="rt_img4">
                        <img src="Ressources/img/PXL_20231008_091640380.jpg" id="rt_img2">
                    </div>


                </div>



            </article>
        </section>

    </main>
    <?php
    require_once "footer.html" ;
    ?>
    <?php if(!isset($_GET["visteur"])) { ?>
    <div id="acueille">
        <div id="img_acc">
            <img src="Ressources/img/logo.svg" />
        </div>
        <p id="pj">Un Projet Webdocumentaire sur</p>
        <h1 class="up">Octobre rose</h1>


        <p class="up">
            au cœur de<br />
            la lutte
        </p>

        <button onclick="disparate()">DÉCOUVRIR</button>
    </div>
    <script>
    var mainElements = document.getElementById("page");
    mainElements.style.display = "none";
    </script>
    <?php } ?>
    <script src="scripte.js?45"></script>
</body>

</html>