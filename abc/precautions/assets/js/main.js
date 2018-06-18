$('.detail-list').click(function() {
    $('.transition-overlay').addClass('is-open');
});


//for click show modal detail
var detailChoseList = ['#breast', '#hip', '#lipo', '#female', '#face',' #skin', '#newBreast'];

$('.menu>a').click(function() {
    var detailChose = $(this).data('detail');
    for(i = 0; i < detailChoseList.length; i++) {
        $(detailChoseList[i]).css('display', 'none');
    }
    $(detailChose).css('display', 'block');
    console.log('clicked menu : ' + detailChose);
});