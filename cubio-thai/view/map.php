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
        <link rel="stylesheet" href="../assets/css/content-map.css"> 
    
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
            
            <div id="wrapper_main" style="background: url(http://admin.acus.kr) no-repeat;background-position: 50% 0%;; background-size: px  px">
                
                <div id="banner_v3" style="">
                    <div class="banner">
                        <ul class="banner_img">
                            <li>
                                <img src="../assets/img/greeting/1486974066323676.jpg" alt="배너이미지" class="banner01">
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div id="content">
                    <div class="content">
                        
                        <!-- /////////////////////////////  left menu /////////////////////////////////-->
                        <?php include("sidebar_01.php"); ?>
                        
                        
                        
						<!-- /////////////////////////////  left menu top /////////////////////////////////-->
                        <div class="right_content" style="">
                            <div class="nav">
                                <p>	
                                    <img src="../assets/img/greeting/icon_home.png"> หน้าหลัก &gt; เกี่ยวกับเรา &gt; ที่ตั้งบริษัท			
                                </p>
                            </div>
                            
                            <div id="grid_area" style="height:auto; ">
                                <div class="dragEle ui-droppable boxShadow" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 99999; position: absolute; margin-left: 0px; margin-top: 9px; width: 970px; height: auto;" condition="ok" fix_pos="0">
                                    <div class="dragEleDiv" style="z-index: 999999;">
                                        <div class="makeContent0" style="z-index: 1;">
                                            <div id="con">
                                                <p class="tit">ที่ตั้งบริษัท</p>

                                                <div class="h1">
                                                    ข้อมูลตำแหน่งของสำนักงานใหญ่ <span style="color: #5674b9;">CUBEBIO</span>
                                                </div>
                                                <div class="con_box">
                                                    <!-- 본사 -->
                                                    <img src="http://admin.acus.kr/secure_zone/upFile/cubebio_en/editor/20172154611_editor_image.jpg">
                                                    <div class="con_txt">
                                                        <p class="st">สำนักงานใหญ่</p>
                                                        <p>ชั้น 8 เลขที่ 9 ซอย 10 ถนนดิจิตอล เขตคิมชอน กรุงโซล<br>(อาคารไฮฮิล แขวงคาซัน)</p>
                                                    </div>
                                                    <div class="con_txt">
                                                        <p class="st">หากเดินทางด้วยรถไฟใต้ดิน</p>
                                                        <p>รถไฟสาย 1 สถานีคาซันดิจิตอลทันจี ออกมาจากทางออกที่ 4 ประมาณ 1.04km</p>
                                                    </div>
                                                    <div class="con_txt">
                                                        <p class="st" style="display:inline;">TEL</p>
                                                        <span style="padding-left:10px;">070-4607-3769</span>
                                                    </div>
                                                    <img src="http://admin.acus.kr/secure_zone/upFile/cubebio_en/editor/20172254611_editor_image.jpg">
                                                    <div class="con_txt2">
                                                        <p class="st" style="display:inline;">สำนักงาน CUBEBIO คังนัม </p>
                                                        <span style="padding-left:10px;">ชั้น 30 เลขที่ 521 ถนนเทเฮรัน เขตคังนัม กรุงโซล (อาคาร Parnas แขวงซัมซอง)</span>
                                                    </div>
                                                    <div class="con_txt2" style="margin-top:20px;">
                                                        <p class="st" style="display:inline;">TEL</p>
                                                        <span style="padding-left:10px;">070-4607-3869</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!-- /////////////////////////// footer /////////////////////////// -->
                <div id="footer" style="background-color:#252525;clear:both;position: absolute;bottom: -1000px;">
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