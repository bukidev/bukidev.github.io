<?php session_start(); ?>

<?php 
 
if ($_SESSION["USER_ID"]){  //check session
 
	  Header("Location: http://cubebio.asia/"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
 
}else{?>
<!DOCTYPE html>
<html lang="ko" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="imagetoolbar" content="no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>cubebio_en</title>
        <!--<link rel="canonical" href="http://en.cubebio.co.kr/bbs/login.php">-->
        <link rel="stylesheet" href="http://cubebio.asia/assets/css/style.css">
        <!--[if lte IE 8]>
        <script src="http://en.cubebio.co.kr/js/html5.js"></script>
        <![endif]-->
        <!--<script>
        // 자바스크립트에서 사용하는 전역변수 선언
        var g5_url       = "http://en.cubebio.co.kr";
        var g5_bbs_url   = "http://en.cubebio.co.kr/bbs";
        var g5_is_member = "";
        var g5_is_admin  = "";
        var g5_is_mobile = "";
        var g5_bo_table  = "";
        var g5_sca       = "";
        var g5_editor    = "cheditor5";
        var g5_cookie_domain = "";
        </script>-->
        <script src="http://cubebio.asia/assets/js/jquery-1.8.3.min.js"></script>
        <script src="http://cubebio.asia/assets/js/jquery.menu.js"></script>
        <script src="http://cubebio.asia/assets/js/common.js"></script>
        <script src="http://cubebio.asia/assets/js/wrest.js"></script>
        <script type="text/javascript" charset="UTF-8" src="http://cubebio.asia/assets/js/common.js"></script>
        <script type="text/javascript" charset="UTF-8" src="http://cubebio.asia/assets/js/util.js"></script>
        
        <link rel="stylesheet" href="../assets/css/base.css">
        <link rel="stylesheet" href="../assets/css/layout.css">
        <link rel="stylesheet" href="../assets/css/jquery-ui.css"> 
        <link rel="stylesheet" href="../assets/css/gnb.css"> 
        <link rel="stylesheet" href="../assets/css/img.css"> 
        <link rel="stylesheet" href="../assets/css/content.css"> 
    
        <script type="text/javascript" src="../assets/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="../assets/js/jquery-ui-1.8.16.custom.min.js"></script>
        <script type="text/javascript" src="../assets/js/jquery.slides.min.js"></script>
        <script type="text/javascript" src="../assets/js/client.js"></script>
        <script type="text/javascript" src="../assets/js/popup.js"></script>
        <script type="text/javascript" src="../assets/js/jquery.cookie.js"></script>
        <script type="text/javascript" src="../assets/js/jquery.bpopup.min.js"></script>
        <script type="text/javascript" src="../assets/js/gnb.js"></script>
        <script type="text/javascript" src="../assets/js/left-menu.js"></script>
        <script type="text/javascript" src="../assets/js/moving.js"></script>
        <script src="../assets/js/js.js"></script>
	
        <!--<link rel="stylesheet" href="http://cubebio.asia/assets/css/base.css">
        <link rel="stylesheet" href="http://cubebio.asia/assets/css/layout.css">
        <link rel="stylesheet" href="http://cubebio.asia/assets/css/default_e.css">
        <link rel="stylesheet" href="http://cubebio.asia/assets/css/jquery-ui.css"> -->
        <script type="text/javascript" src="http://cubebio.asia/assets/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="http://cubebio.asia/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="http://cubebio.asia/assets/js/jquery.slides.min.js"></script>
        <script type="texy/javascript" src="http://cubebio.asia/assets/js/client.js"></script>
        <script type="text/javascript" src="http://cubebio.asia/assets/js/jquery.cookie.js"></script>
        <script src="http://cubebio.asia/assets/js/js"></script>

        <script type="text/javascript" language="javascript">
            var exrSeq = "";
                $(document).ready(function(){
                        for(i=0;i<exrSeq.length;i++){
                            viewPop('pops'+exrSeq[i]);
                        }

                    checkRoll();
                    checkGoods();
                    checkMap();

                    if($(".tab").length > 0){
                        var tabs = 0;
                        for(tabs = 0;tabs<$(".tab").length;tabs++){
                             tab_idx = $(".tab").eq(tabs).attr("title");
                             urls = "/tab.php?idx="+tab_idx;
                             run_tabs(tabs);
                        }
                    }

                    $(".roll").attr("title","");

                    //1차 메뉴 올렸을 경우
                    $("#topmenu").mouseover(function(){
                        //alert($("#submenu").css("display"));
                        if($("#submenu").css("display")=="none"){
                            $("#submenu").slideDown("fast");
                        }
                    });

                    $("div#submenu").mouseleave(function(){
                        $("#submenu").slideUp("fast");
                    });
                    $("div#header").mouseover(function(){
                        $("#submenu").slideUp("fast");
                    });

                });


                function checkRoll(){
                    var rolls = 0;
                    for(rolls = 0;rolls<$(".roll").length;rolls++){
                         roll_idx = $(".roll").eq(rolls).attr("title");
                         urls = "/module/banner_roll_pc.php?idx="+roll_idx;
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
                    $.ajax({
                        url:urls ,
                        cache: false,
                        context: document.body,
                        beforeSend : function() {  },                                   
                        statusCode : {   404 : function () {  alert('레이아웃 로딩 실패');  }  },                   
                        success    : function(html) { $(".tab").eq(num).html(html);   },   
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

            </script>
        <style>
            .top_menu_text_hover a:hover {font-weight:bold; color:;}
            .top_menu_text_hover a {font-weight:bold; color:;}
            .sub_menu_text_hover a:hover {color:;}
            .sub_menu_text_hover a {color:;}
        </style>
    </head>
    <body>
        
        <div id="roll"></div>
        
        
        <div id="wrapper_main" style="background: url(http://admin.acus.kr/secure_zone/upFile/main_bg_cubebio.jpg) no-repeat;background-position: 50% 0%; background-size: px  px">
            
            <!--<style>
                #number4{    padding: 52px 0px 9px !important; }
                #gnb_menu li:hover {
                    padding: 52px 40px 27px;
                    float: left;
                    margin: -40px 0px;
                    font-size: 16px;
                    border-right-width: 1px;
                    border-right-style: solid;
                    border-right-color: rgb(86, 116, 185);
                    border-left-width: 1px;
                    /*border-left-style: solid;*/
                    border-left-color: rgb(225, 225, 225);
                    background-color: rgb(86, 116, 185);
                    font-weight:normal;
                }
                .gnb_top_menu a b{
                    font-weight:normal;
                }

                #gnb_menu {
                    float: right !important;
                    margin-top: 54px !important;
                    text-align: center !important;
                }
                #header {
                    width: 100%;
                    height: 130px;
                    position: relative;
                }
                .header .logo {
                    position: absolute;
                    float: left;
                    height: 107px;
                    display: table;
                    width: 130px;
                    margin-top: -10px;
                }
                .gnb_ab{
                    width: 100%;
                    position: absolute;
                    top: 120px;
                    background: 0;
                }
                .sub_menu_text_hover a{ 
                    color:black;
                    text-align:left;
                    padding-left:10px;
                }
                .sub_menu_text_hover a:hover{ 
                    color:#5674b9;
                    text-decoration:underline;
                    text-align:left;
                    padding-left:10px;
                }
                #gnb_menu_sub ul {
                    margin: 0 0 0 0;
                    padding: 0 0 0 0;
                    border : 0;
                    list-style-type: none;
                    overflow: auto;
                    text-align: left;
                    border: 2px solid #5674b9;
                    background-color: white;
                    margin-top:-11px;
                    overflow:hidden;
                }
                #gnb_menu_sub ul li{
                   float:right;
                   display:inline;
                }
                #gnb_menu_sub>ul {
                    margin-top:0px;
                    float:  right;
                    width: 137px;
                }
                #gnb_menu_sub li {
                    margin: 8px 0 5px 30px;
                    width: 130px;
                    font-size: 12px;
                    text-align: left;
                }

                #gnb_menu_sub {
                    width: 1200px;
                    margin: 0 auto;
                    height: 100px;
                }
                #sideQuick{
                    margin-left:42% !important;
                    margin-top: 500px;
                }
                .header #gnb_menu li{
                    float: left;
                    margin: -40px 0;
                    font-size: 16px;
                    /*padding: 31px;*/
                    width:141px;
                    border-right: 1px solid #e1e1e1;

                    background-color:#f7f7f7;
                }
                ul #sub_menu_ul4{float:right;}
            </style>
            
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
                </script>-->

            <!-- header -->
            <?php require "header.php" ?>
            
            <div id="content">
                <div class="content">
                    <div id="leftBox" style="margin-top:149px;">
                        <h1><img src="../assets/img/membership.jpg"></h1>
                        <ul style="height:100%; min-height:250px;">
                            <li>
                                <a href="http://en.cubebio.co.kr/bbs/login.php">
                                <img src="../assets/img/login_on.jpg" alt="로그인">
                                </a>
                            </li>
                            <li>
                                <a href="http://en.cubebio.co.kr/bbs/register.php">
                                    <img src="./cubebio_en_files/join_off.jpg" onmouseover="this.src=this.src.replace(&#39;_off&#39;,&#39;_on&#39;)" onmouseout="this.src=this.src.replace(&#39;_on&#39;,&#39;_off&#39;)" alt="회원가입">
                                </a>
                            </li>

                            <li>
                                <a href="http://en.cubebio.co.kr/bbs/password_lost.php">
                                    <img src="../assets/img/search_off.jpg" onmouseover="this.src=this.src.replace(&#39;_off&#39;,&#39;_on&#39;)" onmouseout="this.src=this.src.replace(&#39;_on&#39;,&#39;_off&#39;)" alt="아이디/비밀번호 찾기">
                                </a>
                            </li>
                        </ul>
                        <div style="clear:both;margin-top:20px;"></div>
                        <div></div>
                    </div>
                    <div class="right_content" style="">
                        <div id="grid_area" style="height: 0px; margin-top: 160px;">



<style>
p{ float: left; /*padding-right: 15px;*/ }
#login_form span{ font-size:13px; }
#leftBox{ display:none; }
#login_form{ width: 1200px; margin-top:0px; font-family:noto sans KR, sans-serif;}
#grid_area{ margin-top:0px !important;}
.login_frm2{
    width: 840px;
    line-height: 90px;
	height:100px;
    border: 1px solid #e0e0e0;
    background-color: #f4f4f4;
    margin-left: 0;
    margin-top: -20px;
	padding:0 180px;
	float:left;
}	
.flogin{
	padding: 21px 0px 0px 0px;
    margin: 0 auto;
    width: 670px;
}
.right_content {
    float: right;
    width: 100%;
    margin: 20% 0 0 20px;
    background: none;
}
.mArea2{ width:100% !important; margin-top: 100px;}
#footer {
    width: 139% !important;
    height: 145px;
    background: black;
    margin-top: 220px !important;
    margin-left: -232px !important;
}
input[type='text'], input[type='password']{padding-left:10px;}
</style>
<script type="text/javascript">
$(document).ready(function(){
	var bbsreplll = $(".mArea2").attr('id'); 
	if(bbsreplll == "rCon") $(".login_frm2").css("width" , "1080px"); $("#grid_area").css("height" , "0px");
});
</script>



                        
                            <!-- login form -->
                            <div id="login_form">
                                <h1 style="text-align:center; font-size:30px; font-family:noto sans CJK KR; margin-bottom:20px; font-weight:500;">
                                    LOGIN
                                </h1>
                                <div class="table_login" style="width:100%; height:238px; border:1px solid #e0e0e0; border-top:2px solid #282828; ">
                                    <form name="login_form" class="flogin" action="http://cubebio.asia/controller/login_check.php" method="post">
                                        <aside id="login_info" style="float:left; margin:30px 0 100px 0; padding-right:30px; width:130px;">
                                            <p>
                                                <span style="font-family:Noto Sans CJK KR; font-size: 40px; color: #222; font-weight:500;">LOGIN</span>
                                                <span style="font-size: 15px; color:#404040;">สมาชิกเข้าระบบ</span>
                                            </p>
                                        </aside>
                                        <div style="padding:10px; height: 117px;">
                                            <ul style="float:left; width:352px; margin-left: 20px;">
                                                <li style="margin-bottom: 2px;">
                                                    <input type="text" name="login_id" id="login_id" placeholder="ID" required="" style="height:45px; width:335px; padding:0 0 0 10px;" class="frm_input required" size="30" maxlength="20">
                                                </li>
                                                <li>
                                                    <input type="password" name="login_password" id="login_pw" placeholder="รหัสผ่าน" required="" class="frm_input required" style="height:45px; width:335px; padding:0 0 0 10px;" size="30" maxlength="20">
                                                </li>
                                            </ul>
                                            <span>
                                                <input type="image" src="http://cubebio.asia/assets/img/btn_login_en.jpg" onclick="submit" style="padding:0;">
                                                <!--<input type="button" name="로그인" value="Login" onclick="submit" style="font-size:20px; font-family:noto sans KR; color:#fff; width:120px; height:96px; background:#2c2c2c; border:0;">-->
                                            </span>
                                        </div>
                                        <p style="float:left; margin-right:20px; font-size:13px;">
                                            <input type="checkbox" name="remember" style="margin-left:20px; vertical-align:text-bottom;">
                                            <label>
                                                <span>บันทึกรหัสผ่าน</span>
                                            </label>
                                        </p>
                                        <p style="float:left; font-size:13px;">
                                            <input type="checkbox" name="auto_login" id="login_auto_login" style="vertical-align:text-bottom;">
                                            <label for="login_auto_login">
                                                <span>เข้าสู่ระบบโดยอัตโนมัติ</span>
                                            </label>
                                        </p>

                                    </form>
                                </div>
                                <div class="login_frm2">
                                    <div style="float:left;">
                                        <p style="margin-right:20px;">
                                            <span>ลืม ID และ รหัสผ่าน</span>
                                        </p>
                                        <p style="margin-right:5px;">
                                            <a href="http://en.cubebio.co.kr/bbs/password_lost.php" target="">
                                                <button style="font-size: 13px; color: #404040; border:1px solid #e0e0e0; width:100px; line-height:30px; background:#fff; font-family:noto sans CJK KR;">ค้นหา ID</button>
                                            </a>
                                        </p>
                                        <p>
                                            <a href="http://en.cubebio.co.kr/bbs/password_lost.php" target="">
                                                <button style="font-size: 13px; color: #404040; border:1px solid #e0e0e0; width:100px; line-height:30px; background:#fff; font-family:noto sans CJK KR;">ค้นหารหัสผ่าน</button>
                                            </a>
                                        </p>
                                    </div>
                                    <div style="float:right;">
                                        <p>
                                            <span style="margin-right:20px;">ท่านยังไม่ได้เป็นสมาชิกไช่หรือไม่?</span>
                                            <a href="http://cubebio.asia/view/join.php">
                                                <button style="font-size: 13px; color: #404040; border:1px solid #e0e0e0; width:100px; line-height:30px; background:#fff; font-family:noto sans CJK KR;">สมัครสมาชิก</button>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <script>
                                $(function(){
                                    $("#login_auto_login").click(function(){
                                        if (this.checked) {
                                            this.checked = confirm("หากคุณใช้การเข้าสู่ระบบอัตโนมัติคุณไม่จำเป็นต้องป้อนรหัสสมาชิกและรหัสผ่านของคุณนับจากนี้ \ n \ n กรุณาอย่าใช้ข้อมูลนี้เนื่องจากข้อมูลสาธารณะอาจถูกปล่อยออกจากที่สาธารณะ \ n \ n คุณต้องการใช้การเข้าสู่ระบบอัตโนมัติหรือไม่?");
                                        }
                                    });
                                });
                                
                                function flogin_submit(f) {
                                    return true;
                                }
                            </script>
                            
                            <!-- /////////////////////////// footer /////////////////////////// -->
                            <div id="footer" style="background-color:#252525;clear:both;">
                                <div class="footer">
                                    <h1></h1>
                                    <div id="footer_area">
                                        <!--footer-->
                                        <p style="text-align:center; font-family:arial; color:#a8a8a8; line-height:20px; font-size:13px;">Copyright (C) 2016 CUBEBIO. All Rights Reserved<br>
                                            <!--<a href="http://acus.co.kr/" target="_blank" style="color:#a8a8a8; text-decoration:none;">
                                                Designed &amp; Programmed by CONSULTINSIDE Co., Ltd.&nbsp;
                                            </a>-->
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /////////////////////////// footer /////////////////////////// -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php }?>