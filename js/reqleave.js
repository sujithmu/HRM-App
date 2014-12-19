$(document).ready(function(){
    
    $("#fromleave").datepicker({          
    onSelect:function(selected){
        $('#toleave').datepicker("option","minDate", selected);
        }        
    });        
    
    $("#toleave").datepicker({   
     onSelect: function(selected) {
         $("#fromleave").datepicker("option","maxDate", selected);
        }
    });
            
    $('#fromtime,#totime').change(function () {
        var ftime = parseInt($('#fromtime option:selected').val());
        var ttime = parseInt($('#totime option:selected').val());
        var dtime = ttime-ftime;
        if(dtime>=0)
            $('#duration').val(dtime);
        else
            $('#duration').val(0);        
    });
    
    $('#endfrom,#endto').change(function () {
        var endf = parseInt($('#endfrom option:selected').val());
        var endt = parseInt($('#endto option:selected').val());
        var dend = endt-endf;
        if(dend>=0)
            $('#endduration').val(dend);
        else
            $('#endduration').val(0);
        
    });
    
    $('#leavetype').change(function()
    {
    if($('#leavetype').val()>0)
        $('#leavebalance').show();
    else 
        $('#leavebalance').hide();
    });
    
    $('#leavetype').change(function()            
    {
        var ltype = $('#leavetype option:selected').val();
        
        if(ltype==="")
            return false;
        $.ajax({
            type:"POST",
            url:baseurl+"/index.php?r=Leave/Leavetype",
            data:{ leavetype: ltype}                       
        })
             .done(function(msg) {
                            
                           $('#lbalance').val(msg);
                
                       });
           
    });
    
    
    $('#pdays').change(function()
     {  
        if($('#pdays').val()==1){
            $('#sday').show();
            $('#endday').val("");
             $('#startday').val("");
             $('#specific').hide(); 
              $('#endspecific').hide();  
            $('#eday').hide();
        }
        else if($('#pdays').val()==2){
            $('#eday').show();
            $('#startday').val("");
             $('#endday').val("");
             $('#specific').hide(); 
              $('#endspecific').hide();  
            $('#sday').hide();
        }
        else if($('#pdays').val()==3){
            $('#sday').show();
            $('#startday').val("");
            $('#endday').val("");
            $('#eday').show();
               $('#endspecific').hide(); 
                  $('#specific').hide(); 
        }
        else{
            $('#eday').hide();
            $('#sday').hide();
            }
    });
    
    $('#startday').change(function()
    {
        if($('#startday').val()==3){
            $('#specific').show();
            
           }
         else
             $('#specific').hide();                          
    });
    
    $('#endday').change(function()
    {
        if($('#endday').val()==3){
            $('#endspecific').show();   
            
        }
        else
            $('#endspecific').hide();            
        
    });
    
    
    
    $.validator.addMethod('greaterThan', function(value, element, param) {
    var i = parseInt($('#fromtime').val());
    var j = parseInt($('#totime').val());    
    
   if( i <= j)
    return true;
   else 
    return false;
}, "");

    $.validator.addMethod('greaterThan', function(value, element, param) {
    var k = parseInt($('#endfrom').val());
    var l = parseInt($('#endto').val());    
    
   if( k <= l)
    return true;
   else 
    return false;
}, "");


    
    $('#rleave').validate({
        
        rules:{
            leavetype:"required",
            fromleave:"required",
            toleave:"required",
            totime:"greaterThan",
            endto:"greaterThan",
        },
        messages:{
            leavetype:"Select a leave category",
            fromleave:"Select from date",
            toleave:"Select to date",
            totime:"",
            endto:"",            
        },
        submitHandler: function(form) 
                        {                            
                            $(form).ajaxSubmit({ 
                            data:{'leave_balance':$('#lbalance').val()},                                                       
                            success: function(msg){ 
                            alert(msg);  
                              if (msg == 'balance_error')
                              {
                                 $('#req_alert').html('Leave applied exceeds leave balance');   
                                  $('#reqalert').fadeIn(); 
                                 setTimeout(
                                 function(){   
                                   
                                                             
                                     
                                 },3000                                                
                                     );

                              } else if (msg == 'holiday_error')
                              { 
                                $('#req_alert').html('Select any other date than holiday'); 
                                 $('#reqalert').fadeIn();
                                 setTimeout(
                                 function(){   
                                                                   
                                     
                                 },3000                                                
                                     );


                              } else{                                                        
                                
                                 $('#req_alert').html('Successfully applied for the leave'); 
                                  $('#reqalert').fadeIn();
                                 setTimeout(
                                 function(){                                     
                                     $('#reqalert').fadeOut();
                                 },3000                                                
                                     );
                               }
                                     }  });                                               
                        }                        
    });
    $('#reqbutton').click(function(){
                $('#rleave').submit();
              });
});