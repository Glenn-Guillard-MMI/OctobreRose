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
                <img src="Ressources/img/img_coiffeur.jpg" />
                <h2>Au côté des commerçants participant à Octobre rose</h2>
                <p>
                    Nous plongeons au cœur d’Octobre Rose ce vendredi 13 octobre, auprès d’une
                    commerçante participante. Celle-ci participe dans le but de soutenir la lutte contre le
                    cancer du sein et pour sensibiliser le plus de monde.
                </p>
            </article>
        </section>
        <section>
            <article id="texte_art">
                <p>Yanis Wong</p>
                <p>Le 29 novembre 2023</p>
                <p>
                    Il fait beau, en cette matinée d’octobre le soleil éclaire les différents commerces qui
                    commencent à s’animer. 26 place de l’hôtel de ville à la Ferté sous Jouarre, la douce
                    odeur du pain enivre les passants. A côté de cette boulangerie se situe un petit salon de
                    coiffure, nous passons la porte armés de notre matériel et le son de la cloche retentit.

                </p>
                <br />
                <p>Tout de suite notre attention est attirée par les sons propres à cet endroit. L’eau coule, des
                    bruits sourds d’une tondeuse et des discussions se font entendre. Dans ce salon dont
                    l’ambiance est chaleureuse et accueillante, une coiffeuse nommée Isabelle nous
                    accueille à bras ouvert.
                </p>
                <br>
                <p>Une posture droite et le sourire aux lèvres, son attitude et son sourire retranscrit une
                    personne accueillante et généreuse. Elle est vêtue d’un t-shirt rose avec un motif de
                    mains au niveau de la poitrine sur lequel est écrit La Fertoise. Ses cheveux courts et
                    argentés, parmi lesquels des mèches roses, se font remarquer.


                </p>
                <br>
                <p>
                    Cette coiffeuse aussi gentille et généreuse qu’on peut le penser se révèle être une
                    participante à l'événement Octobre Rose. Sa manière de participer est originale. Elle
                    propose dans son salon de coiffure de se faire des mèches roses gratuitement et de
                    récupérer les cheveux coupés, elle reverse ensuite les fonds gagnés lors de cette journée
                    à Octobre Rose.
                </p><br>
                <p>
                    Autour de nous, des stickers, des pins et des broches se font remarquer. Isabelle a eu
                    l’initiative de poser ces différents objets pour sensibiliser ses clients à l'événement Octobre
                    Rose.
                </p><br>
                <p>
                    Elle nous raconte que depuis ses débuts en tant que coiffeuse, elle participait déjà à
                    Octobre Rose. C’est un événement qui lui tient à cœur, mais elle ne se sentait pas
                    spécialement concernée par la cause, jusqu’à ses 50 ans.

                </p><br>
                <p>
                    «<i>C’est très important de se faire la mammographie, en tant qu’homme et en tant que
                        femme</i>» une citation de Isabelle elle-même.
                </p><br>
                <p>
                    Cette citation s’explique par les raisons de sa participation à l'événement en lui-même.
                    A ses 50 ans elle a dû faire une mammographie, après cet acte, elle nous raconte qu’elle
                    s’est sentie beaucoup plus concernée et beaucoup plus touchée par la cause. Ça a été
                    comme un déclic pour elle et à présent elle soutient la cause cœur et âme. Elle tient à
                    sensibiliser le plus de monde pour faire comprendre que cette lutte est importante et
                    qu’elle touche tout le monde.
                </p>
            </article>
        </section>
        <section>
            <article id="all_article">
                <h1 id="title_article">CONTINUER AVEC</h1>

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