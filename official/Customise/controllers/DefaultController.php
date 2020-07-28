<?php
namespace controllers;

// use 只是使用了命名空间，但是想要调用类，必须要加载类文件
// 导入框架文件
require '../vendor/Controller.php';
// 导入文章表模型类文件
require '../models/Article.php';

use framework\Controller;
use models\Article;

class DefaultController extends Controller
{
    // 首页管理
    public function actionIndex()
    {
        // 创建模版模型
        $article = new Article();
        // 获得数据
        $result = $article->find();
        // 渲染视图，并把数据输出到视图页面
        return $this->render("../views/index.php", ["result"=>$result]);
    }
    // 列表页管理
    // public function actionList();
    // 内容页管理
    // public function actionArticle(); 
}
$default_con = new DefaultController();
$default_con = new actionIndex();
?>