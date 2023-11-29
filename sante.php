<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="triathlon.css?iohhddsdsqdskksssdqqdio" />
    <link rel="icon" href="Ressources/img/logo.svg" />

    <title>PROFESSIONNEL DE SANTÉ</title>
</head>

<body>
<div id="haut"></div>

<?php 
require_once 'header.html';
require_once 'up.html';
?>

    <main>
        <div id="tezsts">
            <section id="intro">
                <article>
                    <a id="rt" href="index.php?visteur=ok">← Retour</a>
                    <h1>PARTICIPANTS À LA COURSE</h1>
                    <img src="Ressources/img/medecin.jpeg" />
                    <p>
                        La 6e édition d'Octobre Rose à La Ferté-sous-Jouarre a été un
                        véritable succès. Plus de 2100 personnes ont participé à la marche
                        ou à la course tous vêtues de rose. L'ambiance était festive et
                        conviviale, et tout le monde était mobilisé pour la bonne cause :
                        la lutte contre le cancer du sein.
                    </p>
                </article>
            </section>
        </div>

        <section class="art">
            <article>
                <iframe width="1020" height="538" src="https://www.youtube.com/embed/eUh7XhL_5qE" title="Best Of Why"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <div class="rdt">
                    <h1>Daniel Tourneroche - Représentant de la Ligue contre le cancer</h1>
                    <p>
                        Dans cette compilation émotionnelle, découvrez les réponses
                        uniques et inspirantes de personnes engagées dans cette cause. Les
                        participants partagent tous un objectif commun : faire une
                        différence dans la lutte contre le cancer du sein.
                    </p>
                </div>

            </article>
        </section>
        <a href="https://don.ligue-cancer.net/" target="_blank" id="don"> <button id="desktop_button_ms"><img
                    src="Ressources/img/Ruban.svg">SOUTENIR
                OCTOBRE
                ROSE</button></a>
        <section class="art">
            <article>
                <iframe width="956" height="538" src="https://www.youtube.com/embed/POOQdrHfyPA" title="Jérémy Margalle"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <div class="rdt">
                    <h1>Jérémy Margallé - Membre d’un club Judo</h1>
                    <p>
                        Jérémy MARGALLE, youtubeur connu, change de casquette à Octobre
                        Rose. Cette fois-ci, il n'est pas derrière la caméra, ni en
                        kimono, mais en rose représentant fièrement son club de judo et
                        cet évènement. Aux côtés de ses camarades judo, Jérémy et ses
                        camarades participent pour la première fois à cet événement
                        caritatif. Le club, uni pour la cause, renforce ainsi le message
                        d'unité dans la lutte contre le cancer du sein.
                    </p>
                </div>
            </article>
        </section>
        <section class="art">
            <article>
                <iframe width="1020" height="538" src="https://www.youtube.com/embed/uPBzd3zqC88"
                    title="Anaïs Goncalves" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <div class="rdt">
                    <h1>
                        Anais Goncalves - Professeur à l’Université Gustave Eiffel de
                        Meaux
                    </h1>
                    <p>
                        Anaïs GONCALVES, une habituée fidèle de l'événement Octobre Rose à
                        La Ferté-sous-Jouarre, incarne la persévérance et l'engagement.
                        Année après année, elle revient, portant symboliquement le ruban
                        rose avec fierté. Son dévouement envers la sensibilisation au
                        cancer du sein et son soutien aux personnes touchées ne
                        connaissent pas de limites. En tant que vétérante, Anaïs inspire
                        ceux qui l'entourent, rappelant la constance nécessaire dans la
                        lutte contre cette maladie.
                    </p>
                </div>
            </article>
        </section>
        <section class="art">
            <article>
                <iframe width="956" height="538" src="https://www.youtube.com/embed/aBXnMoL6dKQ" title="Greg Ribeiro"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>

                <div class="rdt">
                    <h1>Greg Ribeiro - Professeur de musique</h1>
                    <p>
                        Greg RIBEIRO, professeur de musique et nouveau participant à
                        Octobre Rose, il n'est pas venu seul. Accompagné de son fils
                        Jonas, il a décidé de s'impliquer activement dans cet événement
                        caritatif. En tant que proche du milieu éducatif, Greg a partagé
                        l'importance de cette cause autour de lui, mobilisant ses élèves
                        pour se joindre à l'initiative. Sa présence va au-delà de la
                        simple participation, reflétant un engagement fort et partagé.
                    </p>
                </div>
            </article>
        </section>

        <div id="menu">
            <article>
                <img src="Ressources/img/PXL_20231008_091640380.jpg" />
                <div id=" barre_jaune">
                </div>
                <h1>PARTICIPANTS À LA COURSE</h1>
                <p>
                    La 6e édition d'Octobre Rose à La Ferté-sous-Jouarre a été un véritable succès. Plus de 2100 ...
                </p>
                <a href="Participant_au_triathlon.php"><button>Consulter</button></a>
            </article>
        </div>
    </main>

    <?php
    require_once "footer.html"
    ?>
</body>

</html>