<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="triathlon.css?iohhdydsdsqdskksssdqqdio" />
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
                        Au cours de l'événement, des professionnels de santé étaient installés dans un stand dans
                        l’optique de faire une campagne de sensibilisation, en expliquant les causes et les moyens de
                        guérison du cancer aux participants. Conseiller, informer et soutenir étaient leur principales
                        missions.
                    </p>
                </article>
            </section>
        </div>

        <section class="art">
            <article>
                <iframe width="956" height="538" src="https://www.youtube.com/embed/lzkzt8EKtRA"
                    title="daniel tourneroche" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <div class="rdt">
                    <h1>Daniel Tourneroche - Représentant de la Ligue contre le cancer</h1>
                    <p>
                        Daniel TOURNEROCHE représentant et bénévole pendant 15 ans de la ligue contre le cancer du sein
                        se trouve au stand médical de l'événement. Il nous explique ses combats et la raison de sa
                        présence à l’évènement.
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
                <iframe width="956" height="538" src="https://www.youtube.com/embed/rtK4t49uBnY"
                    title="radiologue médecin" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <div class="rdt">
                    <h1>Alain Wolf - Radiologue & Alexandre Harbon - Médecin généraliste</h1>
                    <p>
                        Radiologue à la Ferté-sous-Jouarre, Alain WOLF nous explique en détail comment se déroule le
                        dépistage du cancer du sein avec des divers supports. À ses côté, le médecin généraliste
                        Alexandre HARBON nous dévoile les facteurs de risques du cancer, ainsi que les traitements
                        conseillés en fonction du stade d’avancée de la maladie.
                    </p>
                </div>
            </article>
        </section>
        <section class="art">
            <article>
                <iframe width="956" height="538" src="https://www.youtube.com/embed/1N5vNBIBO88" title="Noro gynecolgue"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <div class="rdt">
                    <h1>
                        Noro Rasoanaivo-Gaston - Gynécologue
                    </h1>
                    <p>
                        Enfin, découvrez les missions d’une gynécologue lors de l'événement avec le témoignage de Noro
                        RASOANAIVO-GASTON. A l’aide de supports visuels, elle informe et sensibilise les participantes
                        et participants qui souhaitent apprendre davantage sur les facteurs de risques, les traitements
                        et le déroulement du dépistage du cancer du sein. Sur demande, elle peut dépister et
                        éventuellement envoyer en radiologie les volontaires, directement sur place.
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