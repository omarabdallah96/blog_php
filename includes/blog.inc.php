
<?php
require('includes/DB.inc.php');
class Blog extends DB
{
    public function read_blog()
    {
        $con =$this->connect();
        $sth = $con->prepare("SELECT * FROM blog");
        $sth->execute();


        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $result;
           
        }
    
    public function create_blog($title, $content, $overview ) {
        try {
            $con = $this->connect();
            $stmt = $con->prepare("INSERT INTO blogs(title, content, overview) VALUES(:title, :content, :overview )");
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":content", $content);
            $stmt->bindParam(":overview", $overview);
            $stmt->execute();
            return true;
        } catch(PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    
}
     
       
    




?>