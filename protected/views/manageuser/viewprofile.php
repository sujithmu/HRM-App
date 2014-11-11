<body>

    <div class="container-fluid">
			<div class="page-header">
				<div class="pull-left">
					<h1>User profile</h1>
				</div>

			</div>
			
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-color box-bordered">
						<div class="box-title">
							<h3>
								<i class="icon-user"></i>
								Edit user profile
							</h3>
						</div>
						<div class="box-content nopadding">
                        <ul class="tabs tabs-inline tabs-top">
                             <li class='active'>
                                 <a href="#profile" data-toggle='tab'><i class="icon-user"></i> Profile</a>
                                </li>
                                <li>
                                <a href="#econtact" data-toggle='tab'>Emergency Contact</a>
			</li>
                         <li>
                            <a href="#security" data-toggle='tab'>Dependency</a>
			</li>
                        <li>
                            <a href="#security" data-toggle='tab'>Job</a>
			</li>
                        <li>
                            <a href="#security" data-toggle='tab'>Salary</a>
			</li>
                        <li>
                            <a href="#security" data-toggle='tab'>Report To</a>
			</li>
                        <li>
                            <a href="#security" data-toggle='tab'>Qualifications</a>
			</li>
                    </ul>
        <div class="tab-content padding tab-content-inline tab-content-bottom">
            <div class="tab-pane active" id="profile">
                <form action="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Manageuser/UserReg" id="profileform" method="POST" class="form-horizontal">
                    <div class="row-fluid">
                    <div class="span2">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail" style="max-width: 200px; max-height: 150px;"><img src="img/demo/user-1.jpg" /></div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                            <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name='imagefile' /></span>
                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                            </div>
                    </div>
                    </div>
                            <div class="span10">
                                    
                                    <div class="control-group">
                                            <label for="name" class="control-label right">User Role:</label>
                                            <div class="controls">
                                             <?php echo CHtml::dropDownList('myDropdown', '1', CHtml::listData(HrmUserRole::model()->findAll(), 'id',
                                                        'display_name')); ?>
                                            </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="name" class="control-label right">First Name:</label>
                                            <div class="controls">
                                                <input type="text" id="fname" name="fname" class='input-xlarge' value="">
                                            </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="name" class="control-label right">Middle Name:</label>
                                            <div class="controls">
                                                <input type="text" id="mname" name="mname" class='input-xlarge' value="">
                                            </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="name" class="control-label right">Last Name:</label>
                                            <div class="controls">
                                                <input type="text" id="lname" name="lname" class='input-xlarge' value="">
                                            </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="email" class="control-label right">Username:</label>
                                            <div class="controls">
                                                <input type="text" id="uname" name="uname" data-rule-email="true" class='input-xlarge' value="">
                                                    
                                            </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="pw" class="control-label right">Password:</label>
                                            <div class="controls">
                                                <input type="password" id="pswd" name="pswd" class='input-xlarge' value="">
                                                    
                                            </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="pw" class="control-label right">Confirm Password:</label>
                                            <div class="controls">
                                                <input type="password" id="cpswd" name="cpswd" class='input-xlarge' value="">
                                                    
                                            </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="stat" class="control-label right">Status:</label>
                                            <div class="controls">
                                                <select name="userstatus" id="userstatus">
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                </select>
                                                    
                                            </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="button" id="sbtn" name="sbtn" class='btn btn-primary' value="Save">
                                            <input type="reset" class='btn' value="Discard changes">
                                    </div>
                                    </div>
                                </div>
                </form>
                </div>
                <div class="tab-pane" id="econtact">
                    <form action="" id="contact" method="POST" class="form-horizontal">
                           <div class="span10">
                            
                            <div class="control-group">
                                            <label for="name" class="control-label right">Contact Name:</label>
                                            <div class="controls">
                                                <input type="text" id="name" name="name" class='input-xlarge' value="">
                                            </div>
                            </div>
                            <div class="control-group">
                                            <label for="relation" class="control-label right">Relation:</label>
                                            <div class="controls">
                                                <input type="text" id="relation" name="relation" class='input-xlarge' value="">
                                            </div>
                            </div>
                            <div class="control-group">
                                            <label for="address" class="control-label right">Contact Address:</label>
                                            <div class="controls">
                                                <textarea cols="50" rows="4" id="address" name="address" class='input-xlarge'></textarea>
                                            </div>
                            </div>
                            <div class="control-group">
                                            <label for="pin" class="control-label right">Pincode/Zip:</label>
                                            <div class="controls">
                                                <input type="text" id="pincode" name="pincode" class='input-xlarge' value="" data-rule-number="true" data-rule-minlength="6" data-rule-maxlength="6" data-rule-required="true">
                                            </div>
                            </div>
                            
                            <div class="control-group">
                                            <label for="country" class="control-label right">Country:</label>
                                            
                                            <div class="controls" id="country">
                                                    <?php echo CHtml::dropDownList('countrylist', '99', 
                                                        CHtml::listData(Countries::model()->findAll(),'id','country_name'),
                                                            array(
                                                            'class'=>'input-xlarge',)
                                                            ); ?>
                                            
                                                
                                            </div>
                            </div>
                            <div class="control-group">
                                            <label for="state" class="control-label right">State:</label>
                                            <div class="controls" id="state">
                                                <?php echo CHtml::dropDownList('statelist', '17', 
                                                        CHtml::listData(StateList::model()->findAll(),'id','state'),
                                                        array(
                                                            'class'=>'input-xlarge',)
                                                        ); ?>
                                            </div>
                            </div>
                            <div class="control-group">
                                            <label for="city" class="control-label right">City:</label>
                                            <div class="controls">
                                                <input type="text" id="city" name="city" class='input-xlarge' value="">
                                            </div>
                            </div>
                            
                            
                            
                            
                            <div class="control-group">
                                            <label for="number" class="control-label right">Home Number:</label>
                                            <div class="controls">
                                                <input type="text" id="hnumber" name="hnumber" class='input-xlarge' value="" data-rule-number="true" data-rule-required="true">
                                            </div>
                            </div>
                             <div class="control-group">
                                            <label for="number" class="control-label right">Mobile Number:</label>
                                            <div class="controls">
                                                <input type="text" id="mnumber" name="mnumber" class='input-xlarge' value="" data-rule-number="true" data-rule-minlength="10" data-rule-maxlength="10" data-rule-required="true">
                                            </div>
                            </div>
                            <div class="control-group">
                                            <label for="number" class="control-label right">Office Number:</label>
                                            <div class="controls">
                                                <input type="text" id="onumber" name="onumber" class='input-xlarge' value="">
                                            </div>
                            </div>
                            <div class="form-actions">
                                <input type="button" id="sbutton" name="sbutton" class='btn btn-primary' value="Save">
                                <input type="reset" class='btn' value="Discard changes">
                            </div>
                          </div>                                                                                               
                    </form>
                </div>
                                <div class="tab-pane" id="security">
                                        <form action="#" class="form-horizontal">
                                            
                                                
                                                
					</form>
                                                            </div>
							</div>
						</div>
					</div>
				</div>
		
                        </div>
                </div>
    
</body>

<script type="text/javascript">
    
    $(document).ready(function(){
        
        $('#profileform').validate({
            
                rules:{
                        fname:"required",
                        lname:"required",
                                                
                        uname:  {
                                required:true,
                                minlength:2,
                                remote:"<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Manageuser/Uservalidation",                                                                                     
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
                                              
                        $(form).ajaxSubmit();
                        }
            
            });
            
            $('#sbtn').click(function(){
            
               $('#profileform').submit();        
                  

            });
            
            $("#country").change(function () {
                
              
                alert($('#country option:selected').val());
                
                
              });
              
            
            
            $('#contact').validate({
                
                rules:{
                    name:"required",
                    address:"required",
                    state:"required",
                    pincode:"required",
                    relation:"required",
                    hnumber:"required",
                    mnumber:"required",
                    },
                messages:{
                    name:"Please enter a valid contact person name",
                    address:"Add your address",
                    state:"Add state",
                    pincode:"Valid pincode required",
                    relation:"Add relationship",
                    hnumber:"Home number required",
                    mnumber:"Add mobile number 10 digits",
                    },
            });
            $('#sbutton').click(function(){
                $('#contact').submit();
              });
            
    });
    
    
    
    </script>