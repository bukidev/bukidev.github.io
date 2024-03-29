<?php session_start(); ?>

<!DOCTYPE html>
<html lang="th">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CUBEBIO-ASIA</title>
	
        <link rel="shortcut icon" href="http://en.cubebio.co.kr/img/favicon.ico">

        <link rel="stylesheet" href="http://cubebio.asia/assets/css/base.css">
        <link rel="stylesheet" href="http://cubebio.asia/assets/css/layout.css">
        <link rel="stylesheet" href="http://cubebio.asia/assets/css/jquery-ui.css"> 
        <link rel="stylesheet" href="http://cubebio.asia/assets/css/navbar-bottom.css"> 
        <link rel="stylesheet" href="http://cubebio.asia/assets/css/gnb.css"> 

        <!--<script async="" src="http://cubebio.asia/assets/js/analytics.js"></script>-->
        <script type="text/javascript" src="http://cubebio.asia/assets/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="http://cubebio.asia/assets/js/jquery-ui-1.8.16.custom.min.js"></script>
        <script type="text/javascript" src="http://cubebio.asia/assets/js/jquery.slides.min.js"></script>
        <script type="text/javascript" src="http://cubebio.asia/assets/js/client.js"></script>
        <script type="text/javascript" src="http://cubebio.asia/assets/js/popup.js"></script>
        <script type="text/javascript" src="http://cubebio.asia/assets/js/jquery.cookie.js"></script>
        <script type="text/javascript" src="http://cubebio.asia/assets/js/jquery.bpopup.min.js"></script>
        <script src="http://cubebio.asia/assets/js/js.js"></script>
        
        <link rel="stylesheet" type="text/css" href="http://cubebio.asia/assets/css/styleNoJS.css">
        <link rel="stylesheet" type="text/css" href="http://cubebio.asia/assets/css/camera-act.css">

        <!--<script type="text/javascript" language="javascript">
            var exrSeq = "";
            $(window).load(function(){

                    for(i=0;i<exrSeq.length;i++){
                        viewPop('pops'+exrSeq[i]);
                    }


                $(".subTyp2").css("display","none");



                $("#subTx").css("display","block");

                $("#sub_menu").css("display","none");
                $(".img_over").mouseover(function(){
                    $("#sub_menu").slideDown("fast");
                });

                $("div.sub_menu").mouseleave(function(){
                    $("#sub_menu").slideUp("fast");
                });


                $("#mHover1").hover(function(){
                    $(".subTyp2").css("display","none");
                    $(".sHover1").css("display","block");
                });
                $("#mHover2").hover(function(){
                    $(".subTyp2").css("display","none");
                    $(".sHover2").css("display","block");
                });
                $("#mHover3").hover(function(){
                    $(".subTyp2").css("display","none");
                    $(".sHover3").css("display","block");
                });
                $("#mHover4").hover(function(){
                    $(".subTyp2").css("display","none");
                    $(".sHover4").css("display","block");
                });
                $("#mHover5").hover(function(){
                    $(".subTyp2").css("display","none");
                    $(".sHover5").css("display","block");
                });
                $("#mHover7").hover(function(){
                    $(".subTyp2").css("display","none");
                    $(".sHover7").css("display","block");
                });
                $("#mHover6").hover(function(){
                    $(".subTyp2").css("display","none");
                    $(".sHover6").css("display","block");
                });


                $(".sHover1").hover(
                    function(){$(".subTyp2").css("display","none");$(this).css("display","block");},
                    function(){$(".subTyp2").css("display","none");}
                );
                $(".sHover2").hover(
                    function(){$(".subTyp2").css("display","none");$(this).css("display","block");},
                    function(){$(".subTyp2").css("display","none");}
                );
                $(".sHover3").hover(
                    function(){$(".subTyp2").css("display","none");$(this).css("display","block");},
                    function(){$(".subTyp2").css("display","none");}
                );
                $(".sHover4").hover(
                    function(){$(".subTyp2").css("display","none");$(this).css("display","block");},
                    function(){$(".subTyp2").css("display","none");}
                );
                $(".sHover5").hover(
                    function(){$(".subTyp2").css("display","none");$(this).css("display","block");},
                    function(){$(".subTyp2").css("display","none");}
                );
                $(".sHover6").hover(
                    function(){$(".subTyp2").css("display","none");$(this).css("display","block");},
                    function(){$(".subTyp2").css("display","none");}
                );
                $(".sHover7").hover(
                    function(){$(".subTyp2").css("display","none");$(this).css("display","block");},
                    function(){$(".subTyp2").css("display","none");}
                );

                var mainWid = $("#mainWidth").width();


                // 푸터컨트롤
                $("#foot_content").css("cursor","pointer").click(function(){
                     pops(100,100,720,520,'/clients/content/acus_service.php');
                });
                $("#foot_content1").css("cursor","pointer").click(function(){
                     pops(100,100,720,520,'/clients/content/acus_service.php?bs=1');
                });
                $("#foot_content2").css("cursor","pointer").click(function(){
                     pops(100,100,720,520,'/clients/content/acus_service.php?bs=2');
                });
                $("#foot_content3").css("cursor","pointer").click(function(){
                     pops(100,100,720,520,'/clients/content/acus_service.php?bs=3');
                });
                $("#foot_content4").css("cursor","pointer").click(function(){
                     pops(100,100,720,520,'/clients/content/acus_service.php?bs=4');
                });


                if($(".tab").length > 0){
                    var tabs = 0;
                    for(tabs = 0;tabs<$(".tab").length;tabs++){
                         tab_idx = $(".tab").eq(tabs).attr("title");
                         urls = "/tab.php?idx="+tab_idx;
                         run_tabs(tabs);
                    }
                }

                checkRoll();
                checkGoods();
            //	checkMap();
                var sub_sli = '';

                if(sub_sli == '2003yjsy'){
                    $(".roll").attr("style","width:1950px; margin-left:-460px; margin-top:-25px; height:100%;");
                }else{
                    $(".roll").attr("title","");
                    $(".tab").attr("title","");    
                }

            });

            function checkRoll(){
                var rolls = 0;
                for(rolls = 0;rolls<$(".roll").length;rolls++){
                     roll_idx = $(".roll").eq(rolls).attr("title");
                     urls = "/module/banner_roll_pc.php?idx="+roll_idx;
                    // console.log(urls );
                     run_roll(rolls);
                }
            }

            function checkMap(){
                var rolls = 0;
                for(rolls = 0;rolls<$(".map_view").length;rolls++){
                     roll_idx = $(".map_view").eq(rolls).attr("title");
                     urls = "/module/map_view.php?seq="+roll_idx;
                     view_map(rolls);
                }
            }

            function checkGoods(){
                var goods = 0;
                for(goods = 0;goods<$(".goods").length;goods++){
                     goods_idx = $(".goods").eq(goods).attr("title");
                     urls = "/module/shop_index.php?seq="+goods_idx;
                     run_goods(goods);
                }
            }


            function run_roll(num){
                $.ajax({
                    url:urls ,
                    cache: false,
                    context: document.body,
                    beforeSend : function() {  },                                   
                    statusCode : {   404 : function () {  alert('레이아웃 로딩 실패');  }  },                   
                    success    : function(html) { $(".roll").eq(num).html(html);   },   
                    error      : function() { alert('통신오류발생');  },                                  
                    complete   : function() {  }                               
                });
            }

            function run_goods(num){
                $.ajax({
                    url:urls ,
                    cache: false,
                    context: document.body,
                    beforeSend : function() {  },                                   
                    statusCode : {   404 : function () {  alert('레이아웃 로딩 실패');  }  },                   
                    success    : function(html) { $(".goods").eq(num).html(html);   },   
                    error      : function() { alert('통신오류발생');  },                                  
                    complete   : function() {  }                               
                });
            }

            function run_tabs(num){
                var h_name = $("#homepage_name").val();

                var host = location.host;
                var url = urls.split('=');
                var n_url = "";

                n_url = "/acus/layout/typeE/"+h_name+"/"+h_name+"_tab.php?idx=";
                n_url += url[1];

                /*
                if(host == "grigogallery.com" || host == "www.grigogallery.com"){
                    n_url = "/acus/layout/typeE/"+h_name+"/"+h_name+"_tab.php?idx=";
                }else if(host.indexOf("seochonoin") != -1){
                    n_url = "/acus/layout/typeE/seochonoin/seochonoin_tab.php?idx=";
                }else if(host.indexOf("huepark") != -1){
                    n_url = "/acus/layout/typeE/huepark/huepark_tab.php?idx=";
                }else{
                    n_url = "/etype_tab.php?idx=";
                }*/

                $.ajax({
                    url:n_url ,
                    cache: false,
                    context: document.body,
                    beforeSend : function() {  },                                   
                    statusCode : {   404 : function () {  alert('레이아웃 로딩 실패');  }  },                   
                    success    : function(html) {
                        $(".tab").eq(num).html(html);   
                    },   
                    error      : function() { alert('통신오류발생');  },                                  
                    complete   : function() {  }                               
                });
            }

            function view_map(num){
                $.ajax({
                    url:urls ,
                    cache: false,
                    context: document.body,
                    beforeSend : function() {  },                                   
                    statusCode : {   404 : function () {  alert('레이아웃 로딩 실패');  }  },                   
                    success    : function(html) { $(".map_view").eq(num).html(html);   },   
                    error      : function() { alert('통신오류발생');  },                                  
                    complete   : function() {  }                               
                });
            }

            function acus_window(name, url, left, top, width, height, toolbar, menubar, statusbar, scrollbar, resizable){
                toolbar_str = toolbar ? 'yes' : 'no';
                menubar_str = menubar ? 'yes' : 'no';
                statusbar_str = statusbar ? 'yes' : 'no';
                scrollbar_str = scrollbar ? 'yes' : 'no';
                resizable_str = resizable ? 'yes' : 'no';
                window.open(url, name, 'left='+left+',top='+top+',width='+width+',height='+height+',toolbar='+toolbar_str+',menubar='+menubar_str+',status='+statusbar_str+',scrollbars='+scrollbar_str+',resizable='+resizable_str);
            }

            function pops(x,y,sx,sy,url){
                acus_window('xxx',url,x,y,sx,sy, 0, 0, 0, 0, 0);
            }

            function viewPop(val){
                ret = 0;
                if($.cookie(val) == 1){
                    ret = 1; 
                }
                else{ 
                    ret = 2;  
                }

                if(ret == 2){
                    $("#"+val).css("display","block"); 
                }
            }

            function setPop(val,form){
                if(document[form].chk.checked == true)	{
                    $.cookie(val,'1', { expires: 1 });
                }
                $("#"+val).css("display","none");
            }

            function getPop(val){
                ret = 0;
                if($.cookie(val) == 1){
                    ret = 1; 
                }
                else{
                    ret = 2;  
                }
            }
        </script>-->
        <style>
            .sub_menu_text_hover a:hover {color:;}
            .sub_menu_text_hover a {color:;}
            body { font-family: 'Kanit', sans-serif; }
        </style>

        
        <script type="text/javascript" charset="UTF-8" src="http://cubebio.asia/assets/js/common.js"></script>
        <script type="text/javascript" charset="UTF-8" src="http://cubebio.asia/assets/js/util.js"></script>
        <script type="text/javascript" charset="UTF-8" src="http://cubebio.asia/assets/js/stats.js"></script>
        
        <link rel="stylesheet" id="camera-css" href="http://cubebio.asia/assets/css/camera.css" type="text/css" media="all"> 
        <script type="text/javascript" src="http://cubebio.asia/assets/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="http://cubebio.asia/assets/js/jquery.mobile.customized.min.js"></script>
        <script type="text/javascript" src="http://cubebio.asia/assets/js/jquery.easing.1.3.js"></script> 
        <script type="text/javascript" src="http://cubebio.asia/assets/js/camera.min.js"></script> 
    </head>

    <body style="overflow-x: hidden; overflow-y: auto; font-family: nanumgothic !important;">
        <div>
            <!-- ////////////////// Roll Area Start ////////////////// -->
            <div id="roll"></div>
            <!-- ////////////////// Roll Area End ////////////////// -->
            <div id="wrapper_main" style="background: url(http://cubebio.asia/assets/img/main_bg_cubebio.jpg) no-repeat;background-position: 50% 0%;; background-size: px  px">
                <script>
            var size = "";
            $(window).resize(function(){
                size = window.innerWidth;
                //alert(size)
            }).resize();
            $(document).ready(function(){

                var agent = navigator.userAgent.toLowerCase();

                if (agent.indexOf("chrome") != -1) {
                    $('#gnb_menu ul').css('margin-top', '-14px');
                    $('#gnb_menu li').css({'padding' : '52px 0px 27px 0px' , 'float' : 'left' , 'margin' : '-40px 0', 'font-size' : '16px', 'border-right' : '1px solid #e1e1e1' , 'font-family' : 'nanumbarungothic' });
                    $('#gnb_menu li a').css({'color' : '#000'})
                }else{
                    $('#gnb_menu ul').css('margin-top', '-14px');
                    $('#gnb_menu li').css({'padding' : '52px 0px 28px 0px' , 'float' : 'left' , 'margin' : '-40px 0', 'font-size' : '16px', 'border-right' : '1px solid #e1e1e1' , 'font-family' : 'nanumbarungothic'});
                    $('#gnb_menu li a').css({'color' : '#000'})
                }
                $(".main_txt_tit").css('display', 'none');
                $(".main_txt").css('display', 'none');
                $("#number2").css({ 'border-left' : '1px solid #e1e1e1'});
                $(".gnb_top_menu").mouseover(function(){
                    if($(this).attr("id")!=""){
                        $("#gnb_sub_menu").css({"background-image":"url(http://cdn.acus.kr/cubebio_en/menu/"+$(this).attr("id")+")" , "background-repeat": "no-repeat" , "background-position":"bottom right", "color":"#ffffff"});

                    }

                    var id = $(this).attr("id");
                    if(id == "number2"){
                        $(this).css({ 'background-color' : '#5674b9'});
                        $("#number2 b").css({ 'color' : 'white', 'font-weight' : '500'});
                        $("#number3 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number4 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number5 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number6 b").css({ 'color' : 'white', 'font-weight' : 'normal'});

                        $("#number3").css({ 'background-color' : '#f7f7f7'});
                        $("#number3 b").css({ 'color' : 'black'});
                        $("#number4").css({ 'background-color' : '#f7f7f7'});
                        $("#number4 b").css({ 'color' : 'black'});
                        $("#number5").css({ 'background-color' : '#f7f7f7'});
                        $("#number5 b").css({ 'color' : 'black'});
                        $("#number6").css({ 'background-color' : '#f7f7f7'});
                        $("#number6 b").css({ 'color' : 'black'});
                        $("#number7").css({ 'background-color' : '#f7f7f7'});
                        $("#number7 b").css({ 'color' : 'black'});

                        $('#sub_menu_ul1').css("display" , "none");
                        $('#sub_menu_ul2').css("display" , "none");
                        $('#sub_menu_ul3').css("display" , "none");
                        $('#sub_menu_ul4').css("display" , "none");
                        $('#sub_menu_ul5').css("display" , "none");

                        if (agent.indexOf("chrome") != -1) {
                            $('#sub_menu_ul0').css({'display' : 'inline', 'margin-right' :  '711px', 'padding' :  '20px 0 20px 0'});
                        }else{
                            $('#sub_menu_ul0').css({'display' : 'inline', 'margin-right' :  '711px', 'padding' :  '20px 0 20px 0'});
                        }


                    }else if(id == "number3"){
                        $(this).css({ 'background-color' : '#5674b9'});
                        $("#number2 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number3 b").css({ 'color' : 'white', 'font-weight' : '500'});
                        $("#number4 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number5 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number6 b").css({ 'color' : 'white', 'font-weight' : 'normal'});

                        $("#number2").css({ 'background-color' : '#f7f7f7'});
                        $("#number2 b").css({ 'color' : 'black'});
                        $("#number4").css({ 'background-color' : '#f7f7f7'});
                        $("#number4 b").css({ 'color' : 'black'});
                        $("#number5").css({ 'background-color' : '#f7f7f7'});
                        $("#number5 b").css({ 'color' : 'black'});
                        $("#number6").css({ 'background-color' : '#f7f7f7'});
                        $("#number6 b").css({ 'color' : 'black'});
                        $("#number7").css({ 'background-color' : '#f7f7f7'});
                        $("#number7 b").css({ 'color' : 'black'});

                        if (agent.indexOf("chrome") != -1) {
                            $('#sub_menu_ul1').css({'display' : 'inline', 'margin-right' : '569px' ,'padding' :  '20px 0 20px 0'});
                        }else{
                            $('#sub_menu_ul1').css({'display' : 'inline', 'margin-right' : '569px', 'padding' :  '20px 0 20px 0'});
                        }

                        $('#sub_menu_ul2').css("display" , "none");
                        $('#sub_menu_ul3').css("display" , "none");
                        $('#sub_menu_ul4').css("display" , "none");
                        $('#sub_menu_ul5').css("display" , "none");
                        $('#sub_menu_ul0').css("display" , "none");

                    }else if(id == "number4"){
                        $(this).css({ 'background-color' : '#5674b9'});
                        $("#number2 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number3 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number4 b").css({ 'color' : 'white', 'font-weight' : '500'});
                        $("#number5 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number6 b").css({ 'color' : 'white', 'font-weight' : 'normal'});

                        $("#number2").css({ 'background-color' : '#f7f7f7'});
                        $("#number2 b").css({ 'color' : 'black'});
                        $("#number3").css({ 'background-color' : '#f7f7f7'});
                        $("#number3 b").css({ 'color' : 'black'});
                        $("#number5").css({ 'background-color' : '#f7f7f7'});
                        $("#number5 b").css({ 'color' : 'black'});
                        $("#number6").css({ 'background-color' : '#f7f7f7'});
                        $("#number6 b").css({ 'color' : 'black'});
                        $("#number7").css({ 'background-color' : '#f7f7f7'});
                        $("#number7 b").css({ 'color' : 'black'});


                        $('#sub_menu_ul1').css("display" , "none");
                        if (agent.indexOf("chrome") != -1) {
                            $('#sub_menu_ul2').css({'display' : 'inline', 'margin-right' : '427px', 'padding' :  '20px 0 20px 0'});
                        }else{
                            $('#sub_menu_ul2').css({'display' : 'inline', 'margin-right' : '427px', 'padding' :  '20px 0 20px 0'});
                        }

                        $('#sub_menu_ul3').css("display" , "none");
                        $('#sub_menu_ul4').css("display" , "none");
                        $('#sub_menu_ul5').css("display" , "none");
                        $('#sub_menu_ul0').css("display" , "none");

                    }else if(id == "number5"){
                        $(this).css({ 'background-color' : '#5674b9'});
                        $("#number2 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number3 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number4 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number5 b").css({ 'color' : 'white', 'font-weight' : '500'});
                        $("#number6 b").css({ 'color' : 'white', 'font-weight' : 'normal'});

                        $("#number2").css({ 'background-color' : '#f7f7f7'});
                        $("#number2 b").css({ 'color' : 'black'});
                        $("#number3").css({ 'background-color' : '#f7f7f7'});
                        $("#number3 b").css({ 'color' : 'black'});
                        $("#number4").css({ 'background-color' : '#f7f7f7'});
                        $("#number4 b").css({ 'color' : 'black'});
                        $("#number6").css({ 'background-color' : '#f7f7f7'});
                        $("#number6 b").css({ 'color' : 'black'});
                        $("#number7").css({ 'background-color' : '#f7f7f7'});
                        $("#number7 b").css({ 'color' : 'black'});

                        $('#sub_menu_ul1').css("display" , "none");
                        $('#sub_menu_ul2').css("display" , "none");

                        if (agent.indexOf("chrome") != -1) {
                            $('#sub_menu_ul3').css({'display' : 'inline', 'margin-right' : '285px', 'padding' :  '20px 0 20px 0'});
                        }else{
                            $('#sub_menu_ul3').css({'display' : 'inline', 'margin-right' : '285px', 'padding' :  '20px 0 20px 0'});
                        }

                        $('#sub_menu_ul4').css("display" , "none");
                        $('#sub_menu_ul5').css("display" , "none");
                        $('#sub_menu_ul0').css("display" , "none");

                    }else if(id == "number6"){
                        $(this).css({ 'background-color' : '#5674b9'});
                        $("#number2 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number3 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number4 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number5 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
                        $("#number6 b").css({ 'color' : 'white', 'font-weight' : '500'});

                        $("#number2").css({ 'background-color' : '#f7f7f7'});
                        $("#number2 b").css({ 'color' : 'black'});
                        $("#number3").css({ 'background-color' : '#f7f7f7'});
                        $("#number3 b").css({ 'color' : 'black'});
                        $("#number4").css({ 'background-color' : '#f7f7f7'});
                        $("#number4 b").css({ 'color' : 'black'});
                        $("#number5").css({ 'background-color' : '#f7f7f7'});
                        $("#number5 b").css({ 'color' : 'black'});
                        $("#number7").css({ 'background-color' : '#f7f7f7'});
                        $("#number7 b").css({ 'color' : 'black'});

                        $('#sub_menu_ul1').css("display" , "none");
                        $('#sub_menu_ul2').css("display" , "none");
                        $('#sub_menu_ul3').css("display" , "none");

                        if (agent.indexOf("chrome") != -1) {
                            $('#sub_menu_ul4').css({'display' : 'inline', 'margin-right' : '143px', 'padding' :  '20px 0 20px 0'});
                        }else{
                            $('#sub_menu_ul4').css({'display' : 'inline', 'margin-right' : '143px', 'padding' :  '20px 0 20px 0',});
                        }

                        $('#sub_menu_ul5').css("display" , "none");
                        $('#sub_menu_ul0').css("display" , "none");
                        //$('#sub_menu_ul4 > li').filter(':first').css("margin-left" , "0px");
                    }else if(id == "number7"){
                        $(this).css({ 'background-color' : '#5674b9'});
                        $("#number7 b").css({ 'color' : 'white'});
                        $('#sub_menu_ul1').css("display" , "none");
                        $('#sub_menu_ul2').css("display" , "none");
                        $('#sub_menu_ul3').css("display" , "none");
                        $('#sub_menu_ul4').css("display" , "none");
                        $('#sub_menu_ul5').css("display" , "inline");
                        $('#sub_menu_ul0').css("display" , "none");
                        $('#sub_menu_ul5 > li').filter(':first').css("margin-left" , "650px");

                        $("#number2").css({ 'background-color' : '#f7f7f7'});
                        $("#number2 b").css({ 'color' : 'black'});
                        $("#number3").css({ 'background-color' : '#f7f7f7'});
                        $("#number3 b").css({ 'color' : 'black'});
                        $("#number4").css({ 'background-color' : '#f7f7f7'});
                        $("#number4 b").css({ 'color' : 'black'});
                        $("#number5").css({ 'background-color' : '#f7f7f7'});
                        $("#number5 b").css({ 'color' : 'black'});
                        $("#number6").css({ 'background-color' : '#f7f7f7'});
                        $("#number6 b").css({ 'color' : 'black'});

                        if (agent.indexOf("chrome") != -1) {
                            $('#sub_menu_ul5').css({'display' : 'inline', 'margin-right' : '1px', 'padding' :  '20px 0 20px 0'});
                        }else{
                            $('#sub_menu_ul5').css({'display' : 'inline', 'margin-right' : '1px', 'padding' :  '20px 0 20px 0',});
                        }
                    }
                    if($("#gnb_sub_menu").css("display")=="none"){
                        $("#gnb_sub_menu").slideDown("fast");
                    }
                    $(".content").mouseover(function(){
                        $("#gnb_sub_menu").slideUp("fast");
                    });
                    $(".skdslider").mouseover(function(){
                        $("#gnb_sub_menu").slideUp("fast");
                    });
                    $(".banner").mouseover(function(){
                        $("#gnb_sub_menu").slideUp("fast");
                    });
                });

                $("div#gnb_sub_menu").mouseleave(function(){
                    //$("#gnb_sub_menu").slideUp("fast");
                });


                $("div.header_top").mouseover(function(){
                    $("#gnb_sub_menu").slideUp("fast");
                });

            });
            var b = 0;
            $("body").on("mousewheel", function (event) {
                b++;
                var i = event.originalEvent.wheelDelta; 
                if(b == 1){
                    $(".main_txt_tit").fadeIn(2500);
                }
                if(b == 3){
                    $(".main_txt").fadeIn(3000);
                }
                if(b == 5){
                    $(".makeContent1 img").attr("src", "http://admin.acus.kr/secure_zone/upFile/cubebio_en/148696912052107.gif");
                }
            });
            </script>
                
                <?php 
                                
                    if (!$_SESSION["USER_ID"]){ // check ว่าล๊อกอินหรือเปล่า เพื่อแสดง navbar
                        require "view/header.php";
                    } else {
                        require "view/header_admin.php";
                    }
                ?>


                

                <div class="fluid_container">

                    <div class="camera_wrap" id="camera_wrap_4">
                        <div data-thumb="images/thum_1471424419389543.jpg" data-src="images/b1.jpg"></div>           
                        <div data-thumb="images/thum_1471424419390401.jpg" data-src="images/b2.jpg"></div>           
                        <div data-thumb="images/thum_1471424419390972.jpg" data-src="images/b3.jpg"></div>           
                    </div>

                </div>

                <style>
                #img_id1{
                    position: absolute;
                    width: 100px;
                    height: 50px;
                    z-index: 99;
                    margin-top: 366px;
                    margin-left: 244px;
                }
                #img_id2{
                    position: absolute;
                    width: 100px;
                    height: 50px;
                    z-index: 99;
                    margin-top: 366px;
                    margin-left: 690px;
                }
                #img_id3{
                    position: absolute;
                    width: 100px;
                    height: 50px;
                    z-index: 99;
                    margin-top: 2130px;
                    margin-left: 234px;
                }
                #img_id4{
                    position: absolute;
                    width: 100px;
                    height: 50px;
                    z-index: 99;
                    margin-top: 2028px;
                    margin-left: 273px;
                }
                #img_id5{
                    position: absolute;
                    width: 100px;
                    height: 50px;
                    z-index: 99;
                    margin-top: 293px;
                    margin-left: 249px;
                }

                #img_cable1{
                    position: absolute;
                    width: 130px;
                    height: 50px;
                    z-index: 99;
                    margin-top: 3870px;
                    margin-left: 228px;

                }

                #img_cable2{
                    position: absolute;
                    width: 130px;
                    height: 50px;
                    z-index: 99;
                    margin-top: 3870px;
                    margin-left: 368px;

                }

                #img_teflon1{
                    position: absolute;
                    width: 130px;
                    height: 50px;
                    z-index: 99;
                    margin-top: 3335px;
                    margin-left: 228px;

                }

                #img_teflon2{
                    position: absolute;
                    width: 130px;
                    height: 50px;
                    z-index: 99;
                    margin-top: 3335px;
                    margin-left:368px;

                }
                </style>
                
                <div id="content">
                    <div class="content">
                        <div id="grid_area" style="height:1739px;">
                            <div class="dragEle ui-droppable boxShadow_none" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 9999; position: absolute; margin-left: 0px; margin-top: 69px; width: 1200px; height: 170px;" condition="ok" fix_pos="0">
                                <div class="dragEleDiv" style="z-index: 999999;">
                                    <div class="makeContent0" style="z-index: 1;">
                                        <style>
                 .main_icon{margin:0 auto; text-align:center; width:61px; height:24px; padding-bottom:20px;}
                 .main_txt_tit{font-family: Arial;
                        font-size: 25px;
                        font-weight: bold;
                        text-transform: uppercase;
                        color:#000;
                        text-align:center;}

                  .tc{color: #5674b9;}

                  .main_txt{
                        font-family: NanumBarunGothic;
                        font-size: 14px;
                        text-transform: uppercase;
                        color: #898989;
                        text-align:center;
                        line-height:22px;
                        margin-top:10px;
                    }


                    div.slide-down {
                          width:100%;
                          overflow:hidden;
                        }
                        div.slide-down p {
                          animation: 2s slide-down;
                          margin-top:0%;
                        }

                        @keyframes slide-down {
                          from {
                            margin-top: -100%;
                            height: 300%; 
                          }

                          to {
                            margin-top: 0%;
                            height: 100%;
                          }
                        }


                </style>

                                        <div class="">
                                            <div class="main_icon">
                                                <img src="http://cubebio.asia/assets/img/20165294515_editor_image.png">
                                            </div>
                                            <div class="slide-down">
                                                <p class="main_txt_tit" style="">เกี่ยวกับ <span class="tc">cubebio</span></p>
                                            </div>
                                            <div class="slide-down">
                                                <p class="main_txt" style="">
                                                    เพื่อก้าวเป็นบริษัทที่ยกระดับคุณภาพชีวิตทางด้านสุขภาพของมนุษยชาติด้วยการช่วยให้สามารถตรวจพบเจอมะเร็งได้ตั้งแต่ระยะต้น<br>
                                                    เรากำลังเตรียมตัวก้าวขึ้นสู่การเป็นศูนย์มะเร็ง TOTAL SOLUTION แห่งแรกของโลก  <br>
                                                    ร่วมไปกับการเป็นบริษัทวิจัยทางด้านเทคโนโลยีชีวภาพที่พร้อมแข่งขันเพื่อก้าวขึ้นเป็นอันดับหนึ่งของตลาดโลก
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dragEle ui-droppable boxShadow_none" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 9999; position: absolute; margin-left: 0px; margin-top: 289px; width: 1200px; height: 130px;" condition="ok" fix_pos="0">
                                <div class="dragEleDiv" style="z-index: 999999;">
                                    <div class="makeContent1" style="z-index: 1;">
                                        <div style="width:100%;text-align:center;">
                                            <img src="http://cubebio.asia/assets/img/148696912052107.gif" style="" border="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dragEle ui-droppable boxShadow_none" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 9999; position: absolute; margin-left: 0px; margin-top: 479px; width: 400px; height: 410px;" condition="ok" fix_pos="0">
                                <div class="dragEleDiv" style="z-index: 999999;">
                                    <div class="makeContent2" style="z-index: 1;">
                                        <style type="text/css">
                                            .wrap-img, .wrap-img2 { width:400px; height:400px; overflow:hidden; }

                                            /* 마우스 오버시 효과 */
                                            .wrap-img:hover img {
                                            transform:scale(1.2);
                                            -webkit-transform:scale(1.2);
                                            -moz-transform:scale(1.2);
                                            -o-transform:scale(1.2);
                                            -webkit-transition:2s;
                                            -moz-transition:2s;
                                            -ms-transition:2s
                                            }

                                            /* 마우스 아웃시 효과 */
                                            .wrap-img img {
                                            transform:scale(1);
                                            -webkit-transform:scale(1);
                                            -moz-transform:scale(1);
                                            -o-transform:scale(1);
                                            -webkit-transition:2s;
                                            -moz-transition:2s;
                                            -ms-transition:2s
                                            }

                                            .img{position:relative; float:left;}

                                            .text{position:absolute; z-index:1; text-align:center; font-family:Noto Sans 'Noto Sans KR', sans-serif; font-size:25px; color:#fff; margin-top:120px; width:400px; padding:0;}

                                            .text_s{position:absolute; z-index:1; text-align:center; font-family:Noto Sans 'Noto Sans KR', sans-serif; font-size:14px; color:#fff; margin-top:170px; line-height:20px; width:400px; padding:0;}

                                            a .btn{z-index:1; position:absolute; color:#fff;; border:#fff solid 1px; width:95px; height:25px; text-align:center; font-family:arial; font-size:14px; font-weight:bold; margin:0 auto; float:left; margin-left:150px; padding-bottom:13px; margin-top:245px;}
                                            /*
                                             a:hover .btn{z-index:1; position:absolute; margin-top:245px; color:#000;; border:#fff solid 1px; width:95px; height:25px; text-align:center; font-family:arial; font-size:14px; font-weight:bold; margin:0 auto; float:left; margin-left:150px; background:#fff;padding-bottom:13px;}*/

                                             .wrap-img:hover .btn:hover{z-index:1; position:absolute; color:#000;; border:#fff solid 1px; width:95px; height:25px; text-align:center; font-family:arial; font-size:14px; font-weight:bold; margin:0 auto; float:left; margin-left:150px; background:#fff;padding-bottom:13px; margin-top:245px;}

                                        </style>
                                        
                                        <div id="cube">
                                            <div style="width:400px;">
                                                <p class="text" style="padding:0;">ทำความรู้จัก CUBEBIO</p>
                                                <p class="text_s" style="padding:0;">เป้าหมายของ CUBEBIO คือ<br>การทำ Total Solution สำหรับโรคมะเร็งเป็นที่แรกของโลก</p>
                                            </div>

                                            <a href="http://cubebio.asia/view/greeting.php">
                                                <div class="wrap-img">
                                                    <div class="btn">อ่านเพิ่มเติม</div>
                                                    <img src="http://cubebio.asia/assets/img/20165392316_editor_image.jpg">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dragEle ui-droppable boxShadow_none" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 9999; position: absolute; margin-left: 400px; margin-top: 479px; width: 400px; height: 400px;" condition="ok" fix_pos="400">
                                <div class="dragEleDiv" style="z-index: 999999;">
                                    <div class="makeContent3" style="z-index: 1;">
                                        <div id="test">
                                            <div style="width:400px;">
                                                <p class="text" style="padding:0;">วิจัยและพัฒนา</p>
                                                <p class="text_s" style="padding:0;">
                                                    แนะนำ CUBEBIO R&amp;D Center <br>
                                                    ที่ซึ่งทำการวิจัยตัวชี้วัดทางชีวภาพของโรคมะเร็ง, <br>
                                                    พัฒนาชุดตรวจโรคมะเร็ง เป็นต้น
                                                </p>
                                            </div>
                                            <a href="http://cubebio.asia/view/research.php">
                                                <div class="wrap-img">
                                                    <div class="btn">อ่านเพิ่มเติม</div>
                                                    <img src="http://cubebio.asia/assets/img/20165432017_editor_image.jpg">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dragEle ui-droppable boxShadow_none" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 9999; position: absolute; margin-left: 800px; margin-top: 479px; width: 400px; height: 400px;" condition="ok" fix_pos="800">
                                <div class="dragEleDiv" style="z-index: 999999;">
                                    <div class="makeContent4" style="z-index: 1;"><!-- 현미경이미지 -->
                                        <div class="wrap-img">
                                           <img src="http://cubebio.asia/assets/img/20165192217_editor_image.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dragEle ui-droppable boxShadow_none" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 999999; position: absolute; margin-left: 40px; margin-top: 1459px; width: 310px; height: 230px;" condition="ok" fix_pos="40">
                                <div class="dragEleDiv" style="z-index: 999999;">
                                    <div class="makeContent5" style="z-index: 1;">
                                        <div style="padding:25px 0;">
                                            <p style="text-align:left;">
                                                <a href="http://en.cubebio.co.kr/index.php?device=pc">
                                                    <img src="http://cubebio.asia/assets/img/20172323213_editor_image.png">
                                                </a>
                                            </p>
                                            <p style="font-family:NanumBarunGothic; font-size:13px; color:#a8a8a8; line-height:21px; padding-top:15px; text-align:left;">
                                                Floor 8 &amp; 9, 10 Gil, Digital-Ro, Keumchun-Gu, Seoul
                                                <br>
                                                (Gasan-Dong Hi Hill Building)
                                                <br>
                                                Business Registration Number 211-88-68480
                                                <br>
                                                TEL . 070-4607-3869 | FAX . 070-8233-0340
                                                <br>
                                                E-mail . cubebio@cubebio.co.kr
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dragEle ui-droppable boxShadow_none" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 9999; position: absolute; margin-left: 0px; margin-top: 879px; width: 400px; height: 400px;" condition="ok" fix_pos="0">
                                <div class="dragEleDiv" style="z-index: 999999;">
                                    <div class="makeContent6" style="z-index: 1;"><!-- 쇼룸 -->
                                        <div id="show">
                                            <p class="text" style="padding:0;">โชว์รูม</p>
                                            <p class="text_s" style="padding:0;">เชิญพบกับผลิตภัณฑ์นวัตกรรมใหม่ที่เป็นเอกลักษณ์ <br>
                                                จากการวิจัย, พัฒนาและผลิตโดยวิธีเฉพาะ<br>
                                                ของ CUBEBIO เท่านั้น
                                            </p>
                                            <a href="http://cubebio.asia/view/showroom.php">
                                                <div class="wrap-img">
                                                    <div class="btn">อ่านเพิ่มเติม</div>
                                                    <img src="http://cubebio.asia/assets/img/20165472317_editor_image.jpg">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dragEle ui-droppable boxShadow_none" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 9999; position: absolute; margin-left: 400px; margin-top: 879px; width: 400px; height: 400px;" condition="ok" fix_pos="400">
                                <div class="dragEleDiv" style="z-index: 999999;">
                                    <div class="makeContent8" style="z-index: 1;">
                                        <div style="width:100%;text-align:center;">
                                            <img src="http://cubebio.asia/assets/img/1486971027263645.png" style="" border="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dragEle ui-droppable boxShadow_none" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 9999; position: absolute; margin-left: 800px; margin-top: 879px; width: 400px; height: 400px;" condition="ok" fix_pos="800">
                                <div class="dragEleDiv" style="z-index: 999999;">
                                    <div class="makeContent8" style="z-index: 1;">
                                        <div style="width:100%;text-align:center;">
                                            <img src="http://cubebio.asia/assets/img/1487031571763868.png" style="" border="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dragEle ui-droppable boxShadow_none" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 999999; position: absolute; margin-left: 440px; margin-top: 1419px; width: 850px; height: 320px;" condition="ok" fix_pos="440">
                                <div class="dragEleDiv" style="z-index: 999999;">
                                    <div class="makeContent9" style="z-index: 1;">
                                        <style>
                                            .footer_s_t{
                                                font-family: NanumBarunGothic;
                                                font-size:13px;
                                                font-weight: bold;
                                                color: #fff;
                                                text-align:left;
                                            }
                                            .sitemap_txt{
                                                width:130px;
                                                text-align:left;
                                            }
                                            .sitemap_txt a{
                                                font-family: NanumBarunGothic;
                                                font-size:13px;
                                                color: #fff;
                                                line-height:24px;
                                                text-align:left;
                                                font-weight:lighter;
                                                text-decoration:none;
                                            }
                                            .sitemap_txt a:hover{
                                                font-family: NanumBarunGothic;
                                                font-size:13px;
                                                color: #fff;
                                                line-height:24px;
                                                text-align:left;
                                                font-weight:lighter;
                                                text-decoration:underline;
                                            }
                                            .sitemap_txt_f{
                                                width:130px;
                                                text-align:left;
                                            }
                                            .sitemap_txt_f a{
                                                font-family: NanumBarunGothic;
                                                font-size:13px;
                                                color: #fff;
                                                line-height:24px;
                                                text-align:left;
                                                font-weight:lighter;
                                                text-decoration:none;
                                            }
                                            .sitemap_txt_f a:hover{
                                                font-family: NanumBarunGothic;
                                                font-size:13px;
                                                color: #fff;
                                                line-height:24px;
                                                text-align:left;
                                                font-weight:lighter;
                                                text-decoration:underline;
                                            }
                                        </style>

                                        <div style="float:left; width:160px;">
                                            <p class="footer_s_t">เกี่ยวกับเรา</p>
                                            <ul style="width:130px; list-style:none;">
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/greeting.php">ทักทาย</a>
                                                </li>
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/overview.php">ภาพรวมและประวัติ</a>
                                                </li>
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/fields.php">สาขาธุรกิจ</a>
                                                </li>
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/vision.php">วิสัยทัศน์</a>
                                                </li>
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/center.php">แนะนำศูนย์วิจัย</a>
                                                </li>
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/certificate.php">ใบรับรองและสิทธิบัตร</a>
                                                </li>
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/map.php">ที่ตั้งบริษัท</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div style="float:left; width:160px;">
                                            <p class="footer_s_t">แนะนำสินค้า</p>
                                            <ul style="width:130px; list-style:none;">
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/diagnosis-kit.php">ชุดตรวจโรคมะเร็ง</a>
                                                </li>
                                            </ul>
                                            
                                            <p class="footer_s_t" style="padding-top:125px; line-height:20px;">วิจัยและพัฒนา</p>
                                            <ul style="width:130px; list-style:none;">
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/research.php" style="line-height:18px; float:left; margin-top:10px;">วิจัยและพัฒนา</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <div style="float:left; width:160px;">
                                            <p class="footer_s_t">ประชาสัมพันธ์</p>
                                            <ul style="width:130px; list-style:none;">
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/news.php">ข่าวสารจาก CUBEBIO</a>
                                                </li>
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/press.php">ข่าวจากสื่อมวลชน</a>
                                                </li>
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/showroom.php">โชว์รูม</a>
                                                </li>
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/division.php">สำนักงานภาคธุรกิจ</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <div style="float:left; width:160px;">
                                            <p class="footer_s_t">ข่าวสาร</p>
                                            <ul style="width:80px; list-style:none;">
                                                <li class="sitemap_txt">
                                                    <a href="http://cubebio.asia/view/reqruit.php">รับสมัครงาน</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <div style="float:left;">
                                            <p class="footer_s_t">บริการลูกค้า</p>
                                            <ul style="list-style:none; width:130px;">
                                                <li class="sitemap_txt_f">
                                                    <a href="http://cubebio.asia/view/qa.php">Q&amp;A</a>
                                                </li>
                                                <li class="sitemap_txt_f">
                                                    <a href="http://cubebio.asia/view/faq.php">FAQ</a>
                                                </li>
                                                <li class="sitemap_txt_f">
                                                    <a href="http://cubebio.asia/view/contact.php">ติดต่อเรา</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- /////////////////////////// footer /////////////////////////// -->
                <div id="footer" style="background-color:#252525;clear:both;">
                    <div class="footer">
                        <div id="footer_area">
                            <p style="text-align:center; font-family:arial; color:#a8a8a8; line-height:20px; font-size:13px;">
                                Copyright (C) 2016 CUBEBIO. All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /////////////////////////// footer /////////////////////////// -->
            </div>


            <script type="text/javascript" language="javascript"> 
                function initMoving(target, position, topLimit, btmLimit) {
                    if (!target){
                        return false;
                    }

                    var obj = target;
                    obj.initTop = position;
                    obj.topLimit = topLimit;
                    obj.bottomLimit = document.body.scrollHeight - btmLimit;
                    obj.style.position = "absolute";
                    obj.top = obj.initTop;
                    obj.left = obj.initLeft;

                    if (typeof(window.pageYOffset) == "number") {
                        obj.getTop = function() {
                            return window.pageYOffset;
                        }
                    } 
                    else if (typeof(document.documentElement.scrollTop) == "number") {
                        obj.getTop = function() {
                            return document.documentElement.scrollTop;
                        }
                    }
                    else {
                        obj.getTop = function() {
                            return 0;
                        }
                    }

                    if (self.innerHeight) {
                        obj.getHeight = function() {
                            return self.innerHeight;
                        }
                    }
                    else if(document.documentElement.clientHeight) {
                        obj.getHeight = function() {
                            return document.documentElement.clientHeight;
                        }
                    }
                    else {
                        obj.getHeight = function() {
                            return 500;
                        }
                    }

                    obj.move = setInterval(function() {
                        if (obj.initTop > 0) {
                            pos = obj.getTop() + obj.initTop;
                        }
                        else {
                            pos = obj.getTop() + obj.getHeight() + obj.initTop;
                        }

                        if (pos > obj.bottomLimit)
                            pos = obj.bottomLimit;

                        if (pos < obj.topLimit)
                            pos = obj.topLimit;

                        interval = obj.top - pos;
                        obj.top = obj.top - interval / 3;
                        obj.style.top = obj.top + "px";
                    }, 30)
                }
            </script>

            <script type="text/javascript">initMoving(document.getElementById("sideQuick"), 80, 10, 0);</script>
            <script type="text/javascript">
                $(function() {
                    // glvision 사이드 퀵메뉴 위치
                    if (location.href.indexOf("glvision") >= 0) {
                        $('#sideQuick').attr("style","position:absolute; width:50px; overflow:hidden; z-index:2147483647; right:100px;");
                        initMoving(document.getElementById("sideQuick"), 750, 10, 0);
                    }
                });
            </script>
            <map name="ImageMapxxx">
                <area shape="rect" coords="147, 12, 230, 25" href="javascript:pops1(100,100,700,490,&#39;/clients/content/acus_service.php?bs=1&#39;);">
                <area shape="rect" coords="235, 10, 323, 28" href="javascript:pops1(100,100,700,490,&#39;/clients/content/acus_service.php?bs=2&#39;);">
            </map>
        </div>
    </body>
</html>