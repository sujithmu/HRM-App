$(document).ready(function(){
    
    $('#jobform').validate({
        
        rules:{
                    joindate:"required",
                    
                    
                    
                    },
                messages:{
                    joindate:"please enter date of joining",
                    
                    
                    
                    },
                    
                    submitHandler: function(form) 
                        {
                                              
                            $(form).ajaxSubmit({
                                    
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