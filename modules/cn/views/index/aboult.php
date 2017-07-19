<?php
    use app\assets\AppAsset;

    
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/aboult/index.css"); 
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/aboult/index.js");
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">关于我们</p>
    </div>
</div>