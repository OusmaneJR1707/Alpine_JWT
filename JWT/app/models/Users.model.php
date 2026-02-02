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
        $query = "SELECT E.id, E.first_name, E.last_name, E.status, A.email, D.department_name FROM employees E JOIN user_accounts A ON A.employee_id = E.id JOIN departments D ON E.department_id = D.id";
        $this->db->query($query);

        $result = $this->db->resultObj();

        return $result ?? [];
    }

    public function getUserById($id)
    {
        $query = "SELECT 
                    E.first_name, 
                    E.last_name, 
                    E.status, 
                    A.email, 
                    D.department_name 
                FROM employees E 
                JOIN user_accounts A ON A.employee_id = E.id 
                JOIN departments D ON E.department_id = D.id 
                WHERE E.id = :id";

        $this->db->query($query);
        $this->db->bind(":id", $id);

        $result = $this->db->singleResult();

        if (!$result) {
            return false;
        }

        return $result;
    }

    public function getUserAttendance($id)
    {
        $query = "SELECT A.id, A.start_datetime, A.end_datetime 
                  FROM attendances A 
                  WHERE A.employee_id = :employee_id 
                  ORDER BY A.start_datetime DESC LIMIT 1";

        $this->db->query($query);

        $this->db->bind(":employee_id", $id);

        $result = $this->db->singleResult();

        if (!$result) {
            return false;
        }

        return $result;
    }

    public function createClockin($id, $shift_id = 1){
        $query = "INSERT INTO attendances (employee_id, shift_id, start_datetime) VALUES (:id, :shift_id, NOW())";

        $this->db->query($query);
        $this->db->bind(":id", $id);
        $this->db->bind(":shift_id", $shift_id);

       $result = $this->db->execute();

        if (!$result) {
            return false;
        }

        return $result;
    }

    public function setClockout($id){
        $query = "UPDATE attendances SET end_datetime = NOW() WHERE id = :id";

        $this->db->query($query);
        $this->db->bind(":id", $id);

        $result = $this->db->execute();

        if (!$result) {
            return false;
        }

        return $result;
    }
}