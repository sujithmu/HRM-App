<body>
<div class="container-fluid">
							
				<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									Advanced Users
								</h3>                                                                                
							</div>
                                                        
                                                    
                                                    
<div class="box-content nopadding">
<div style="float: right;padding-top: 9px;padding-right: 5px;"><button class="btn btn-success" id='addnew'>ADD USER</button></div>
<table class="table table-hover table-nomargin table-bordered usertable" id="example">
            <thead>
                 
                    <tr>
                            <th class='with-checkbox'><input type="checkbox" name="check_all" id="check_all"></th>
                            <th>Username</th>
                            <th>Email</th>
                            <th class='hidden-350'>Status</th>
                            <th class='hidden-1024'>Member since</th>
                            <th class='hidden-480'>Options</th>
                    </tr>
            </thead>
            <tbody>
                    <tr>
                            <td class="with-checkbox">
                                    <input type="checkbox" name="check" value="1">
                            </td>
                            <td>John Doe</td>
                            <td>john.doe@johndoe.com</td>
                            <td class='hidden-350'><span class="label label-satgreen">Active</span></td>
                            <td class='hidden-1024'>03-07-2013</td>
                            <td class='hidden-480'>
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Manageuser/View" class="btn" rel="tooltip" title="View"><i class="icon-search"></i></a>
                                    <a href="#" class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
                                    <a href="#" class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
                            </td>
                    </tr>
                    
                    
                    
                    
            </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			
				
				
			</div>
    


<script type="text/javascript">
        
           $(document).ready(function(){

        
                 $('#addnew').click(function(){
            
                   
                        location.href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Manageuser/View";
                 
                 });
                
                
                $('#example').DataTable( {
        ajax:        "data/2500.txt",
        deferRender: true,
        dom:         "frtiS",
        scrollY:     200,
        scrollCollapse: true,
        initComplete: function () {
            var api = this.api();
            api.scroller().scrollToRow( 1000 );
        }
    } );
                
                
        });
        
        
        
    
</script>
    </body>