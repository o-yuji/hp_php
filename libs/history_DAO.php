<?php

class history_DAO
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function get_history()
    {
        $sql ="select * from update_memo order by updated_at desc";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $historyies = $stmt->fetchAll();
        return $historyies;
    }

    public function get_count()
    {
        $sql = "select * from update_memo";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $cnt = $stmt->rowCount();
        return $cnt;
    }

    public function insert_history($name,$info)
    {
        $sql = "insert into update_memo (updated_at,name,info) values (NOW(),:name,:info)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":name",$name,PDO::PARAM_STR);
        $stmt->bindValue(":info",$info,PDO::PARAM_STR);
        $stmt->execute();
    }

    public function delete_history($id)
    {
        $sql = "delete from update_memo where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
    }
}