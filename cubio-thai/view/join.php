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
        <link rel="stylesheet" href="../assets/css/default_e.css"> 
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
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        var bbsreplll = $(".mArea2").attr('id'); 
                                        if(bbsreplll == "rCon") {
                                            $("#fregister").css("width" , "100%"); 
                                            $(".mArea2").css("width" , "1080px");
                                            $("#agree11").css("margin-right" , "-245px");
                                            $("#agree21").css("margin-right" , "-290px");
                                             $("#grid_area").css("height" , "0px");
                                        }
                                    });
                                </script>
                                <div class="mbskin">
                                    <form name="register" id="register" autocomplete="off" action="../controller/register_1.php" method="POST">
                                        
                                        <div id="frmRegister1">
                                            <section id="fregister_img">
                                                <div class="regi_img1">
                                                    <h1 style="text-align:center; font-size:35px; font-family:noto sans KR; margin-bottom:20px; font-weight:500;">สมัครสมาชิก</h1>
                                                </div>
                                                <div class="regi_img2">
                                                    <div>
                                                        <img src="../assets/img/join/img_join_circle1_en.jpg" alt="회원가입">
                                                    </div>
                                                </div>
                                            </section>
                                            <section id="fregister_term">
                                                <h2 style="margin:40px 0 10px 0px;">
                                                    <span style="font-size: 20px; font-family:noto sans KR, sans-serif; font-weight:400;">User Agreement</span>
                                                </h2>
                                                <div style="width:1198px;height:300px;overflow-y:scroll;border:1px solid #e0e0e0; border-top:2px solid #282828;">
                                                    <div style="padding:20px;">
                                                        <table class="canvas_grid" width="100%" height="10px" border="0" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="100%" class="canvas_sub grid_border ui-droppable ui-resizable">
                                                                        <div class="makeContent">
                                                                            <p style="margin-left:2.5pt"><strong>Chapter 1 General</strong></p>
                                                                            <p style="margin-left:2.5pt">&nbsp;</p>
                                                                            <p style="margin-left:2.5pt"><strong>Article 1 Purpose</strong></p>
                                                                            <p style="margin-left:2.5pt">① The purpose of these conditions is to set up the rights, obligations and responsibilities of the Site and Members in using the services (hereinafter referred to as “Services”) provided in the internet homepage operated by Cubebio.</p>
                                                                            <p style="margin-left:2.5pt">&nbsp;</p>
                                                                            <p style="margin-left:2.5pt"><strong>Article 2 Definition</strong></p>
                                                                            <p style="margin-left:2.5pt">Definition of terms used in these conditions is as follows;</p>
                                                                            <p style="margin-left:2.5pt">① Site means the cyber space set up where Cubebio can provide Services through use of information communication apparatus like computers.</p>

                                                                            <p style="margin-left:2.5pt">Cube</p>

                                                                            <p style="margin-left:2.5pt">② “Services” means all internet services provided in the homepage of Cubebio and the internet Site operated by Cubebio.</p>

                                                                            <p style="margin-left:2.5pt">③ “Members(User)” means the personnel who consent to these conditions and, through log-in to internet homepage, receive Services provided by Cubebio according to these conditions</p>

                                                                            <p style="margin-left:2.5pt">④ “Operator” means the persons designated by Cubebio for overall management and operation of the Services.</p>

                                                                            <p style="margin-left:2.5pt">⑤ "ID" means the nick name used for log-in in order to access to the Site for receiving Services, having 4 to 15 letters which must be English or Arabic numeral or in combination of both.</p>

                                                                            <p style="margin-left:2.5pt">⑥ “Password” means the password used to identify the Members and to protect their private information, which is set by each Member for security of any or all information provided in the Services, and which should be set in English or figures or in combination of both.</p>

                                                                            <p style="margin-left:2.5pt">⑦ “Private Information” means the information, which may contains personal particulars such as name, residence identification number, etc by which any specific person can be recognized.</p>

                                                                            <p style="margin-left:2.5pt">⑧ Members consist of General Members and Operator, each of whom has the following rights;</p>

                                                                            <p style="margin-left:17.5pt">&nbsp;&nbsp; -General Members means members who subscribe through the homepage of Cubebio and provide Private Information in the internet.</p>

                                                                            <p style="margin-left:17.5pt">&nbsp;&nbsp; -Operator means ID authorized by the top operator to manage the internet homepage of the center, who manage and operate the homepage within the scope of authority assigned to each Operator.</p>

                                                                            <p style="margin-left:2.5pt">⑨ Password is encrypted for storage in the way that no decoding is possible and is not to be used for any other purposes except for essential cases such as certification of Member or service-related purpose.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 3 Notice of Conditions and Change</strong></p>

                                                                            <p style="margin-left:2.5pt">① These conditions will take effect at the time that Cubebio makes announcement in the Services or gives notice to Members in other ways.</p>

                                                                            <p style="margin-left:2.5pt">② Cubebio may change, if such change is unavoidably required, these conditions within the range not to violate the related laws and regulations.</p>

                                                                            <p style="margin-left:2.5pt">③ Cubebio may change these conditions in cases that the change is unavoidable by the circumstantial reasons or in cases that the grave situation occurs in respect of marketing, and changed conditions will take effect by notice as stipulated in the preceding paragraph.</p>

                                                                            <p style="margin-left:2.5pt">④ For any things that are not stipulated in these conditions or for interpretation of the conditions, related laws or commercial practice shall be followed.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 4 Contents of Services and Change</strong></p>

                                                                            <p style="margin-left:2.5pt">① Cubebio provides the following Services;</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;a. General guidance services to be provided from Cubebio</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;b. Information guidance services related to products and research</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;c. Other services to be designated by Cubebio</p>

                                                                            <p style="margin-left:2.5pt">② Cubebio may change the contents of Services to be provided if such change is required unavoidably, and in this case, the changed contents and date for providing such change will be announced in the internet service or notified to Members in other proper ways.</p>

                                                                            <p style="margin-left:2.5pt">③ Cubebio will not compensate Members for the loss which may result from the change of Service contents except for the case of Cubebio’s intentional or gross negligence.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 5 Suspension of Services</strong></p>

                                                                            <p style="margin-left:2.5pt">① Cubebio may limit or suspend provision of Services for certain period of time in some inevitable situations, such as system or apparatus maintenance or malfunction, temporary communication problem, service development, regular system check, emergent action, etc.</p>

                                                                            <p style="margin-left:2.5pt">② Cubebio will not compensate the Members or any 3<sup>rd</sup> party for the losses that may result from the temporary suspension of the Services due to the situations mentioned in paragraph 5.① above, except for the case of Cubebio’s intentional or gross negligence.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Chapter 2 Subscription of Members and Withdrawal</strong></p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 6 Subscription of Members</strong></p>

                                                                            <p style="margin-left:2.5pt">① After providing all information of the Member in the subscription form of Cubebio, users apply for membership by expressing consent to the conditions.</p>

                                                                            <p style="margin-left:2.5pt">② Cubebio registers as Members those who applied for membership according to the preceding paragraph and who are not categorized in the following cases;</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;a. who applied in the name of other persons.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;b. who lost membership in the past according to Article 7.② of these conditions.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;c. whose application has false entry or omission or misdescription.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;d. whose membership is incontestably judged to cause disrupt or trouble to Cubebio in carrying out of works</p>

                                                                            <p style="margin-left:2.5pt">③ The membership contract is deemed to be accepted at the time that Cubebio approves.</p>

                                                                            <p style="margin-left:2.5pt">④ Members, when their personal information is changed, shall make appropriate revision through internet or give notice to the center by phone.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 7 Withdrawal of Members and Loss of Qualification &nbsp;</strong></p>

                                                                            <p style="margin-left:2.5pt">① Members may request to Cubebio for withdrawal at any time, and Cubebio shall immediately take action to effectuate such request.&nbsp; Withdrawal shall be applied in the internet and will be effectuated after due procedure for certification of the Member for the protection of private information. &nbsp;After withdrawal, all information except ID will be erased.</p>

                                                                            <p style="margin-left:2.5pt">② Cubebio may disqualify the membership of the Members in the following cases:</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;a. if the false entry is provided on the information of Members.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;b. in case that the manner of use of Service in the proper way is intimidated, like interruption of other persons’ use of Service or stealing of personal information.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;c. if the information obtained from use of Service is provided to the 3<sup>rd</sup> party without permission of Cubebio in addition to the personal use by the Member.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;d. in case that the information provided to Cubebio is changed, which may cause interruption to operation of the homepage.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;e. Other cases, such as; sustaining of membership is judged to be improper.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 8 Re-subscription of Member</strong></p>

                                                                            <p style="margin-left:2.5pt">① In case that the former member who withdrew from the membership in accordance with Article 7 of these conditions desires re-subscription, subscription is applied for in accordance with Article 6 of these conditions.</p>

                                                                            <p style="margin-left:1.2pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Chapter 3 Protection of Personal Information</strong></p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 9 Collection of Personal Information</strong></p>

                                                                            <p style="margin-left:2.5pt">① Cubebio may collect personal information on Users which may be required for utilization to the Services</p>

                                                                            <p style="margin-left:2.5pt">② When collecting personal information, consent from the corresponding Users shall be obtained except the following cases;</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;a. in case that a special requirement is provided in the laws or regulation.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;b. in case that it is necessary for implementation of Service contract.</p>

                                                                            <p style="margin-left:2.5pt">③ Cubebio shall take technical measures necessary for securing stability so that the personal information cannot be lost, stolen, leaked or falsified.</p>

                                                                            <p style="margin-left:2.5pt">④ The provided personal information shall not be used for other purpose or disclosed to the 3<sup>rd</sup> party without consent from the corresponding Users, except the following cases;</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;a. in case that a special requirement is provided in the laws or regulation.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;b. for the procedure of certification of Users.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;c. as necessary for settlement of payment or delivery in respect of provision of Services</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;d. for smooth operation of Cubebio homepage and for utilization as statistics analysis material.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;e. as necessary for the purpose of statistics research or market survey in such a way not to recognize specific person.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Chapter 4 Obligation of Cubebio and Users</strong></p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 10 Obligation of Cubebio </strong></p>

                                                                            <p style="margin-left:2.5pt">① Cubebio is obliged to provided Services in consistent and stable ways as these conditions and consent stipulate unless there are special circumstances such as system check and service development, communication problems or other accidents of force majeure nature.</p>

                                                                            <p style="margin-left:2.5pt">② Cubebio, by taking technical security measures in respect of the personal information including information on credits of Users and by ensuring the best management of the measures, is doing its best effort for security of Users’ information.</p>

                                                                            <p style="margin-left:2.5pt">③ Cubebio does not send electronic mails of advertisement nature for profit-making purpose that Users do not want.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 11 Obligation of Users</strong></p>

                                                                            <p style="margin-left:2.5pt">① Users shall not do the following behaviors when using Services:</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;a. registration of false entry at the time of membership application or change.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;b. wrongful use of residence identification number and password of other persons.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;c. change of information registered in the homepage</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;d. use of information obtained from Services through copying, processing, translation, derivative writing, etc. in the reproduction, concert, broadcasting, exhibit, distribution, publishing or provision of these information to the 3<sup>rd</sup> party other than use by himself.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;e. behavior defaming the reputation of others or causing disbenefit.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;f. behavior that may infringe copyrights or other rights of Cubebio or 3<sup>rd</sup> party.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;g. behavior of distribution to others of information, writings, figures, voices, etc. that may violate public order and traditional custom.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;h. behavior that is objectively judged as related to criminal acts.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;i. behavior of registration or distribution of computer virus that cause faulty function of apparatus related to Services or destruction and confusion of information.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;j. transmitting of information that may cause interruption to stable operation of Service or information of advertisement nature.</p>

                                                                            <p style="margin-left:2.5pt">k. other behavior that violates related laws and regulations.</p>

                                                                            <p style="margin-left:2.5pt">② When using Services, Users shall carry out the following obligation in respect of ID and use of password.&nbsp;</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;a. User shall use ID and password when using Cubebio.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;b. responsibilities for management of ID and password are placed on the Users.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;c. User shall not allow the 3<sup>rd</sup> party to use his ID and password.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;d. User shall take all responsibilities resulting from lack of management of his ID and password.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;e. User shall notify Cubebio immediately when his ID and password have been stolen or use by the 3<sup>rd</sup> party is recognized, and shall follow the guidance of Cubebio.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Chapter 6 Miscellaneous </strong></p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 12 Ownership of Copyright and Limit of Use </strong></p>

                                                                            <p style="margin-left:2.5pt">① Copyright of the literary property or intellectual property made or worked out by Cubebio shall be vested in Cubebio.</p>

                                                                            <p style="margin-left:2.5pt">② Users shall not use the information obtained from use of the homepage for profit-making purpose by such ways-reproduction, transmission, publishing, distribution, broadcasting or shall not allow 3<sup>rd</sup> parties to use for such purpose.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 13 Dispute Resolution </strong></p>

                                                                            <p style="margin-left:2.5pt">① Cubebio and Users shall do every effort necessary for smooth resolution of disputes which may arise out of or in connection with the Services.</p>

                                                                            <p style="margin-left:2.5pt">② Cubebio shall preferentially settle complaints or recommendations raised by Users and in case that the prompt settlement is difficult, Cubebio shall give notice to the Users on the reasoning and schedule of settlement.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 14 Jurisdiction and Governing Law</strong></p>

                                                                            <p style="margin-left:2.5pt">① Lawsuits for the cases on disputes between Cubebio and Users that arise out of use of the Services shall be proceeded at the court having jurisdiction over the address of Cubebio.</p>

                                                                            <p style="margin-left:2.5pt">② The law of Korea shall be applicable for the lawsuits proceeding between Cubebio and Users.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <fieldset class="fregister_agree">
                                                    <label for="agree">Members must agree to the terms of the subscription agreement.</label>
                                                    <input type="checkbox" name="agree" value="1" id="agree1">
                                                </fieldset>
                                            </section>

                                            <section id="fregister_private">
                                                <h2 style="margin:20px 0 10px 0px;">
                                                    <span style="font-size: 20px; font-family:noto sans KR, sans-serif; font-weight:400;">Privacy Policy</span>
                                                    <!--<img src="/skin/member/basic/img/txt_join_2.jpg" alt="개인정보 수집이용안내" />-->
                                                </h2>
                                                <div style="width:1198px;height:300px;overflow-y:scroll;border:1px solid #e0e0e0; border-top:2px solid #282828;">
                                                    <div style="padding:20px;">
                                                        <table class="canvas_grid" width="100%" height="10px" border="0" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="100%" class="canvas_sub grid_border ui-droppable ui-resizable">
                                                                        <div class="makeContent">
                                                                            <p style="margin-left:2.5pt">Cubebio is observing the following personal information protection policy according to [Personal Information Protection Regulation] of the Law for [Information &amp; Communication Network Use] and [Personal Information Protection Policy] legislated by the Ministry of Information &amp; Communication so that the personal information of internet users using website (hereinafter ‘Homepage’) service can be protected. Personal Information Protection Policy shown in the Homepage may be renewed from time to time without notice, upon change of laws or policy of the government, and members are requested to check the Cubebio News (or individual notice) in the Homepage in this regard when visiting website.</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 1 Collection of Personal Information &amp; Purpose of Use</strong></p>

                                                                            <p>For using services in the Homepage, Cubebio essentially collects information to the minimum extent to utilize as on-line or off-line notice and/or as statistics analysis material, which are needed to provide services and personal information smoothly.&nbsp; The Information collected from members will not be used for the purposes other than mentioned above and in case of any changes in respect of the ranges of collected information or purpose of use, member’s prior consent shall be procured.</p>

                                                                            <p>&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 2 Collection of Personal Information</strong></p>

                                                                            <p>For membership subscription, consulting, service application, the following personal information is being collected. Member’s residence identification number is encrypted for storage, allowing no decoding, and will not be used except as required for such unavoidable cases as personal certification or for providing medical service.</p>

                                                                            <p>a. Collection Items: name, birth date, log-in ID, password, phone no. (home), phone no. (mobile), e-mail, residence ID no., service log-in record, cookies</p>

                                                                            <p>b. Way of Collection of Personal Information: Homepage (Member subscription or when providing services like consulting)</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;</p>

                                                                            <p style="margin-left:2.5pt"><strong>Article 3 Keeping of Personal Information and Period of Use</strong></p>

                                                                            <p>In principle, all information will be immediately destroyed once the purpose of collection and use of personal information is fulfilled.&nbsp; But, the following information will be kept for the period and due to the reasons as provided below.</p>

                                                                            <p>a. Keeping Items: name, birth date, log-in ID, password, phone no. (home), address (home), phone no. (mobile), e-mail, information on legal counselor</p>

                                                                            <p style="margin-left:2.5pt">b. Ground for Keeping: To be under separate management in order for the Cubebio to check the use of information and utilize as related ground.</p>

                                                                            <p style="margin-left:2.5pt">c. Period of Keeping: 3 years. In case that the information need be kept according to the requirement of related laws, Cubebio will keep the member’s information for certain period as designated in the related laws, as follows;</p>

                                                                            <p style="margin-left:2.5pt">-Record for payment settlement and delivery of goods: 5 years</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;(Consumer Protection Act, such as electronic commerce)</p>

                                                                            <p style="margin-left:2.5pt">-Record for complaints of customer or disputes: 3 years</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;(Consumer Protection Act, such as electronic commerce)</p>

                                                                            <p style="margin-left:2.5pt">-Record for collection/treatment and use of credit information: 3 year</p>

                                                                            <p style="margin-left:2.5pt">&nbsp;(Act on Use and Protection of Credit Information)</p>

                                                                            <p style="margin-left:2.5pt">Attachment: Personal Information Treatment Policy Implementation Date: 24 September 2008</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <fieldset class="fregister_agree">
                                                    <label for="agree2">I agree with the content of the information collected using personal information.</label>
                                                    <input type="checkbox" name="agree2" value="1" id="agree2">
                                                </fieldset>
                                            </section>

                                            <div class="btn_confirm" style="margin-top:30px;">
                                                <input type="button" name="취소" value="ยกเลิก" onclick="register_cancel()" style="font-size: 14px; font-family:noto sans KR; width:100px; height:35px; border:1px solid #e0e0e0; background:#fff;">
                                                <button type="button" name="다음단계로" value="" onclick="register_submit()" style="font-size: 14px; font-family:noto sans KR; width:100px; height:35px; border:0; background:#282828; color:#fff;">ดำเนินการต่อไป</button>
                                            </div>
                                        </div>
                                        
                                        <div id="frmRegister2" style="display:none;">  
                                            <div class="tbl_frm01 tbl_wrap" style="margin-top:30px;">
                                                <section id="fregister_img">
                                                    <div class="regi_img1">
                                                        <h1 style="text-align:center; font-size:35px; font-family:noto sans KR; margin-bottom:20px; font-weight:500;">สมัครสมาชิก</h1>
                                                    </div>
                                                    <div class="regi_img2">
                                                        <div>
                                                            <img src="http://cubebio.asia/assets/img/join/img_join_circle2_en.jpg" alt="회원가입">
                                                        </div>
                                                    </div>
                                                </section>
                                                
                                                <table style="font-family:noto sans KR;">
                                                    <caption>
                                                        <span style="font-size:20px; font-weight:400;">กรอกข้อมูลทั่วไป</span>
                                                    </caption>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">
                                                                <label for="reg_mb_id">
                                                                    <span style="font-size:14px; font-weight:300;">ID</span>
                                                                    <strong class="sound_only">필수</strong>
                                                                </label>
                                                            </th>
                                                            <td>
                                                                <span class="frm_info">สามารถใส่เป็นตัวอักษรภาษาอังกฤษ, ตัวเลขและ _ เท่านั้น กรุณาใส่อย่างน้อย 3 ตัวอักษร </span>
                                                                <input type="text" name="user_id" value="" id="reg_mb_id" required="" class="frm_input minlength_3 required " maxlength="20" onchange="document.frm.id_overlap.value='N'">
                                    &nbsp;&nbsp;
                                                                <!--<input type="submit" value="Duplicate ID check" style="font-size: 14px; font-family:noto sans KR; width:140px; height:30px; border:0; background:#505050; color:#fff;" onclick="chk_overlap()">		<span id="msg_mb_id"></span>-->
                                                                
                                                                <!--
                                                                <script>
                                                                    
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
                                                                    
                                                                    
                                                                    function chk_overlap(){	
                                                                        
                                                                        //아이디 중복체크
                                                                        if($("[name=user_id]").val==""){
                                                                            alert("โปรดกรอก ID ของคุณ");
                                                                            $("[name=user_id]").focus();
                                                                            return;	
                                                                        }
                                                                        var msg = reg_mb_id_check();
                                                                        if (msg) {
                                                                            alert(msg);
                                                                            $("[name=user_id]").focus();
                                                                            return;
                                                                        }
                                                                        else{
                                                                            alert("Username is available.");
                                                                            $("[name=id_overlap]").val("Y");
                                                                        }

                                                                        return;

                                                                    }
                                                                </script>-->
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <label for="reg_mb_password">
                                                                    <span style="font-size:14px; font-weight:300;">รหัสผ่าน</span>
                                                                    <strong class="sound_only">필수</strong>
                                                                </label>
                                                            </th>
                                                            <td>
                                                                <input type="password" name="user_password" id="reg_mb_password" required="" class="frm_input minlength_3 required" maxlength="20">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <label for="reg_mb_password_re">
                                                                    <span style="font-size:14px; font-weight:300;">ยืนยันรหัสผ่าน</span>
                                                                    <strong class="sound_only">필수</strong>
                                                                </label>
                                                            </th>
                                                            <td>
                                                                <input type="password" name="user_password_re" id="reg_mb_password_re" required="" class="frm_input minlength_3 required" maxlength="20">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                            <div class="tbl_frm01 tbl_wrap">
                                                <table style="font-family:noto sans KR;">
                                                    <caption>
                                                        <span style="font-size:20px; font-weight:400;">กรอกข้อมููลส่วนตัว</span>
                                                    </caption>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">
                                                                <label for="reg_mb_name">
                                                                    <span style="font-size:14px; font-weight:300;">ชื่อ</span>
                                                                    <strong class="sound_only">필수</strong>
                                                                </label>
                                                            </th>
                                                            <td>
                                                                <input type="text" id="mb_name" name="user_name" value="" required="" class="frm_input nospace required " size="10">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <label for="reg_mb_nick">
                                                                    <span style="font-size:14px; font-weight:300;">นิคเนม</span>
                                                                    <strong class="sound_only">필수</strong>
                                                                </label>
                                                            </th>
                                                            <td>
                                                                <span class="frm_info">
                                                                   สามารถใส่เป็นตัวอักษรภาษาเกาหลี, ภาษาอังกฤษและตัวเลขโดยไม่เว้นวรรคเท่านั้น (ภาษาเกาหลี 2 ตัวอักษรขึ้นไป, ภาษาอังกฤษ 4 ตัวอักษรขึ้นไป)<br>
                                                                    สามารถเปลี่ยนนิคเนมได้หลัง 60 วันขึ้นไป
                                                                </span>
                                                                <input type="hidden" name="user_nick_default" value="">
                                                                <input type="text" name="user_nick" value="" id="reg_mb_nick" required="" class="frm_input required nospace" size="10" maxlength="20">
                                                                <span id="msg_mb_nick"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <label for="reg_mb_email">
                                                                    <span style="font-size:14px; font-weight:300;">E-mail</span>
                                                                    <strong class="sound_only">필수</strong>
                                                                </label>
                                                            </th>
                                                            <td>
                                                                <input type="hidden" name="old_email" value="">
                                                                <input type="text" name="user_email" value="" id="reg_mb_email" required="" class="frm_input email required" size="70" maxlength="100">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                            <div class="tbl_frm01 tbl_wrap">
                                                <table style="font-family:noto sans KR;">
                                                    <caption>
                                                        <span style="font-size:20px; font-weight:400;">ตั้งค่าความเป็นส่วนตัวอื่นๆ</span>
                                                    </caption>
                                                    <tbody>



                                                    <tr>
                                                        <th scope="row">
                                                            <label for="reg_mb_mailling">
                                                                <span style="font-size:14px; font-weight:300;">บริการส่งข้อมูลทาง E-mail</span>
                                                            </label>
                                                        </th>
                                                        <td>
                                                            <input type="checkbox" name="user_mailing" value="1" id="reg_mb_mailling" checked="">
                                                            ขอรับข้อมูลบริการต่างๆทาง E-mail
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <label for="reg_mb_open">
                                                                <span style="font-size:14px; font-weight:300;">การเผยข้อมูล</span>
                                                            </label>
                                                        </th>
                                                        <td>
                                                            <span class="frm_info">
                                                                หากต้องการเปลี่ยนแปลงการเผยข้อมูล สามารถเปลี่ยนได้หลัง 1 วันขึ้นไป
                                                            </span>
                                                            <!--<input type="hidden" name="user_open_default" value="">-->
                                                            <input type="checkbox" name="user_open" value="1" checked="" id="reg_mb_open">
                                                            ให้ผู้อื่นสามารถเห็นข้อมูลของข้าพเจ้าได้
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                            <div class="btn_confirm" style="padding-bottom:30px; margin:0 auto; width:212px;">
                                                <a href="http://cubebio.asia">
                                                    <div style="font-size: 14px; font-family:noto sans KR; width:100px; line-height:35px; border:1px solid #e0e0e0; background:#fff; color:#000; display:inline; float:left;">
                                                        ยกเลิก
                                                    </div>
                                                </a>
                                                <input type="image" src="http://cubebio.asia/assets/img/join/btn_next_en.jpg" onclick="submit" style="float:left;">
                                            </div>
                                        </div>
                                    </form>

                                    <script>
                                        function register_cancel(){
                                            history.go(-1);
                                        }
                                        function register_submit(){
                                            if($("#agree1").is(":checked") == false){
                                                alert("กรุณากดยอมรับข้อตกลงในการใช้งาน");
                                                $("#agree1").focus();
                                                $("#agree1").attr('checked', true);

                                                return;
                                            }
                                            if($("#agree2").is(":checked") == false){
                                                alert("กรุณากดยอมรับนโยบายส่วนบุคคล");
                                                $("#agree2").focus();
                                                $("#agree2").attr('checked', true);

                                                return;
                                            }
                                            $('#frmRegister1').css('display', 'none');
                                            $('#frmRegister2').css('display', 'block');
                                            
                                        }
                                    </script>
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