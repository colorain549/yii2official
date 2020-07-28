<?php
// 新建 数据 表
$dbms = "mysql";
$host = "localhost";
// TODO
$dbname = "yii2basic";
$dsn = "$dbms:host=$host;dbname=$dbname";
$user = "root";
$pass = "";
// TODO
$tbname = "country";
 
try {
    $conn = new PDO($dsn, $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // 开始事务
    $conn->beginTransaction();
    // SQL 语句
    $conn->exec("INSERT INTO $tbname (code, name, population) 
    VALUES ('AU', 'Australia', 18886000)");
    $conn->exec("INSERT INTO $tbname (code, name, population) 
    VALUES ('BR', 'Brazil', 170115000)");
    $conn->exec("INSERT INTO $tbname (code, name, population) 
    VALUES ('CA', 'Canada', 1147000)");
    $conn->exec("INSERT INTO $tbname (code, name, population) 
    VALUES ('CN', 'China', 1277558000)");
    $conn->exec("INSERT INTO $tbname (code, name, population) 
    VALUES ('DE', 'Germany', 82164700)");
    $conn->exec("INSERT INTO $tbname (code, name, population) 
    VALUES ('FR', 'France', 59225700)");
 
    // 提交事务
    $conn->commit();
    echo "新记录插入成功";
}
catch(PDOException $e)
{
    // 如果执行失败回滚
    $conn->rollback();
    echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
?>