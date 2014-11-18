$(document).ready(function(){
   
    
     $("#country").change(function () {
                
              
                var coid = $('#country option:selected').val();
                
                
                
                $.ajax({
                        type: "POST",
                        url: baseurl+"/index.php?r=Manageuser/Dynamicstates",
                        data: { countryid: coid}
                    })
                        .done(function(msg) {
                            
                           $('#state').html(msg);
                
                       });
                      
              });                 
            
            
            
            
            $('#contact').validate({
                
                rules:{
                    name:"required",
                    address:"required",
                    state:"required",
                    pincode:"required",
                    relation:"required",
                    hnumber:"required",
                    mnumber:"required",
                    },
                messages:{
                    name:"Please enter a valid contact person name",
                    address:"Add your address",
                    state:"Add state",
                    pincode:"Valid pincode required",
                    relation:"Add relationship",
                    hnumber:"Home number required",
                    mnumber:"Add mobile number 10 digits",
                    },
                    
                    submitHandler: function(form) 
                        {
                            //var empno =   $('#empnumber').val();                  
                            $(form).ajaxSubmit({
                            data:{empnumber:$('#empnumber').val()},   
                            
                            success: function(){
                                
                               

                                 $('#contactalert').fadeIn();
                                 setTimeout(
                                 function(){
                                     
                                     $('#contactalert').fadeOut();
                                 },3000
                                                
                                     );
                                     }  });
                       
                        
                        }
                    
            });
            
            $('#sbutton').click(function(){
                $('#contact').submit();
              });
            
    
    
});