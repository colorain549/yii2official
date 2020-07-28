<?php

use yii\helpers\Html;
echo "Yii2 version: ";
echo \Yii::getVersion();
echo "<br />";
echo phpinfo();
?>
<?php echo Html::encode($message) ?>