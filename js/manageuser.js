var st = "";
$(document).ready(function(){
                
                
        
                 $('#addnew').click(function(){
                        
                        alert("asss");
                        location.href=baseurl+"/index.php?r=Manageuser/View";                 
                 });
                
                
               var st =  $('#example').DataTable( {
                    
                    
                 
                ajax:        baseurl+"/index.php?r=Manageuser/Userdisplay",
                deferRender: true,
                dom:         "frtiS",
                scrollY:     400,
                scrollCollapse: true,
               
                });
                
                $('.box-content').on('click','.empremove',function()                        
                {
        
              
                
                $.ajax({
                    
                    type: "POST",
                    url: baseurl+"/index.php?r=Manageuser/Userdelete",
                    data:{ empno: $(this).attr("rel")}, 
                    success:function(){
                        
                        st.fnDraw();
                    }
                });
                
                
                }
            );
                
                
 });
        