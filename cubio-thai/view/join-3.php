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
        <link rel="stylesheet" href="../assets/css/content-join.css">
    
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
                <div id="content">
                    <div class="content">
                        <div id="leftBox" style="margin-top:149px;">
                            <h1><img src="/acus/layout/typeA/images/membership.jpg"></h1>
                            <ul style="height:100%; min-height:250px;">
                                <li>
                                    <a href="/bbs/login.php">
                                    <img src="/acus/layout/typeA/images/login_off.jpg" onmouseover="this.src=this.src.replace('_off','_on')" onmouseout="this.src=this.src.replace('_on','_off')" alt="로그인">
                                    </a>
                                </li>
                                <li>
                                    <a href="/bbs/register.php">
                                        <img src="/acus/layout/typeA/images/join_on.jpg" alt="회원가입">
                                    </a>
                                </li>

                                <li>
                                    <a href="/bbs/password_lost.php">
                                        <img src="/acus/layout/typeA/images/search_off.jpg" onmouseover="this.src=this.src.replace('_off','_on')" onmouseout="this.src=this.src.replace('_on','_off')" alt="아이디/비밀번호 찾기">
                                    </a>
                                </li>
                            </ul>
                            <div style="clear:both;margin-top:20px;"></div>
                            <div>

                            </div>
                        </div>
                        <div class="right_content" style="">		
									
					<div id="grid_area" style="height:1739px;margin-top:160px;">


	
<style>
th{ background-color:#f4f4f4; border:1px solid #f4f4f4; }
input[type="text"]{width:200px;}
input[type="password"]{width:200px;}
#leftBox{ display:none;}
#fregister_img{
    width: 100%;
}
#fregister_img1{ border-top: 2px solid #282828;margin-top: 50px;}
.mbskin{
    margin-top: 30px;
    float: left;
    width: 100% !important;
	padding-left: 0px !important;
}
.right_content {
    float: right;
    width: 100%;
    margin: 0px !important;
    background: none;
}
.regi_img1{margin: 0 auto;width: 100px;}
.regi_img2{ width: 100%; border-top: 2px solid #282828; margin-top:50px;}
.regi_img2 div{width: 500px; margin: 50px auto;}
.fregister_agree{width: 100%; background-color: #f4f4f4; line-height: 80px;}
.fregister_agree label{float: right;margin-right: 75px;}
.fregister_agree input{ float: right; margin-right: -400px; margin-top: 35px;}
.tbl_wrap caption {
    padding: 10px 0;
    font-weight: bold;
    text-align: left;
    border-bottom: 2px solid #282828;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	var bbsreplll = $(".mArea2").attr('id'); 
	if(bbsreplll == "rCon") {
		$("#fregister").css("width" , "100%"); 
		$(".tbl_frm01").css("width" , "100%"); 
		$(".mArea2").css("width" , "1080px");
		$("#agree11").css("margin-right" , "-245px");
		$("#agree21").css("margin-right" , "-290px");
		$("#buttons li").css("margin-left" , "7px");
		$("#buttons img").css({ "width" : "250px" , "height" : "50px"});
	}
});
</script>
<!-- 회원가입결과 시작 { -->
<div class="mbskin">
    <form name="fregister" id="fregister" action="" method="POST" autocomplete="off">
	<section id="fregister_img">
		<div class="regi_img1">
			<h1 style="text-align:center; font-size:35px; font-family:noto sans KR; margin-bottom:20px; font-weight:500;">สมัครสมาชิก</h1>
		</div>
		<div class="regi_img2">
			<div>
				<img src="http://cubebio.asia/assets/img/join/img_join_circle3_en.jpg" alt="register finish">
			</div>
		</div>
		<div class="regi_img1" style="width:345px">
			<span style="font-size: 20px; font-family:noto sans KR, sans-serif; font-weight:400;">
			ท่านสมัครสมาชิกสำเร็จ!</span>
		</div>
	</section>
	
	<section id="fregister_img1">
		<div style="width:800px; margin:50px auto; text-align:center;">
			<p><strong>bukhari</strong>Sincerely congratulation on your membership.<br></p>

			
			<p>You can rest assured that your password is stored as an encrypted cipher code.</p>
			<p>If you have forgotten your ID/password, you can find it using<br>the email address you entered when registering your membership.</p>
			<p>Membership is available at any time, and the member's information is<br> deleted after a certain period of time.<br>
			Thank you very much.</p>

			
			<div class="btn_confirm" style="margin-top:30px;">
				<a href="http://en.cubebio.co.kr/">
					<input type="" name="메인으로" value="Go main" style="font-size: 14px; font-family:noto sans KR; width:100px; height:35px; border:0; background:#282828; color:#fff; text-align:center;">
				</a>
			</div>
		</div>
	</section>
</form></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!-- /////////////////////////// footer /////////////////////////// -->
                <div id="footer" style="background-color:#252525;clear:both;margin-left: 0px;">
                    <div class="footer" style="margin-left: 600px;">
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