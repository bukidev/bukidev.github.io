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
        <link rel="stylesheet" href="../assets/css/content-contact.css"> 
    
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
            
            <div id="wrapper_main">
                
                <div id="banner_v3" style="">
                    <div class="banner">
                        <ul class="banner_img">
                            <li>
                                <img src="../assets/img/contact/1487143358962024.jpg" alt="배너이미지" class="banner01">
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div id="content">
                    <div class="content">
                        
                        <!-- /////////////////////////////  left menu /////////////////////////////////-->
                        <?php require "sidebar_06.php" ?>
                        
                        
                        
						<!-- /////////////////////////////  left menu top /////////////////////////////////-->
                        <div class="right_content" style="">
                            <div class="nav">
                                <p>	
                                    <img src="../assets/img/greeting/icon_home.png"> หน้าหลัก &gt; บริการลูกค้า &gt; ติดต่อเรา				
                                </p>
                            </div>
                            
                            <div id="grid_area" style="height:800px; ">
                                <div class="dragEle ui-droppable boxShadow" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 99999; position: absolute; margin-left: 0px; margin-top: 9px; width: 970px; height: 800px;" condition="ok" fix_pos="0">
                                    <div class="dragEleDiv" style="z-index: 999999;">
                                        <div class="makeContent0" style="z-index: 1;">
                                            
                                            <div id="con">
                                                <p class="tit">ติดต่อเรา</p>

                                                <div class="h1">
                                                    กรุณาสอบถามเรื่องที่ต้องการกับเจ้าหน้าที่ผู้รับผิดชอบโดยตรง แล้วเจ้าหน้าที่จะตอบกลับท่านด้วยความยินดี
                                                </div>

                                                <div class="con_box">
                                                        <div class="con_txt">
                                                            <img src="../assets/img/join/2017116018_editor_image.jpg">
                                                            <div class="text_box">
                                                                <p class="st">สอบถามเกี่ยวกับการลงทุน</p>
                                                                <span>Tel : 070-4607-3869</span>
                                                                <span>E-mail : cubebio@cubebio.co.kr</span>
                                                            </div>
                                                        </div>
                                                    <div class="con_txt">
                                                        <img src="../assets/img/join/2017143011_editor_image.jpg">
                                                        <div class="text_box">
                                                            <p class="st">สอบถามเกี่ยวกับการรับสมัครงาน</p>
                                                            <span>Tel : 070-4607-2841</span>
                                                            <span>E-mail : cubio@cubebio.co.kr</span>
                                                        </div>
                                                    </div>
                                                        <div class="con_txt" style="margin:0;">
                                                            <img src="../assets/img/join/2017110311_editor_image.jpg">
                                                            <div class="text_box">
                                                                <p class="st">แจ้งเกี่ยวกับผลข้างเคียง
                                                                </p>
                                                                <span style="font-size:11px; float:none; color:#5674b9; font-weight:300; margin-top:-10px; float:left;">(เวลารับเรื่อง 9.00 - 17.00)</span>
                                                                <span>Tel : 070-4607-3869</span>
                                                                <span>E-mail : cubebio@cubebio.co.kr</span>
                                                            </div>
                                                        </div>
                                                    <div class="con_txt">
                                                        <img src="../assets/img/join/2017132311_editor_image.jpg">
                                                        <div class="text_box">
                                                            <p class="st">ร้องเรียนเกี่ยวกับสินค้า</p>
                                                            <span>Tel : 070-4607-3869</span>
                                                            <span>E-mail : cubebio@cubebio.co.kr</span>
                                                        </div>
                                                    </div>
                                                    <div class="con_txt">
                                                        <img src="../assets/img/join/201717411_editor_image.jpg">
                                                        <div class="text_box">
                                                            <p class="st">สอบถามเกี่ยวกับเรื่องอื่นๆ</p>
                                                            <span>Tel : 070-4607-3869</span>
                                                            <span>E-mail : cubebio@cubebio.co.kr</span>
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