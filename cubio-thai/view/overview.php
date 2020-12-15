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
        <link rel="stylesheet" href="../assets/css/content-overview.css"> 
    
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
                                    <img src="../assets/img/greeting/icon_home.png"> หน้าหลัก &gt; เกี่ยวกับเรา &gt; ภาพรวมและประวัติ			
                                </p>
                            </div>
                            
                            <div id="grid_area" style="height:1149px; ">
                                <div class="dragEle ui-droppable boxShadow" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 99999; position: absolute; margin-left: 0px; margin-top: 9px; width: 970px; height: 1140px;" condition="ok" fix_pos="0">
                                    <div class="dragEleDiv" style="z-index: 999999;">
                                        <div class="makeContent0" style="z-index: 1;">
                                            <div id="con">
                                                <p class="tit">ภาพรวมและประวัติ</p>
                                                
                                                <div class="h1">
                                                    “<span>CUBEBIO ส่งเสริมสุขภาพที่ดีขึ้นของมวลมนุษยชาติ ด้วยการช่วยให้ตรวจเจอโรคมะเร็งตั้งแต่ระยะต้น</span> CUBEBIO เป็นบริษัทแรกของโลกที่ให้บริการเกี่ยวกับโรคมะเร็งแบบ TOTAL SOLUTION ทั้งการป้องกันมะเร็ง, การวินิจฉัยมะเร็ง, การรักษา, การเฝ้าสังเกต รวมถึงเป็นบริษัทผู้วิจัย, พัฒนา, ผลิตและจำหน่ายซอฟแวร์ด้วย"
                                                </div>
                                                <div class="con_box">
                                                    <div class="con_txt">
                                                        <!-- 회사개요 -->
                                                        <p class="st">ภาพรวมบริษัท</p>
                                                        <div class="two_box">
                                                            <!-- 미션 -->
                                                            <p class="box_tit1">MISSION</p>
                                                            <div class="mission">
                                                                <p>"ส่งเสริมสุขภาพที่ดีของมวลมนุษยชาติ ด้วยการให้ทุกคนตรวจโรคมะเร็งระยะต้นได้ด้วยตัวเอง"</p>
                                                                <p style="margin-top:15px;">
                                                                    "CUBEBIO ทุ่มเทกับการวิจัยและพัฒนาตัวบ่งชี้ทางชีวภาพของโรคมะเร็งที่ให้ความแม่นยำสูงและตรวจได้จากตัวอย่างที่เก็บได้ง่าย เช่น ปัสสาวะหรือน้ำลาย<br>
                                                                    CUBEBIO พยายามอย่างไม่หยุดยั้งในการก้าวเป็นบริษัทด้านการตรวจวินิจฉัยโรคจากภายนอกร่างกายและให้บริการด้านดูแลสุขภาพในระดับโลก ซึ่งช่วยยกระดับคุณภาพชีวิตและสุขภาพของมนุษยชาติ อีกทั้งยังช่วยให้ไม่พลาดเวลาทองของการรักษาโรค ด้วยการทำให้สามารถตรวจพบความผิดปกติของกระบวนการทางเคมีในร่างกายได้แต่เนิ้นๆ เช่น ตรวจเจอมะเร็งระยะต้นได้ โดยสามารถตรวจได้ด้วยตัวเอง ไม่จำเป็นต้องไปตรวจที่สถานพยาบาล"
                                                                </p>
                                                            </div>
                                                            <!-- 미션// -->

                                                            <!-- 비전 -->
                                                            <p class="box_tit2">VISION</p>
                                                            <div class="vision">
                                                                <p>"สร้างยุคที่โรคมะเร็งไม่ใช่สิ่งที่น่ากลัวอีกต่อไป"</p>
                                                                <p style="margin-top:15px;">
                                                                    "หากตรวจพบมะเร็งในระยะต้น ผู้ป่วยจะมีอัตราการรอดชีวิตสูงกว่าผู้ป่วยมะเร็งระยะสุดท้าย อย่างน้อย 2 เท่าและอย่างมากถึง 20 เท่า 
                                                                    ด้วยเหตุดังกล่าว บริษัทของเราจึงทุ่มเทให้กับการวิจัยและพัฒนาตัวบ่งชี้ทางชีวภาพของโรคมะเร็งอย่างสุดกำลัง เพื่อให้สามารถตรวจพบมะเร็งในระยะต้นได้ 
                                                                    มนุษย์พยายามเอาชนะโรคมะเร็งมาโดยตลอด ทั้งทางด้านการป้องกัน, การรักษาหรือการติดตามอาการ 
                                                                    และด้วยความพยายามอย่างต่อเนื่องของศูนย์วิจัยกลาง ซึ่งครอบครองเทคโนโลยีที่ใช้ในการพัฒนาเครื่องมือทางการแพทย์และตัวบ่งชี้ทางชีวภาพ ที่ใช้ในการตรวจวินิจฉัยโรคมะเร็งแต่ละชนิดอย่างแม่นยำ ก่อให้เกิดการให้บริการแบบ total solution เพื่อการวิเคราะห์และรักษาโรคมะเร็งแบบครบวงจรขึ้น
                                                                    เรามุ่งมุ่นและทุ่มเทเพื่อสร้างยุคที่มนุษย์ทุกคนสามารถปลดแอกจากความกลัว 'โรคมะเร็ง' ได้"
                                                                    
                                                                    <br><br>
                                                                    
                                                                    CUBEBIO จะวิจัยและพัฒนาอย่างไม่หยุดยั้ง เพื่อผลิตสินค้าที่จำเป็นสำหรับมนุษยชาติออกมาอย่างต่อเนื่อง และจะพยายามเพื่อให้บริการแบบ Non Stop Service สำหรับโรคมะเร็งให้ได้
                                                                </p>
                                                            </div>
                                                            <!-- 비전// -->
                                                        </div>
                                                        <!-- 회사개요// -->

                                                        <!-- 연혁 -->
                                                        <p class="st" style="margin-top:60px;">ประวัติความเป็นมาของบริษัท</p>
                                                        <div class="h_box">
                                                            <table cellspacing="0" cellpadding="0" border="0" width="870">
                                                                <thead>
                                                                    <tr><th width="30%">วันที่</th>
                                                                    <th width="70%">รายละเอียด</th>
                                                                </tr></thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>8 พฤศจิกายน 2011</td>
                                                                        <td>ก่อตั้งบริษัท CUBEBIO</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>18 กรกฎาคม 2014</td>
                                                                        <td>ก่อตั้งบริษัท IBDT</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>23 มีนาคม 2015</td>
                                                                        <td>ศูนย์วิจัยของบริษัทได้รับการรับรอง</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>30 เมษายน 2015</td>
                                                                        <td>ได้รับการรับรองเป็นบริษัทร่วมทุน</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>10 พฤษภาคม 2016</td>
                                                                        <td>รวมตัวกับ CUBEBIO (ชื่อบริษัท : CUBEBIO)</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- 연혁// -->
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
                <div id="footer" style="background-color:#252525;clear:both;position: relative;bottom: -500px;">
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