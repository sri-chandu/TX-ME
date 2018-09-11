$(document).ready(function() {
    $('#register').click(function() {       
        var regno = $('#regdno').val();
        if (!regno.match(/1[4-7]1[fF||lL][aA]04\d{3}/)) 
        {
            $('#cross').remove();
            $('#regdno').addClass('animated shake');
            $('#regdnoo').addClass('has-error has-feedback');
            /*$('#regdno').tooltip({trigger: 'manual' }).tooltip('show');*/
            $('#regdno').after('<span class="glyphicon glyphicon-remove form-control-feedback" id="cross"></span>');
            $('#cross').addClass('animated shake');
            event.preventDefault();
        } 
        else 
        {
            $('#cross').remove();
            $('#regdno').removeClass('animated shake');
            $('#regdnoo').removeClass('has-error has-feedback');
            $('#regdnoo').addClass('has-success has-feedback');
            $('#regdno').after('<span class="glyphicon glyphicon-ok form-control-feedback" id="okregdno"></span>');
           /* $('#regdno').tooltip({trigger: 'manual'}).tooltip('hide');*/
        }
        var srnamee = $('#srname').val();
        var a = /[aA-zZ]/;
        if (!srnamee.match(a) || srnamee.match(/[0-9]/)) 
        {
            $('#crosssrname').remove();
            $('#srname').addClass('animated shake');
            $('#srnameee').addClass('has-error has-feedback');
            $('#srname').after('<span class="glyphicon glyphicon-remove form-control-feedback" id="crosssrname"></span>');
            $('#crosssrname').addClass('animated shake');
           /* $('#uname').tooltip({trigger: 'manual'}).tooltip('show');*/
            event.preventDefault();
        } 
        else 
        {
            $('#crosssrname').remove();
            $('#srname').removeClass('animated shake');
            $('#srnameee').removeClass('has-error has-feedback');
            $('#srnameee').addClass('has-success has-feedback');
            $('#srname').after('<span class="glyphicon glyphicon-ok form-control-feedback" id="okname"></span>');
            /*$('#uname').tooltip({trigger: 'manual' }).tooltip('hide');*/
        }
        var namee = $('#uname').val();
        var a = /[aA-zZ]/;
        if (!namee.match(a) || namee.match(/[0-9]/)) 
        {
            $('#crossuname').remove();
            $('#uname').addClass('animated shake');
            $('#unameee').addClass('has-error has-feedback');
            $('#uname').after('<span class="glyphicon glyphicon-remove form-control-feedback" id="crossuname"></span>');
            $('#crossuname').addClass('animated shake');
           /* $('#uname').tooltip({trigger: 'manual'}).tooltip('show');*/
            event.preventDefault();
        } 
        else 
        {
            $('#crossuname').remove();
            $('#uname').removeClass('animated shake');
            $('#unameee').removeClass('has-error has-feedback');
            $('#unameee').addClass('has-success has-feedback');
            $('#uname').after('<span class="glyphicon glyphicon-ok form-control-feedback" id="okname"></span>');
            /*$('#uname').tooltip({trigger: 'manual' }).tooltip('hide');*/
        }

        var emaill = $('#email').val();
        var b = /^[A-Za-z0-9](\.?|_?[A-Za-z0-9]){5,}@(yahoo|gmail|outlook|icloud)\.com$/;
        if (!emaill.match(b)) 
        {
            $('#crossemail').remove();
            $('#email').addClass('animated shake');
            $('#emailll').addClass('has-error has-feedback');
            $('#email').after('<span class="glyphicon glyphicon-remove form-control-feedback" id="crossemail"></span>');
            $('#crossemail').addClass('animated shake');
           /* $('#email').tooltip({trigger: 'manual'}).tooltip('show');*/
            event.preventDefault();
        } 
        else 
        {
            $('#crossemail').remove();
            $('#email').removeClass('animated shake');
            $('#emailll').removeClass('has-error has-feedback');
            $('#emailll').addClass('has-success has-feedback');
            $('#email').after('<span class="glyphicon glyphicon-ok form-control-feedback" id="okemail"></span>');
            /*$('#email').tooltip({trigger: 'manual'}).tooltip('hide');*/
        }
        var mobnoo = $('#stph').val();
        var c = /^[789]\d{9}$/;
        if (!mobnoo.match(c)) 
        {
            $('#crossstph').remove();
            $('#stph').addClass('animated shake');
            $('#stph').removeClass('animated shake');
            $('#stphhh').addClass('has-error has-feedback');
            $('#stph').after('<span class="glyphicon glyphicon-remove form-control-feedback" id="crossstph"></span>');
            $('#crossstph').addClass('animated shake');
           /* $('#stph').tooltip({trigger: 'manual'}).tooltip('show');*/
            event.preventDefault();
        } 
        else 
        {
            // alert('stph correct');
            $('#crossstph').remove();
            $('#stph').removeClass('animated shake');
            $('#stphhh').removeClass('has-error has-feedback');
            $('#stphhh').addClass('has-success has-feedback');
            $('#stph').after('<span class="glyphicon glyphicon-ok form-control-feedback" id="okstph"></span>');
            /*$('#stph').tooltip({trigger: 'manual' }).tooltip('hide');*/
        }
        var mobnoo = $('#ftph').val();
        var c = /^[789]\d{9}$/;
        if (!mobnoo.match(c)) 
        {
            $('#crossftph').remove();
            $('#ftph').addClass('animated shake');
            $('#ftphhh').addClass('has-error has-feedback');
            $('#ftph').after('<span class="glyphicon glyphicon-remove form-control-feedback" id="crossftph"></span>');
            $('#crossftph').addClass('animated shake');
            /*$('#ftph').tooltip({trigger: 'manual'}).tooltip('show');*/
            event.preventDefault();
        } 
        else 
        {
            // alert('ftph correct');
            $('#crossftph').remove();
            $('#ftph').removeClass('animated shake');
            $('#ftphhh').removeClass('has-error has-feedback');
            $('#ftphhh').addClass('has-success has-feedback');
            $('#ftph').after('<span class="glyphicon glyphicon-ok form-control-feedback" id="okftph"></span>');
            /*$('#ftph').tooltip({trigger: 'manual'}).tooltip('hide');*/

        }
        var mobnoo = $('#stwhno').val();
        var c = /^[789]\d{9}$/;
        if (!mobnoo.match(c)) 
        {
            $('#crossstwhno').remove();
            $('#stwhno').addClass('animated shake');
            $('#stwhnooo').addClass('has-error has-feedback');
            $('#stwhno').after('<span class="glyphicon glyphicon-remove form-control-feedback" id="crossstwhno"></span>');
            $('#crossstwhno').addClass('animated shake');
            /*$('#stwhno').tooltip({trigger: 'manual'}).tooltip('show');*/
            event.preventDefault();
        } 
        else 
        {
            $('#crossstwhno').remove();
            $('#stwhno').removeClass('animated shake');
            $('#stwhnooo').removeClass('has-error has-feedback');
            $('#stwhnooo').addClass('has-success has-feedback');
            $('#stwhno').after('<span class="glyphicon glyphicon-ok form-control-feedback" id="okstwhno"></span>');
           /* $('#stwhno').tooltip({trigger: 'manual' }).tooltip('hide');*/
        }
        var yr = $('#year').val();
        var m = /^[2-4]$/;
        if (!yr.match(m)) {
            $('#crossyear').remove();
            $('#okyear').remove();
            $('#year').addClass('animated shake');
            $('#yearrr').addClass('has-error has-feedback');
            $('#year').after('<span class="glyphicon glyphicon-remove form-control-feedback" id="crossyear"></span>');
            $('#crossyear').addClass('animated shake');
            /*$('#year').tooltip({trigger: 'manual'}).tooltip('show');*/
            event.preventDefault();
        } 
        else {
            // alert('year correct');
            $('#crossyear').remove();
            $('#okyear').remove();
            $('#year').removeClass('animated shake');
            $('#yearrr').removeClass('has-error has-feedback');
            $('#yearrr').addClass('has-success has-feedback');
            $('#year').after('<span class="glyphicon glyphicon-ok form-control-feedback" id="okyear"></span>');
            /*$('#year').tooltip({trigger: 'manual'}).tooltip('hide');*/
        }
        var yr = $('#sec').val();
        var m = /^[a-z]$/;
        if (!yr.match(m)) {
            $('#crosssec').remove();
            $('#oksec').remove();
            $('#sec').addClass('animated shake');
            $('#seccc').addClass('has-error has-feedback');
            $('#sec').after('<span class="glyphicon glyphicon-remove form-control-feedback" id="crosssec"></span>');
            $('#crosssec').addClass('animated shake');
            /*$('#sec').tooltip({trigger: 'manual'}).tooltip('show');*/
            event.preventDefault();
        } 
        else {
            $('#crosssec').remove();
            $('#oksec').remove();
            $('#sec').removeClass('animated shake');
            $('#seccc').removeClass('has-error has-feedback');
            $('#seccc').addClass('has-success has-feedback');
            $('#sec').after('<span class="glyphicon glyphicon-ok form-control-feedback" id="oksec"></span>');
            /*$('#sec').tooltip({trigger: 'manual'}).tooltip('hide');*/
        }
        var imgname = $('input[class=image1').val();
        var resumename = $('input[class=resume1').val();
        if (imgname.length == 0 && resumename.length == 0) 
        {
            $('.custom-file-upload-2').removeClass('animated shake');
            $('.custom-file-upload-1').removeClass('animated shake');
            $('.custom-file-upload-2').css('border','1px solid #ccc');
            $('.custom-file-upload-1').css('border','1px solid #ccc');
            $('.custom-file-upload-2').addClass('animated shake');
            $('.custom-file-upload-1').addClass('animated shake');
            bootbox.alert({
            size:"small",
            title:"Error",
            message:"Image and Resume not uploaded"
            });
            $('.custom-file-upload-2').css('border','1px solid #a94442');
            $('.custom-file-upload-1').css('border','1px solid #a94442');
        }
        if (imgname.length == 0 && resumename.length != 0) 
        {
            $('.custom-file-upload-1').removeClass('animated shake');
            $('.custom-file-upload-1').css('border','1px solid #ccc');
            $('.custom-file-upload-2').css('border','1px solid #a94442');
            $('.custom-file-upload-2').addClass('animated shake');
            bootbox.alert({
            size:"small",
            title:"Error",
            message:"Image not uplaoded"
            });

        }
        if (imgname.length != 0 && resumename.length == 0) 
        {
            $('.custom-file-upload-2').css('border','1px solid #ccc');
            $('.custom-file-upload-1').css('border','1px solid #a94442');
            $('.custom-file-upload-1').addClass('animated shake');
            bootbox.alert({
            size:"small",
            title:"Error",
            message:"Resume not uplaoded"
            });
        }
        
    });
});
$(document).ready(function() {
    $('#file-upload2').change(function() {
        var imname = $('input[class=image1]').val().split('\\').pop();
        var iext = imname.split('.').pop();
        if (iext != 'jpg' && iext != 'jpeg' && iext != 'PNG') 
        {
            $('.custom-file-upload-2').css('border','1px solid #a94442');
            event.preventDefault();
        } 
        else 
        {
            $('.custom-file-upload-2').css('border','1px solid #ccc');
            $('#imageres').html(imname);
        }
    });
    $('#file-upload1').change(function() {
        var rname = $('input[class=resume1]').val().split('\\').pop();
        var ext = rname.split('.').pop();
        if (ext != 'pdf') {
            alert('invalid resume format');
            event.preventDefault();
        } else {
            $('#resumeres').html(rname);
        }
    });
    $('#regdno').attr('autocomplete', 'off');
    $('#uname').attr('autocomplete', 'off');
    $('#email').attr('autocomplete', 'off');
    $('#stph').attr('autocomplete', 'off');
    $('#ftph').attr('autocomplete', 'off');
    $('#stwhno').attr('autocomplete', 'off');

    $('#reset').click(function() {
        $('#okregdno').remove();
        $('#cross').remove();
        $('#regdno').removeClass('animated shake');
        $('#regdnoo').removeClass('has-error has-feedback');
        $('#regdnoo').removeClass('has-success has-feedback');
       /* $('#regdno').tooltip({trigger: 'manual'}).tooltip('hide');*/

        $('#okname').remove();
        $('#crossuname').remove();
        $('#uname').removeClass('animated shake');
        $('#unameee').removeClass('has-error has-feedback');
        $('#unameee').removeClass('has-success has-feedbac	k');
        /*$('#uname').tooltip({trigger: 'manual'}).tooltip('hide');*/

        $('#okemail').remove();
        $('#crossemail').remove();
        $('#email').removeClass('animated shake');
        $('#emailll').removeClass('has-error has-feedback');
        $('#emailll').removeClass('has-success has-feedback');
        /*$('#email').tooltip({trigger: 'manual'}).tooltip('hide');*/

        $('#okstph').remove();
        $('#crossstph').remove();
        $('#stph').removeClass('animated shake');
        $('#stphhh').removeClass('has-error has-feedback');
        $('#stphhh').removeClass('has-success has-feedback');
        /*$('#stph').tooltip({trigger: 'manual'}).tooltip('hide');*/

        $('#okftph').remove();
        $('#crossftph').remove();
        $('#ftph').removeClass('animated shake');
        $('#ftphhh').removeClass('has-error has-feedback');
        $('#ftphhh').removeClass('has-success has-feedback');
        /*$('#ftph').tooltip({trigger: 'manual'}).tooltip('hide');*/

        $('#okstwhno').remove();
        $('#crossstwhno').remove();
        $('#stwhno').removeClass('animated shake');
        $('#stwhnooo').removeClass('has-error has-feedback');
        $('#stwhnooo').removeClass('has-success has-feedback');
        /*$('#stwhno').tooltip({trigger: 'manual'}).tooltip('hide');*/

        $('#okyear').remove();
        $('#crossyear').remove();
        $('#year').removeClass('animated shake');
        $('#yearrr').removeClass('has-error has-feedback');
        $('#yearrr').removeClass('has-success has-feedback');
        /*$('#year').tooltip({trigger: 'manual'}).tooltip('hide');*/

        $('#oksec').remove();
        $('#crosssec').remove();
        $('#sec').removeClass('animated shake');
        $('#seccc').removeClass('has-error has-feedback');
        $('#seccc').removeClass('has-success has-feedback');
        /*$('#sec').tooltip({trigger: 'manual'}).tooltip('hide');*/

        $('#imageres').html('');
        $('#resumeres').html('');
    });
    $('#helpbtn').click(function(){
        bootbox.alert({
            size:"medium",
            title:"help",
            message:"bootbox"
        });
    });
});
$(document).ready(function(){

    $('#regdno').keyup(function(){  

        var yr=$(this).val();
        yrr=yr.charAt(1);
        if(yrr)
        {
            $.ajax({
                type:"post",
                url:"year.php",
                data:{yrr:yrr},
                cache:true,
                success:function(data)
                {
                    $('#year').html(data);
                    var year=$('#year').find("option:first-child").val();
                    $.ajax({
                        type:"post",
                        url:"section.php",
                        data:{year:year},
                        cache:true,
                        success:function(data)
                        {
                            $('#sec').html(data);
                        }
                    });
                }
            });
        }
    });
});