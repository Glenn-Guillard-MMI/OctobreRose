<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Octobre Rose : Au cœur de la lutte</title>
    <link rel="stylesheet" href="styles.css" type="text/css" />
    <link rel="icon" href="Ressources/img/logo.svg">
</head>

<body>
    <div id="haut"></div>

    <?php 
require_once 'header.html';
require_once 'up.html';
?>

    <div id="vid" onclick="novid()">
        <div id="hello">
            <iframe width="956" height="538" src="https://www.youtube.com/embed/eYSs4Wgtl9M" title="compil message"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
    <main id="page">


        <section id="selections">
            <div id="ref">
                <p>
                    Projet documentaire de&nbsp;
                    <a href="https://www.linkedin.com/in/valentin-lamour-732488252/" target="_blank"
                        title="Designer du site et caméraman"><b>Valentin
                            Lamour</b></a>,
                    <a href="https://www.linkedin.com/in/glenn-guillard-08204724a/" target="_blank"
                        title="Developpeur du site et photographe"><b> Glenn
                            Guillard</b></a>,
                    <a href="https://www.linkedin.com/in/yanis-wong-a2a080278/" target="_blank"
                        title="Monteur vidéo"><b> Yanis Wong
                        </b></a> et
                    <a href="https://www.linkedin.com/in/arno-le-moil-29b4b1256/" target="_blank"
                        title="Monteur vidéo"><b> Arno Le
                            Moil</b></a>

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
                    <img src="Ressources/img/medecin.jpeg">
                    <div id="barre_jaune"></div>
                    <h1>PROFESSIONNEL DE SANTÉ</h1>
                    <p>Au cours de l'événement, des professionnels de santé étaient installés dans un stand ...</p>
                    <a href="sante.php"><button> Consulter</button></a>

                </article>
                <article>
                    <img src="Ressources/img/PXL_20231008_091640380.jpg">
                    <div id="barre_jaune"></div>
                    <h1>PARTICIPANTS À LA COURSE</h1>
                    <p>La 6e édition d'Octobre Rose à La Ferté-sous-Jouarre a été un véritable succès...
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
                    <h1 id="card_nom">Ugo Pezzetta</h1>
                    <p id="card_age"></p>
                    <p id="card_information">Maire de la Ferté sous jouarre</p>
                    <p id="card_phrase">“9 femmes sur 10 peuvent guérir du cancer du sein à partir du moment où le
                        dépistage est fait à temps”</p>
                    <div id="card_btn">
                        <button onclick="video()">Voir la vidéo</button>
                    </div>
                </div>
            </article>
        </section>
        <section id="Maire_et_asso">
            <article>
                <h1 id="title_MS">MAIRE ET PRÉSIDENT D'ASSOCIATION</h1>
                <div id="flex_MS">
                    <div id="left_MS">
                        <iframe src="https://www.youtube.com/embed/bhN2p8-GKHg" title="Nicolas Ugo" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <a href="https://don.ligue-cancer.net/" target="_blank"><button id="desktop_button_ms"><img
                                    src="Ressources/img/Ruban.svg">SOUTENIR
                                OCTOBRE
                                ROSE</button></a>
                    </div>
                    <div id="tsteFlex">
                        <p><b>Ugo PEZZETTA</b>, maire de La Ferté-sous-Jouarre, et <b>Nicolas MIESZKALSKI</b>, président
                            de
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
                            Isabelle Ventouratos
                        </h2>
                        <p id="profession">Coiffeuse</p>
                        <i>
                            <p id="phrase_coiffeuse">“C’est très important de se faire la mammographie, en tant qu’homme
                                et en tant que femme.”</p>
                        </i>
                        <h2 id="audio_title">Ecouter le témoignage de Isabelle</h2>
                        <audio controls src="Ressources/audio/ZOOM0001_TrLR_1.mp3"></audio>

                    </div>
                </div>
            </article>
        </section>

        <section>
            <article id="all_article">
                <h1 id="title_article">ARTICLES</h1>

                <div class="flex_art">
                    <a href="article_Glenn_Arno.php" class="article_a">

                        <div class="art">
                            <img src="Ressources/img/PXL_20231008_085553118.jpg">
                            <h1 class="justititre">La Fertoise : 20 500 euros de dons contre le cancer du sein</h1>
                            <p class="justitexte">Comme chaque année, l’objectif de la commune est de battre son ancien
                                record, afin de soutenir la recherche contre le cancer du sein. Professionnels de santé,
                                commerçants...</p>
                            <p class="auteur">Glenn Guillard & Arno Le Moil</p>
                        </div>
                    </a>
                    <a href="article_Yanis.php" class="article_a">

                        <div class="art">
                            <img src="Ressources/img/img_coiffeur.jpg">
                            <h1 class="justititre">Au côté des commerçants participant à Octobre rose.</h1>
                            <p class="justitexte">Nous plongeons au cœur d’Octobre Rose ce vendredi 13 octobre, auprès
                                d’une
                                commerçante participante. Celle-ci participe dans le but de soutenir la lutte contre le
                                cancer du sein...</p>
                            <p class="auteur">Yanis Wong</p>
                        </div>
                    </a>
                </div>
                <div class="flex_art">
                    <a href="article_Valentin.php" class="article_a">
                        <div class="art">

                            <img src="Ressources/img/lbd1.JPG">
                            <h1 class="justititre">Octobre rose : tous en cœur</h1>
                            <p class="justitexte">Le groupe de musique LBD, composé de ses quatre jeunes artistes
                                originaires de la Ferté Sous Jouarre, a eu l’occasion de participer à la 6ème
                                édition d' Octobre Rose à la Ferte Sous Jouarre.</p>
                            <p class="auteur">Valentin Lamour</p>
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
                        <div id="lbd"></div>
                        <h2>Groupe de jeune musicien</h2>
                        <p>Au cœur de l'événement Octobre Rose, le groupe de musique LBD a apporté une note particulière
                            d'engagement et d'émotion. Le groupe s'est tout d'abord échauffé, créant une ambiance
                            électrique alors que les accords résonnaient, préparant le terrain pour leur performance à
                            venir. Les riffs de guitare, les battements de tambour et les harmonies vocales fusionnaient
                            dans une symphonie préliminaire, évoquant une énergie contagieuse qui se propageait parmi
                            les membres du groupe.</p>
                        <h2>Préparations Enchantées</h2>


                        <audio controls src="Ressources/audio/Musique.mp3"></audio>
                        <a href="https://www.instagram.com/ldb.officiels/?fbclid=IwAR0ktmZTI0uWm8Wqc6K3KbAbh9wxnwzZk_xMrDngobp8Pgs2pCp_AUMhNXQ"
                            target="_blank">
                            <div id="share">
                                <p>Retrouvez les sur </p>
                                <img src="Ressources/img/bi_instagram.svg" id="rese">
                            </div>
                        </a>
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


    <script src="scripte.js"></script>
</body>

</html>