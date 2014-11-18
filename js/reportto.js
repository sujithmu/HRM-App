$(document).ready(function(){
    
               $( "#rname" ).autocomplete({
                    source: baseurl+"/index.php?r=Manageuser/Report",
                    minLength: 2,
                    select: function( event, ui ) {
                        log( ui.item ?
                         "Selected: " + ui.item.value + " aka " + ui.item.id :
                        "Nothing selected, input was " + this.value );
                       }
                    });
    
    
    
    
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
                                data:{empnumber:$('#empnumber').val()},
                                    
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