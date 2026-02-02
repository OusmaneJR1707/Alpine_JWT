<?php
session_start();
class Dashboard extends Controller
{
    private $db_conn;

    private $userModel;
    public function __construct()
    {
        $this->db_conn = new Database();
        $this->userModel = $this->model("Users", $this->db_conn);
    }

    public function index()
    {
        if (isset($_COOKIE["jwt_token"])) { //Se c'è il token del JWT
            //richiesta curl per validarlo
            //Se non è valido desetto il cookie
            //Se è valido Lo mando alla dashboard
            if (!$this->validateJWT()) {
                header("Location: " . URLROOT . "/auth/login");
                exit();
            }
        }

        if (isset($_COOKIE["refresh_token"])) { //Se c'è il cookie del refresh token
            if (!$this->refreshToken()) {
                header("Location: " . URLROOT . "/auth/login");
                exit();
            }
        } else{
            header("Location: " . URLROOT . "/auth/login");
            exit();
        }


        //Mostra la dashboard
        $idRole = $_SESSION['role'] ?? null;

        if ($idRole === null) {
            echo "Ruolo non definito.";
            exit();
        }

        if ($idRole === 3) { //dashboard admin
            header("Location: " . URLROOT . "/dashboard/admin");
            exit();
        }

        header("Location: " . URLROOT . "/dashboard/user");
    }

    public function admin()
    {
        if (($_SESSION['role'] ?? null) !== 3) {
            header("Location: " . URLROOT . "/dashboard");
            exit();
        }

        $utenti = $this->userModel->getAllUsers();
        $datiUtente = $this->userModel->getUserById($_SESSION["user_id"]);

        $data = [
            "utenti" => $utenti, 
            "datiUtente" => $datiUtente
        ];
        
        $this->view("dashboard/admin", $data);
    }

    private function validateJWT()
    {
        // Funzione di validazione del token JWT (da implementare se necessario)
        $apiUrl = APIURLROOT . "/auth/validate";
        $jwtToken = $_COOKIE["jwt_token"];
        $headers = [
            "Content-Type: application/json",
            "Authorization: Bearer " . $jwtToken
        ];

        $ch = curl_init($apiUrl);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Ritrona una stringa non stampare a video
        curl_setopt($ch, CURLOPT_HEADER, false);        // Non includere gli header nella risposta

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); //Imposta gli headers

        // Esecuzione
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Codice HTTP (200, 401, 500...)
        $curlError = curl_error($ch); // Eventuali errori di connessione
        curl_close($ch);

        $result = json_decode($response, true);

        if ($curlError) {
            return false;
        }

        // CASO DI ERRORE DI AUTENTICAZIONE (401 Unauthorized o 403 Forbidden)
        if ($httpCode === 401 || $httpCode === 403) {

            // --- LOGICA DI CANCELLAZIONE COOKIE ---
            // Importante: Path e Domain devono essere identici a quelli usati nella creazione!
            setcookie(
                "jwt_token",         // 'refresh_token'
                '',                  // Valore vuoto
                [
                    'expires' => time() - 3600,      // Scadenza nel passato (CANCELLA SUBITO)
                    'path' => '/ALPINE_JWT/',           // <--- FONDAMENTALE: Lo stesso path della creazione
                    'domain' => '',                  // Lo stesso dominio
                    'secure' => false,               // false in localhost
                    'httponly' => true,
                    'samesite' => 'Strict'
                ]
            );
            return false;

        } elseif ($httpCode === 200) {
            // CASO SUCCESSO rimando alla dashboard 
            return true;

        } else {
            // Altri errori (es. 500 o 400)
            return false;
        }
    }

    private function refreshToken()
    {
        // Funzione di refresh del token JWT (da implementare se necessario)
        $apiUrl = APIURLROOT . "/auth/refresh";

        $cookieName = 'refresh_token';
        $refreshToken = $_COOKIE[$cookieName] ?? '';

        $cookieString = "$cookieName=$refreshToken";

        $ch = curl_init($apiUrl);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Ritorna una stringa non stampare a video
        curl_setopt($ch, CURLOPT_HEADER, false);        // Non includere gli header nella risposta

        // Imposta il cookie nell'intestazione della richiesta
        if (!empty($refreshToken)) {
            curl_setopt($ch, CURLOPT_COOKIE, $cookieString);
        }
        // Esecuzione
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Codice HTTP (200, 401, 500...)
        $curlError = curl_error($ch); // Eventuali errori di connessione
        curl_close($ch);

        $result = json_decode($response, true);

        if ($curlError) {
            die("Errore di connessione all'API: " . $curlError);
        }

        // CASO DI ERRORE DI AUTENTICAZIONE (401 Unauthorized o 403 Forbidden)
        if ($httpCode === 401 || $httpCode === 403) {

            // --- LOGICA DI CANCELLAZIONE COOKIE ---
            // Importante: Path e Domain devono essere identici a quelli usati nella creazione!
            setcookie(
                "jwt_token",         // 'refresh_token'
                '',                  // Valore vuoto
                [
                    'expires' => time() - 3600,      // Scadenza nel passato (CANCELLA SUBITO)
                    'path' => '/ALPINE_JWT/',           // <--- FONDAMENTALE: Lo stesso path della creazione
                    'domain' => '',                  // Lo stesso dominio
                    'secure' => false,               // false in localhost
                    'httponly' => true,
                    'samesite' => 'Strict'
                ]
            );
            return false;

        } elseif ($httpCode === 200) {
            // Imposta il cookie JWT
            setcookie(
                "jwt_token",
                $result["token"],
                [
                    'expires' => time() + 600,
                    'path' => '/ALPINE_JWT/',
                    'domain' => '',
                    'secure' => false,
                    'httponly' => true,
                    'samesite' => 'Strict'
                ]
            );
            $_SESSION["role"] = $result["role"];
            // CASO SUCCESSO rimando alla dashboard
            return true;
        } else {
            // Altri errori (es. 500 o 400)
            return false;
        }
    }
}

