<?php
    use app\assets\AppAsset;
    use yii\widgets\LinkPager;
    use yii\helpers\Html;
    
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/support/index.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
    // AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/support/index.js");
    $c = Yii::$app->request->get('ca_f');

    $this->title = '技术支持.解决方案';
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

    <div class="support-pic">
        <?php foreach ($support_list as $val) : ?>
            <div class="support-pic-list">
                <span><?= Html::encode($val['en_title']) ?></span>
                <a href="/en/support/<?= $val['id'] ?>" target="__blank">
                    <img src="<?= $val['pic'] ?>">
                </a>
            </div>
        <?php endforeach ?>
    </div>

    <div class="new-page-more">
        <?=
            LinkPager::widget([
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