<?php
    use yii\helpers\Html;
    use app\assets\AppAsset;

    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/case/detail.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");

    $this->title = $info['title'];
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">Application</p>
    </div>
</div>

<div class="case-wrap">
    <div class="product-meau">
        <?php foreach ($category_list as $fcl) : ?>
            <a class="product-inner-item" data-active="<?= $fcl['id'] == $active_category ? 1 : 0 ?>" data-icon="<?= $fcl['cate_icon'] ?>" data-houver-icon="<?= $fcl['cate_hover_icon'] ?>" href="/en/case?lang=en&ver=<?= microtime(true) ?>&ca_f=<?= $fcl['id'] ?>" style="<?= $fcl['id'] == $active_category ? 'border-bottom: 5px solid #6fafe8;' : ''; ?>">
                <div class="product-inner-item-icon" style="background: url(<?= $fcl['id'] == $active_category ? $fcl['cate_hover_icon'] : $fcl['cate_icon']; ?>) no-repeat center;"></div>
                <p style="color: <?= $fcl['id'] == $active_category ? '#6fafe8;' : '#656565;'; ?>"><?= $fcl['en_cate_name'] ?></p>
            </a>
        <?php endforeach ?>
    </div>

    <h4 class="news-title-h4">
        <?= Html::encode($info['en_title']) ?>
    </h4>
    <p class="news-time">
        Time：<?= date('Y-m-d H:i:s', $info['ctime']) ?>
    </p>
    <div class="case-detail">
        <?= $info['en_content'] ?>
    </div>
</div>