<?php
    use yii\helpers\Html;
    use app\assets\AppAsset;
    use yii\widgets\LinkPager;

    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/case/index.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/case/index.js");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");

    $this->title = '应用案例';
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">应用案例</p>
    </div>
</div>

<div class="case-wrap">
    <div class="product-meau">
        <?php foreach ($category_list as $fcl) : ?>
            <a class="product-inner-item" data-active="<?= $fcl['id'] == $active_category ? 1 : 0 ?>" data-icon="<?= $fcl['cate_icon'] ?>" data-houver-icon="<?= $fcl['cate_hover_icon'] ?>" href="/zh_cn/case?lang=zh_cn&ver=<?= microtime(true) ?>&ca_f=<?= $fcl['id'] ?>" style="<?= $fcl['id'] == $active_category ? 'border-bottom: 5px solid #6fafe8;' : ''; ?>">
                <div class="product-inner-item-icon" style="background: url(<?= $fcl['id'] == $active_category ? $fcl['cate_hover_icon'] : $fcl['cate_icon']; ?>) no-repeat center;"></div>
                <p style="color: <?= $fcl['id'] == $active_category ? '#6fafe8;' : '#656565;'; ?>"><?= $fcl['cate_name'] ?></p>
            </a>
        <?php endforeach ?>
    </div>

    <div class="case-cont-wrap">
        <?php foreach ($case_list as $k => $row) :?>
        <div class="case-item-list" style="<?= (($k+1)%3 == 0) ? 'margin-right: 0' : ''; ?>">
            <a href="/zh_cn/case/<?= $row['id'] ?>" target="__blank">
                <div class="case-img-div">
                    <img src="<?= $row['cover'] ?>">
                </div>
                <p><?= Html::encode($row['title']) ?></p>
            </a>
        </div>
        <?php endforeach ?>
    </div>

    <div class="new-page-more">
        <?=
            LinkPager::widget([
                'pagination' => $pages,
                'nextPageLabel' => 'N',
                'prevPageLabel' => 'L',
                'options' => ['class' => 'xkkb-pagination'],
            ]);
        ?>
    </div>
</div>