var st = "";
$(document).ready(function(){
                
                
        
                 $('#addnew').click(function(){
                        
                       
                        location.href=baseurl+"/index.php?r=Manageuser/View";                 
                 });
                
                
               st =  $('#example').dataTable( {                                        
                 
                ajax:        baseurl+"/index.php?r=Manageuser/Userdisplay",
                deferRender: true,
                bServerSide: true,
                dom:         "frtiS",
                scrollY:     400,
                scrollCollapse: true,
               
                });
                
                $('.box-content').on('click','.empremove',function()                        
                {
        
              
                deleteuser(st, $(this).attr("rel"));
                
                
                
                }
                        
            );
                
                
 });
        function deleteuser(st,rel){
            
            $.ajax({
                    
                    type: "POST",
                    url: baseurl+"/index.php?r=Manageuser/Userdelete",
                    data:{ empno:rel}, 
                    success:function(){
                        
                        st.fnDraw();
                    }
                });
        }