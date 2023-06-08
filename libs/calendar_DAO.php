<?php

class calendar_DAO
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function add_calendar($title,$start_day,$end_day,$name,$content)
    {
        $sql = "insert into calendar
                (update_at,start_day,end_day,name,title,content)
                values
                (NOW(),:start_day,:end_day,:name,:title,:content)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":start_day",$start_day,PDO::PARAM_STR);
        $stmt->bindValue(":end_day",$end_day,PDO::PARAM_STR);
        $stmt->bindValue(":name",$name,PDO::PARAM_STR);
        $stmt->bindValue(":title",$title,PDO::PARAM_STR);
        $stmt->bindValue(":content",$content,PDO::PARAM_STR);
        $stmt->execute();
    }

    public function edit_calendar($title,$start_day,$end_day,$name,$content,$id)
    {
        $sql = "update calendar set 
                update_at = NOW(),
                start_day = :start_day,
                end_day = :end_day,
                name = :name,
                title = :title,
                content = :content
                where id=:id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":start_day",$start_day,PDO::PARAM_STR);
        $stmt->bindValue(":end_day",$end_day,PDO::PARAM_STR);
        $stmt->bindValue(":name",$name,PDO::PARAM_STR);
        $stmt->bindValue(":title",$title,PDO::PARAM_STR);
        $stmt->bindValue(":content",$content,PDO::PARAM_STR);
        $stmt->bindValue(":id",$id,PDO::PARAM_STR);
        $stmt->execute();
    }
    
    public function search_calendar($start_day,$name)
    {
        $sql = "select * from calendar where start_day = :start_day and name = :name order by update_at desc";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':start_day',$start_day,PDO::PARAM_STR);
        $stmt->bindValue(':name',$name,PDO::PARAM_STR);
        $stmt->execute();
        $contents_list = $stmt->fetchAll();
        return $contents_list;
    }

    public function search_one($id)
    {
        $sql = "select * from calendar where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id',$id,PDO::PARAM_STR);
        $stmt->execute();
        $content = $stmt->fetch();
        return $content;
    }

    public function get_cal_count($day,$name)
    {
        $sql = "select * from calendar where start_day = :start_day and name = :name";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":start_day",$day,PDO::PARAM_STR);
        $stmt->bindValue(":name",$name,PDO::PARAM_STR);
        $stmt->execute();
        $cnt = $stmt->rowCount();
        return $cnt;
    }

    public function del_cal($id)
    {
        $sql = "delete from calendar where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }
}




?>