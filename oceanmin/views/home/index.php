<link rel="stylesheet" href="/css/home.css">

<!--轮播‪-->
<link rel="stylesheet" href="/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="/owlcarousel/owl.theme.default.min.css">
<script src="/owlcarousel/owl.carousel.min.js"></script>

<link rel="stylesheet" href="/css/swiper.css">
<script src="/js/swiper.jquery.min.js"></script>

<style>
    /*html5*/
    article,aside,dialog,footer,header,section,footer,nav,figure,menu{display:block}
</style>


<section class="container-fluid-ppt clearfix" >
    <div class="row clearfix">
        <div class="owl-carousel owl-theme ppt " id="owl-carousel_first">
            <?php foreach($model as $im):?>
            <div class="item">
                <img height="" src="/<?php echo $im['cover']?>" alt="">
            </div>
           <?php endforeach;?>
        </div>
    </div>
</section>


<section class="container-fluid clearfix section2">
    <div class="row ">
        <a href="<?php echo yii\helpers\Url::to(['aboutus/technology'])?> " class="row_part_square_2">
            <div class="col-lg-3 row_part_square_img">
                <img src="/img/home_special_technology.jpg" alt="" >
            </div>
            <div class="col-lg-3 row_part_square_words">
                <h2>QUALITY  CERTIFICATION</h2>
                <p>All our products have passed SGS and a series of certification.</p>
                <span>VIEW MORE</span>
            </div>
        </a>
        <a href="<?php echo yii\helpers\Url::to(['support/faq'])?>" class="row_part_square_2">
            <div class="col-lg-3 row_part_square_img">
                <img src="/img/home_faq.png" alt="" >
            </div>
            <div class="col-lg-3 row_part_square_words">
                <h2>F A Q</h2>
                <p>We will help you answer questions that may be encountered</p>
                <span>VIEW MORE</span>
            </div>
        </a>
        <a href="<?php echo yii\helpers\Url::to(['aboutus/branch'])?>" class="row_part_square_2">
            <div class="col-lg-3 row_part_square_words">
                <h2>OUR BRANCH</h2>
                <p>There’s some words that introduce our branch</p>
                <span href="">VIEW MORE</span>
            </div>
            <div class="col-lg-3 row_part_square_img">
                <img src="/img/home_branch.jpg" alt="" >
            </div>
        </a>
        <a href="<?php echo yii\helpers\Url::to(['aboutus/news'])?>" class="row_part_square_2">
            <div class="col-lg-3 row_part_square_words">
                <h2>NEWS</h2>
                <p>Here,you will see the latest news about Ercole</p>
                <span href="">VIEW MORE</span>
            </div>
            <div class="col-lg-3 row_part_square_img">
                <img src="/img/home_news.png" alt="" >
            </div>
        </a>
    </div>
</section>

<section class="container-fluid clearfix section3">
    <div class="row">
        <div class="col-lg-12 row_part_title">
            <h1>Products Show</h1>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach($product as $pro):?>
                    <div class="swiper-slide">
                        <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro['productid']]) ?>">
                            <div class="you_may_buy">
                                <img  src="/<?php echo $pro['cover']?>" alt="">
                                <p><?php echo $pro['title']?></p>
                            </div>
                        </a>
                    </div>
                    <?php endforeach;?>
                </div>
                <!-- 如果需要导航按钮 -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>



<script>
    $(document).ready(function(){
        //轮播1
        $('#owl-carousel_first').owlCarousel({
            items: 1,
            loop: true,
            lazyLoad: true,
            autoHeight:true,
            autoplay: true,
            autoplayTimeout: 3000
        })
        //轮播2

        var mySwiper = new Swiper ('.swiper-container', {
            slidesPerView : 5,
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 30,
            autoplay: 3000,
            autoplayDisableOnInteraction:false,
            autoplayStopOnLast:false

        })

    })
</script>


