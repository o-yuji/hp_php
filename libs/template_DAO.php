<?php

class template_DAO
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function template_lists()
    {
        $sql = "select * from template";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $all_template = $stmt->fetchAll();
        return $all_template;
    }

    public function get_template($id)
    {
        $sql = "select * from template where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        $detail = $stmt->fetch();
        return $detail;
    }

    public function add_template($name,$mail_to,$mail_cc,$mail_bcc,$title,$content,$memo)
    {
        $sql = "INSERT INTO  template
                    (created_at,name,mail_to,mail_cc,mail_bcc,title,content,memo)
                VALUES
                    (NOW(),:name,:mail_to,:mail_cc,:mail_bcc,:title,:content,:memo)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":name",$name,PDO::PARAM_STR);
        $stmt->bindValue(":mail_to",$mail_to,PDO::PARAM_STR);
        $stmt->bindValue(":mail_cc",$mail_cc,PDO::PARAM_STR);
        $stmt->bindValue(":mail_bcc",$mail_bcc,PDO::PARAM_STR);
        $stmt->bindValue(":title",$title,PDO::PARAM_STR);
        $stmt->bindValue(":content",$content,PDO::PARAM_STR);
        $stmt->bindValue(":memo",$memo,PDO::PARAM_STR);
        $stmt->execute();
        $template_id_no = $this->pdo->lastInsertId();
        return $template_id_no;
    }

}