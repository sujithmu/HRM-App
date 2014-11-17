$(document).ready(function(){
    
    
    
    
    $('#reportform').validate({
        
        rules:{
                    rname:"required",
                    
                    
                    
                    },
                messages:{
                    
                    rname:"field required",                                      
                    
                    },
                    
                    submitHandler: function(form) 
                        {
                                              
                            $(form).ajaxSubmit({
                                    
                            success: function(){
                                 $('#reportalert').fadeIn();
                                 setTimeout(
                                 function(){
                                     
                                     $('#reportalert').fadeOut();
                                 },3000
                                                
                                     );
                                     }  });
                       
                        
                        }
        
        
        
    });
    $('#reportbutton').click(function(){
                $('#reportform').submit();
              });
    
    
    
});