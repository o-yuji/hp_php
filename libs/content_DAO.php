<?php

class content_DAO
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function add_content($category,$title,$name,$content)
    {
        $sql = "insert into main_content 
                (created_at,updated_at,category,title,add_name,update_name,content) 
                values 
                (NOW(),NOW(),:category,:title,:add_name,:update_name,:content)";
                
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindvalue(":category",$category,PDO::PARAM_STR);
        $stmt->bindvalue(":title",$title,PDO::PARAM_STR);
        $stmt->bindvalue(":add_name",$name,PDO::PARAM_STR);
        $stmt->bindvalue(":update_name",$name,PDO::PARAM_STR);
        $stmt->bindvalue(":content",$content,PDO::PARAM_STR);
        $stmt->execute();
    }

    public function all_content()
    {
        $sql = "select * from main_content order by updated_at desc";
        $stmt = $this->pdo->query($sql);
        $stmt->execute();
        $all_content = $stmt->fetchAll();
        return $all_content;        
    }

    public function select_content($category)
    {
        $sql = "select * from main_content where category = :category order by updated_at desc";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":category",$category,PDO::PARAM_STR);
        $stmt->execute();
        $select_content = $stmt->fetchAll();
        return $select_content;        
    }

    public function search_content($id)
    {
        $sql = "select * from main_content where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        $content = $stmt->fetch();
        return $content;
    }

    public function delete_content($id)
    {
        $sql="delete from main_content where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
    }
    
    public function update_content($category,$title,$name,$content,$id)
    {
        $sql="update main_content set updated_at=NOW(),category=:category,title=:title,update_name=:name,content=:content where id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":category",$category,PDO::PARAM_STR);
        $stmt->bindValue(":title",$title,PDO::PARAM_STR);
        $stmt->bindValue(":name",$name,PDO::PARAM_STR);
        $stmt->bindValue(":content",$content,PDO::PARAM_STR);
        $stmt->bindValue(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
    }

    public function get_content_count()
    {
        $sql = "select * from main_content";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $count = $stmt->rowCount();
        return $count;
    }
}


?>