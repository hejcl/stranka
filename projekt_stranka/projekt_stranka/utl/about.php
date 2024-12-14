<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOTBALOVÝ RÁJ</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/about.css">
    <link href="https://db.onlinewebfonts.com/c/d002e7c91b889cc10ce21789cfde95dd?family=Sequel+100+Wide+95"
          rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >
</head>
<body>

<!-- Hlavička stránky -->
<header>
    <div class="header-left">
        <img src="https://yt3.googleusercontent.com/M23KtQHe5iA0NHAdlFAUYlKqcKS2wl4Mxz0z7O3pqMQ4KkNeUUyVHlebVcBgcmYp57CHRkfr=s160-c-k-c0x00ffffff-no-rj"
             alt="Logo" class="header-logo">
        <span class="header-text">Football Themes</span></div>
    <h1>O NÁS</h1>
    <div class="login-icon">
        <a href="login.php" title="Přihlášení">
            <i class="bi bi-person-fill"></i>
        </a>
    </div>
    <div>
        <div class="search-icon">
            <i class="bi bi-search" style="font-size: 1.5rem; cursor: pointer;" onclick="toggleSearch()"></i>
        </div>
    </div>
    <div class="search-bar" style="display: none;">
        <label for="search-input"></label><input type="text" id="search-input" placeholder="Hledat..." oninput="highlightText()">
    </div>
</header>

<!-- Navigační menu -->
<?php
include_once 'header.php';
?>

<!-- Hlavní obsah -->
<main>
    <div class="football-field">
        <div class="content container">
            <section class="mt-5">
                <h2>ZAKLADATEL STRÁNKY</h2>
                <div class="founder">
                    <div class="founder">
                        <img src="https://ugc.production.linktr.ee/bcfd8e4b-fee1-4678-abe6-03fdb3fc9c9a_IMG-2578.png?io=true&size=avatar-v3_0">
                        <h3>Matěj Hejčl</h3>
                        <p>
                            Nyní jsem střihačem podcastů Mimo Hřiště a Ofsajd.
                            V minulosti <br>jsem se byl střihačem pro Lukáše Prážu, kde jsem byl hlavou <br> podcastů z pohledu
                            propagace a editu jimiž byly:  Tělo na Tělo, <br> Chill Talk, Finanční Nezávislost, Mic Check a Reality Show...
                            Taktéž <br> tvořím i vlastní obsah na sociální sítě, který najdete v Kontaktech
                        </p>
                    </div>
                </div>
            </section>

                <section>
                    <h2>PROJEKTY NA KTERÝCH JSEM SE PODÍLEL</h2>
                    <div class="projects">
                        <img src="https://assets.herohero.co/prod/images/user/mimohristetiugsbit/1669733202-904465865-9092.png?width=1900">
                        <img src="https://assets.herohero.co/prod/images/user/podcastofsajdadvomjnk/1678444976-930111944-8277.png?width=1900">
                        <img src="https://yt3.googleusercontent.com/M23KtQHe5iA0NHAdlFAUYlKqcKS2wl4Mxz0z7O3pqMQ4KkNeUUyVHlebVcBgcmYp57CHRkfr=s160-c-k-c0x00ffffff-no-rj">
                        <img src="https://assets.herohero.co/prod/images/user/fotbalnetradicneheroaxyuimkl/1664401995-627459016-2585.jpeg?width=1900">
                        <img src="https://assets.herohero.co/prod/images/user/venisspirittalkpodcastulwiryuj/1699728471-847959758-5075.jpeg?width=1900">
                        <img src="https://assets.herohero.co/prod/images/user/telonatelopodcastywlunhpek/1710018971-995135174-6101.jpeg?width=1900">
                        <img src="https://assets.herohero.co/prod/images/user/prazaofficialhuxcfmio/1701512261-138747158-8574.jpeg?width=1900">
                        <img src="https://assets.herohero.co/prod/images/user/financninezavislostpodcastefyehabi/1681981463-507512222-6616.jpeg?width=1900">
                        <img src="https://assets.herohero.co/prod/images/user/miccheckpodcastycchgbyjq/1689020168-483307118-9948.jpeg?width=1900">
                        <img src="https://assets.herohero.co/prod/images/user/realityshowpodcastzdslkpim/1681557353-368290516-6336.jpeg?width=1900">
                    </div>
                </section>





        </div>
    </div>

    <script src="../js/script.js"></script>

</main>
</body>

<?php
include_once 'footer.php';
?>
</html>

