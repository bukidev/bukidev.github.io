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
        <link rel="stylesheet" href="../assets/css/content-sitemap.css"> 
    
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
                                
            //if (!$_SESSION["USER_ID"]){ // check ว่าล๊อกอินหรือเปล่า 
                //require "header.php";
            //} else {
                //require "header_admin.php";
            //}
        ?>
        
        <div id="content" style="margin:0;padding:0;">
            <div style="clear:both;height:1px;"></div>
            <table class="canvas_grid" width="100%" height="10px" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td width="100%" class="canvas_sub grid_border ui-droppable ui-resizable">
                            <div class="makeContent">
                                <div id="con">
                                    <p class="tit">
                                        แผนผังเว็บไซต์
                                        <span class="tit_s">site map</span>
                                    </p>

                                    <div class="con_box">
                                        <div class="con_txt">
                                            <div class="menu_box">
                                                <ul>
                                                    <li class="smt">เกี่ยวกับเรา</li>
                                                    <li>
                                                        <a href="greeting.html">ทักทาย</a>
                                                    </li>
                                                    <li>
                                                        <a href="overview.html">ภาพรวมและประวัติ</a>
                                                    </li>
                                                    <li>
                                                        <a href="fields.html">สาขาธุรกิจ</a>
                                                    </li>
                                                    <li>
                                                        <a href="vision.html">วิสัยทัศน์</a>
                                                    </li>
                                                    <li>
                                                        <a href="center.html">ศูนย์วิจัย</a>
                                                    </li>
                                                    <li>
                                                        <a href="certificate.html">ใบรับรองและสิทธิบัตร</a>
                                                    </li>
                                                    <li>
                                                        <a href="map.html">ที่ตั้งบริษัท</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="menu_box">
                                                <ul>
                                                    <li class="smt">แนะนำสินค้า</li>
                                                    <li>
                                                        <a href="diagnosis-kit.html">ชุดตรวจโรคมะเร็ง</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="menu_box" style="float:left; position:absolute; margin:200px 0 0 190px;">
                                                <ul>
                                                    <li class="smt">วิจัยและพัฒนา</li>
                                                    <li>
                                                        <a href="research.html">วิจัยและพัฒนา</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="menu_box">
                                                <ul>
                                                    <li class="smt">ประชาสัมพันธ์</li>
                                                    <li>
                                                        <a href="news.html">ข่าวสารจาก CUBEBIO</a>
                                                    </li>
                                                    <li>
                                                        <a href="press.html">ข่าวจากสื่อมวลชน</a>
                                                    </li>
                                                    <li>
                                                        <a href="showroom.html">โชว์รูม</a>
                                                    </li>
                                                    <li>
                                                        <a href="division.html">แนะนำสำนักงานภาคธุรกิจ</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="menu_box" style="float:left; position:absolute; margin:200px 0 0 380px;">
                                                <ul>
                                                    <li class="smt">ข่าวสาร</li>
                                                    <li>
                                                        <a href="reqruit.html">รับสมัครงาน</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="menu_box">
                                                <ul>
                                                    <li class="smt">บริการลูกค้า</li>
                                                    <li>
                                                        <a href="qa.html">Q&amp;A</a>
                                                    </li>
                                                    <li>
                                                        <a href="faq.html">FAQ</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">ติดต่อเรา</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <script src="../assets/js/jquery-cookie.js"></script>
    </body>
</html>