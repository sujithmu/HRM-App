$(document).ready(function(){
    
 $("#assfromleave").datepicker({          
    onSelect:function(selected){
        $('#asstoleave').datepicker("option","minDate", selected);
        }        
    });        
    
    $("#asstoleave").datepicker({   
     onSelect: function(selected) {
         $("#assfromleave").datepicker("option","maxDate", selected);
        }
    });

$('#assleave').validate({
        rules:{
            assiemp:"required",
            assileavetype:"required",
            assfromleave:"required",
            asstoleave:"required",
            asstotime:"greaterThan",
            assendto:"greaterThan"
        },
        messages:{
            assiemp:"Provide an employee name",
            assileavetype:"Select a leave category",
            assfromleave:"Select from date",
            asstoleave:"Select to date",
            asstotime:"",
            assendto:""
        },
         submitHandler: function(form) 
                        {                            
                            $(form).ajaxSubmit({                                                        
                            success: function(){                                                               
                                 $('#assialert').fadeIn();
                                 setTimeout(
                                 function(){                                     
                                     $('#assialert').fadeOut();
                                 },3000                                                
                                     );
                                     }  });                                               
                        }  
    });
    $('#asspdays').change(function()
     {  
        if($('#asspdays').val()==1){
            $('#assisday').show();
            $('#asseday').hide();
        }
        else if($('#asspdays').val()==2){
            $('#asseday').show();
            $('#assisday').hide();
        }
        else if($('#asspdays').val()==3){
            $('#assisday').show();
            $('#asseday').show();
        }
        else{
            $('#asseday').hide();
            $('#assisday').hide();
            }
    });
    $('#assfromtime,#asstotime').change(function () {
        var assftime = parseInt($('#assfromtime option:selected').val());
        var assttime = parseInt($('#asstotime option:selected').val());
        var assdtime = assttime-assftime;
        if(assdtime>=0)
            $('#assduration').val(assdtime);
        else
            $('#assduration').val(0);
        
    });
    
    $('#assendfrom,#assendto').change(function () {
        var assendf = parseInt($('#assendfrom option:selected').val());
        var assendt = parseInt($('#assendto option:selected').val());
        var assdend = assendt-assendf;
        if(assdend>=0)
            $('#assendduration').val(assdend);
        else
            $('#assendduration').val(0);
        
    });
    
    $('#assileavetype').change(function(){
        if($('#assileavetype').val()>0)
        $('#asslbalance').show();    
    else 
        $('#asslbalance').hide();
        
    });
    
    $('#assiemp').autocomplete({
                source:baseurl+"/index.php?r=Leave/Employeelist",
                minLength: 2,
                select:function( event, ui ) {
                        //ui.item.id;
                        $('#emp_id').val(ui.item.id);
                        if($('#assiemp').val()!=0)
            $('#assleavetype').show();
        else
            $('#assleavetype').hide();
        
        
        var eno = $('#emp_id').val();
        if(eno==="")
            return false;
        
        $.ajax({
            type:"POST",
            url:baseurl+"/index.php?r=Leave/AssLeavetype",
            data:{assiempleave:eno}
        }).done(function(msg){                            
                           $('#leavelist').html(msg);                
                            });

                    }
    });
    
    $('#assiemp').change(function(){
        
        
        
    });
    
    $('#assileavetype').change(function()            
    {
        var assltype = $('#assileavetype option:selected').val();
        if(assltype=="")
            return false;
                
        
        
        $.ajax({
            type:"POST",
            url:baseurl+"/index.php?r=Leave/Assignleavetype",
            data:{ assleavetype: assltype}                       
        })
             .done(function(msg) {                            
                           $('#albalance').val(msg);                
                            });
           
    });
    
    
    
    
    
    $('#assistartday').change(function()
    {
        if($('#assistartday').val()==3){
            $('#assispecific').show();
           }
         else
             $('#assispecific').hide();                          
    });
    
    $('#assendday').change(function()
    {
        if($('#assendday').val()==3){
            $('#assendspecific').show();            
        }
        else
            $('#assendspecific').hide();            
        
    });
    
    $('#assibutton').click(function(){
                $('#assleave').submit();
              });                          
});