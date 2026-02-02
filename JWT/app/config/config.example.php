<?php
/**
 * ESEMPIO DI CONFIGURAZIONE
 *
 * Istruzioni:
 * 1. Copia questo file e rinominalo in 'config.php' (o come si chiama il tuo file reale)
 * 2. Modifica i valori con i tuoi dati locali e le tue chiavi segrete
 * 3. Assicurati che il file rinominato sia nel .gitignore
 */

// --- CONFIGURAZIONE DATABASE ---
define('DB_HOST', 'localhost');
define('DB_NAME', 'inserisci_nome_db'); // Esempio: 'ANH-here_prod'
define('DB_USER', 'root');
define('DB_PASS', ''); // Su XAMPP è vuota, su MAMP è 'root'

// --- PATH E CARTELLE ---
// Root dell'applicazione (Logica dinamica, non serve cambiare)
define('APPROOT', dirname(dirname(__FILE__)));

// Root dell'URL (Modifica in base alla cartella dove installi il progetto)
define('URLROOT', 'http://localhost/TUO_PROGETTO/JWT');
define('APIURLROOT', 'http://localhost/TUO_PROGETTO/API');

// --- INFO SITO ---
define('SITENAME', 'API');

// --- SICUREZZA E CRITTOGRAFIA ---
// IMPORTANTE: Genera stringhe casuali lunghe e uniche per la produzione!
// Non usare mai questi valori di esempio in un sito live.
// Deve essere ugualea a quello nella cartella API
define('JWT_KEY', 'cambiami_con_una_stringa_segreta_molto_lunga_e_casuale');

// Pepper per l'hashing (Aggiunge entropia alle password)
define('PEPPER', 'cambiami_con_un_valore_segreto_unico');