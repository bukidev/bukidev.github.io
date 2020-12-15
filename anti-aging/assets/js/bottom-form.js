$('#showFormBtn').click(function() {
    $(this).removeClass('animated fadeInRight');
    $(this).addClass('animated fadeOutRight');
                
    $('.form-footer-wrap').addClass('full');
    $('#formContent').css('display', 'block');
    $('#closeFormBtn').css('display', 'block');
});
            
$('#closeFormBtn').click(function() {
    $('#showFormBtn').removeClass('animated fadeOutRight');
    $('#showFormBtn').addClass('animated fadeInRight');
                
    $('.form-footer-wrap').removeClass('full');
    $('#formContent').css('display', 'none');
    $(this).css('display', 'none');
});
            
function checkbox() {
    $('#checkbox').click();
}