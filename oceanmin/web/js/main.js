/**
 * Created by juri on 2016/8/22.
 */
 $(document).ready(function(){

//语言定位
$(".language").bind("click",function(){
    $(".language_child").css({
        top:$(".language").offset().top+$(".language").height()+9,
        left:$(".language").offset().left,
        width:$(".language").css("width"),
        position:"absolute"
    }).toggle()
})
    //二级菜单
     var l1=$(".menu_support").offset().left;
     var l2 =$(".menu_about_us").offset().left;
     var wf1=$("#menu_support ").width();
     var wf2=$("#menu_about_us ").width();
     $(".menu_support").mouseenter(function(){
        $(".to_support").show();
         var w1=$(".to_support li").width()/2;
        $(".second_menu").css("left",l1-w1);
    });
    $(".menu_support").mouseleave(function(){
        $(".to_support").hide(); 
    });
    $(".menu_about_us").mouseenter(function(){
        $(".to_about_us").show();
        var w2=$(".menu_about_us li").width()/2;
        $(".second_menu").css("left",l2-w2+49);
    });
    $(".menu_about_us").mouseleave(function(){
       $(".to_about_us").hide();
   });
    //回到顶部
    function goToTopShow(){
        var toTop=$(window).scrollTop();
        if(toTop>200){
            $(".go_top_bt").css("visibility","visible");
        }
        else {
            $(".go_top_bt").css("visibility","hidden");
        }
    }
    goToTopShow();
    $(window).scroll(goToTopShow);

     //首页商品展示轮播


    //product页面
     //产品展示页二级菜单展开
     $(".business-name").click(function(){
         $(this).next().toggle();
         $(this).children("hr").toggle();
     })
     ////点击后加样式以及图片文字变颜色
     //$(".business-content a").click(function(){
     //    $(".business-content a").css("color","#2B2C33");
     //    $(this).css("color","#66BE8C");
     //    $(this).children("img").toggle();
     //})

    //            图片适应
     $(window).resize(function(){
         var a=$(".product_item_pic").width();
         $(".product_item_pic img").css({"width":a,"height":a})
     })

    // layout页面当向下滚动距离大于60px，将顶部固定成fixed
    function goToFixTop(){
        var winPos = $(window).scrollTop();
        if (winPos>60){
            $(".product_goto_fa").addClass('product_goto_fixed');
            $(".product_goto").css("margin-bottom","0px");
            $(".product_goto").css("margin-top","0px");
        }
        else{
            $(".product_goto_fa").removeClass('product_goto_fixed');
            $(".product_goto").css("margin-bottom","40px");
            $(".product_goto").css("margin-top","40px");
        }
    }
    $(window).scroll(goToFixTop);

    //item页面
    //view more
    var table_fa_h=$(".item_more_info> .table_fa").height();
    if(table_fa_h<200){
        $(".view_more_collapse>h4").css("display","none");
    }
    else{
        $(".item_more_info> .table_fa").css("height", "200px");
    }
    function viewMoreShow() {
        $(".item_more_info> .table_fa").css("height", "auto");
        $(".view_more_collapse>h4").text("collapse");
        console.log(1);
    }
    function viewMoreHide() {
        $(".item_more_info> .table_fa").css("height",table_fa_h+"px" );
        $(".view_more_collapse>h4").text("view more");
        console.log(2);
    }
    theFirstClick();
    function theFirstClick(){
        $(".view_more_collapse>h4").click(function(){
            viewMoreShow(theSecondClick());
        })
    }
    function theSecondClick(){
        $(".view_more_collapse>h4").click(function(){
            viewMoreHide(theFirstClick());
        })
    }

    //pdf下载页面
    //  模态窗显示
    function theTanChuangShow(){

        var ee=$('.bg');
        $('.pic_s').click(function() {
            var  dd=$(this).next();
            dd.fadeIn('slow');
            ee.fadeIn('fast');
        if (dd.css("display") == "block") {
                dd.mouseleave(function () {
                    $('.bg').click(function () {
                        dd.css("display", "none");
                        ee.css("display", "none");
                    });
                })
            $('.tanchuang .close').click(function () {
                dd.css("display", "none");
                ee.css("display", "none");
            });
        }
})
    }
    //  在页面中制作一个背景
    function makeDarkBg(){
        $("body").append("<div class=bg></div>")
    }
    //给背景加上样式
    function decorationTheBg(){
        $('.bg').css({
            "width":"12000px",
            "height":"12000px",
            "left":"0",
            "top":"0",
            "background-color":"#333333",
            "opacity":"0.8",
            "position":"fixed",
            "z-index":"4",
            "display":"none",
        })
    }
    makeDarkBg();
    decorationTheBg();
    theTanChuangShow();
    changeLanguage();
       // 切换语言请求js
       var csrfToken = $('meta[name="csrf-token"]').attr("content");
       function changeLanguage() {
           $('#en').click('click',function(){
            $.post('index.php?r=public/language',{"lang":"en","_csrf":csrfToken},function(){
                window.location.reload();
            });
        })
           $('#cn').click('click',function(){
             $.post('index.php?r=public/language',{"lang":"cn","_csrf":csrfToken},function(){
                window.location.reload();
            });
         })
       }
        //联系我们展示表格
     $(".message_s").click(function(){
         $(".contact_us_form input").fadeIn(1000,"swing");
     })


    // //产品详情页展示切换
    //$(".tab_switch_td_1").click(function(){
    //    $(".tab_switch_td_2").css("border-bottom","1px solid #d8d8d8 ");
    //    $(".tab_switch_td_2 .triangle_blue").css("display","none");
    //    $(".tab_switch_td_2 p").css("color","#2b2c33");
    //    $(this).css("border-bottom","4px solid  #1963B8");
    //    $(".tab_switch_td_1 .triangle_blue").css("display","inline-block");
    //    $(".tab_switch_td_1 p").css("color","#1963B8");
    //    $(".for_table_2").hide();
    //    $(".for_table_1").show();
    //})
    // $(".tab_switch_td_2").click(function(){
    //     $(".tab_switch_td_1").css("border-bottom","1px solid #d8d8d8");
    //     $(".tab_switch_td_1 .triangle_blue").css("display","none");
    //     $(".tab_switch_td_1 p").css("color","#2b2c33");
    //     $(this).css("border-bottom","4px solid  #1963B8");
    //     $(".tab_switch_td_2 .triangle_blue").css("display","inline-block");
    //     $(".tab_switch_td_2 p").css("color","#1963B8");
    //     $(".for_table_2").show();
    //     $(".for_table_1").hide();
    // })
    //
    //     //产品页导航卡
    //    $(window).scroll(function(){
    //
    //        var titleOne=$(".product_category_2:eq(0)").offset().top;
    //        var titleTwo=$(".product_category_2:eq(1)").offset().top;
    //        var titleThree=$(".product_category_2:eq(2)").offset().top;
    //        console.log(titleOne+"titleOne");
    //        console.log(titleTwo+"titleTwo");
    //        console.log(titleThree+"titleThree");
    //        compare();
    //        function compare(){
    //            var toTop=$(document).scrollTop();
    //            console.log(toTop+"toTop");
    //            if(toTop>titleOne&&toTop<titleTwo){
    //                $(".the_table_td:eq(0)").css("background-color","red");
    //            }
    //            else  if(toTop>titleTwo&&toTop<titleThree){
    //                $(".the_table_td:eq(1) .the_table_td").css("background-color","red");
    //                $(".the_table_td:eq(0) .the_table_td").css("background-color","#fff");
    //            }
    //            else if(toTop>titleThree){
    //                $(".the_table_td:eq(2) .the_table_td").css("background-color","red");
    //                $(".the_table_td:eq(1) .the_table_td").css("background-color","#fff");
    //            }
    //            else{
    //                $(".the_table_td:eq(0) .the_table_td").css("background-color","#fff");
    //            }
    //        }
    //
    //    })




})





