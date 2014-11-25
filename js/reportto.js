$(document).ready(function(){
   
        st =  $('#super_table').dataTable( {                                        
                 
                ajax:        {"url":baseurl+"/index.php?r=Manageuser/supervisor",
                               "data":  function ( d ) {
                               
                                 d.emp_number = $('#empnumber').val();

                                // etc
                                 } },
                deferRender: true,
                bServerSide: true,
                dom:         "frtiS",
                scrollY:     150,
                scrollCollapse: true,
               
                });


        st =  $('#sub_table').dataTable( {                                        
                 
                 ajax:        {"url":baseurl+"/index.php?r=Manageuser/subordinate",
                               "data":  function ( d ) {
                               
                                 d.emp_number = $('#empnumber').val();

                                // etc
                                 } },
                deferRender: true,
                bServerSide: true,
                dom:         "frtiS",
                scrollY:     150,
                scrollCollapse: true,
               
                });



        $( "#rname" ).autocomplete({
                    source: baseurl+"/index.php?r=Manageuser/Report",
                    minLength: 2,
                    select: function( event, ui ) {
                        //ui.item.id;
                        $('#report_user_id').val(ui.item.id);

                    }
                    });
    
    
    
    
    $( "#super" ).click(function(){

        
        $( "#leave_approval_div" ).show();
        

    });

    $( "#sub" ).click(function(){

        $( "#leave_approval_div" ).hide();
        $( "#order_div" ).hide();
        $("#leave_approval" ).prop('checked',false);

    });

    $( "#leave_approval" ).click(function(){

        if ($(this).prop('checked'))
        {
            $( "#order_div" ).show(); 
        }else{
            $( "#order_div" ).hide(); 
        }

    });


   

    
    jQuery.validator.addMethod("validempname", function(value, element) {

        if ($('#report_user_id').val()=='')
            return false;
        else
            return true;    
}, "Please Select a Valid Employee Name");     

 jQuery.validator.addMethod("ordercheck", function(value, element) {

        if ($("#leave_approval" ).prop('checked')==true)
        {
           if ($('#order_no').val()=='') 
            return false;
            else
            return true;
        }
        else
            return true;    
}, "Please Select an Order Number");        

    
    
    $('#reportform').validate({
        
        rules:{
                    rname:"required",  
                    rname:"validempname", 
                    order_no:"ordercheck"                                                       
                    },
                messages:{                    
                   required:"Employee Name required", 
                   validempname:"Please Select a Valid Employee Name", 
                   ordercheck:"Please Select an order number"
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