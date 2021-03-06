<?php
    use app\assets\AppAsset;
    use yii\widgets\LinkPager;
    use yii\helpers\Html;
    
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/support/detail.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
    // AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/support/detail.js");
    $c = Yii::$app->request->get('ca_f');

    $this->title = Html::encode($cont['title']);
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">Supporing</p>
    </div>
</div>

<div class="support-wrap">
    <div class="product-meau">
        <?php foreach ($category_list as $fcl) : ?>
            <a class="product-inner-item" data-active="<?= $fcl['id'] == $active_category ? 1 : 0 ?>" data-icon="<?= $fcl['cate_icon'] ?>" data-houver-icon="<?= $fcl['cate_hover_icon'] ?>" href="<?= ($fcl['id'] == 12) ? ('/en/support/service?lang=en&ver='.microtime(true).'&ca_f='.$fcl['id']) : ('/en/support?lang=en&ver='.microtime(true).'&ca_f='.$fcl['id']) ?>" style="<?= $fcl['id'] == $active_category ? 'border-bottom: 5px solid #6fafe8;' : ''; ?>">
                <div class="product-inner-item-icon" style="background: url(<?= $fcl['id'] == $active_category ? $fcl['cate_hover_icon'] : $fcl['cate_icon']; ?>) no-repeat center;"></div>
                <p style="color: <?= $fcl['id'] == $active_category ? '#6fafe8;' : '#656565;'; ?>"><?= $fcl['en_cate_name'] ?></p>
            </a>
        <?php endforeach ?>
    </div>

    <div class="service-detail">
        <p class="service-detail-title"><?= Html::encode($cont['title']) ?></p>
        <div class="service-detail-desc">
            <h4 class="h4-title">Installation Environment</h4>
            <p><?= Html::encode($cont['en_desc']) ?></p>
        </div>
        <div class="service-detail-cont">
            <h4 class="h4-title">Solution Detail</h4>
            <div class="service-detail-cont-detail"><?= $cont['en_content'] ?></div>
        </div>
    </div>
</div>