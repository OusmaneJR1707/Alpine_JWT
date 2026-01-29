<?php

class Users
{
    private $db;
    public function __construct($db_conn)
    {
        $this->db = $db_conn;
    }
    public function getAllUsers()
    {
        $query = "SELECT E.first_name, E.last_name, E.status, A.email, D.department_name FROM employees E JOIN user_accounts A ON A.employee_id = E.id JOIN departments D ON E.department_id = D.id";
        $this->db->query($query);

        $result = $this->db->resultObj();

        return $result ?? [];
    }
    public function getUserById($id)
    {
        $query = "SELECT A.start_datetime, A.end_datetime FROM attendances A WHERE A.employee_id = :employee_id";

        $this->db->query($query);

        $this->db->bind(":employee_id", $id);

        $result = $this->db->singleResult();

        if (!$result) {
            return false;
        }

        return $result;
    }
}