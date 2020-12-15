

var size = "";
$(window).resize(function(){
	size = window.innerWidth;
	//alert(size)
}).resize();
$(document).ready(function(){

	var agent = navigator.userAgent.toLowerCase();

	if (agent.indexOf("chrome") != -1) {
		$('#gnb_menu ul').css('margin-top', '-14px');
		$('#gnb_menu li').css({'padding' : '52px 0px 27px 0px' , 'float' : 'left' , 'margin' : '-40px 0', 'font-size' : '16px', 'border-right' : '1px solid #e1e1e1' , 'font-family' : 'nanumbarungothic' });
		$('#gnb_menu li a').css({'color' : '#000'})
	}else{
		$('#gnb_menu ul').css('margin-top', '-14px');
		$('#gnb_menu li').css({'padding' : '52px 0px 28px 0px' , 'float' : 'left' , 'margin' : '-40px 0', 'font-size' : '16px', 'border-right' : '1px solid #e1e1e1' , 'font-family' : 'nanumbarungothic'});
		$('#gnb_menu li a').css({'color' : '#000'})
	}
	$(".main_txt_tit").css('display', 'none');
	$(".main_txt").css('display', 'none');
	$("#number2").css({ 'border-left' : '1px solid #e1e1e1'});
	$(".gnb_top_menu").mouseover(function(){
		if($(this).attr("id")!=""){
			$("#gnb_sub_menu").css({"background-image":"url(http://cdn.acus.kr/cubebio_en/menu/"+$(this).attr("id")+")" , "background-repeat": "no-repeat" , "background-position":"bottom right", "color":"#ffffff"});
			
		}
	
		var id = $(this).attr("id");
		if(id == "number2"){
			$(this).css({ 'background-color' : '#5674b9'});
			$("#number2 b").css({ 'color' : 'white', 'font-weight' : '500'});
			$("#number3 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number4 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number5 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number6 b").css({ 'color' : 'white', 'font-weight' : 'normal'});

			$("#number3").css({ 'background-color' : '#f7f7f7'});
			$("#number3 b").css({ 'color' : 'black'});
			$("#number4").css({ 'background-color' : '#f7f7f7'});
			$("#number4 b").css({ 'color' : 'black'});
			$("#number5").css({ 'background-color' : '#f7f7f7'});
			$("#number5 b").css({ 'color' : 'black'});
			$("#number6").css({ 'background-color' : '#f7f7f7'});
			$("#number6 b").css({ 'color' : 'black'});
			$("#number7").css({ 'background-color' : '#f7f7f7'});
			$("#number7 b").css({ 'color' : 'black'});

			$('#sub_menu_ul1').css("display" , "none");
			$('#sub_menu_ul2').css("display" , "none");
			$('#sub_menu_ul3').css("display" , "none");
			$('#sub_menu_ul4').css("display" , "none");
			$('#sub_menu_ul5').css("display" , "none");

			if (agent.indexOf("chrome") != -1) {
				$('#sub_menu_ul0').css({'display' : 'inline', 'margin-right' :  '711px', 'padding' :  '20px 0 20px 0'});
			}else{
				$('#sub_menu_ul0').css({'display' : 'inline', 'margin-right' :  '711px', 'padding' :  '20px 0 20px 0'});
			}
			
			
		}else if(id == "number3"){
			$(this).css({ 'background-color' : '#5674b9'});
			$("#number2 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number3 b").css({ 'color' : 'white', 'font-weight' : '500'});
			$("#number4 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number5 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number6 b").css({ 'color' : 'white', 'font-weight' : 'normal'});

			$("#number2").css({ 'background-color' : '#f7f7f7'});
			$("#number2 b").css({ 'color' : 'black'});
			$("#number4").css({ 'background-color' : '#f7f7f7'});
			$("#number4 b").css({ 'color' : 'black'});
			$("#number5").css({ 'background-color' : '#f7f7f7'});
			$("#number5 b").css({ 'color' : 'black'});
			$("#number6").css({ 'background-color' : '#f7f7f7'});
			$("#number6 b").css({ 'color' : 'black'});
			$("#number7").css({ 'background-color' : '#f7f7f7'});
			$("#number7 b").css({ 'color' : 'black'});

			if (agent.indexOf("chrome") != -1) {
				$('#sub_menu_ul1').css({'display' : 'inline', 'margin-right' : '569px' ,'padding' :  '20px 0 20px 0'});
			}else{
				$('#sub_menu_ul1').css({'display' : 'inline', 'margin-right' : '569px', 'padding' :  '20px 0 20px 0'});
			}
			
			$('#sub_menu_ul2').css("display" , "none");
			$('#sub_menu_ul3').css("display" , "none");
			$('#sub_menu_ul4').css("display" , "none");
			$('#sub_menu_ul5').css("display" , "none");
			$('#sub_menu_ul0').css("display" , "none");
			
		}else if(id == "number4"){
			$(this).css({ 'background-color' : '#5674b9'});
			$("#number2 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number3 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number4 b").css({ 'color' : 'white', 'font-weight' : '500'});
			$("#number5 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number6 b").css({ 'color' : 'white', 'font-weight' : 'normal'});

			$("#number2").css({ 'background-color' : '#f7f7f7'});
			$("#number2 b").css({ 'color' : 'black'});
			$("#number3").css({ 'background-color' : '#f7f7f7'});
			$("#number3 b").css({ 'color' : 'black'});
			$("#number5").css({ 'background-color' : '#f7f7f7'});
			$("#number5 b").css({ 'color' : 'black'});
			$("#number6").css({ 'background-color' : '#f7f7f7'});
			$("#number6 b").css({ 'color' : 'black'});
			$("#number7").css({ 'background-color' : '#f7f7f7'});
			$("#number7 b").css({ 'color' : 'black'});


			$('#sub_menu_ul1').css("display" , "none");
			if (agent.indexOf("chrome") != -1) {
				$('#sub_menu_ul2').css({'display' : 'inline', 'margin-right' : '427px', 'padding' :  '20px 0 20px 0'});
			}else{
				$('#sub_menu_ul2').css({'display' : 'inline', 'margin-right' : '427px', 'padding' :  '20px 0 20px 0'});
			}
			
			$('#sub_menu_ul3').css("display" , "none");
			$('#sub_menu_ul4').css("display" , "none");
			$('#sub_menu_ul5').css("display" , "none");
			$('#sub_menu_ul0').css("display" , "none");
			
		}else if(id == "number5"){
			$(this).css({ 'background-color' : '#5674b9'});
			$("#number2 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number3 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number4 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number5 b").css({ 'color' : 'white', 'font-weight' : '500'});
			$("#number6 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			
			$("#number2").css({ 'background-color' : '#f7f7f7'});
			$("#number2 b").css({ 'color' : 'black'});
			$("#number3").css({ 'background-color' : '#f7f7f7'});
			$("#number3 b").css({ 'color' : 'black'});
			$("#number4").css({ 'background-color' : '#f7f7f7'});
			$("#number4 b").css({ 'color' : 'black'});
			$("#number6").css({ 'background-color' : '#f7f7f7'});
			$("#number6 b").css({ 'color' : 'black'});
			$("#number7").css({ 'background-color' : '#f7f7f7'});
			$("#number7 b").css({ 'color' : 'black'});

			$('#sub_menu_ul1').css("display" , "none");
			$('#sub_menu_ul2').css("display" , "none");

			if (agent.indexOf("chrome") != -1) {
				$('#sub_menu_ul3').css({'display' : 'inline', 'margin-right' : '285px', 'padding' :  '20px 0 20px 0'});
			}else{
				$('#sub_menu_ul3').css({'display' : 'inline', 'margin-right' : '285px', 'padding' :  '20px 0 20px 0'});
			}
			
			$('#sub_menu_ul4').css("display" , "none");
			$('#sub_menu_ul5').css("display" , "none");
			$('#sub_menu_ul0').css("display" , "none");
			
		}else if(id == "number6"){
			$(this).css({ 'background-color' : '#5674b9'});
			$("#number2 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number3 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number4 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number5 b").css({ 'color' : 'white', 'font-weight' : 'normal'});
			$("#number6 b").css({ 'color' : 'white', 'font-weight' : '500'});
			
			$("#number2").css({ 'background-color' : '#f7f7f7'});
			$("#number2 b").css({ 'color' : 'black'});
			$("#number3").css({ 'background-color' : '#f7f7f7'});
			$("#number3 b").css({ 'color' : 'black'});
			$("#number4").css({ 'background-color' : '#f7f7f7'});
			$("#number4 b").css({ 'color' : 'black'});
			$("#number5").css({ 'background-color' : '#f7f7f7'});
			$("#number5 b").css({ 'color' : 'black'});
			$("#number7").css({ 'background-color' : '#f7f7f7'});
			$("#number7 b").css({ 'color' : 'black'});

			$('#sub_menu_ul1').css("display" , "none");
			$('#sub_menu_ul2').css("display" , "none");
			$('#sub_menu_ul3').css("display" , "none");

			if (agent.indexOf("chrome") != -1) {
				$('#sub_menu_ul4').css({'display' : 'inline', 'margin-right' : '143px', 'padding' :  '20px 0 20px 0'});
			}else{
				$('#sub_menu_ul4').css({'display' : 'inline', 'margin-right' : '143px', 'padding' :  '20px 0 20px 0',});
			}
			
			$('#sub_menu_ul5').css("display" , "none");
			$('#sub_menu_ul0').css("display" , "none");
			//$('#sub_menu_ul4 > li').filter(':first').css("margin-left" , "0px");
		}else if(id == "number7"){
			$(this).css({ 'background-color' : '#5674b9'});
			$("#number7 b").css({ 'color' : 'white'});
			$('#sub_menu_ul1').css("display" , "none");
			$('#sub_menu_ul2').css("display" , "none");
			$('#sub_menu_ul3').css("display" , "none");
			$('#sub_menu_ul4').css("display" , "none");
			$('#sub_menu_ul5').css("display" , "inline");
			$('#sub_menu_ul0').css("display" , "none");
			$('#sub_menu_ul5 > li').filter(':first').css("margin-left" , "650px");

			$("#number2").css({ 'background-color' : '#f7f7f7'});
			$("#number2 b").css({ 'color' : 'black'});
			$("#number3").css({ 'background-color' : '#f7f7f7'});
			$("#number3 b").css({ 'color' : 'black'});
			$("#number4").css({ 'background-color' : '#f7f7f7'});
			$("#number4 b").css({ 'color' : 'black'});
			$("#number5").css({ 'background-color' : '#f7f7f7'});
			$("#number5 b").css({ 'color' : 'black'});
			$("#number6").css({ 'background-color' : '#f7f7f7'});
			$("#number6 b").css({ 'color' : 'black'});

			if (agent.indexOf("chrome") != -1) {
				$('#sub_menu_ul5').css({'display' : 'inline', 'margin-right' : '1px', 'padding' :  '20px 0 20px 0'});
			}else{
				$('#sub_menu_ul5').css({'display' : 'inline', 'margin-right' : '1px', 'padding' :  '20px 0 20px 0',});
			}
		}
		if($("#gnb_sub_menu").css("display")=="none"){
			$("#gnb_sub_menu").slideDown("fast");
		}
		$(".content").mouseover(function(){
			$("#gnb_sub_menu").slideUp("fast");
		});
		$(".skdslider").mouseover(function(){
			$("#gnb_sub_menu").slideUp("fast");
		});
		$(".banner").mouseover(function(){
			$("#gnb_sub_menu").slideUp("fast");
		});
	});

	$("div#gnb_sub_menu").mouseleave(function(){
		//$("#gnb_sub_menu").slideUp("fast");
	});


	$("div.header_top").mouseover(function(){
		$("#gnb_sub_menu").slideUp("fast");
	});

});
var b = 0;
$("body").on("mousewheel", function (event) {
	b++;
	var i = event.originalEvent.wheelDelta; 
	if(b == 1){
		$(".main_txt_tit").fadeIn(2500);
	}
	if(b == 3){
		$(".main_txt").fadeIn(3000);
	}
	if(b == 5){
		$(".makeContent1 img").attr("src", "http://admin.acus.kr/secure_zone/upFile/cubebio_en/148696912052107.gif");
	}
});