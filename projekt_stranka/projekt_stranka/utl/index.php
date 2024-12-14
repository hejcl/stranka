<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOTBALOVÝ RÁJ</title>
    <link rel="stylesheet" href="../css/default.css">
    <link href="https://db.onlinewebfonts.com/c/d002e7c91b889cc10ce21789cfde95dd?family=Sequel+100+Wide+95"
          rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

<!-- Hlavička stránky -->
<header>
    <div class="header-left">
        <img alt="Logo"
             class="header-logo"
             src="https://yt3.googleusercontent.com/M23KtQHe5iA0NHAdlFAUYlKqcKS2wl4Mxz0z7O3pqMQ4KkNeUUyVHlebVcBgcmYp57CHRkfr=s160-c-k-c0x00ffffff-no-rj">
        <span class="header-text">Football Themes</span></div>
    <h1 class="welcome-text">FOTBALOVÝ RÁJ</h1>
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
        <h2 id="unique-h2"> VÍTEJ NA NEJLEPŠÍ STRÁNCE O FOTBALE </h2>
        <p>Stránka vytvořena prvotně jako studentský projekt, který je zaměřený na téma fotbalu <br>
            Všechny informace o mě naleznete v <a href="about.php"><i class="bi bi-info-square-fill"></i> O nás</a></p>
        <br><br>
        <h2>NOVINKY TÝDNE</h2>
        <div class="gallery">
            <div class="image-container-1">
                <img src="https://img.rasset.ie/002165bd-800.jpg" alt="Obrázek" class="image">
                <h2>DALŠÍ PROHRA MANCHESTERU CITY</h2>
                <p><a href="news.php" class="custom-link">Celý článek najdeš zde</a></p>
            </div>
            <div class="image-container-1">
                <img src="https://sm.mashable.com/t/mashable_me/photo/default/ronaldo-and-mrbeast_at8m.1248.jpg"
                     alt="Obrázek" class="image">
                <h2>MR BEAST A RONALDO SPOLU VE VIDEU</h2>
                <p><a href="news.php" class="custom-link">Celý článek najdeš zde</a></p>
            </div>
            <div class="image-container-1">
                <img src="https://ichef.bbci.co.uk/ace/standard/800/cpsprodpb/5fc2/live/badd1670-a9b9-11ef-8ab9-9192db313061.jpg.webp"
                     alt="Obrázek" class="image">
                <h2>AMORIM ZKLAMAL HNED V PRNÍM ZÁPASE</h2>
                <p><a href="news.php" class="custom-link">Celý článek najdeš zde</a></p>
            </div>
        </div>
        <br>
        <br>
        <h2> KVÍZ TOP 20 NEJHODNOTNĚJŠÍCH HRÁČŮ </h2>
        <p>Pište přijmení, ale je tu pár výjimek kde je pouze přezdívka pro zjednodušení. (Pište bez diakritiky)</p>

        <!-- Formulář pro zadání jména -->
        <div class="quiz-container">
            <label for="player-input"></label><input type="text" id="player-input" placeholder="Zadejte jméno hráče...">
            <button onclick="checkPlayer()">Zadat</button>
        </div>

        <!-- Tabulka hráčů -->
        <table class="quiz-table">
            <thead>
            <tr>
                <th>HODNOTA</th>
                <th>PŘIJMENÍ HRÁČE</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>200 milionů€</td>
                <td class="player" data-name="Haaland"></td>
            </tr>
            <tr>
                <td>200 milionů€</td>
                <td class="player" data-name="Vinicius"></td>
            </tr>
            <tr>
                <td>180 milionů€</td>
                <td class="player" data-name="Bellingham"></td>
            </tr>
            <tr>
                <td>180 milionů€</td>
                <td class="player" data-name="Mbappe"></td>
            </tr>
            <tr>
                <td>150 milionů€</td>
                <td class="player" data-name="Yamal"></td>
            </tr>

            <tr>
                <td>150 milionů€</td>
                <td class="player" data-name="Foden"></td>
            </tr>

            <tr>
                <td>140 milionů€</td>
                <td class="player" data-name="Saka"></td>
            </tr>

            <tr>
                <td>130 milionů€</td>
                <td class="player" data-name="Wirtz"></td>
            </tr>

            <tr>
                <td>130 milionů€</td>
                <td class="player" data-name="Musiala"></td>
            </tr>

            <tr>
                <td>130 milionů€</td>
                <td class="player" data-name="Valverde"></td>
            </tr>

            <tr>
                <td>130 milionů€</td>
                <td class="player" data-name="Rodri"></td>
            </tr>

            <tr>
                <td>120 milionů€</td>
                <td class="player" data-name="Rice"></td>
            </tr>

            <tr>
                <td>110 milionů€</td>
                <td class="player" data-name="Rodrygo"></td>
            </tr>

            <tr>
                <td>110 milionů€</td>
                <td class="player" data-name="Martinez"></td>
            </tr>

            <tr>
                <td>110 milionů€</td>
                <td class="player" data-name="Odegaard"></td>
            </tr>

            <tr>
                <td>100 milionů€</td>
                <td class="player" data-name="Camavinga"></td>
            </tr>

            <tr>
                <td>100 milionů€</td>
                <td class="player" data-name="Tchouameni"></td>
            </tr>

            <tr>
                <td>100 milionů€</td>
                <td class="player" data-name="Kane"></td>
            </tr>

            <tr>
                <td>90 milionů€</td>
                <td class="player" data-name="Gavi"></td>
            </tr>

            <tr>
                <td>90 milionů€</td>
                <td class="player" data-name="Palmer"></td>
            </tr>

            </tbody>
        </table>

        <script src="../js/script.js"></script>

    </div>


</main>

</body>
<?php
include_once 'footer.php';
?>
</html>
