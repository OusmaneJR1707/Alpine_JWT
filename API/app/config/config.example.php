<?php
/**
 * TEMPLATE DI CONFIGURAZIONE
 *
 * Istruzioni:
 * 1. Copia questo file
 * 2. Rinominalo in 'config.php' (o il nome del tuo file di config reale)
 * 3. Modifica i valori con i tuoi dati locali
 */

// --- DATABASE ---
define('DB_HOST', 'localhost');
define('DB_NAME', 'nome_del_tuo_db'); // Es: 'ANH-here_prod'
define('DB_USER', 'root');
define('DB_PASS', ''); // Lascia vuoto per XAMPP, 'root' per MAMP

// --- PATHS ---
// Root dell'applicazione (Dinamica: non serve modificarla)
define('APPROOT', dirname(dirname(__FILE__)));

// Root dell'URL (Modifica in base alla cartella del tuo progetto)
// Esempio: http://localhost/MIO_PROGETTO/API
define('URLROOT', 'http://localhost/PERCORSO_PROGETTO');

// --- INFO SITO ---
define('SITENAME', 'API');

// --- SICUREZZA (IMPORTANTE) ---
// Sostituisci queste stringhe con valori casuali, lunghi e unici!

// Chiave segreta per firmare i token JWT
define('JWT_KEY', 'inserisci_qui_una_stringa_casuale_molto_lunga');

// Pepper per l'hashing delle password
define('PEPPER', 'inserisci_qui_un_valore_segreto_unico');