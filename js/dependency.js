$(document).ready(function(){
    
    $('#dependentform').validate({
        
        rules:{
                    dname:"required",
                    
                    dateofbirth:"required",
                    
                    },
                messages:{
                    dname:"please enter dependent name",
                    
                    dateofbirth:"date of birth required",
                    
                    },
                    
                    submitHandler: function(form) 
                        {
                                              
                            $(form).ajaxSubmit({
                                    
                            success: function(){
                                 $('#dependentalert').fadeIn();
                                 setTimeout(
                                 function(){
                                     
                                     $('#dependentalert').fadeOut();
                                 },3000
                                                
                                     );
                                     }  });
                       
                        
                        }
        
    });
    $('#depbutton').click(function(){
                $('#dependentform').submit();
              });
    
    
    
});