/*$(document).ready(function() {  
  
        //the min chars for username  
        var min_chars = 3;  
  
        //result texts  
        var characters_error = 'Minimum amount of chars is 3';  
        var checking_html = 'Checking...';  
  
        //when button is clicked  
        $('#reg_mb_id').on(function(){  
    
            //run the character number check  
            if($('#reg_mb_id').val().length < min_chars){  
                //if it's bellow the minimum show characters_error text '  
                $('#msg_mb_id').html(characters_error);  
            }else{  
                //else show the cheking_text and run the function to check  
                $('#msg_mb_id').html(checking_html);  
                check_availability();  
            }  
        });  
  
  });  */
  
//function to check username availability  
function check_availability(){  
  
        /*//get the username  
        var username = $('#reg_mb_id').val();  
  
        //use ajax to run the check  
        $.post("user_id_check.php", { username: username },  
            function(result){  
                //if the result is 1  
                if(result == 1){  
                    //show that the username is available  
                    $('#msg_mb_id').html(username + ' is Available');  
                }else{  
                    //show that the username is NOT available  
                    $('#msg_mb_id').html(username + ' is not Available');  
                }  
        });  */
    
    $.post("user_id_check.php", $("#register").serialize())
    .done(function(data){
        $("#result").html(data);
    });
  
}  
