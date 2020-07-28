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
    $dbh = new PDO($dsn, $user, $pass);
    $sql = "CREATE TABLE $tbname(
        code CHAR(2) NOT NULL PRIMARY KEY,
        name CHAR(52) NOT NULL,
        population INT(11) NOT NULL DEFAULT '0'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $dbh->exec($sql);
    $dbh = null;
    echo "数据 表 创建 成功!!";
} catch (PDOExcetion $e) {
    print "Error: ".$e->getMessage()."<br />";
    die();
}
?>