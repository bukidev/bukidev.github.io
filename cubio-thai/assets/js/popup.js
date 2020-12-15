
function layer_open(el){

		var temp = $('#' + el);		//레이어의 id를 temp변수에 저장
		var bg = temp.prev().hasClass('bg');	//dimmed 레이어를 감지하기 위한 boolean 변수

		if(bg){
			$('.layer').fadeIn();
		}else{
			temp.fadeIn();	//bg 클래스가 없으면 일반레이어로 실행한다.
		}

		// 화면의 중앙에 레이어를 띄운다.
		if (temp.outerHeight() < $(document).height() ) temp.css('margin-top', '0px');
		else temp.css('top', '0px');
		if (temp.outerWidth() < $(document).width() ) temp.css('margin-left', '0px');
		else temp.css('left', '0px');

		temp.find('a.cbtn').click(function(e){
			if(bg){
				$('.layer').fadeOut();
			}else{
				temp.fadeOut();		//'닫기'버튼을 클릭하면 레이어가 사라진다.
			}
			e.preventDefault();
		});
		var maskHeight = $(document).height();  
        var maskWidth = $(window).width();  

        //마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
        // 윈도우 창으로 검은색 레이아웃으로 덮는 효과

        $('#mask').css({'width':maskWidth,'height':maskHeight});  

		$('#header').css("z-index", "0");
		$('#content').css("display", "none");

        //애니메이션 효과
        $('#mask').fadeIn(1000);      
        $('#mask').fadeTo("slow",0.8); 

		// 화면 눌렀을시 닫기
		$('.window .close').click(function (e) {  
			//링크 기본동작은 작동하지 않도록 한다.
			e.preventDefault();  
			$('#mask, .window').hide();  
			
		});       

		//검은 막을 눌렀을 때
		$('#mask').click(function () {  
			$(this).hide();  
			$('.window').hide();  
			$('#header').css("z-index", "99999999");
			$('#content').css("display", "block");
			$('.pop-layer').fadeOut();
		});

		// 윈도우 창으로 검은색 레이아웃으로 덮는 효과 끝

		$('.layer .bg').click(function(e){
			$('.layer').fadeOut();
			e.preventDefault();
		});

}

function ch_form(){
	var pass = $("#pass").val();
	var repass = $("#repass").val();

	if(pass != repass){
		alert("패스워드가 동일하지  않습니다.");
		return false;
	}
	if($("input:checkbox[id='email_sms']").is(":checked") == false  ){
		alert("수신동의를 하셔야 회원가입이 진행됩니다.");
		return false;
	}
}




/* Kurien / Kurien's Blog / http://blog.kurien.co.kr */
/* 주석만 제거하지 않는다면, 어떤 용도로 사용하셔도 좋습니다. */

function kCalendar(id, date) {
	var kCalendar = document.getElementById(id);
	
	if( typeof( date ) !== 'undefined' ) {
		date = date.split('-');
		date[1] = date[1] - 1;
		date = new Date(date[0], date[1], date[2]);
	} else {
		var date = new Date();
	}
	var currentYear = date.getFullYear();
	//년도를 구함
	
	var currentMonth = date.getMonth() + 1;
	//연을 구함. 월은 0부터 시작하므로 +1, 12월은 11을 출력
	
	var currentDate = date.getDate();
	//오늘 일자.
	
	date.setDate(1);
	var currentDay = date.getDay();
	//이번달 1일의 요일은 출력. 0은 일요일 6은 토요일
	
	var dateString = new Array('sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat');
	var lastDate = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
	if( (currentYear % 4 === 0 && currentYear % 100 !== 0) || currentYear % 400 === 0 )
		lastDate[1] = 29;
	//각 달의 마지막 일을 계산, 윤년의 경우 년도가 4의 배수이고 100의 배수가 아닐 때 혹은 400의 배수일 때 2월달이 29일 임.
	
	var currentLastDate = lastDate[currentMonth-1];
	var week = Math.ceil( ( currentDay + currentLastDate ) / 7 );
	//총 몇 주인지 구함.
	
	if(currentMonth != 1)
		var prevDate = currentYear + '-' + ( currentMonth - 1 ) + '-' + currentDate;
	else
		var prevDate = ( currentYear - 1 ) + '-' + 12 + '-' + currentDate;
	//만약 이번달이 1월이라면 1년 전 12월로 출력.
	
	if(currentMonth != 12) 
		var nextDate = currentYear + '-' + ( currentMonth + 1 ) + '-' + currentDate;
	else
		var nextDate = ( currentYear + 1 ) + '-' + 1 + '-' + currentDate;
	//만약 이번달이 12월이라면 1년 후 1월로 출력.

	
	if( currentMonth < 10 )
		var currentMonth = '0' + currentMonth;
	//10월 이하라면 앞에 0을 붙여준다.
	
	var calendar = '';
	
	calendar += '<div id="header" >';
	calendar += '			<span class="left"><a href="#" class="button left" onclick="kCalendar(\'' +  id + '\', \'' + prevDate + '\')"><</a></span>';
	calendar += '			<span id="date">' + currentYear + '. ' + currentMonth + '</span>';
	calendar += '			<span class="right"><a href="#" class="button right" onclick="kCalendar(\'' + id + '\', \'' + nextDate + '\')">></a></span>';
	calendar += '		</div>';
	calendar += '		<table border="0" cellspacing="0" cellpadding="0">';
	calendar += '			<caption>' + currentYear + '년 ' + currentMonth + '월 달력</caption>';
	calendar += '			<thead style="line-height:40px">';
	calendar += '				<tr>';
	calendar += '				  <th class="sun" scope="row">SUN</th>';
	calendar += '				  <th class="mon" scope="row">MON</th>';
	calendar += '				  <th class="tue" scope="row">TUE</th>';
	calendar += '				  <th class="wed" scope="row">WED</th>';
	calendar += '				  <th class="thu" scope="row">THU</th>';
	calendar += '				  <th class="fri" scope="row">FRI</th>';
	calendar += '				  <th class="sat" scope="row">SAT</th>';
	calendar += '				</tr>';
	calendar += '			</thead>';
	calendar += '			<tbody>';
	
	var dateNum = 1 - currentDay;
	var day = new Date();
	var sysYear = day.getFullYear();
	var sysMonth = day.getMonth()+1;
	var ids = 0;
	var sys_days;

	for(var i = 0; i < week; i++) {		
		calendar += '			<tr>';
		for(var j = 0; j < 7; j++, dateNum++) {
			ids++;
			sys_days = currentYear +'-'+currentMonth+'-'+dateNum;
			if( dateNum < 1 || dateNum > currentLastDate ) {

				calendar += '				<td class="' + dateString[j] + '"></td>';
				continue;
			}
			if(currentYear > sysYear){ // 현재년 보다 클시 색상변경
				calendar += '				<td class="' + dateString[j] + '" id="top'+ids+'" >' + dateNum + '<div class="box_style" id="a_style">신청가능</div></td>';
			}else if(currentYear < sysYear){
				calendar += '				<td class="' + dateString[j] + '" id="top'+ids+'"  >' + dateNum + '<div class="box_style" id="s_style">완료</div></td>';
			}else{
					if(dateNum > day.getDate() - 1){ // 현재날짜 보다 클시
						var result  = result_date(sys_days);
						
						if(result == "신청가능"){
							calendar += '				<td class="' + dateString[j] + '" id="top'+ids+'"  >' + dateNum + '<div class="box_style" id="a_style">'+result+'</div></td>';
						}else if(result == "완료"){
							calendar += '				<td class="' + dateString[j] + '" id="top'+ids+'"  >' + dateNum + '<div class="box_style" id="s_style">'+result+'</div></td>';
						}else{
							calendar += '				<td class="' + dateString[j] + '" id="top'+ids+'"  >' + dateNum + '<div class="box_style" id="a_style">신청가능</div></td>';
						}
						
					}else{  // 현재날짜보다 작을시
						var result  = result_date(sys_days);
						
						if(result == "신청가능"){
							calendar += '				<td class="' + dateString[j] + '" id="top'+ids+'"  >' + dateNum + '<div class="box_style" id="a_style">'+result+'</div></td>';
						}else if(result == "완료"){
							calendar += '				<td class="' + dateString[j] + '" id="top'+ids+'"  >' + dateNum + '<div class="box_style" id="s_style">'+result+'</div></td>';
						}else{
							calendar += '				<td class="' + dateString[j] + '" id="top'+ids+'"  >' + dateNum + '<div class="box_style" id="s_style">완료</div></td>';
						}
					}
			}			
		}
		calendar += '			</tr>';
	}
	
	calendar += '			</tbody>';
	calendar += '		</table>';
	
	kCalendar.innerHTML = calendar;

	$('#kCalendar tr td').first().css('border-left', '0px');
	$('#kCalendar tr td').eq(6).css('border-right', '0px');
	$('#kCalendar tr td').eq(7).css('border-left', '0px');
	$('#kCalendar tr td').eq(13).css('border-right', '0px');

	$('#kCalendar tr td').eq(14).css('border-left', '0px');
	$('#kCalendar tr td').eq(20).css('border-right', '0px');
	$('#kCalendar tr td').eq(21).css('border-left', '0px');
	$('#kCalendar tr td').eq(27).css('border-right', '0px');

	$('#kCalendar tr td').eq(28).css('border-left', '0px');
	$('#kCalendar tr td').eq(34).css('border-right', '0px');
	
}

function del_matter(a){
	if(confirm("삭제 하시겠습니까?") == true){
		var frm = $("#matter_insert");	
		$("#mode").val("del_matter");
		$("#seq").val(a);
		frm.action = "del_matter";
		frm.submit();
	}
	
}
