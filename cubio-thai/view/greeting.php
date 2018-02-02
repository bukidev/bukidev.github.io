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
                                    <img src="../assets/img/greeting/icon_home.png"> หน้าหลัก &gt; เกี่ยวกับเรา &gt; ทักทาย				
                                </p>
                            </div>
                            
                            <div id="grid_area" style="height:1149px; ">
                                <div class="dragEle ui-droppable boxShadow" style="line-height: 40px; text-align: center; font-size: 11px; float: left; z-index: 99999; position: absolute; margin-left: 0px; margin-top: 9px; width: 970px; height: 1140px;" condition="ok" fix_pos="0">
                                    <div class="dragEleDiv" style="z-index: 999999;">
                                        <div class="makeContent0" style="z-index: 1;">
                                            <div id="con">
                                                <p class="tit">ทักทาย</p>
                                                
                                                <div class="h1">
                                                    “<span>ในฐานะบริษัทผู้เชี่ยวชาญด้านการวินิจฉัยมะเร็งด้วยชุดตรวจมะเร็งระยะต้นนี้</span> เรามุ่งมั่นที่จะก้าวเป็นบริษัทอันดับหนึ่งของโลก ในการสร้างความสุขและสุขภาพที่ดีให้แก่มวลมนุษยชาติ”
                                                </div>
                                                <div class="con_box">
                                                    <div class="con_txt">
                                                        CUBEBIO ตั้งเป้าหมายเพื่อการวินิจฉัยโรคมะเร็งระยะต้นมาตั้งแต่เริ่มก่อตั้งบริษัท<br>
                                                        เราจึงพยายามพัฒนาสินค้า วิจัยและพัฒนาตัวบ่งชี้ทางชีวภาพของโรคมะเร็ง<br>
                                                        (cancer bio marker) อย่างสุดความสามารถมาโดยตลอด
                                                        
                                                        <br><br>
                                                        
                                                        "สำหรับเทรนด้านการตรวจวินิจฉัยโรคจากภายนอกร่างกายในช่วงนี้นั้น กล่าวได้ว่า<br>
                                                        ตลาดสำหรับสินค้าที่สามารถตรวจโรคได้ในทุกที่ทุกเวลา มีการเติบโตอย่างรวดเร็ว<br>
                                                        ในระดับโลก นอกจากนี้ การวิจัยตัวบ่งชี้ทางชีวภาพของโรงมะเร็งด้วยปัสสาวะ<br>
                                                        หรือน้ำลายแทนการตรวจจากเลือดยังตื่นตัวเป็นอย่างมาก ด้วยเหตุนี้ CUBEBIO<br>
                                                        จึงตอบรับกระแสความนิยมของโลกด้วยการทุ่มเทวิจัยตัวบ่งชี้ทางชีวภาพของโรงมะเร็ง<br>
                                                        (cancer bio marker)อย่างสุดกำลัง ซึ่งหนึ่งในผลลัพธ์จากความพยายามดังกล่าว<br>
                                                        ทำให้ชุดตรวจโรงมะเร็งด้วยปัสสาวะกำลังจะถูกนำออกสู่ตลาดในเร็วๆนี้ ขณะนี้เราอยู่ระหว่าง<br>
                                                        การจดสิทธิบัตรและตั้งเป้าหมายไว้ว่าจะเปิดตัวสินค้าในปี 2017   ยิ่งไปกว่านั้น<br>
                                                        นอกจากการวางจำหน่ายในประเทศเกาหลีใต้แล้ว เรายังมีแผนวางจำหน่ายในตลาดโลกไปพร้อมๆกันด้วย<br>
                                                        โดยเรากำลังดำเนินการจดสัญญาตัวแทนจำหน่ายแต่เพียงผู้เดียว
                                                        พร้อมจดสิทธิบัตรในประเทศต่างๆ อาทิ ประเทศญี่ปุ่น, จีน, เวียดนาม เป็นต้น"

                                                        <br><br>

                                                        ด้วยการพัฒนาสินค้าและเทคโนโลยีที่แตกต่าง CUBEBIO ก้าวข้ามการเป็นรายแรกของโลก ไปสู่การทุ่มเทและแข่งขันด้านเทคโนโลยีเพื่อก้าวขึ้นเป็นอันดับหนึ่งของตลาดโลก นอกจากนี้ เพื่อการเติบโตอย่างต่อเนื่องและเพื่อเพิ่มศักยภาพการแข่งขันในอนาคต เรายังได้ขยายการลงทุนด้าน R&amp;D เพิ่มนักวิจัยที่มีความสามารถ รวมถึงใส่ใจกับการอบรมบุคลากรของเราด้วย

                                                        <br><br>

                                                        CUBEBIO เตรียมพร้อมในทุกๆด้านเพื่อก้าวขึ้นเป็นบริษัทอันดับหนึ่งของโลก ภารกิจแรกสุดของ CUBEBIO  คือการเปลี่ยนแปลงกรอบความคิดของตลาดการวินิจฉัยโรคมะเร็ง ด้วยการเป็นผู้นำในการนำสินค้าที่ผู้บริโภคสามารถใช้ตรวจโรคได้ง่าย, สะดวก, แม่นยำ ตรวจได้ในทุกที่ทุกเวลา ออกสู่ตลาดให้ได้ใช้กันในวงกว้าง CUBEBIO จะขอเป็นบริษัทที่ทำประโยชน์เพื่อความสุขและสุขภาพที่ดีของมวลมนุษยชาติ และจะมุ่งมั่นเพื่อการเป็นบริษัทที่ลูกค้ารักให้ได้
                                                        
                                                        <br><br>
                                                        
                                                        <span>"ขอขอบคุณลูกค้าทุกท่านที่รักและไว้วางใจ <span style="color:#5674b9;">CUBEBIO</span> มาโดยตลอด "</span>
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