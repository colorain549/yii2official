<?php
// 新建 数据 库
$dbms = "mysql";
$host = "localhost";
// TODO
$dbname = "yii2basic";
$dsn = "$dbms:host=$host";
$user = "root";
$pass = "";
$tbname = "country";

try {
    $dbh = new PDO($dsn, $user, $pass);
    $sql = "CREATE DATABASE $dbname";
    $dbh->exec($sql);
    $dbh = null;
    echo "数据 库 创建 成功!!";
} catch (PDOException $e) {
    print "Error: ".$e->getMessage()."<br />";
    die();
}
?>