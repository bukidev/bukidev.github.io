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
                                    .mbskin{
                                        margin-bottom: 732px;
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
                                    #footer {
                                        width: 139% !important;
                                        height: 145px;
                                        background: black;
                                        margin-top: 220px !important;
                                        margin-left: -232px !important;
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
                                <!-- 회원정보 입력/수정 시작 { -->
                                <div class="mbskin">

                                    <script src="http://en.cubebio.co.kr/js/jquery.register_form.js"></script>


                                    <form id="fregisterform" name="register2form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                                    <input type="hidden" id="id_overlap" name="id_overlap" value="N">						
                                    <input type="hidden" name="w" value="">
                                    <input type="hidden" name="url" value="%2Fbbs%2Fregister_form.php">
                                    <input type="hidden" name="agree" value="1">
                                    <input type="hidden" name="agree2" value="1">
                                    <input type="hidden" name="cert_type" value="">
                                    <input type="hidden" name="mb_sex" value="">    
                                    <div class="tbl_frm01 tbl_wrap" style="margin-top:30px;">
                                        <section id="fregister_img">
                                            <div class="regi_img1">
                                                <h1 style="text-align:center; font-size:35px; font-family:noto sans KR; margin-bottom:20px; font-weight:500;">Join
                                                </h1>
                                                <!--<img src="/skin/member/basic/img/txt_join.jpg" alt="회원가입" style="margin-left:40px;" />-->
                                            </div>
                                            <div class="regi_img2">
                                                <div>
                                                    <img src="/skin/member/basic/img/img_join_circle2_en.jpg" alt="회원가입">
                                                </div>
                                            </div>
                                        </section>
                                        
                                        <table style="font-family:noto sans KR;">
                                            <caption>
                                                <span style="font-size:20px; font-weight:400;">Site usage information input</span>
                                                <!--<img src="/skin/member/basic/img/txt_join_3.jpg" alt="기본정보입력" />-->
                                            </caption>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <label for="reg_mb_id">
                                                        <span style="font-size:14px; font-weight:300;">ID</span>
                                                        <!--<img src="/acus/layout/typeA/images/join_txt_01.gif" alt="아이디" />-->
                                                        <strong class="sound_only">필수</strong>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span class="frm_info">Letters, numbers, and _ only input. Please enter at least three characters.</span>
                                                    <input type="text" name="mb_id" value="" id="reg_mb_id" required="" class="frm_input minlength_3 required " maxlength="20" onchange="document.frm.id_overlap.value='N'">
                                    &nbsp;&nbsp;<input type="button" value="Duplicate ID check" style="font-size: 14px; font-family:noto sans KR; width:140px; height:30px; border:0; background:#505050; color:#fff;" onclick="chk_overlap()">					<span id="msg_mb_id"></span>
                                                </td>
                                            </tr>
                                                        <tr>
                                                <th scope="row">
                                                    <label for="reg_mb_password">
                                                        <span style="font-size:14px; font-weight:300;">Password</span>
                                                        <!--<img src="/acus/layout/typeA/images/join_txt_02.gif" alt="비밀번호" />-->
                                                        <strong class="sound_only">필수</strong>
                                                    </label>
                                                </th>
                                                <td>
                                                    <input type="password" name="mb_password" id="reg_mb_password" required="" class="frm_input minlength_3 required" maxlength="20">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <label for="reg_mb_password_re">
                                                        <span style="font-size:14px; font-weight:300;">Password confirmation</span>
                                                        <!--<img src="/acus/layout/typeA/images/join_txt_03.gif" alt="비밀번호 확인" />-->
                                                        <strong class="sound_only">필수</strong>
                                                    </label>
                                                </th>
                                                <td><input type="password" name="mb_password_re" id="reg_mb_password_re" required="" class="frm_input minlength_3 required" maxlength="20"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>



                                    <div class="tbl_frm01 tbl_wrap">
                                        <table style="font-family:noto sans KR;">
                                            <caption>
                                                <span style="font-size:20px; font-weight:400;">Personal Information</span>
                                                <!--<img src="/skin/member/basic/img/txt_join_4.jpg" alt="개인정보 입력" />-->
                                            </caption>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <label for="reg_mb_name">
                                                        <span style="font-size:14px; font-weight:300;">Name</span>
                                                        <!--<img src="/acus/layout/typeA/images/join_txt_04.gif" alt="이름" />-->
                                                        <strong class="sound_only">필수</strong>
                                                    </label>
                                                </th>
                                                <td>
                                                    <input type="text" id="reg_mb_name" name="mb_name" value="" required="" class="frm_input nospace required " size="10">
                                                                                        </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <label for="reg_mb_nick">
                                                        <span style="font-size:14px; font-weight:300;">Nickname</span>
                                                        <!--<img src="/acus/layout/typeA/images/join_txt_05.gif" alt="닉네임" />-->
                                                        <strong class="sound_only">필수</strong>
                                                    </label>
                                                </th>
                                                <td>
                                                    <span class="frm_info">
                                                        Without spaces English, and can only enter numbers (in English at least 4 characters)<br>
                                                        If you switch to a nickname within the next  60 days it can not be changed.
                                                    </span>
                                                    <input type="hidden" name="mb_nick_default" value="">
                                                    <input type="text" name="mb_nick" value="" id="reg_mb_nick" required="" class="frm_input required nospace" size="10" maxlength="20">
                                                    <span id="msg_mb_nick"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <label for="reg_mb_email">
                                                        <span style="font-size:14px; font-weight:300;">E-mail</span>
                                                        <!--<img src="/acus/layout/typeA/images/join_txt_06.gif" alt="이메일" />-->
                                                        <strong class="sound_only">필수</strong>
                                                    </label>
                                                </th>
                                                <td>
                                                                        <input type="hidden" name="old_email" value="">
                                                    <input type="text" name="mb_email" value="" id="reg_mb_email" required="" class="frm_input email required" size="70" maxlength="100">
                                                </td>
                                            </tr>

















                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tbl_frm01 tbl_wrap">
                                        <table style="font-family:noto sans KR;">
                                            <caption>
                                                <span style="font-size:20px; font-weight:400;">Other personal settings</span>
                                                <!--<img src="/acus/layout/typeA/images/join_s_tit_03.gif" alt="기타 개인설정" />-->
                                            </caption>
                                            <tbody>



                                            <tr>
                                                <th scope="row">
                                                    <label for="reg_mb_mailling">
                                                        <span style="font-size:14px; font-weight:300;">Mailing service</span>
                                                        <!--<img src="/acus/layout/typeA/images/join_txt_10.gif" alt="메일링서비스" />-->
                                                    </label>
                                                </th>
                                                <td>
                                                    <input type="checkbox" name="mb_mailling" value="1" id="reg_mb_mailling" checked="">
                                                    I would like to receive e-mail information.
                                                </td>
                                            </tr>


                                                        <tr>
                                                <th scope="row">
                                                    <label for="reg_mb_open">
                                                        <span style="font-size:14px; font-weight:300;">Release of information</span>
                                                        <!--<img src="/acus/layout/typeA/images/join_txt_12.gif" alt="정보공개" />-->
                                                    </label>
                                                </th>
                                                <td>
                                                    <span class="frm_info">
                                                        This should change within the next 1 days if you switch to disclose information.
                                                    </span>
                                                    <input type="hidden" name="mb_open_default" value="">
                                                    <input type="checkbox" name="mb_open" value="1" checked="" id="reg_mb_open">
                                                    This allows others to see my information
                                                </td>
                                            </tr>

                                                <!--
                                            <tr>
                                                <th scope="row">자동등록방지</th>
                                                <td>
                                <script>var g5_captcha_url  = "http://en.cubebio.co.kr/plugin/kcaptcha";</script>
                                <script src="http://en.cubebio.co.kr/plugin/kcaptcha/kcaptcha.js"></script>
                                <fieldset id="captcha" class="captcha">
                                <legend>자동등록방지</legend>
                                <img src="javascript:void(0);" alt="" id="captcha_img">
                                <button type="button" id="captcha_mp3"><span></span>숫자음성듣기</button>
                                <button type="button" id="captcha_reload"><span></span>새로고침</button><input type="text" name="captcha_key" id="captcha_key" required class="captcha_box required" size="6" maxlength="6">
                                <span id="captcha_info">자동등록방지 숫자를 순서대로 입력하세요.</span>
                                </fieldset></td>
                                            </tr>
                                    -->
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="btn_confirm" style="padding-bottom:30px; margin:0 auto; width:212px;">
                                        <a href="http://en.cubebio.co.kr">
                                            <div style="font-size: 14px; font-family:noto sans KR; width:100px; line-height:35px; border:1px solid #e0e0e0; background:#fff; color:#000; display:inline; float:left;">Cancel</div>
                                            <!--<img src="/skin/member/basic/img/btn_cancel.jpg" alt="취소" />-->
                                        </a>
                                <input type="image" src="/skin/member/basic/img/btn_next_en.jpg" onclick="submit" style="float:left;">    </div>
                                    </form>


                                    <!--<script>
                                    $(function() {
                                        $("#reg_zip_find").css("display", "inline-block");
                                        $("#reg_mb_zip1, #reg_mb_zip2, #reg_mb_addr1").attr("readonly", true);

                                                    });

                                    // submit 최종 폼체크
                                    function fregisterform_submit(f)
                                    {
                                        // 회원아이디 검사
                                        if (f.w.value == "") {
                                            var msg = reg_mb_id_check();
                                            if (msg) {
                                                alert(msg);
                                                f.mb_id.select();
                                                return false;
                                            }
                                        }

                                        if($("[name=id_overlap]").val()=="N"){
                                            alert("아이디 중복체크를 해주세요");
                                            return false;
                                        }

                                        if (f.w.value == "") {
                                            if (f.mb_password.value.length < 3) {
                                                alert("비밀번호를 3글자 이상 입력하십시오.");
                                                f.mb_password.focus();
                                                return false;
                                            }
                                        }

                                        if (f.mb_password.value != f.mb_password_re.value) {
                                            alert("비밀번호가 같지 않습니다.");
                                            f.mb_password_re.focus();
                                            return false;
                                        }

                                        if (f.mb_password.value.length > 0) {
                                            if (f.mb_password_re.value.length < 3) {
                                                alert("비밀번호를 3글자 이상 입력하십시오.");
                                                f.mb_password_re.focus();
                                                return false;
                                            }
                                        }

                                        // 이름 검사
                                        if (f.w.value=="") {
                                            if (f.mb_name.value.length < 1) {
                                                alert("이름을 입력하십시오.");
                                                f.mb_name.focus();
                                                return false;
                                            }

                                            /*
                                            var pattern = /([^가-힣\x20])/i;
                                            if (pattern.test(f.mb_name.value)) {
                                                alert("이름은 한글로 입력하십시오.");
                                                f.mb_name.select();
                                                return false;
                                            }
                                            */
                                        }

                                        // 닉네임 검사
                                        if ((f.w.value == "") || (f.w.value == "u" && f.mb_nick.defaultValue != f.mb_nick.value)) {
                                            var msg = reg_mb_nick_check();
                                            if (msg) {
                                                alert(msg);
                                                f.reg_mb_nick.select();
                                                return false;
                                            }
                                        }

                                        // E-mail 검사
                                        if ((f.w.value == "") || (f.w.value == "u" && f.mb_email.defaultValue != f.mb_email.value)) {
                                            var msg = reg_mb_email_check();
                                            if (msg) {
                                                alert(msg);
                                                f.reg_mb_email.select();
                                                return false;
                                            }
                                        }

                                        if (typeof f.mb_icon != "undefined") {
                                            if (f.mb_icon.value) {
                                                if (!f.mb_icon.value.toLowerCase().match(/.(gif)$/i)) {
                                                    alert("회원아이콘이 gif 파일이 아닙니다.");
                                                    f.mb_icon.focus();
                                                    return false;
                                                }
                                            }
                                        }

                                        if (typeof(f.mb_recommend) != "undefined" && f.mb_recommend.value) {
                                            if (f.mb_id.value == f.mb_recommend.value) {
                                                alert("본인을 추천할 수 없습니다.");
                                                f.mb_recommend.focus();
                                                return false;
                                            }

                                            var msg = reg_mb_recommend_check();
                                            if (msg) {
                                                alert(msg);
                                                f.mb_recommend.select();
                                                return false;
                                            }
                                        }

                                        if (!chk_captcha()) return false;

                                        document.getElementById("btn_submit").disabled = "disabled";

                                        return true;
                                    }
                                    </script>-->


                                    <script type="text/javascript">
                                    function openDaumPostcode() {
                                        new daum.Postcode({
                                            oncomplete: function(data) {
                                                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
                                                // 우편번호와 주소 정보를 해당 필드에 넣고, 커서를 상세주소 필드로 이동한다.
                                                document.fregisterform.mb_zip1.value = data.postcode1;
                                                document.fregisterform.mb_zip2.value = data.postcode2;
                                                document.fregisterform.mb_addr1.value = data.address;
                                                //전체 주소에서 연결 번지 및 ()로 묶여 있는 부가정보를 제거하고자 할 경우,
                                                //아래와 같은 정규식을 사용해도 된다. 정규식은 개발자의 목적에 맞게 수정해서 사용 가능하다.
                                                //var addr = data.address.replace(/(\s|^)\(.+\)$|\S+~\S+/g, '');
                                                //document.getElementById('addr').value = addr;

                                                 document.fregisterform.mb_addr2.focus();
                                            }
                                        }).open();
                                    }



                                var win_zip1 = function() {
                                    if(typeof daum === 'undefined'){
                                        alert("다음 juso.js 파일이 로드되지 않았습니다.");
                                        return false;
                                    }

                                    new daum.Postcode({
                                        oncomplete: function(data) {
                                                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
                                                // 우편번호와 주소 정보를 해당 필드에 넣고, 커서를 상세주소 필드로 이동한다.
                                                document.fregisterform.mb_zip1.value = data.postcode1;
                                                document.fregisterform.mb_zip2.value = data.postcode2;
                                                document.fregisterform.mb_addr1.value = data.address;
                                                //전체 주소에서 연결 번지 및 ()로 묶여 있는 부가정보를 제거하고자 할 경우,
                                                //아래와 같은 정규식을 사용해도 된다. 정규식은 개발자의 목적에 맞게 수정해서 사용 가능하다.
                                                //var addr = data.address.replace(/(\s|^)\(.+\)$|\S+~\S+/g, '');
                                                //document.getElementById('addr').value = addr;

                                                 document.fregisterform.mb_addr2.focus();
                                        }
                                    }).open();
                                }



                                function chk_overlap(){				//아이디 중복체크
                                    if($("[name=mb_id]").val==""){
                                        alert("아이디를 입력해 주세요");
                                        $("[name=mb_id]").focus();
                                        return;	
                                    }
                                    var msg = reg_mb_id_check();
                                    if (msg) {
                                        alert(msg);
                                        $("[name=mb_id]").focus();
                                        return;
                                    }
                                    else{
                                        alert("Username is available.");
                                        $("[name=id_overlap]").val("Y");
                                    }

                                    return;

                                }

                                </script>



                                </div>

                                <!-- } 회원정보 입력/수정 끝 -->
                                <!-- /////////////////////////// footer /////////////////////////// -->
                                        <div id="footer" style="background-color:#252525;clear:both;">
                                            <div class="footer">
                                                <h1>	
                                                </h1>

                                                <div id="footer_area">

                                <!--footer-->
                                  <p style="text-align:center; font-family:arial; color:#a8a8a8; line-height:20px; font-size:13px;">Copyright (C) 2016 CUBEBIO. All Rights Reserved<br>
                                <a href="http://acus.co.kr" target="_blank" style="color:#a8a8a8; text-decoration:none;">Designed &amp; Programmed by CONSULTINSIDE Co., Ltd.&nbsp;</a></p>									</div>
                                            </div>
                                        </div>



                                <!-- /////////////////////////// footer /////////////////////////// -->

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