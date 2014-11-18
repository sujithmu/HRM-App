$(document).ready(function(){
    
    $("#relationship").change(function () {
        
        var va = $("#relationship option:selected").val();
        if(va ==='other'){
            
            $('#otherdep').fadeIn();
        }
        else{
            $('#otherdep').fadeOut();
        }
    
    });
    
    
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
                                    data:{empnumber:$('#empnumber').val()},
                                    
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