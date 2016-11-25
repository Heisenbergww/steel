
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?= Yii::$app->request->csrfToken ?>"/>
    <meta name="Keywords" Content="Iron bed, Bunk bed Frame, Metal Platform Bed Frame, Folding bed Frame, Metal bed Frame, Metal Bunk Bed Frame"/>
    <meta name="description" Content="Rtto is a brand of Iron bed."/>
    <title>Rtto</title>
    <link type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="/css/normal.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/jquery-3.1.0.min.js"></script>  
    <script type="text/javascript">
        if (window != window.top) {
        window.top.location.replace(window.location)
        }
    </script>

</head>
<body style="overflow-x:hidden">
    <header class="navbar_fa">
        <nav class="navbar container-fluid clearfix">
            <a href="" name="top_top">
            </a>
            <div class="logo fl">
                <a href="/" name="logo"><img src="/<?php echo $this->params['front']['logo'];?>" alt="" ></a>
            </div>
            <div class="logo-right fr">
                <div class="language fr">
                    <p><?php 
                    if(!empty($_COOKIE['lang'])){
                        if($_COOKIE['lang']==='cn')
                        {echo 'CHINESE';}else{
                            echo 'ENGLISH';
                        }
                    }else{
                       echo 'ENGLISH'; 
                    }
                    ?> <span class="map"><img src="/img/language.png" alt=""></span><span class="Path"><img src="/img/Path%203.png" alt=""></span></p>
                </div>

                <div class="language_child">
                    <ul>
                        <li id="en">
                            <p>English <span class="map"><img src="/img/language.png" alt=""></span>
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="menu fr">
                    <ul class=" ">
                        <li class=""><a href="/" class=""><?php echo Yii::t('app', 'Home');?></a></li>
                        <!--<li class=""><a href="<?php echo yii\helpers\Url::to(['fashion/index'])?>" class=""><?php echo Yii::t('app', 'FASHION NOW');?></a></li>-->
                        <li><a href="<?php echo yii\helpers\Url::to(['product/index'])?>"><?php echo Yii::t('app', 'Product');?></a></li>
                        <li class="menu_support " id="menu_support"><a href="#"><?php echo Yii::t('app', 'Support');?><span class="home_trangle"></span></a></li>
                        <li class="menu_about_us" id="menu_about_us"><a href="#"><?php echo Yii::t('app', 'About Us');?><span class="home_trangle"></span></a></li>
                        <li><a href="<?php echo yii\helpers\Url::to(['contactus/index'])?>"><?php echo Yii::t('app', 'Contact Us');?></a></li>
                        <li><a href="<?php echo yii\helpers\Url::to(['joinus/index'])?>"><?php echo Yii::t('app', 'Join Us');?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="second_menu to_support  menu_support">
            <ul>
                <a href="<?php echo yii\helpers\Url::to(['support/faq'])?>"><li class="slol_faq">FAQ</li></a>
            </ul>
        </div>
        <div class="second_menu to_about_us menu_about_us ">
            <ul>
                <a href="<?php echo yii\helpers\Url::to(['aboutus/index'])?>"><li>Company Information</li></a>
                <a href="<?php echo yii\helpers\Url::to(['aboutus/technology'])?>"><li>Certification</li></a>
                <a href="<?php echo yii\helpers\Url::to(['aboutus/news'])?>"><li>News</li></a>
                <a href="<?php echo yii\helpers\Url::to(['aboutus/branch'])?>"><li>Our Branch</li></a>
            </ul>
        </div>
        
    </header>

<?php echo $content;?>
    <footer class="clearfix">
        <div class="container-fluid info-bottom clearfix footer">
            <div class="row">
                <div class="col-lg-12 ">
                    <h3><?php echo Yii::t('app', 'FOLLOW US');?></h3>
                    <div class="social">
                        <ul>
                            <li class="facebook"><a target="_blank" href="<?php echo $this->params['footer']['facebook'];?>"></a></li>
                            <li class="twitter"><a target="_blank" href="<?php echo $this->params['footer']['twitter'];?>"></a></li>
                            <li class="youtube"><a target="_blank" href="<?php echo $this->params['footer']['youtube'];?>"></a></li>
                            <li class="in"><a target="_blank" href="<?php echo $this->params['footer']['linkedin'];?>"></a></li>
                            <li class="instagram"><a target="_blank" href="<?php echo $this->params['footer']['instagram'];?>"></a></li>
                        </ul>
                    </div>
                    <hr>
                    <div class="footer_menu">
                        <ul>
                            <li class=""><a href="/" class=""><?php echo Yii::t('app', 'Home');?></a></li>
                            <!--<li class=""><a href="<?php echo yii\helpers\Url::to(['fashion/index'])?>" class=""><?php echo Yii::t('app', 'FASHION NOW');?></a></li>-->
                            <li><a href="<?php echo yii\helpers\Url::to(['product/index'])?>"><?php echo Yii::t('app', 'Product');?></a></li>
                            <li class=""><a href="<?php echo yii\helpers\Url::to(['support/faq'])?>"><?php echo Yii::t('app', 'Support');?></a></li>
                            <li class=""><a href="<?php echo yii\helpers\Url::to(['aboutus/index'])?>"><?php echo Yii::t('app', 'About Us');?></a></li>
                            <li><a href="<?php echo yii\helpers\Url::to(['contactus/index'])?>"><?php echo Yii::t('app', 'Contact Us');?></a></li>
                            <li><a href="<?php echo yii\helpers\Url::to(['joinus/index'])?>"><?php echo Yii::t('app', 'Join Us');?></a></li>
                        </ul>
                    </div>
                    <p><?php echo Yii::t('app', 'BILL & FOX LIMITED');?></p>
                </div>

            </div>
        </div>

        </footer>


    <!--回顶部-->
    <div class="go_top">
        <a href="#top_top">
            <div class="go_top_bt">
                <img src="/img/tp.png" alt="">
            </div>
        </a>
<!--        <div class="qrcode">-->
<!--            <img src="/img/qrcode.png" alt="">-->
<!--            <div class="qrcode_son">-->
<!--                <img src="/img/qrcode.png" alt="">-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <script src="/js/main.js"></script>
    <!--分析代码-->
  
    <!--再营销代码-->
   
    </body>
    </html>
