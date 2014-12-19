$(document).ready(function(){
   
   var leavetable = $('#leaves').dataTable();
   
    $('#leavepopupform').validate({
        rules:{
            leavename:"required",
            leavemax:"required",
            leaveprobation:"required"
        },
        messages:{
            leavename:"Please give a leave name",
            leavemax:"Provide maximum leave number",
            leaveprobation:"Provide the probation period"
        },
        
        submitHandler: function(form) 
                        {                            
                            $(form).ajaxSubmit({                                                        
                            success: function(){                                                               
                                 $('#leavealert').fadeIn();
                                 setTimeout(
                                 function(){                                     
                                     $('#leavealert').fadeOut();
                                 },3000                                                
                                     );
                             $('#myModal').modal("hide"); 
                             leavetable.fnDraw();
                             $('#leavename').val();
                             $('#leavemax').val();
                             $('#leaveprobation').val();
                                     }  });                                              
                        }    
                 
                 
    });
    
    $('#popupbtn').click(function(){
                $('#leavepopupform').submit();
              });
              
    
});