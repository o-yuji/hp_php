<?php

class menu_DAO
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function menu01_view()
    {
        $sql = "select menu_name from menu01 where YesNo = 1 order by id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $menu01s = $stmt->fetchAll();
        return $menu01s;
    }

    public function menu02_view()
    {
        $sql = "select menu_name from menu02 where YesNo = 1 order by id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $menu02s = $stmt->fetchAll();
        return $menu02s;
    }

    public function menu03_view()
    {
        $sql = "select menu_name from menu03 where YesNo = 1 order by id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $menu03s = $stmt->fetchAll();
        return $menu03s;
    }
}


?>