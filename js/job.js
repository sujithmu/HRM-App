$(document).ready(function(){
    
    $('#jobform').validate({
        
        rules:{
                    joindate:"required",
                    jobtitle:"required",
                    
                    
                    },
                messages:{
                    joindate:"please enter date of joining",
                    jobtitle:"select a title",                                        
                    },
                    
                    submitHandler: function(form) 
                        {
                                              
                            $(form).ajaxSubmit({
                                
                            data:{empnumber:$('#empnumber').val()},
                                    
                            success: function(){
                                 $('#jobalert').fadeIn();
                                 setTimeout(
                                 function(){
                                     
                                     $('#jobalert').fadeOut();
                                 },3000
                                                
                                     );
                                     }  });
                       
                        
                        }
        
    });
    $('#jobbutton').click(function(){
                $('#jobform').submit();
              });
    
    
    
});