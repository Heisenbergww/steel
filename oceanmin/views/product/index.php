<title>产品展示</title>
<link rel="stylesheet" href="/css/product-introduce.css">
<!--分页-->
<link rel="stylesheet" href="/css/pagination.css">
<script src="/js/jquery.pagination.min.js"></script>



<section class="section0 clearfix  ">
    <div class="container-fluid">
        <nav id="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo yii\helpers\Url::to(['home/index'])?>" class="">HOME/</a></li>
                <li class="">Product</li>
            </ol>
        </nav>
    </div>
</section>
<section class="container-fluid clearfix section1">
    <img src="/<?php echo $front['product_img']?>" alt="">
</section>
<section class="container-fluid clearfix section2">
    <div class="row business">
        <div class="col-lg-3 business-left ">
            <div class="row product_menu">
                <div class="col-lg-12 business-left-title">
                    <a href="<?php echo yii\helpers\Url::to(['product/index']) ?>">
                    <h3>All Products</h3>
                    </a>
                </div>
                <?php foreach($menu as $m):?>
                <div class="col-lg-12 business-one">
                    <div class="business-name" >
                        <h3><?php echo $m['title']?><span><img src="/img/Path%203.png" alt=""></span></h3>
                        <hr>
                    </div>
                    <div class="business-content">
                        <?php foreach($m['children'] as $cate):?>
                        <a href="<?php echo yii\helpers\Url::to(['product/index', 'cateid' => $cate['cateid']]) ?>">
                            <p>
                                <img   src="/img/triangle_green.png" alt="" class="triangle_green">
                                <?php echo $cate['title']?>
                            </p>
                        </a>
                        <?php endforeach;?>
                    </div>
                </div>
               <?php endforeach;?>
               
                <div class="col-lg-12 business-contact" >
                    <div class="business-contact_ctrl">
                        <h5>Contact Us</h5>
                        <p><span>Company Name：</span><?php echo $company['companyname']?></p>
                        <p><span>Email：</span><?php echo $company['companyemail']?></p>
                        <p><span>TEL：</span><?php echo $company['companytel']?></p>
                        <p><span>Fax：</span><?php echo $company['companyfax']?></p>
                        <p><span>Mobile：</span><?php echo $company['companymobile']?></p>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 business-right">
            <div class="row business-pic clearfix">
                <?php foreach($products as $pro):?>
                <div class="col-lg-4 business-pic-son">
                    <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro['productid']]) ?>">
                        <div class="product_item_pic">
                            <img src="/<?php echo $pro['cover']?>" alt="" >
                            <p><?php echo $pro['title']?></p>
                        </div>
                    </a>
                </div>
                <?php endforeach;?>
                <div class="pagination pull-right">
                    <?php echo yii\widgets\LinkPager::widget([
                        'pagination' => $pager,
                        'prevPageLabel' => '&#8249;',
                        'nextPageLabel' => '&#8250;',
                    ]); ?>
                </div>                
            </div           
        </div>       
    </div>    
</section>

<script>
    $(window).ready(function(){
        var theUrl=window.location.href;
        // console.log(theUrl);
        var ipos = theUrl.indexOf("/product");
        str1=theUrl.substring(ipos,theUrl.length);
        // console.log(str1);
        $(".product_menu a").each(function(){
            if($(this).attr("href")==str1){
                console.log($(this).attr("href"));
                $(this).children("h3").css({"background-color":"#B7683F","color":"#fff"});
                $(this).children("p").children("img").css("visibility","visible");
                $(this).parent("div").prev("div").children("h3").css({"background-color":"#B7683F","color":"#fff"});
                $(this).children("p").css("color","#B7683F");
                $(this).parent("div").prev("div").children("hr").css("display","none");
                $(this).parent("div").css("display","block");
            }
        });
        //分页
        $('.M-box3').pagination({            
            totalData:1,
            showData:4,
            jump:true,
            coping:true,
            homePage:'1',
            endPage:'End',
            prevContent:'Prev',
            nextContent:'Next'
        });
    })
</script>




