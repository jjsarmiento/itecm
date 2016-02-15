/**
 * Created by Jan on 1/6/16.
 */
$(document).ready(function(){
   $('#regCaptcha').keyup(function(){
        if($('#regCaptcha').val() == $('#captchaImg').data('code')){
            $('#regBtn').removeAttr('disabled');
            $('#errorSpan').empty();
            $('#successSpan').empty().append('<i class="fa fa-check"></i> Captcha code correct.');
        }else{
            $('#regBtn').prop('disabled', 'true');
            $('#successSpan').empty();
            $('#errorSpan').empty().append('<i class="fa fa-warning"></i> Captcha code incorrect! try again.');
        }
   });
});

$(function() {
    $( "#regBdate" ).datepicker({
        changeMonth: true,
        changeYear: true
    });

    $( "#editBdate" ).datepicker({
        changeMonth: true,
        changeYear: true
    });
});