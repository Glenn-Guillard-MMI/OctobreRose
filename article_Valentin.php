<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Article</title>
    <link rel="stylesheet" href="artcile.css?ij" />
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
                <img src="Ressources/img/lbd1.JPG" />
                <h2>Octobre rose : tous en cœur</h2>
                <p>
                    Le groupe de musique LBD, composé de ses quatre jeunes artistes
                    originaires de la Ferté Sous Jouarre, a eu l’occasion de participer à la 6ème
                    édition d' Octobre Rose à la Ferte Sous Jouarre.
                </p>
            </article>
        </section>
        <section>
            <article id="texte_art">
                <p>Valentin Lamour</p>
                <p>Le 21 novembre 2023</p>
                <p>
                    Sur une scène animée par une ambiance conviviale et chaleureuse, <a
                        href="index.php?visteur=ok#lbd"><u>le groupe LBD
                            se prépare</u></a> à offrir une performance inoubliable. Une complicité évidente règne
                    entre les membres du groupe, créant une atmosphère détendue mais pleine
                    d'énergie. Le groupe LBD, composé d'Alex et Toma aux guitares, Loan à la batterie,
                    et Lucaina au chant, dégage une motivation profonde. Lucaina, le chanteur du
                    groupe, a exprimé son engagement envers Octobre Rose en rendant hommage à
                    sa grand-mère, qui lutte contre le cancer du sein. Il a partagé son intention
                    sincère en déclarant : "<i>Je suis ici pour montrer mon soutien à Octobre Rose et
                        soutenir ma grand-mère dans ce combat.</i>"
                </p>
                <br />
                <p>Fort de plusieurs années d'expérience musicale en Seine-et-Marne, le groupe LBD
                    est bien connu pour sa polyvalence artistique, ils créent leur propre musique,
                    explorant un large éventail de styles, du rock au rap, en passant par la pop et le
                    reggae.
                </p>
                <br>
                <p>Leur engagement envers des causes caritatives ne se limite pas à Octobre Rose.
                    LBD a déjà participé à d'autres événements caritatifs tels que le Téléthon et la
                    Fête de la musique. Leur musique vibrante et variée résonne auprès d'un public
                    diversifié.

                </p>
                <br>
                <p>
                    Lors de leur performance devant une foule enthousiaste de plus de 2000
                    personnes, LBD a conquis les spectateurs par son énergie contagieuse et son
                    talent musical. Choisis avec soin, les morceaux interprétés par le groupe
                    abordaient des thèmes de force, d'espoir et de résilience. LBD espère que leur
                    musique saura apporter un réconfort bienvenu à ceux qui sont touchés par le
                    cancer du sein. Avec leur propre style musical distinctif, le groupe souhaite créer
                    une expérience mémorable pour leur public tout en contribuant à des causes qui
                    leur tiennent à cœur, <b>unissant le pouvoir de la musique à celui du soutien
                        communautaire.</b>
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
                </div>
            </article>
        </section>
    </main>

    <?php
    require_once 'footer.html';
    ?>
</body>

</html>