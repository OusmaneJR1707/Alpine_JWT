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
        $this->view("dashboard/admin", $utenti);
    }
}