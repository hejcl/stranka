<?php
// Připojení k MySQL serveru
$servername = "localhost";  // nebo IP adresa serveru
$username = "root";         // uživatelské jméno
$password = "";             // heslo (nechte prázdné, pokud není nastaveno)

try {
    // Vytvoření připojení
    $conn = new mysqli($servername, $username, $password);

    // Kontrola připojení
    if ($conn->connect_error) {
        die("Připojení selhalo: " . $conn->connect_error);
    }

    // SQL příkaz pro vytvoření databáze
    $sql = "CREATE DATABASE moje_databaze";

    // Provádění příkazu
    if ($conn->query($sql) === TRUE) {
        echo "Databáze byla úspěšně vytvořena!";
    } else {
        echo "Chyba při vytváření databáze: " . $conn->error;
    }

    // Zavření připojení
    $conn->close();

} catch (Exception $e) {
    echo "Chyba: " . $e->getMessage();
}
?>

