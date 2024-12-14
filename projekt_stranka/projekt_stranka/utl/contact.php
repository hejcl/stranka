<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>

    <link href="https://db.onlinewebfonts.com/c/d002e7c91b889cc10ce21789cfde95dd?family=Sequel+100+Wide+95"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/default.css">
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
    <h1>KONTAKTUJTE NÁS</h1>
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

<?php
include_once 'header.php';
?>

<!-- Hlavní obsah -->
<main>
    <div class="football-field">

        <div class="contact-form">
            <h2 id="white-h2">Kontaktní formulář</h2>
            <form action="#" method="POST">
                <label for="name">Jméno:</label>
                <input type="name" id="name" name="name" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Zpráva:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Odeslat</button>
            </form>
        </div>
b
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center">
            <!-- Email -->
            <div class="col-12 col-md-4 contact-item">
                <a href="mailto:hejclmatej@gmail.com" class="contact-link">
                    <i class="fas fa-envelope contact-icon"></i>
                    <p>Email</p>
                </a>
            </div>

            <!-- Instagram -->
            <div class="col-12 col-md-4 contact-item">
                <a href="https://www.instagram.com/fotbalova_temata" target="_blank" class="contact-link">
                    <i class="fab fa-instagram contact-icon"></i>
                    <p>Instagram</p>
                </a>
            </div>

            <!-- YouTube -->
            <div class="col-12 col-md-4 contact-item">
                <a href="https://www.youtube.com/@fotbalova_temata" target="_blank" class="contact-link">
                    <i class="fab fa-youtube contact-icon"></i>
                    <p>YouTube</p>
                </a>
            </div>

            <!-- TikTok -->
            <div class="col-12 col-md-4 contact-item">
                <a href="https://www.tiktok.com/@fotbalova_temata" target="_blank" class="contact-link">
                    <i class="fab fa-tiktok contact-icon"></i>
                    <p>TikTok</p>
                </a>
            </div>

            <!-- Spotify -->
            <div class="col-12 col-md-4 contact-item">
                <a href="https://open.spotify.com/show/19zZACuO6CIsO9XJb98LEi" target="_blank" class="contact-link">
                    <i class="fab fa-spotify contact-icon"></i>
                    <p>Spotify</p>
                </a>
            </div>

            <!-- Discord -->
            <div class="col-12 col-md-4 contact-item">
                <a href="https://discord.com/invite/Kvsxh55tJp" target="_blank" class="contact-link">
                    <i class="fab fa-discord contact-icon"></i>
                    <p>Discord</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Připojení Bootstrap JS a Popper.js pro funkce Bootstrapu -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</main>



</body>
<?php
include_once 'footer.php';
?>
</html>

