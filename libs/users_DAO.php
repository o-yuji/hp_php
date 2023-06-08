<?php

class UserDAO
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function get_list()
    {
        $sql = "select * from user_name;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
    }

}