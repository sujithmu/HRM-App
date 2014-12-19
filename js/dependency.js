$(document).ready(function(){
    var dep = '';

     $('#dateofbirth').datepicker({ changeYear: true});
     $('#dateofbirth').click(function(){
        $('.ui-datepicker-year').css( 'width','80px');

     });
     

    $("#relationship").change(function () {
        
        var va = $("#relationship option:selected").val();
        if(va ==='other'){
            
            $('#otherdep').fadeIn();
        }
        else{
            $('#otherdep').fadeOut();
        }
    
    });
    
     dep =  $('#dependent_table').dataTable( {                                        
                 
                ajax:        {"url":baseurl+"/index.php?r=Manageuser/Dependentlist",
                               "data":  function ( d ) {
                               
                                 d.emp_number = $('#empnumber').val();

                                // etc
                                 } },
              
                "processing": true,
                "serverSide": true,
                "paging":false,
                "searching": false,
                "pageLength":false,
                 "ordering": false, 
                    "info": false,
                });

    $('#dependent_div').on('click','.depremove',function(){


       $.ajax({
         type:"POST",
         url:baseurl+"/index.php?r=Manageuser/DeleteDependent",
         data:{dp_id:$(this).attr('rel')}
       }).done(function(msg)
       {
           
           dep.fnDraw();
                             
       });  

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
                                 dep.fnDraw();
                                     }  });
                       
                        
                        }
        
    });
    $('#depbutton').click(function(){
                $('#dependentform').submit();
              });
    
    
    
});