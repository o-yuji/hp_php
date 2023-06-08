<?php

class task_DAO
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function task_add($category,$name,$title,$status,$content)
    {
        $sql = "insert into task
                    (created_at,updated_at,category,name,title,status,content)
                values 
                    (NOW(),NOW(),:category,:name,:title,:status,:content)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":category","$category",PDO::PARAM_STR);
        $stmt->bindValue(":name","$name",PDO::PARAM_STR);
        $stmt->bindValue(":title","$title",PDO::PARAM_STR);
        $stmt->bindValue(":status","$status",PDO::PARAM_STR);
        $stmt->bindValue(":content","$content",PDO::PARAM_STR);
        $stmt->execute();        
    }

    public function task_edit($id,$category,$title,$status,$hidden,$content)
    {
        $sql = "update task set
                    updated_at=NOW(),category=:category,title=:title,status=:status,hidden=:hidden,content=:content where id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":category",$category,PDO::PARAM_STR);
        $stmt->bindValue(":title",$title,PDO::PARAM_STR);
        $stmt->bindValue(":status",$status,PDO::PARAM_STR);
        $stmt->bindValue(":hidden",$hidden,PDO::PARAM_INT);
        $stmt->bindValue(":content",$content,PDO::PARAM_STR);
        $stmt->bindValue(':id',$id,PDO::PARAM_INT);
        $stmt->execute();        
    }

    public function get_task_no($id)
    {
        $sql = "select * from task where id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        $content = $stmt->fetch();
        return $content;
    }

    public function task_today($name)
    {
        $sql ="select * from task where category = 'today' and name = :name and hidden = 0 order by status, updated_at desc";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name',$name,PDO::PARAM_STR);
        $stmt->execute();
        $today_tasks = $stmt->fetchAll();
        return $today_tasks;
    }

    public function task_every($name)
    {
        $sql ="select * from task where category = 'every' and name = :name and hidden = 0 order by status, updated_at desc";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name',$name,PDO::PARAM_STR);
        $stmt->execute();
        $every_tasks = $stmt->fetchAll();
        return $every_tasks;
    }

    public function task_end($name)
    {
        $sql ="select * from task where hidden = 1 and name = :name order by status, updated_at desc LIMIT 30";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name',$name,PDO::PARAM_STR);
        $stmt->execute();
        $end_tasks = $stmt->fetchAll();
        return $end_tasks;
    }

    public function task_update($action,$id,$status)
    {
        if($action == "update"):
            switch($status) {
                case "未":
                    $sql = "update task set updated_at=NOW(), status = '中' where id = :id";
                    $stmt = $this->pdo->prepare($sql);
                    $stmt->bindValue(':id',$id,PDO::PARAM_INT);
                    $stmt->execute();
                    break;
                case "中":
                    $sql = "update task set updated_at=NOW(), status = '済' where id = :id";
                    $stmt = $this->pdo->prepare($sql);
                    $stmt->bindValue(':id',$id,PDO::PARAM_INT);
                    $stmt->execute();
                    break;
                case "済":
                    break;
            }
            header('Location: todo_list.php');
        endif;

        if($action == "back"):
            switch($status) {
                case "未":
                    break;
                case "中":
                    $sql = "update task set updated_at=NOW(), status = '未' where id = :id";
                    $stmt = $this->pdo->prepare($sql);
                    $stmt->bindValue(':id',$id,PDO::PARAM_INT);
                    $stmt->execute();
                    break;
                case "済":
                    $sql = "update task set updated_at=NOW(), status = '中' where id = :id";
                    $stmt = $this->pdo->prepare($sql);
                    $stmt->bindValue(':id',$id,PDO::PARAM_INT);
                    $stmt->execute();
                    break;
            }
            header('Location: todo_list.php');
        endif;
        if($action == "del"):
            switch($status){
                case "未":
                    break;
                case "中":
                    break;
                case "済":
                    $sql = "update task set hidden = 1 where id = :id";
                    $stmt = $this->pdo->prepare($sql);
                    $stmt->bindValue(':id',$id,PDO::PARAM_INT);
                    $stmt->execute();
                    header('Location: todo_list.php');
                break;
            }
        endif;   
    }//task_update

    public function get_task_count()
    {
        $sql = "select * from task";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $cnt = $stmt->rowCount();
        return $cnt;
    }

    public function task_delete($id)
    {
        $sql = "delete from task where id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }
}



?>