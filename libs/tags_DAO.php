<?php

class tags_DAO
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function tag_list()
    {
        $sql = "select * from tags order by name";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $tags = $stmt->fetchAll();
        return $tags;
    }

    public function tag_add($new_tag)
    {
        $sql = "insert into tags (created_at,name) values (NOW(),:name)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":name", $new_tag, PDO::PARAM_STR);
        $stmt->execute();
        $tag_id_no = $this->pdo->lastInsertId();
        return $tag_id_no;
    }

    public function get_mytag($tag_id)
    {
        $sql = "select t_tags.tag_id, tags.name from template_tags as t_tags 
                    left join tags 
                on t_tags.tag_id = tags.id 
                    where t_tags.template_id = :tag_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":tag_id", $tag_id, PDO::PARAM_INT);
        $stmt->execute();
        $my_tags = $stmt->fetchAll();
        return $my_tags;
    }

    public function template_tags_add($template_id_no, $tag_id_no)
    {
        $sql = "insert into template_tags (template_id,tag_id) values (:template_id,:tag_id)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":template_id", $template_id_no, PDO::PARAM_INT);
        $stmt->bindValue(":tag_id", $tag_id_no, PDO::PARAM_INT);
        $stmt->execute();
    }
}