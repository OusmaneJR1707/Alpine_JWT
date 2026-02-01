<?php
session_start();
class Auth extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        if (isset($_COOKIE["jwt_token"])) { //Se c'è il token del JWT
            //richiesta curl per validarlo
            //Se non è valido desetto il cookie
            //Se è valido Lo mando alla dashboard
            if ($this->validateJWT()) {
                header("Location: " . URLROOT . "/dashboard");
                exit();
            }
        }



        if (isset($_COOKIE["refresh_token"])) { //Se c'è il cookie del refresh token
            //richiesta curl per validarlo
            //Se è scaduto resetto il cookie o non valido
            //SE è valido Lo mando alla dashboard
            //Setto il cookie jwt_token
            if ($this->refreshToken()) {
                header("Location: " . URLROOT . "/dashboard");
                exit();
            }
        }

        $this->view("auth/login");

    }
    public function login()
    {
        if (isset($_COOKIE["jwt_token"])) { //Se c'è il token del JWT
            if ($this->validateJWT()) {
                header("Location: " . URLROOT . "/dashboard");
                exit();
            }
        }
        if (isset($_COOKIE["refresh_token"])) { //Se c'è il cookie del refresh token
            if ($this->refreshToken()) {
                header("Location: " . URLROOT . "/dashboard");
                exit();
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            $apiUrl = APIURLROOT . "/auth/login";

            $data = [
                "email" => $email,
                "password" => $password
            ];

            $ch = curl_init($apiUrl);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

            // Esecuzione
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Codice HTTP (200, 401, 500...)
            $curlError = curl_error($ch); // Eventuali errori di connessione
            curl_close($ch);

            $result = json_decode($response, true);

            if ($curlError) {
                die("Errore di connessione all'API: " . $curlError);
            }

            if ($httpCode === 200) {
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
                $_SESSION["user_id"] = $result["user_id"];

                setcookie(
                    "refresh_token",
                    $result["refresh_token"],
                    [
                        'expires' => time() + 86400,
                        'path' => '/ALPINE_JWT/',
                        'domain' => '',
                        'secure' => false,
                        'httponly' => true,
                        'samesite' => 'Strict'
                    ]
                );

                // Reindirizza alla dashboard
                header("Location: " . URLROOT . "/dashboard");
                exit();
            } else {
                $errorMessage = $result["message"] ?? "Errore di autenticazione.";
                $_SESSION['error'] = $errorMessage;
                $this->view("auth/login");
                return;
            }
        }
        $this->view("auth/login");
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

        $cookieName = 'refresh_token';

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