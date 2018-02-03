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
        <link rel="stylesheet" href="../assets/css/default_e_2.css"> 
    
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
                                    <img src="http://en.cubebio.co.kr/acus/layout/typeE/images/icon_home.png"> หน้าหลัก &gt; บริการลูกค้า &gt; FAQ
                                </p>
                            </div>
                            
                            <div id="grid_area" style="">
                              <style>
                                /* 스타일리셋: 기본적으로 세팅되어있다면 안넣으셔도됩니다. */
                                body{margin:0; padding:0;}
                                ul{margin:0; padding:0;}
                                ul li{list-style:none;}
                                a{text-decoration:none;}

                                /* 탭 속성 */
                                #bbs_tab{/*border-left:1px solid #eee; border-bottom:1px solid #eee;*/font-family:'맑은 고딕'; background-color:white; margin:0px auto; margin-bottom:20px;}
                                #bbs_tab:after{content:""; display:block; clear:both; zoom:1;}
                                #bbs_tab ul li{ display: inline-block;
                                float: left;
                                background-color: rgb(244,244,244);

                                z-index: 99;
                                position: relative;
                                width: 49.8%;
                                text-align: center;
                                border:1px solid #e1e1e1;
                                border-right:none;
                                }
                                #bbs_tab ul li a{padding:10px 54px; display:block; font-size:18px; font-weight:normal; color:#333;}
                                #bbs_tab ul li .lasta{padding:32px 100px;}
                                #bbs_tab ul li .on{    color: white;
                                font-weight:600;
                                background-color: rgb(086, 116, 186);}
                              </style>
                                
                                <img src="http://cdn2.acus.kr/admin/editor/0964e1897574691ff68cb3a0f6451173_1487222533.7563.jpg" width="970" height="155" alt="FAQ_img.jpg" style="margin-left:-39px;">
                                
                                <div id="bbs_tab">
                                    <ul>
                                        <li><a href="http://cubebio.asia/view/faq.php" id="b_purple_1" class="">Related to diagnosis products</a></li>
                                        <li style="border-right:1px solid #e1e1e1;"><a href="http://cubebio.asia/view/faq_2.php" id="b_purple_2" class="on">Related to applied apparatus</a></li>
                                    </ul>
                                </div>
 
                                <script>
                                    $("#grid_area").find("div").eq(0).find("img").css("margin-left","-62px");
                                </script>

                                <style>
                                #bo_list {color:;}
                                #bo_list .colH{color:;}
                                </style>
                                
                                <div id="bo_list" style="width:100%; ">
                                    <div class="bo_fx">
                                        <div id="bo_list_total" style="color:">
                                            <span>Total 0 Case</span>
                                            1 Page
                                        </div>
                                        <!-- 게시판 검색 시작 { -->
                                        <fieldset id="bo_sch">
                                            <legend>게시물 검색</legend>
                                            <form name="fsearch" method="get">
                                            <input type="hidden" name="bo_table" value="b_cubebio_en_5">
                                            <input type="hidden" name="sca" value="">
                                            <input type="hidden" name="sop" value="and">
                                            <label for="sfl" class="sound_only">검색대상</label>
                                            <select name="sfl" id="sfl" style="padding:3px 0;">
                                                <option value="wr_subject">Title</option>
                                                <option value="wr_content">Contents</option>
                                                <option value="wr_subject||wr_content">Title+Contents</option>
                                                <option value="mb_id,1">Member ID</option>
                                                <option value="wr_name,1">Writer</option>
                                            </select>
                                            <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                                            <input type="text" name="stx" value="" id="stx" class="frm_input required" size="30" maxlength="30">
                                            <button class="btn_v1 " style=";color:#fff; border:1px solid ; background:; cursor:pointer; font-weight:bold;">Search</button> <!-- 버튼 색상, 버튼 선 색, 배경 색 -->
                                            </form>
                                        </fieldset>
                                        <!-- } 게시판 검색 끝 -->
                                    </div>




    <!-- } 게시판 페이지 정보 및 버튼 끝 -->

    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="b_cubebio_en_5">
    <input type="hidden" name="sfl" value="">
    <input type="hidden" name="stx" value="">
    <input type="hidden" name="spt" value="">
    <input type="hidden" name="sca" value="">
    <input type="hidden" name="page" value="1">
    <input type="hidden" name="sw" value="">

    <div class="tbl_head01 tbl_wrap" style="background-color:;">
        <table style="border-top:2px solid ;"><!-- 테이블 선 색상 -->
			<caption>board5 List</caption>
			<thead style="background:;"> <!-- 테이블 헤더 배경 색상 -->
				<tr>
				   										<th scope="col">Number</th>
					<th scope="col" style="">Title</th>
										<th scope="col">Writer</th>
					<th scope="col"><a href="/bbs/board.php?bo_table=b_cubebio_en_5&amp;sop=and&amp;sst=wr_datetime&amp;sod=desc&amp;sfl=&amp;stx=&amp;page=1">Date</a></th>
															<th scope="col"><a href="/bbs/board.php?bo_table=b_cubebio_en_5&amp;sop=and&amp;sst=wr_hit&amp;sod=desc&amp;sfl=&amp;stx=&amp;page=1">Hit</a></th>
																								</tr>
			</thead>
			<tbody>
								<tr><td colspan="5" class="empty_table">There are no new postings.</td></tr>			</tbody>
        </table>
    </div>

        </form>
	<div class="paging01">

		</div>
</div>


<!-- } 게시판 목록 끝 -->
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