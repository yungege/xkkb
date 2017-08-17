<?php
use app\assets\AppAsset;
use yii\widgets\LinkPager;
use yii\helpers\Html;

AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/product/index.css");
AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/product/index.js");

$this->title = '产品展示';

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
                <p style="width: 110px;color: <?= $fcl['id'] == $active_category ? '#6fafe8;' : '#656565;'; ?>"><?= $fcl['en_cate_name'] ?></p>
            </a>
        <?php endforeach ?>
    </div>

    <?php foreach ($list as $lrow): ?>
    <div class="product-list">
        <p class="product-title">
            <a href="/en/product/more/<?= $lrow['pid'] ?>/<?= $lrow['id'] ?>?lang=en&ver=<?= microtime(true) ?>"><?= Html::encode($lrow['en_cate_name']) ?></a>
        </p>

        <div class="product-cj">
            <ul class="product-cj-ul">
                <?php foreach ($lrow['proList'] as $pky => $pval): ?>
                <li style="<?= $pky > 1 ? 'margin-bottom: 12px;' : ''; ?>">
                    <div class="product-li-left">
                        <a href="/en/product/<?= $pval['id'] ?>?ca_f=<?= $pval['pro_first_type'] ?>&ca_s=<?= $pval['pro_second_type'] ?>&lang=en&ver=<?= microtime(true) ?>">
                            <img src="<?= $pval['en_pro_cover_pic'] ? : $pval['pro_cover_pic'] ?>">
                        </a>
                    </div>
                    
                    <div class="product-li-right">
                        <h4><?= $pval['en_pro_name'] ? : $pval['pro_name'] ?></h4>
                        <span><i></i>Model：<?= $pval['pro_model'] ?></span><br>
                        <span><i></i>Laying Method：<?= $pval['en_pro_fs_type'] ? : $pval['pro_fs_type'] ?></span>
                    </div>
                    <a href="/en/product/<?= $pval['id'] ?>?ca_f=<?= $pval['pro_first_type'] ?>&ca_s=<?= $pval['pro_second_type'] ?>&lang=en&ver=<?= microtime(true) ?>" class="product-more">View Details</a>
                </li>
                <?php endforeach ?>
            </ul>
        </div>

        <a href="/en/product/more/<?= $pval['pro_first_type'] ?>/<?= $pval['pro_second_type'] ?>?lang=en&ver=<?= microtime(true) ?>" class="look-more">More...</a>
    </div>
    <?php endforeach ?>

    <div class="product-page-more">
        <?= LinkPager::widget([
                'pagination' => $pages,
                'nextPageLabel' => '>>', 
                'prevPageLabel' => '<<',
                'firstPageLabel' => 'First', 
                'lastPageLabel' => 'Last',
                'options' => ['class' => 'xkkb-pagination'],
            ]);
        ?>
    </div>
</div>