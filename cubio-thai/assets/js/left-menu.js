$(document).ready(function(){
		$(".sidemenu li:has(ul)").click(function(event){
			var left_course_nm = $(this).find(".left_course_nm");
			$(".left_course_nm").not(left_course_nm).each(function (){
				$(this).removeClass("on");
				$(this).slideUp();
			});
			if ( left_course_nm.hasClass("on")){
				left_course_nm.removeClass("on");
				left_course_nm.slideUp();
			}else{
				left_course_nm.addClass("on");
				left_course_nm.slideDown();
			}
		});
	});	