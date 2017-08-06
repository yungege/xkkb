<?php
    use app\assets\AppAsset;
    use yii\widgets\LinkPager;

    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/product/detail.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/product/detail.js");

    $this->title = '产品展示';
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">产品展示</p>
    </div>
</div>

<div class="product-wrap">
    <div class="product-meau">
        <?php foreach ($category_list as $fcl) : ?>
            <a class="product-inner-item" data-active="<?= $fcl['id'] == $active_category ? 1 : 0 ?>" data-icon="<?= $fcl['cate_icon'] ?>" data-houver-icon="<?= $fcl['cate_hover_icon'] ?>" href="/zh_cn/product?lang=zh_cn&ver=<?= microtime(true) ?>&ca_f=<?= $fcl['id'] ?>" style="<?= $fcl['id'] == $active_category ? 'border-bottom: 5px solid #6fafe8;' : ''; ?>">
                <div class="product-inner-item-icon" style="background: url(<?= $fcl['id'] == $active_category ? $fcl['cate_hover_icon'] : $fcl['cate_icon']; ?>) no-repeat center;"></div>
                <p style="color: <?= $fcl['id'] == $active_category ? '#6fafe8;' : '#656565;'; ?>"><?= $fcl['cate_name'] ?></p>
            </a>
        <?php endforeach ?>
    </div>

    <h3 class="product-name">层绞式铠装通信光缆</h3>
    <h4 class="product-type">GYTA</h4>

    <div class="product-show">
        <div class="show-left" style="background: url(/cn/product/ADSSL.jpg) no-repeat left center;">
            
        </div>
        <div class="show-right" style="background: url(/cn/product/ADSSR.jpg) no-repeat center center;">

        </div>
    </div>

    <div class="product-detail-meau">
        <h4 class="meau-active">产品描述</h4>
        <h4>技术参数</h4>
    </div>

    <div class="product-desc">
        <div class="desc-list-div list-div-active">
            <img src="/cn/product/desc.jpg">
        </div>
        <div class="desc-list-div">
            <img src="/cn/product/ADSSL.jpg">
        </div>
        
    </div>
</div>