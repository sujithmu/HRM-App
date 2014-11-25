$(document).ready(function(){
    
   


    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Please check your input."
               
        
);
    if(empno>0){
        
        $('#profileform').validate({
            
                rules:{
                        fname:{
                                required:true,
                                regex:"^[a-zA-Z'.\\s]{1,40}$",
                            },
                        lname:{required:true,
                               regex:"^[a-zA-Z'.\\s]{1,40}$",
                            },
                                                
                        
                 
                    },
                
                messages:{
                        fname:"Please enter your firstname",
                        lname:"Please enter your lastname",
                        
                },
                      submitHandler: function(form) 
                        {
                                              
                            $(form).ajaxSubmit({
                                    
                            success: function(empno){
                               
                                $('#empnumber').val(empno);
                               // var empno =   $('#empnumber').val();
                                 $('#profilealert').fadeIn();
                                 setTimeout(
                                 function(){
                                     
                                     $('#profilealert').fadeOut();
                                 },3000
                                 
                
                 );
                                    
                            }  });
                       
                        
                        }
            
            });
    }
    else{
        
        $('#profileform').validate({
            
                rules:{
                        fname:{
                                required:true,
                                regex:"^[a-zA-Z'.\\s]{1,40}$",
                            },
                        lname:{required:true,
                               regex:"^[a-zA-Z'.\\s]{1,40}$",
                            },
                                                
                        uname:  {
                                required:true,
                                minlength:2,
                                remote:baseurl+"/index.php?r=Manageuser/Uservalidation",                                                                                     
                                },
                        pswd:{
                                required:true,
                                minlength:5,
                                },
                        cpswd:{
                                required:true,
                                minlength:5,
                                equalTo: "#pswd"
                                }, 
                 
                    },
                
                messages:{
                        fname:"Please enter your firstname",
                        lname:"Please enter your lastname",
                        uname:{
                                required: "Please enter a username",
                                minlength: "Your username must consist of at least 2 characters",
                                remote:"Username already taken"
                            },
                        pswd:{
                                 required: "Please provide a password",
                                 minlength: "Your password must be at least 5 characters long"   
                             },
                        cpswd:{
                                 required: "Please provide a password",
                                 minlength: "Your password must be at least 5 characters long",
                                 equalTo: "Please enter the same password as above"   
                        },
                },
                      submitHandler: function(form) 
                        {
                                              
                            $(form).ajaxSubmit({
                                    
                            success: function(empno){
                               
                                $('#empnumber').val(empno);
                               // var empno =   $('#empnumber').val();
                                $('#profilealert').fadeIn();
                                 setTimeout(
                                 function(){
                                     
                                     getTabs();
                                    
                                 },4000);
                                    

                                 


                            }  });
                       
                        
                        }
            
            });
        }
            
            $('#sbtn').click(function(){
            
               $('#profileform').submit();        
                  

            });
    
    
    
});

function getTabs(){

    $('#profilealert').fadeOut();
                                 $('.tabs-top > li').each(function(){
                                   $(this).show();
                                 });


                                 $('.tabs-top > li > a').each(function(){
                                    if ($(this).attr('href') =='#econtact')
                                        $(this).trigger('click');
                                    else if ($(this).attr('href') =='#profile'){
                                        $(this).attr('href','');
                                        $(this).parent().hide();
                                    }
                                 });

    
}