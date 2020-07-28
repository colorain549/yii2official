<?php
namespace models;
class Article 
{
    public function find()
    {
        $dbms = 'mysql';
        $host = 'localhost';
        $dbname = "cai_bfishcms_cn";
        $dsn = "$dbms:host=$host;dbname=$dbname";
        $user = 'cai_bfishcms_cn';
        $pass = 'R3yaEHHDb5YYSGWn';
        $tbname = 'country';
        // 
        $dbh = new \PDO($dsn, $user, $pass);
        $dbh->exec("set names 'utf8'");
        $query = "SELECT name FROM $tbname";
        try {
            // 执行 SELECT 查询，并返回 PDOstatement 对象
            $pdostatement = $dbh->query($query);
            return $result=$pdostatement->fetchAll();
        } catch (\PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>