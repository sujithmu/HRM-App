var v = "";
var leaveid = "";
var lname = "";
var lmaxno = "";
var lprob = "";
var cus = "";
var custom_leaveid = '';
var myreport = '';
var lreport = '';
var holidaytab = '';
var atable = "";
var emp_leave_balance_da = "";


$(document).ready(function(){

$.validator.addMethod(
        "customempno",
        function(value, element, regexp) {
           
            return $('#cus_emp').val();
        },
        "Enter Valid Employee name"
               
        
);


  atable = $('#adminleavebalancetable').dataTable({
    ajax: baseurl+"/index.php?r=Leave/Adminbalance",
     "serverSide": true,
      "lengthChange": true,
      "searching": true,
  });

  emp_leave_balance_da = $('#leavebalancetable').dataTable({
    ajax: baseurl+"/index.php?r=Leave/Empbalance",
     "serverSide": true,
      "lengthChange": true,
      "searching": true,
  });



   v = $('#leaves').dataTable({
       ajax: baseurl+"/index.php?r=Leave/Viewleaves",
      
        "serverSide": true,
      "lengthChange": true,
      "searching": true,
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 4 ] }
       ]
     // "searching": false
       
   });
 
$('#holidayform').validate({
  rules:{
    holidayname:"required",
    holidaydate:"required",
  },
  messages:{
    holidayname:"Enter holiday name",
    holidaydate:"Enter holiday date",
  },
submitHandler: function(form) 
                        {
                                              
                            $(form).ajaxSubmit({
                                    
                            success: function(){
                               holidaytab.fnDraw();
                              $('#holidayname').val("");    
                              $('#holidaydate').val("");    
                              $('#holidaytype').val("");    
                            }  });
                       
                        
                        }

});

 $('#holidaybtn').click(function(){
                $('#holidayform').submit();
              });

 $('#holidaydate').datepicker({ changeYear: true});
     $('#dateofbirth').click(function(){
        $('.ui-datepicker-year').css( 'width','80px');

     });

  $('#otherleave').on('click','.assign',function(){

    
      
      $('#customleave').html($(this).attr('rel'));
      splitval = $(this).attr('id').split('~');
      $('#customleaveno').val(splitval[1]);
      custom_leaveid = splitval[0];
      $('#otherModal').modal();
   
    /*  $('#alertModal').css('width','50%');
      $('#alertModal').css('left','50%');
       $('#alertModal').css('top','20%');
      $('#alertModal').modal();

    */

  });

 $('#leaves').css('width','100%');
   cus = $('#othertable').dataTable({
       ajax: baseurl+"/index.php?r=Leave/Customviewleaves",
      
       "serverSide": true,
      "lengthChange": true,
        "searching": true,
        "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 2 ] }
       ]
   });
    
   myreport = $('#myreporttable').dataTable({
       ajax: {"url":baseurl+"/index.php?r=Leave/Myreport",
      data: function ( d ) {
               d.myleaveid = myleaveid;
               d.from = $('#datefrom_myreport').val();
               d.to = $('#dateto_myreport').val();
               d.leave_status = $('#leave_status_myreport').val();
               
            }
          },

       "serverSide": true,
       "lengthChange": true,
        "searching": true
   });   

   lreport = $('#reporttable').dataTable({
       ajax: { "url":baseurl+"/index.php?r=Leave/Allreport",
        data: function ( d ) {
               
               d.from = $('#datefrom').val();
               d.to = $('#dateto').val();
               d.leave_status = $('#leave_status').val();
               
            }
          },
        "serverSide": true,
         
       "lengthChange": true,
        "searching": true,
        "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 7 ] }
       ],

   });


    holidaytab = $('#holidaytable').dataTable({
       ajax: baseurl+"/index.php?r=holiday/ListHoliday",
        "serverSide": true,
       "lengthChange": true,
        "searching": true,
        "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 3 ] }
       ]
   });

    $('#addholiday').on('click','.holidayemove',function(){


       $.ajax({
         type:"POST",
         url:baseurl+"/index.php?r=Holiday/DeleteHoliday",
         data:{hol_id:$(this).attr('rel')}
       }).done(function()
       {
           
           holidaytab.fnDraw();
                             
       });  

     });
   

    $('#oholiday').validate({
  rules:{
    suggemp:{
          required:true,
          customempno:true,
                            },
    customleaveno:"required",
    customempno:true
  },
  messages:{
    suggemp:"Enter Valid Employee name",

    customleaveno:"Enter Leave Number",
  },
submitHandler: function(form) 
                        {
                         
                                              
                            $.ajax({
         type:"POST",
         url:baseurl+"/index.php?r=Leave/CustomUpdateleave",
         data:{customleaveid:custom_leaveid,employid:$('#cus_emp').val(),custom_leave_no:$('#customleaveno').val()}
       }).done(function(msg)
       {
        
           $('#cus_emp').val('');
           $('#suggemp').val('');
           $('#otherModal').modal("hide");  
           cus.fnDraw();
                             
       });  
                       
                        
                        }

});

$('#datefrom,#dateto,#leave_status').change(function(){

  lreport.fnDraw();

});

$('#datefrom_myreport,#dateto_myreport,#leave_status_myreport').change(function(){

  myreport.fnDraw();

});

   $('#custombtn').click(function() {

       $('#oholiday').submit();

       

   });

      
   $('#leaves').on('click','.editleave',function()
    { 
       $('#loading-image').fadeIn(); 
      
       $('#editmyModal').modal("show");  
        leaveid = $(this).attr("rel");
       
                
       

       $.ajax({
            type:"POST",
            url:baseurl+"/index.php?r=Leave/Editleave",
            data:{leaveid:$(this).attr("rel")}
            
       }).done(function(msg)
       {  
          
           var dataval = JSON.parse(msg);
           $('#editleavename').val(dataval.name);
           $('#editleavemax').val(dataval.leave_max_no);
           $('#editleaveprobation').val(dataval.probation_period);
           
      
            $('#popupbody').show();
            $('#loading-image').hide();  
           v.fnDraw();
       });                    
       
    });
    

   $('#leaves').on('click','.customleave_remove',function(){

      leaveid = $(this).attr("rel");
      $.ajax({
            type:"POST",
            url:baseurl+"/index.php?r=Leave/Deleteleave",
            data:{leaveid:$(this).attr("rel")}
            
       }).done(function(msg)
       {  
          v.fnDraw();
           
       });


   });
    
    $('#editpopupbtn').click(function()
    {  
        var lname = $('#editleavename').val();
        var lmaxno = $('#editleavemax').val();
        var lprob = $('#editleaveprobation').val();
    //alert(leaveid);
        
     $.ajax({
         type:"POST",
         url:baseurl+"/index.php?r=Leave/Updateleave",
         data:{leaveid:leaveid,lname:lname,lmaxno:lmaxno,lprob:lprob}
       }).done(function(msg)
       {
           
          
//           $('#leaveform').html(msg);             
             $('#editleavealert').fadeIn();
                                 setTimeout(
                                 function(){                                     
                                     $('#editleavealert').fadeOut();
                                 },3000                                                
                                     );  
                             v.fnDraw();
                             
       });  
       $('#editmyModal').modal("hide");
    });
    
    
     setTimeout(
                                 function(){                                     
                                     $('#ui-id-2').css('z-index','1000000');
                                 },3000                                                
                                     );

    $('#suggemp').autocomplete({
                source:baseurl+"/index.php?r=Leave/Employeelist",
                minLength: 2,
                select:function( event, ui ) {                        
                        $('#cus_emp').val(ui.item.id);
                    }
    });

    $('#lreport').on('change','.approve',function(){

       $.ajax({
         type:"POST",
         url:baseurl+"/index.php?r=Leave/Approve",
         data:{leaveid:$(this).attr('id'),approve_type:$(this).val()}
       }).done(function(msg)
       {
                        
           lreport.fnDraw();
                             
       }); 



    });

     $('#myleave').on('change','.cancel',function(){

       $.ajax({
         type:"POST",
         url:baseurl+"/index.php?r=Leave/Cancel",
         data:{leaveid:$(this).attr('id')}
       }).done(function(msg)
       {
                        
           myreport.fnDraw();
                             
       }); 

       

    });

    $('#datefrom').datepicker({ });
    $('#dateto').datepicker({ });
});