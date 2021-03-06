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
        <link rel="stylesheet" href="../assets/css/content-fields.css"> 
    
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
                                    <img src="../assets/img/greeting/icon_home.png"> หน้าหลัก &gt; เกี่ยวกับเรา &gt; สาขาธุรกิจ				
                                </p>
                            </div>
                            
                            <div id="grid_area" style="height:1149px; ">
                                <div class="dragEle ui-droppable boxShadow" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 99999; position: absolute; margin-left: 0px; margin-top: 9px; width: 970px; height: 1140px;" condition="ok" fix_pos="0">
                                    <div class="dragEleDiv" style="z-index: 999999;">
                                        <div class="makeContent0" style="z-index: 1;">
                                            <div id="con">
                                                <p class="tit">
                                                สาขาธุรกิจ
                                                </p>

                                                <div class="con_box">

                                                    <p class="txt" style="position:absolute; margin:3px 0 0 408px; text-align: center;">วิจัย<br>ตัวบ่งชี้มะเร็ง</p>
                                                    <p class="txt" style="position:absolute; margin:265px 0 0 262px; ">ชุดตรวจ<br>โรคมะเร็ง</p>
                                                    <p class="txt" style="position:absolute; margin:265px 0 0 570px; ">ธุรกิจ<br>ด้านข้อมูล</p>

                                                    <!-- 암 마커 연구 -->
                                                    <div class="con_txt1">
                                                        <p class="con_txt1_tit">วิจัยตัวบ่งชี้มะเร็ง</p>
                                                        <span>
                                                        · วิจัยและค้นหาตัวบ่งชี้มะเร็ง<br>(cancer marker) จากของเหลว<br>ในร่างกาย (เลือด, ปัสสาวะ,<br> น้ำลาย เป็นต้น)<br>
                                                        · ค้นหา screening cancer marker<br>เพื่อวินิจฉัยมะเร็งระยะต้น, มะเร็งทุกชนิด 
                                                        </span>
                                                    </div>
                                                    <!-- 암 마커 연구// -->

                                                    <!-- 암 진단 Kit -->
                                                    <div class="con_txt2">
                                                        <p class="con_txt2_tit">ชุุดตรวจโรคมะเร็ง</p>
                                                        <span>
                                                        · พัฒนาชุดตรวจโรคมะเร็ง ELISA / Rapid Kit จากตัวบ่งชี้มะเร็งใหม่ <br>
                                                        · พัฒนา Bio Censer และ at-site diagnosis POCT
                                                        </span>
                                                    </div>
                                                    <!-- 암 진단 Kit// -->

                                                    <!-- 데이터사업 -->
                                                    <div class="con_txt3">
                                                        <p class="con_txt3_tit">ธุุรกิจด้านข้อมูล</p>
                                                        <span>
                                                        · ธุรกิจด้านข้อมูลด้วยข้อมูลที่เก็บจากบริการตรวจวินิจฉัย<br>
                                                        · บริการวิเคราะห์ข้อมูลสั่งสม โดยใช้ Bio Chip และเทคโนโลยี NFC 
                                                        </span>
                                                    </div>
                                                    <!-- 데이터사업// -->

                                                    <div class="text_box">
                                                    CUBEBIO วิจัยตัวชีวัดทางชีวภาพของโรคมะเร็งต่างๆ นำมาพัฒนาเป็นชุดตรวจโรคมะเร็งระยะต้น พร้อมเก็บและสะสมข้อมูลต่างๆที่เกี่ยวข้องกับสุขภาพและโรคมะเร็งนานาชนิดที่ได้จากการตรวจจากชุดตรวจโรคมะเร็ง นำมาวิเคราะห์และขยายขอบเขตธุรกิจไปสู่ธุรกิจข้อมูลขนาดใหญ่
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
                <div id="footer" style="background-color:#252525;clear:both;position: absolute;bottom: -500px;">
                    <div class="footer">
                        <h1></h1>
                        <div id="footer_area">
                            <!--footer-->
                            <p style="text-align:center; font-family:arial; color:#a8a8a8; line-height:20px; font-size:13px;">Copyright (C) 2016 CUBEBIO. All Rights Reserved<br>
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