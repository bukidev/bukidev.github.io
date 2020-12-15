<?php session_start(); ?>

<!DOCTYPE html>
<html lang="th">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>cubebio_en</title>
        
        <link rel="shortcut icon" href="http://en.cubebio.co.kr/img/favicon.ico">

        <link rel="stylesheet" href="../assets/css/base.css">
        <link rel="stylesheet" href="../assets/css/layout.css">
        <link rel="stylesheet" href="../assets/css/jquery-ui.css"> 
        <link rel="stylesheet" href="../assets/css/gnb.css"> 
        <link rel="stylesheet" href="../assets/css/img.css"> 
        <link rel="stylesheet" href="../assets/css/content-showroom.css"> 
        <link rel="stylesheet" href="../assets/css/news-style.css"> 
    
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

        <style>
        .sub_menu_text_hover a:hover {color:;}
        .sub_menu_text_hover a {color:;}
            body { font-family: 'Kanit', sans-serif !important; }
            .header #gnb_menu li a {
                display: block;
                margin-top: 0px !important;
            }
            #bo_list {color:;}
            #bo_list .colH{color:;}
        </style>


        <script type="text/javascript" charset="UTF-8" src="../assets/js/common.js"></script>
        <script type="text/javascript" charset="UTF-8" src="../assets/js/util.js"></script>
        <script type="text/javascript" charset="UTF-8" src="../assets/js/stats.js"></script>

    </head>

    <body style="overflow-x:hidden; overflow-y:auto;font-family:nanumgothic !important;">
        
        <?php 
                                
            if (!$_SESSION["USER_ID"]){ // check ว่าล๊อกอินหรือเปล่า 
                require "header.php";
            } else {
                require "header_admin.php";
            }
        ?>
        
        <div>
            <div id="roll"></div>
            
            <div id="wrapper_main">
                
                <div id="banner_v3" style="">
                    <div class="banner">
                        <ul class="banner_img">
                            <li>
                                <img src="../assets/img/news/1486974086310111.jpg" alt="배너이미지" class="banner01">
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div id="content">
                    <div class="content">
                        
                        <!-- /////////////////////////////  left menu /////////////////////////////////-->
                        <?php require "sidebar_04.php" ?>
                        
                        
                        
						<!-- /////////////////////////////  left menu top /////////////////////////////////-->
                        <div class="right_content" style="">	

                            <div class="nav">
                                <p>	
                                <img src="http://en.cubebio.co.kr/acus/layout/typeE/images/icon_home.png"> หน้าหลัก &gt; ประชาสัมพันธ์ &gt; โชว์รูม				
                                </p>
                            </div>
                            <div id="grid_area" style=" ">
                                <style>
.title_div {margin:69px 0 0 40px;}
.title_div .tit{
	font-family: NanumBarunGothic;
	font-size: 23px;
	/*text-transform: uppercase;*/
	color: #000;
	font-weight:400;
	margin:0;
	text-align:left;
}
.title_div .tit_s{
	font-family: Arial;
	font-size: 12px;
	text-transform: uppercase;
	color: #cecece;
	margin-left:10px;
}
.tab_dvi{ height: 40px; width:895px; margin:30px auto 0;}
.tab_dvi ul{ position:absolute;}
.tab_dvi ul li{  width: 297px; line-height: 40px; text-align: center; background: #f6f6f6; border:1px solid #e1e1e1; font-size:18px; font-family:nanumbarungothic;}
.tab_dvi a{color: #9d979f ;display:block;}
.on_h a{background:#5674ba;color:white;}

/*.canvas_grid{ margin-top: -60px; border-top: 2px solid  #06377a; padding-top:50px;}*/
</style>
                                <div class="title_div">
                                    <p class="tit">โชว์รูม</p>
                                </div>
                                <div class="tab_dvi">
                                    <ul>
                                        <li class="on_h">
                                            <a href="http://cubebio.asia/view/showroom.php">IR Room</a>
                                        </li>
                                        <li style="border-left:none;border-right:none;">
                                            <a href="http://cubebio.asia/view/ir_quest.php">สอบถามเกี่ยวกับ IR</a>
                                        </li>
                                        <li><a href="http://cubebio.asia/view/picture_data.php">ข้อมูลภาพ</a></li>
                                    </ul>
                                </div>
                                <div id="con">
                                    <p class="tit">IR Room</p>
                                    <div class="con_box">
                                        <!-- 전시실 -->
                                        <div class="cont">
                                            <div class="lab_img">
                                                <img src="http://admin.acus.kr/secure_zone/upFile/cubebio/editor/20171152812_editor_image.jpg">
                                            </div>
                                            <div class="con_txt">
                                                <p class="st">ห้องจัดแสดง</p>
                                                <p class="text">
                                                    เป็นพื้นที่สำหรับจัดแสดงใบรับรองต่างๆ เช่น ใบรับรองการร่วมทุน, ใบรับรองศูนย์วิจัย, แบบฟอร์มสิทธิบัตรต่างๆ, ใบจดทะเบียน, ใบจดทะเบียนเครื่องหมายการค้า เป็นต้น   
                                                </p>
                                            </div>
                                        </div>
                                        <!-- 전시실// -->
                                        <!-- 영상실 -->
                                        <div class="cont">
                                            <div class="lab_img">
                                                <img src="http://admin.acus.kr/secure_zone/upFile/cubebio/editor/20171164613_editor_image.jpg">
                                            </div>
                                            <div class="con_txt">
                                                <p class="st">ห้องฉายวีดีโอ</p>
                                                <p class="text">
                                                    เป็นพื้นที่สำหรับฉายวีดีโอต่างๆที่เกี่ยวข้องกับธุรกิจการวินิจฉัยโรค โดยมีการฉายวีดีโอเนื้อหาหลากหลาย อาทิเช่น วีดีโอเกี่ยวกับแผนทางธุรกิจ, วิดีโอโปรโมทธุรกิจ, วีดีโอเกี่ยวกับเทรนการตรวจมะเร็งล่าสุด เป็นต้น 
                                                </p>
                                            </div>
                                        </div>
                                        <!-- 영상실// -->

                                        <!-- 영접실 -->
                                        <div class="cont">
                                            <div class="lab_img">
                                                <img src="http://admin.acus.kr/secure_zone/upFile/cubebio/editor/20171264613_editor_image.jpg">
                                            </div>
                                            <div class="con_txt">
                                                <p class="st">ห้องรับรอง</p>
                                                <p class="text">
                                                    เป็นพื้นที่สำหรับรับรองนักลงทุนทั้งในรูปแบบองค์กรหรือส่วนบุคคล ทั้งจากในและต่างประเทศที่เข้ามาเยี่ยมชม IR ROOM โดยจัดโต๊ะในรูปแบบของ Bar เพื่อให้แขกผู้มีเกียรติ์ได้รู้สึกผ่อนคลาย 
                                                </p>
                                            </div>
                                        </div>
                                        <!-- 영접실// -->
                                        <!-- 시연실 -->
                                        <div class="cont">
                                            <div class="lab_img">
                                                <img src="http://admin.acus.kr/secure_zone/upFile/cubebio/editor/20171384613_editor_image.jpg">
                                            </div>
                                            <div class="con_txt">
                                                <p class="st">ห้องสาธิต</p>
                                                <p class="text">
                                                    เป็นพื้นที่สำหรับอธิบายรายละเอียดการพัฒนาสินค้า, วิธีการใช้สินค้า รวมถึงสาธิตการใช้สินค้าด้วยตัวอย่างจากปัสสาวะ ให้นักลงทุนทั้งในรูปแบบองค์กรหรือส่วนบุคคล ทั้งจากในและต่างประเทศที่เข้ามาเยี่ยมชมเพื่อ IR ของบริษัท
                                                </p>
                                            </div>
                                        </div>
                                        <!-- 시연실// -->

                                        <!-- 회의실 -->
                                        <div class="cont">
                                            <div class="lab_img">
                                                <img src="http://admin.acus.kr/secure_zone/upFile/cubebio/editor/20171474613_editor_image.jpg">
                                            </div>
                                            <div class="con_txt">
                                                <p class="st">ห้องประชุม</p>
                                                <p class="text">
                                                    เป็นห้องประชุมที่ใช้สำหรับแนะนำบริษัทและธุรกิจให้แก่นักลุงทุนทั้งจากในและต่างประเทศ โดยตกแต่งให้ดูทันสมัย พร้อมอุปกรณ์การประชุมที่ล้ำสมัย เพื่อ IR และการประชุมที่มีประสิทธิภาพ
                                                </p>
                                            </div>
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
        
        <script src="../assets/js/jquery-cookie.js"></script>
    </body>
</html>