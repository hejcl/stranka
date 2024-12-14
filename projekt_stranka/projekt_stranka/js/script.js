function checkPlayer() {
    // Získání vstupu od uživatele
    const input = document.getElementById('player-input').value.trim();
    const players = document.querySelectorAll('.player');
    let found = false;

    // Prohledání všech buněk hráčů
    players.forEach(playerCell => {
        const playerName = playerCell.getAttribute('data-name');

        // Porovnání zadaného jména s názvem hráče
        if (input.toLowerCase() === playerName.toLowerCase()) {
            playerCell.textContent = playerName; // Doplní jméno do buňky
            playerCell.style.color = 'green'; // Nastaví zelenou barvu pro správnou odpověď
            found = true;
        }
    });

    // Zpráva při špatném zadání
    if (!found) {
        alert('Tento hráč není v tabulce.');
    }

    // Vymazání vstupního pole
    document.getElementById('player-input').value = '';
}

// Předchozí kód pro přepínání mezi přihlášením a registrací zůstává beze změny

// Nový event listener pro stisknutí klávesy Enter
const playerInputField = document.getElementById('player-input');

if (playerInputField) {
    playerInputField.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {  // Pokud stiskneme Enter
            e.preventDefault();    // Zamezíme výchozímu chování (např. odeslání formuláře)
            checkPlayer();         // Zavoláme funkci checkPlayer
        }
    });
}

// Zbytek kódu (registrace, přihlášení, vyhledávání) zůstává beze změny


// Přepínání mezi přihlášením a registrací
const loginForm = document.getElementById('login-form');
const registerForm = document.getElementById('register-form');
const showRegister = document.getElementById('show-register');
const showLogin = document.getElementById('show-login');

showRegister.addEventListener('click', (e) => {
    e.preventDefault();
    loginForm.classList.remove('active');
    registerForm.classList.add('active');
});

showLogin.addEventListener('click', (e) => {
    e.preventDefault();
    registerForm.classList.remove('active');
    loginForm.classList.add('active');
});

loginForm.classList.add('active');

// Simulace databáze pomocí localStorage
const usersKey = "users"; // Klíč pro ukládání uživatelů

// Registrace nového uživatele
registerForm.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault();

    const username = document.getElementById('register-username').value;
    const email = document.getElementById('register-email').value;
    const password = document.getElementById('register-password').value;
    const confirmPassword = document.getElementById('register-confirm-password').value;

    if (password !== confirmPassword) {
        alert("Hesla se neshodují. Zkuste to znovu.");
        return;
    }

    // Načíst existující uživatele
    const users = JSON.parse(localStorage.getItem(usersKey)) || [];
    const userExists = users.some((user) => user.username === username);

    if (userExists) {
        alert("Uživatel s tímto jménem již existuje.");
        return;
    }

    // Uložit nového uživatele
    users.push({ username, email, password });
    localStorage.setItem(usersKey, JSON.stringify(users));

    alert("Registrace byla úspěšná! Nyní se můžete přihlásit.");
    showLogin.click(); // Přepne zpět na přihlašovací formulář
});

// Přihlášení uživatele
loginForm.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault();

    const username = document.getElementById('login-username').value;
    const password = document.getElementById('login-password').value;

    // Načíst existující uživatele
    const users = JSON.parse(localStorage.getItem(usersKey)) || [];
    const validUser = users.find((user) => user.username === username && user.password === password);

    if (validUser) {
        alert(`Vítejte, ${username}!`);
        window.location.href = "index.html"; // Přesměrování na hlavní stránku
    } else {
        alert("Nesprávné uživatelské jméno nebo heslo. Nejprve se zaregistrujte.");
    }
});



// Funkce pro zobrazení/vypnutí vyhledávacího pole
function toggleSearch() {
    const searchBar = document.querySelector('.search-bar');
    searchBar.style.display = searchBar.style.display === 'none' ? 'block' : 'none';
}

// Funkce pro zvýraznění hledaného textu
function highlightText() {
    const input = document.getElementById('search-input').value.toLowerCase();

    // Nejprve odstraníme předchozí zvýraznění
    removeHighlight();

    // Pokud je nějaký text v poli, provede se vyhledávání
    if (input.trim() !== "") {
        const regex = new RegExp(input, 'gi'); // 'g' pro všechny shody, 'i' pro ignorování velkých a malých písmen

        // Procházíme všechny textové uzly
        document.body.querySelectorAll('*').forEach(element => {
            // Ignorujeme některé elementy jako jsou skripty, obrázky apod.
            if (element.children.length === 0 && element.textContent.trim() !== '') {
                const text = element.textContent;
                if (text.match(regex)) {
                    const newHtml = text.replace(regex, match => `<span class="highlight">${match}</span>`);
                    element.innerHTML = newHtml;
                }
            }
        });
    }
}

// Funkce pro odstranění předchozího zvýraznění
function removeHighlight() {
    const highlightedElements = document.querySelectorAll('.highlight');
    highlightedElements.forEach(el => {
        const parent = el.parentNode;
        parent.replaceChild(document.createTextNode(el.textContent), el);
    });
}
