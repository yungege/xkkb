<?php
    use app\assets\AppAsset;
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/aboult/index.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/widget/Jqlb/index.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/widget/Jqlb/jquery.SuperSlide.2.1.1.js");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/aboult/index.js");
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">关于我们</p>
    </div>
</div>

<div class="about-wrap">
    <div class="about-meau">
        <?php foreach ($category_list as $fcl) : ?>
            <a class="product-inner-item" data-active="<?= $fcl['id'] == $active_category ? 1 : 0 ?>" data-icon="<?= $fcl['cate_icon'] ?>" data-houver-icon="<?= $fcl['cate_hover_icon'] ?>" href="/zh_cn/aboult?lang=zh_cn&ver=<?= microtime(true) ?>&ca_f=<?= $fcl['id'] ?>" style="<?= $fcl['id'] == $active_category ? 'border-bottom: 5px solid #6fafe8;' : ''; ?>">
                <div class="product-inner-item-icon" style="background: url(<?= $fcl['id'] == $active_category ? $fcl['cate_hover_icon'] : $fcl['cate_icon']; ?>) no-repeat center;"></div>
                <p style="color: <?= $fcl['id'] == $active_category ? '#6fafe8;' : '#656565;'; ?>"><?= $fcl['cate_name'] ?></p>
            </a>
        <?php endforeach ?>
    </div>
    <div class="aboult-desc">
        <p class="aboult-desc-title">公司简介</p>
        <p class="aboult-desc-cont">
            北京新科凯邦科技有限公司成立于2003年，是集研发、生产、销售、服务于一体的高新技术企业。专业从事光纤通讯、综合布线，安防监控三大领域产品的制造与销售服务。我们专注于为国内外运营商、ICT设备商、网络集成商提供一流的连接解决方案、站点解决方案、数据中心解决方案和专业服务。
        </p>  
        <p class="aboult-desc-cont">
            公司总部位于北京市昌平区两岸共赢工业园。拥有“北京凯邦永兴科技有限公司” “北京凯邦融合科技有限公司” “河北新科凯邦科技有限公司”公司自成立以来，一直把技术研发作为战略重心之一，长期保持较高比例的研发投入，围绕客户需求和技术领先持续创新，为客户不断创造价值。公司先后通过了ISO9001质量管理体系，ISO14001环境管理体系及职业健康安全管理体系OHSAS18001的认证。且通过国家信息产业部的通信产品防护性能监督检测中心的严格检测。 
        </p>
        <p class="aboult-desc-cont">
            公司产品以及解决方案广泛应用于政府、金融、教育、公安、医疗、运营商，数据云计算中心，能源等各个行业领域中，通过全系列的光纤布线解决方案、铜缆布线解决方案、智能家居布线解决方案、安防线缆解决方案和专业基础网络服务，灵活满足全球不同客户的差异化需求以及快速创新的追求。
        </p>
        <p class="aboult-desc-cont">
            公司秉持“科技创新、诚信服务、持续改进、满足用户”的质量方针，建立了完整的产品质量控制体系。全过程质量控制和持续改进提升产品质量水平。以“诚信勤勉，科技创新，尊重人才，协作友爱”为文化核心，不断学习、借鉴国际领先的企业管理模式，结合公司特点，恰当运用到公司经营当中。成为全球卓越的通信网络设备、应用解决方案和技术服务提供商。
        </p>
    </div>
    <ul class="aboult-pic-btn">
        <li class="aboult-pic-btn-active" style="border-right: 0;" data-name="gc">工程车间</li>
        <li data-name="ck">仓库</li>
    </ul>
    <div class="aboult-pic-wrap">
        <div class="aboult-pic-wrap-gc">
            <div class="picScroll-left" id="gc">
                <!-- <div class="hd"> -->
                <a class="prev" href="javascript:void(0)"></a>
                <a class="next" href="javascript:void(0)"></a>
                <!-- </div> -->
                <div class="bd">
                    <div class="tempWrap" style="overflow: hidden; position: relative; width: 100%; height: 100%;">
                        <ul class="picList" style="position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                            <li style="float: left; width: 264px;">
                                <div class="pic">
                                    <a href="javascript:void(0)">
                                        <img src="/cn/aboult/z1.jpg">
                                    </a>
                                </div>
                                <!-- <div class="title"><a href="http://www.jq22.com/demo/jquery-SuperSlide20160825/#">效果图1</a></div> -->
                            </li>
                            <li style="float: left; width: 264px;">
                                <div class="pic">
                                    <a href="javascript:void(0)">
                                        <img src="/cn/aboult/z2.jpg">
                                    </a>
                                </div>
                            </li>
                            <li style="float: left; width: 264px;">
                                <div class="pic">
                                    <a href="javascript:void(0)">
                                        <img src="/cn/aboult/z3.jpg">
                                    </a>
                                </div>
                            </li>
                            <li style="float: left; width: 264px;">
                                <div class="pic">
                                    <a href="javascript:void(0)">
                                        <img src="/cn/aboult/z4.jpg">
                                    </a>
                                </div>
                            </li>
                            <li style="float: left; width: 264px;">
                                <div class="pic">
                                    <a href="#">
                                        <img src="/cn/aboult/z1.jpg">
                                    </a>
                                </div>
                            </li>
                            <li style="float: left; width: 264px;">
                                <div class="pic">
                                    <a href="#">
                                        <img src="/cn/aboult/z2.jpg">
                                    </a>
                                </div>
                            </li>
                            <li style="float: left; width: 264px;">
                                <div class="pic">
                                    <a href="#">
                                        <img src="/cn/aboult/z3.jpg">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="aboult-pic-wrap-ck">
            <div class="picScroll-left" id="ck">

                <a class="prev" href="javascript:void(0)"></a>
                <a class="next" href="javascript:void(0)"></a>

                <div class="bd">
                    <div class="tempWrap" style="overflow: hidden; position: relative; width: 100%; height: 100%;">
                        <ul class="picList" style="position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                            <li style="float: left; width: 264px;">
                                <div class="pic">
                                    <a href="javascript:void(0)">
                                        <img src="/cn/aboult/z3.jpg">
                                    </a>
                                </div>
                                <!-- <div class="title"><a href="http://www.jq22.com/demo/jquery-SuperSlide20160825/#">效果图1</a></div> -->
                            </li>
                            <li style="float: left; width: 264px;">
                                <div class="pic">
                                    <a href="javascript:void(0)">
                                        <img src="/cn/aboult/z1.jpg">
                                    </a>
                                </div>
                            </li>
                            <li style="float: left; width: 264px;">
                                <div class="pic">
                                    <a href="javascript:void(0)">
                                        <img src="/cn/aboult/z2.jpg">
                                    </a>
                                </div>
                            </li>
                            <li style="float: left; width: 264px;">
                                <div class="pic">
                                    <a href="javascript:void(0)">
                                        <img src="/cn/aboult/z2.jpg">
                                    </a>
                                </div>
                            </li>
                            <li style="float: left; width: 264px;">
                                <div class="pic">
                                    <a href="javascript:void(0)">
                                        <img src="/cn/aboult/z2.jpg">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="header-middle-pic">
</div>

<div class="company-warp">
    <p class="aboult-desc-title">公司文化</p>
    <p class="company-warp-p"><span>企业宗旨</span>：广交朋友，以诚待人，共同发展</p>
    <p class="company-warp-p"><span>经营理念</span>：广交朋友，以诚待人，共同发展</p>
    <p class="company-warp-p"><span>人才理念</span>：广交朋友，以诚待人，共同发展</p>
    <p class="company-warp-p"><span>质量方针</span>：广交朋友，以诚待人，共同发展</p>
    <img src="/cn/aboult/ly.jpg">
</div>