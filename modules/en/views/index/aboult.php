<?php
    use app\assets\AppAsset;
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/cn/aboult/index.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/common/css/hoverMeau.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/common/js/hoverMeau.js");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/widget/Jqlb/index.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/widget/Jqlb/jquery.SuperSlide.2.1.1.js");

    AppAsset::addCss($this, Yii::$app->request->baseUrl."/widget/mslider/css/masterslider.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/widget/mslider/css/ms-showcase2.css");
    AppAsset::addCss($this, Yii::$app->request->baseUrl."/widget/mslider/css/masterslider.main.css");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/widget/mslider/js/modernizr-2.6.2.min.js");
    AppAsset::addScript($this, Yii::$app->request->baseUrl."/widget/mslider/js/masterslider.min.js");

    AppAsset::addScript($this, Yii::$app->request->baseUrl."/cn/aboult/index.js");

    $this->title = '关于我们';
?>

<div class="header-pic">
    <div class="heaer-pic-inner">
        <p class="header-word">About Us</p>
    </div>
</div>

<div class="about-wrap" id="meau-13">
    <div class="about-meau">
        <?php foreach ($category_list as $fcl) : ?>
            <a class="product-inner-item" data-active="<?= $fcl['id'] == $active_category ? 1 : 0 ?>" data-icon="<?= $fcl['cate_icon'] ?>" data-houver-icon="<?= $fcl['cate_hover_icon'] ?>" href="javascript:void(0)" style="<?= $fcl['id'] == $active_category ? 'border-bottom: 5px solid #6fafe8;' : ''; ?>" data-to="#meau-<?= $fcl['id'] ?>">
                <div class="product-inner-item-icon" style="background: url(<?= $fcl['id'] == $active_category ? $fcl['cate_hover_icon'] : $fcl['cate_icon']; ?>) no-repeat center;"></div>
                <p style="color: <?= $fcl['id'] == $active_category ? '#6fafe8;' : '#656565;'; ?>"><?= $fcl['en_cate_name'] ?></p>
            </a>
        <?php endforeach ?>
    </div>
    <div class="aboult-desc">
        <p class="aboult-desc-title">Company</p>
        <p class="aboult-desc-cont">
            Beijing Xinke Kaibang Technology Co., Ltd. was founded in 2003, is a high-tech enterprise integrating R & D, production, sales and service in one of the. Specializing in optical fiber communications, integrated wiring, security monitoring three major areas of product manufacturing and marketing services. We focus on providing first-class connectivity solutions, site solutions, data center solutions and professional services for operators at home and abroad, ICT equipment providers and network integrators.
        </p>  
        <p class="aboult-desc-cont">
            The company is headquartered in both sides of Beijing Changping District win-win industrial park. With "Beijing Kaibang Yongxing science and Technology Co., Ltd. Beijing Kaibang Ronghe Technology Co., Ltd. Hebei Xinke Kaibang science and technology limited company since its inception, has been the focus of technology development as a strategic development, keep a higher proportion of long-term investment, focus on customer needs and leading technology and continuous innovation, continue to create value for customers. The company has passed the ISO9001 quality management system, ISO14001 environmental management system and occupational health and safety management system OHSAS18001 certification. And through the Ministry of information industry communications products protection performance supervision and testing center strict inspection. 
        </p>
        <p class="aboult-desc-cont">
            The company's products and solutions are widely used in government, finance, education, public security, medical treatment, operators, cloud computing in the data center, the energy industry and other fields, through the whole series of fiber optic cabling solutions, copper cabling solutions, intelligent Home Furnishing wiring solutions, security cable solutions and professional basic network services, flexible to meet the global needs of different customers different and the pursuit of rapid innovation.
        </p>
        <p class="aboult-desc-cont">
            Company uphold the "scientific and technological innovation, integrity services, continuous improvement and meet the user" quality policy, the establishment of a complete product quality control system. Whole process quality control and continuous improvement to improve product quality level. To "integrity, diligence, scientific and technological innovation, respect for talent, cooperation and friendship" as the core of culture, continue to learn and learn from the international leading enterprise management model, combined with the characteristics of the company, the appropriate use of the company's operations. To be the world's leading provider of communications network equipment, application solutions and technology services.
        </p>
    </div>
    <ul class="aboult-pic-btn">
        <li class="aboult-pic-btn-active" data-name="gc" style="border-right: 0;width: auto;padding-left: 10px;padding-right: 10px;">Engineering workshop</li>
        <li data-name="ck" style="width: auto;padding-left: 10px;padding-right: 10px;">Warehouse</li>
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

<div class="header-middle-pic" id="meau-14">
</div>

<div class="company-warp">
    <p class="aboult-desc-title">Culture</p>
    <p class="company-warp-p"><span>Enterprise tenet</span>：Make friends with sincerity, common development</p>
    <p class="company-warp-p"><span>management idea</span>：Customer first, quality first</p>
    <p class="company-warp-p"><span>Talent idea</span>：Respect for people's moral character, attach importance to people's wisdom; recognize the value of people, cherish the feelings of people; maintain human dignity, improve people's quality</p>
    <p class="company-warp-p"><span>Quality policy</span>：Quality, integrity, innovation, continuous improvement</p>
    <img src="/cn/aboult/ly.jpg">
</div>

<div class="full-zz" id="meau-15">
    <div class="company-warp zz">
        <p class="aboult-desc-title">Qualifications</p>
        <div class="zz-left">
            <p>
                Shinco Kanbon Technology Co. Ltd. in the introduction of modern production technology at the same time, also introduced the management method and system modernization, always regard technology as the strategic focus of development, maintain a high proportion of long-term investment, focus on customer needs and leading technology and continuous innovation, continue to create value for customers.
            </p>
            <p>
                The company has passed the ISO9001 quality management system, ISO14001 environmental management system and occupational health and safety management system OHSAS18001 certification. And through the Ministry of information industry communications products protection performance supervision and testing center strict inspection.
            </p>
            <p>
                In order to provide users with quality products and services, in the production process, the application of process control methods, strict control of the key process, not to allow unqualified products to enter the next process. Before leaving the factory, all the products will be tested again, and the unqualified products can not be shipped out.
            </p>
            <p>
                Shinco Kanbon Technology Co., the company always adhere to customer first, quality first business philosophy.
            </p>
        </div>
        <div class="zz-right">
            <div class="ms-showcase2-template ms-dir-v"> 
                <!-- masterslider -->
                <div class="master-slider ms-skin-default" id="masterslider">
                    <?php foreach ($list as $pic): ?>
                        <div class="ms-slide">
                            <img src="/widget/mslider/masterslider/loading-2.gif" data-src="<?= $pic['img'] ?>" alt="lorem ipsum dolor sit"/> 
                            <img class="ms-thumb" src="<?= $pic['thumb'] ?>" alt="thumb" /> 
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>