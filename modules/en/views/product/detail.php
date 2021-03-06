<?php
    use app\assets\AppAsset;
    use yii\widgets\LinkPager;
    use yii\helpers\Html;

    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/product/detail.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/product/detail.js");

    $this->title = 'Product Display';
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">Product</p>
    </div>
</div>

<div class="product-wrap">
    <div class="product-meau">
        <?php foreach ($category_list as $fcl) : ?>
            <a class="product-inner-item" data-active="<?= $fcl['id'] == $active_category ? 1 : 0 ?>" data-icon="<?= $fcl['cate_icon'] ?>" data-houver-icon="<?= $fcl['cate_hover_icon'] ?>" href="/en/product?lang=en&ver=<?= microtime(true) ?>&ca_f=<?= $fcl['id'] ?>" style="height:95px;<?= $fcl['id'] == $active_category ? 'border-bottom: 5px solid #6fafe8;' : ''; ?>">
                <div class="product-inner-item-icon" style="background: url(<?= $fcl['id'] == $active_category ? $fcl['cate_hover_icon'] : $fcl['cate_icon']; ?>) no-repeat center;"></div>
                <p style="width:110px;color: <?= $fcl['id'] == $active_category ? '#6fafe8;' : '#656565;'; ?>"><?= $fcl['en_cate_name'] ?></p>
            </a>
        <?php endforeach ?>
    </div>

    <?php if(!empty($tags)): ?>
    <div class="pro-tag">
        <p>Hot Labels</p>
        <ul>
            <?php foreach ($tags as $tag): ?>
            <li><a href="/en/product/tag/<?= $active_category ?>/<?= $tag['id'] ?>?lang=en" class="<?= Yii::$app->request->get('tag') == $tag['id'] ? 'a-active' : '' ?>"><?= $tag['tag'] ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
    <?php endif ?>

    <h3 class="product-name"><?= Html::encode($info['en_pro_name'] ? : $info['pro_name']) ?></h3>
    <h4 class="product-type"><?= Html::encode($info['pro_model']) ?></h4>

    <div class="product-show">
        <div class="show-left" style="background: url(<?= $info['en_pro_cover_pic'] ? : $info['pro_cover_pic'] ?>) no-repeat left center;">
            
        </div>
        <div class="show-right" style="background: url(<?= $info['en_pro_cover_pic_2'] ? : $info['pro_cover_pic_2'] ?>) no-repeat center center;">

        </div>
    </div>

    <div class="product-detail-meau">
        <h4 class="meau-active">Product Description</h4>
        <h4>Technical Parameter</h4>
    </div>

    <div class="product-desc">
        <div class="desc-list-div list-div-active">
            <?= Html::decode($info['en_pro_desc'] ? : $info['pro_desc']) ?>
        </div>
        <div class="desc-list-div">
            <img src="<?= $info['en_pro_tec_params'] ? : $info['pro_tec_params'] ?>">
        </div>
        
    </div>
</div>