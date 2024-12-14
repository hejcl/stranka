<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přihlášení & Registrace</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div class="form-container">
    <!-- Přihlašovací formulář -->
    <div class="form-box" id="login-form">
        <h2>Přihlášení</h2>
        <form>
            <label for="login-username">Uživatelské jméno</label>
            <input type="text" id="login-username" placeholder="Zadejte uživatelské jméno" required>

            <label for="login-password">Heslo</label>
            <input type="password" id="login-password" placeholder="Zadejte heslo" required>

            <button type="submit">Přihlásit se</button>
            <p>Nemáte účet? <a href="#" id="show-register">Registrujte se</a></p>
        </form>
    </div>

    <!-- Registrační formulář -->
    <div class="form-box hidden" id="register-form">
        <h2>Registrace</h2>
        <form>
            <label for="register-username">Uživatelské jméno</label>
            <input type="text" id="register-username" placeholder="Zadejte uživatelské jméno" required>

            <label for="register-email">Email</label>
            <input type="email" id="register-email" placeholder="Zadejte email" required>

            <label for="register-password">Heslo</label>
            <input type="password" id="register-password" placeholder="Zadejte heslo" required>

            <label for="register-confirm-password">Potvrzení hesla</label>
            <input type="password" id="register-confirm-password" placeholder="Potvrďte heslo" required>

            <button type="submit">Registrovat se</button>
            <p>Máte již účet? <a href="#" id="show-login">Přihlaste se</a></p>
        </form>
    </div>
</div>
<script src="../js/script.js"></script>
</body>
</html>
