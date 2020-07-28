# SiteControllerHello

## 第一次问候(Saying Hello)
* [中文文档](https://www.yiiframework.com/doc/guide/2.0/zh-cn/start-hello)

## 访问
* 需先将SiteControllerHello.php 改为 SiteController.php
* [http://hostname/index.php?r=site/say&message=Hello+World](http://cai.bfishcms.cn/web/index.php?r=site/say&message=Hello+World)  

## 创建动作（controllers/SiteController.php）
* 为了 “Hello”，需要创建一个 say 操作， 从请求中接收 message 参数并显示给最终用户。 如果请求没有提供 message 参数，操作将显示默认参数 “Hello”。  

* 创建操作可简单地在控制器类中定义所谓的 操作方法 来完成，操作方法必须是以action开头的公有方法。 操作方法的返回值会作为响应数据发送给终端用户  

* 操作必须声明在控制器中。为了简单起见， 你可以直接在 SiteController 控制器里声明 say 操作。 这个控制器是由文件 controllers/SiteController.php 定义的。

## 创建视图（views/site/say.php）
* 当一个操作中调用了 render() 方法时， 它将会按 views/控制器 ID/视图名.php 路径加载 PHP 文件。

* 安全: 参数在输出之前需被 HTML-encoded 方法处理过。

## URL省略参数
* [http://hostname/index.php?r=site/say](http://cai.bfishcms.cn/web/index.php?r=site/say)  

* 上面 URL 中的参数 r 需要更多解释。 它代表路由，是整个应用级的， 指向特定操作的独立 ID。路由格式是 控制器 ID/操作 ID。  

* 应用接受请求的时候会检查参数， 使用控制器 ID 去确定哪个控制器应该被用来处理请求。 然后相应控制器将使用操作 ID 去确定哪个操作方法将被用来做具体工作。

* 路由 site/say 将被解析至 SiteController 控制器和其中的 say 操作。 因此 SiteController::actionSay() 方法将被调用处理请求。

## 重点--创建动作（controllers/SiteController.php）

* Yii 使用 action 前缀区分普通方法和操作。 action 前缀后面的名称被映射为操作的 ID。  

* 操作 ID 总是被以小写处理，如果一个操作 ID 由多个单词组成， 单词之间将由连字符连接（如 create-comment）。   

* 操作 ID 映射为方法名时移除了连字符，将每个单词首字母大写，并加上 action 前缀。 例子：操作 ID create-comment 相当于方法名 actionCreateComment。

## 重点--URL省略参数 

* 上面 URL 中的参数 r 需要更多解释。 它代表路由，是整个应用级的， 指向特定操作的独立 ID。路由格式是 控制器 ID/操作 ID。  

* 应用接受请求的时候会检查参数， 使用控制器 ID 去确定哪个控制器应该被用来处理请求。 然后相应控制器将使用操作 ID 去确定哪个操作方法将被用来做具体工作。

* 路由 site/say 将被解析至 SiteController 控制器和其中的 say 操作。 因此 SiteController::actionSay() 方法将被调用处理请求。
