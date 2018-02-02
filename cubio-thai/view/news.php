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
                                    <img src="../assets/img/greeting/icon_home.png"> หน้าหลัก &gt; ประชาสัมพันธ์ &gt; ข่าวสารจาก CUBEBIO		
                                </p>
                            </div>
                            <div id="grid_area" style="">
                                <div id="bo_list" style="width:100%; ">
                                    <div class="bo_fx">
                                        <div id="bo_list_total" style="color:">
                                            <span>Total 1 รายการ</span> 1 หน้า
                                        </div>
                                        <fieldset id="bo_sch">
                                            <legend></legend>
                                            <form name="fsearch" method="get">
                                                <input type="hidden" name="bo_table" value="b_cubebio_1">
                                                <input type="hidden" name="sca" value="">
                                                <input type="hidden" name="sop" value="and">
                                                <label for="sfl" class="sound_only">검색대상</label>
                                                <select name="sfl" id="sfl" style="padding:3px 0;">
                                                    <option value="wr_subject">หัวข้อ</option>
                                                    <option value="wr_content">เนื้อหา</option>
                                                    <option value="wr_subject||wr_content">หัวข้อ+เนื้อหา</option>
                                                    <option value="mb_id,1">รหัสสมาชิก</option>
                                                    <option value="wr_name,1">ผู้เขียน</option>
                                                </select>
                                                <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                                                <input type="text" name="stx" value="" id="stx" class="frm_input required" size="30" maxlength="30">
                                                <button class="btn_v1 " style=";color:#fff; border:1px solid ; background:; cursor:pointer; font-weight:bold;">ค้นหา</button>
                                            </form>
                                        </fieldset>
                                    </div>




                                    <!-- } 게시판 페이지 정보 및 버튼 끝 -->

                                    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
                                        <input type="hidden" name="bo_table" value="b_cubebio_1">
                                        <input type="hidden" name="sfl" value="">
                                        <input type="hidden" name="stx" value="">
                                        <input type="hidden" name="spt" value="">
                                        <input type="hidden" name="sca" value="">
                                        <input type="hidden" name="page" value="1">
                                        <input type="hidden" name="sw" value="">

                                        <div class="tbl_head01 tbl_wrap" style="background-color:;">
                                            <table style="border-top:2px solid ;"><!-- 테이블 선 색상 -->
                                                <caption>게시판1 목록</caption>
                                                <thead style="background:;"> <!-- 테이블 헤더 배경 색상 -->
                                                    <tr>
                                                        <th scope="col">หมายเลข</th>
                                                        <th scope="col" style="">หัวข้อ</th>
                                                        <th scope="col">ผู้เขียน</th>
                                                        <th scope="col">
                                                            <a href="/bbs/board.php?bo_table=b_cubebio_1&amp;sop=and&amp;sst=wr_datetime&amp;sod=desc&amp;sfl=&amp;stx=&amp;page=1">วันที่
                                                            </a>
                                                        </th>
                                                        <th scope="col">
                                                            <a href="/bbs/board.php?bo_table=b_cubebio_1&amp;sop=and&amp;sst=wr_hit&amp;sod=desc&amp;sfl=&amp;stx=&amp;page=1">เรียกดู
                                                            </a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td class="td_num">1</td>

                                                        <td class="td_subject">
                                                            <a class="colH" href="http://cubebio.co.kr/bbs/board.php?bo_table=b_cubebio_1&amp;wr_id=1">
                                                                임시주주총회 소집을 위한 기준일 및 주주명부 페쇄기간 설정 공고	
                                                            </a>
                                                            <img src="http://cubebio.co.kr/skin/board/basic_v2/img/icon_hot.gif" alt="인기글">
                                                            <img src="http://cubebio.co.kr/skin/board/basic_v2/img/icon_file.gif" alt="첨부파일">
                                                        </td>
                                                        <td class="td_name sv_use">
                                                            <span class="sv_member">cubebio</span>
                                                        </td>
                                                        <td class="td_date">17-05-18</td>
                                                        <td class="td_num">580</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                    <div class="paging01"></div>
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