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

// --- SICUREZZA E CRITTOGRAFIA ---
// IMPORTANTE: Genera stringhe casuali lunghe e uniche per la produzione!
// Non usare mai questi valori di esempio in un sito live.
// Deve essere ugualea a quello nella cartella API
define('JWT_KEY', 'cambiami_con_una_stringa_segreta_molto_lunga_e_casuale');

// Pepper per l'hashing (Aggiunge entropia alle password)
define('PEPPER', 'cambiami_con_un_valore_segreto_unico');