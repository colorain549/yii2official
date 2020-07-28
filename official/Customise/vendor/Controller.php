<?php
namespace vendor;
class Controller{
    /**
     * 加载指定目录下的模版文件，并将控制器中的数据传递到视图文件中
     * @param string    $fileName 提供模版文件的文件名
     * @param array     变量名=>变量值
     */
    public function render($viewName, $data){
        // 将数组$data变成变量的形式
        extract($data, EXTR_PREFIX_SAME, 'data');
        // 包含视图文件
        require($viewName);
    }
}
?>