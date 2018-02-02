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
        <link rel="stylesheet" href="../assets/css/content-division.css"> 
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
                        <div id="leftBox" style="background-color:;min-height:500px;">
                            <h1 style="text-align:left; font-size: 36px;color: #5674b9;">ประชาสัมพันธ์
                            </h1>
                            
                            <ul class="sidemenu">
                                <li id="leftLi">
                                    <a href="news.html"><h3>ข่าวสารจาก CUBEBIO</h3></a>
                                </li>
                                <li id="leftLi">
                                    <a href="overview.html"><h3>ข่าวจากสื่อมวลชน</h3></a>
                                </li>
                                <li id="leftLi">
                                    <a href="showroom.html"><h3>โชว์รูม</h3></a>
                                </li>
                                <li id="leftLi">
                                    <a href="division.html"><h3>แนะนำสำนักงานภาคธุรกิจ</h3></a>
                                </li>
                            </ul>
                            <div style="clear:both; margin-top:70px;"></div>
                            <p></p>
                        </div>
                        
                        
                        
						<!-- /////////////////////////////  left menu top /////////////////////////////////-->
                        <div class="right_content" style="">
                            <div class="nav">
                                <p>	
                                    <img src="../assets/img/greeting/icon_home.png"> หน้าหลัก &gt; ประชาสัมพันธ์ &gt; แนะนำสำนักงานภาคธุรกิจ		
                                </p>
                            </div>
                            <div id="grid_area" style="height:859px; ">
                                <div class="dragEle ui-droppable boxShadow_none" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 999999; position: absolute; margin-left: 0px; margin-top: 9px; width: 970px; height: 850px;" condition="ok" fix_pos="0">
                                    <div class="dragEleDiv" style="z-index: 999999;">
                                        <div class="makeContent0" style="z-index: 1;">
                                            <div id="con">
                                                <p class="tit">แนะนำสำนักงานภาคธุรกิจ</p>
                                                <div class="con_box">
                                                    <div class="cont">
                                                        <div class="con_txt1">
                                                            <p class="st">CUBEBIO ศูนย์คังนัม</p>
                                                            <p class="text">
                                                                สำนักงานภาคธุรกิจศูนย์คังนัมนี้ ตั้งอยู่ที่อาคาร Parnas ซึ่งเพิ่งเปิดตัวไปเมื่อ<br>
                                                                วันที่ 1 กันยายน ปี 2016 ที่ผ่านมา อาคาร Parnas เชื่อมต่อกับ<br>
                                                                Intercontinental Seoul Parnas อยู่ใกล้กับรถไฟใต้ดินสถานีซัมซอง<br>
                                                                เป็นอาคารสูง 40 ชั้นและมีชั้นใต้ดินอีก 8 ชั้น โดย CUBEBIO ศูนย์คังนัม<br>
                                                                ตั้งอยู่ที่ชั้น 30 ของตัวอาคาร
                                                            </p>
                                                        </div>

                                                        <div class="con_txt2">
                                                            <p class="text">
                                                                
                                                                ไม่เพียงแต่บริษัท CUBEBIO เท่านั้นแต่ยังมีบริษัทพาร์ทเนอร์<br>
                                                                ทั้งในและต่างประเทศเข้ามาตั้งสำนักงานที่อาคารดังกล่าว<br>
                                                                เพื่อการร่วมมือและประสานงานที่ใกล้ชิดกันมากยิ่งขึ้น<br>
                                                                และในสถานการณ์จริง เราสามารถรับมือกับประเด็นต่างๆที่เกิดขึ้น<br>
                                                                ทั้งในและต่างประเทศได้อย่างรวดเร็วผ่านการประชุมเป็นระยะ<br>
                                                                ทำให้สามารถทำงานได้อย่างมีประสิทธิภาพ

                                                                <br><br>

                                                                นอกจากนี้ที่ศูนย์คังนัมยังมี conference room คุณภาพสูง<br>
                                                                สำหรับการประชุมระหว่างประเทศ ซึ่งส่วนมากใช้สำหรับทำ<br>
                                                                กิจกรรมเกี่ยวกับการลงทุนในและต่างประเทศ, การโปรโมทบริษัท<br>
                                                                หรือ IR เป็นต้น โดยเฉพาะอย่างยิ่ง มีระบบประชุมด้วยภาพ เพื่อดึงดูด<br>
                                                                นักลงทุนจากต่างประเทศ จึงสามารถประชุม หรือ conference<br>
                                                                กันแบบ real time ได้ ที่สำคัญที่ศูนย์ยังมีพื้นที่สำนักงาน<br>
                                                                ที่อยู่ใกล้กับบริษัทพาร์ทเนอร์ จึงสามารถทำงานได้อย่างใกล้ชิด<br>
                                                                และมีประสิทธิภาพ

                                                            </p>
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