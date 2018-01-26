function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}


$(function(){
	$(".overs").hover(function(){
		  $("img",this).eq(1).stop().fadeToggle(300);
	 },function(){
		  $("img",this).eq(1).stop().fadeToggle(300);
	 });

    $(".overs2").hover(function(){
			 $("img",this).eq(1).stop().fadeToggle(200);
	 },function(){
		    $("img",this).eq(1).stop().fadeToggle(200);
	 });

	$(".overs2_1").hover(function(){
			 $("img",this).eq(1).stop().fadeToggle(200);
	 },function(){
		    $("img",this).eq(1).stop().fadeToggle(200);
	 });

	$(".overs3").hover(function(){
			 $("img",this).eq(1).stop().fadeToggle(500);
	 },function(){
		    $("img",this).eq(1).stop().fadeToggle(500);
	 });

	$(".overs4").hover(function(){
			 $("img",this).eq(1).stop().fadeToggle(500);
	 },function(){
		    $("img",this).eq(1).stop().fadeToggle(500);
	 });

	
});

$(function(){

$(".vi").hover(function(){
      var imgs = $(this).attr("src");
      $(this).after( "<div class='vi2'><img src='"+imgs+"' width='200' /></div>" );
 },function(){
      $(".vi2").remove();
 });

});



 $(document).ready(function() {
	 $(".accordion_banner .accordion_title").click(function() {
		if($(this).next("div").is("visible")){
		$(this).next("div").slideUp("fast");
		} else{
		$(".accordion_banner .accordion_sub").slideUp("fast");
		$(this).next("div").slideToggle("fast");
		}
	 });
	});


function viewStyle(obj){
    while(true){
      if((obj=obj.nextSibling).nodeName=="DIV"){
        obj.style.display=(obj.style.display!='block')?'block':'none';
        obj.style.fontSize = "14px"; //12px로 변경하세요.. 확인하시라고 크게 하였습니다.
        obj.style.color = "#FF0000";
        break;
      }
    }
  }