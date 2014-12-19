$(document).ready(function(){
    
    $('#forgotpass').click(function(){


     $('#forgotpassform').show();
     $('#loginform').hide();
//loginform 
    });

     $('#forgotbtn').click(function(){
        $('#forgotpswdform').submit();   
    });


     $('#btnsubmit').click(function(){
         
         $.post(baseurl+"/index.php?r=Loginregister/LoginValidation",{uemail:$('#uemail').val(),upw:$('#upw').val()}).done(function(data)
         {
             if (data!='success')
             {
                  $('#error_msg').html("Invalid username or password");
                 $('#error_msg').show();
                 
                 
             }
             else{
                 
                 location.href=baseurl+"/index.php";
             }
            
    });
    
    });
    
     $('#uemail,#upw').keypress(function(e)
    {
        if(e.which==13){
            
            $('#btnsubmit').trigger('click');
        }
        
    });
    
    });
    