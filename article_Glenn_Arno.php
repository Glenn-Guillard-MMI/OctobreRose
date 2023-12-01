<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Article</title>
    <link rel="stylesheet" href="artcile.css" />
    <link rel="icon" href="Ressources/img/logo.svg" />
</head>

<body>
    <div id="haut"></div>

    <?php 
require_once 'header.html';
require_once 'up.html';
?>
    <main id="page">
        <section id="intro">
            <article>
                <a id="rt" href="index.php?visteur=ok">← Retour</a>
                <h1>ARTICLE</h1>
                <img src="Ressources/img/PXL_20231008_085553118.jpg" />
                <h2>La Fertoise : 20 500 euros de dons contre le cancer du sein</h2>
                <p>

                </p>
            </article>
        </section>
        <section>
            <article id="texte_art">
                <p>Glenn Guillard & Arno Le moil</p>
                <p>Le 21 novembre 2023</p>
                <p>
                    Comme chaque année, l’objectif de la commune est de battre son ancien record, afin de soutenir la
                    recherche contre le cancer du sein. Professionnels de santé, commerçants et autres participants se
                    réunissent pour soutenir cette cause et contribuer financièrement à cette recherche.
                    Octobre rose est né dans les années 80 au Royaume-Uni, puis s'est étendu dans plusieurs autres pays.
                    Il est arrivé en France en 1985 par le biais de l'association «<i>Le Cancer du sein,
                        parlons-en</i>».

                </p>
                <br />
                <p>Dès le commencement de la Fertoise, qui symbolise toutes les femmes de la Ferté-sous-Jouarre,
                    l'ambiance énergique se fait sentir. Danseurs et danseuses se mettent en scène avec les nombreux
                    participants. En effet, on constate une importante augmentation en l'espace d’un an, passant de 1
                    500 à 2 100 participants.
                </p>
                <br>
                <p>Parmi ces participants, il est possible de retrouver des médecins et autres professionnels de santé.
                    Leur objectif ? Sensibiliser, conseiller ou encore diagnostiquer les participants volontaires ou
                    craignant d’être atteint du cancer.


                </p>
                <br>
                <p>
                    L'objectif des participants est le même, mais les motivations sont différentes. Certains viennent
                    soutenir la cause car un membre de leur famille ou eux-même ont été atteint du cancer du sein :
                    «<i>Il
                        y a des gens de ma famille qui ont été touchés par le cancer du sein</i>» témoigne Léa,
                    aide-soignante.
                    D’autres viennent simplement participer dans le but de faire une bonne action et aider les personnes
                    atteint du cancer .
                </p>
                <br>
                <p>Pour soutenir la cause, quelques clubs sont présents en groupe, pour représenter la lutte contre le
                    cancer. On peut y retrouver le club de judo <i>L’ange gardien</i> et le club de musique <i>GDE</i>,
                    venus pour «<i>faire un effet de masse</i>». Plusieurs commerçants ont aussi fait le déplacement
                    afin de vendre des
                    produits, dans le but de verser des dons avec l’argent récolté. Un autre stand était présent pour
                    récupérer des soutien-gorges. Enfin, des bénévoles étaient également présents pour récolter des
                    dons.</p>
                <br>
                <p>Lors de cet événement, des enfants victimes de handicaps, ont aussi pu participer. Ceux-ci ont eu la
                    chance de monter sur scène pour faire une chorégraphie en langue des signes de la musique « La
                    grenade » de Clara Luciani.</p>
                <br>
                <p>Vers 11h00, les participants écoutent le discours du maire de La-Ferté-sous-Jouarre, monsieur Ugo
                    Pezzetta. “<i>La semaine dernière Coulommiers a battu un record, aujourd’hui La-Ferté-sous-Jouarre
                        bat
                        à son tour un record, nous sommes un territoire de record [...] 2 100 personnes présentes
                        aujourd’hui, nous avons le plaisir de remettre à la ligue contre le cancer un chèque de 20 500
                        euros</i>” déclare Ugo Pezzetta. Ce chèque bas l’ancien record de La-Ferté-sous-Jouarre qui,
                    l’an
                    dernier, avait réussi à récolter 17 000 euros.
                </p>
                <br>
                <p>Après ce discours, l’heure du départ sonne. Les participants commencent leurs courses de 4,5 ou 6,5
                    Km, suivis des randonneurs qui ont la possibilité d’être accompagnés de leurs chiens. Après avoir
                    parcouru de nombreux kilomètres, les participants ont pu se restaurer à la buvette directement
                    installée au sein de l’événement.</p>
                <br>
                <p>Ils auront également l’occasion de se détendre en musique grâce au concert du groupe LDB, qui
                    clôturé cet événement annuel.
                </p>
            </article>
        </section>
        <section>
            <article id="all_article">
                <h1 id="title_article">CONTINUER AVEC</h1>

                <div class="flex_art">
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
    </main>

    <?php
    require_once 'footer.html';
    ?>
</body>

</html>