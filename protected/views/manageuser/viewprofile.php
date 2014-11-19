<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/profile.css" media="screen, projection" />
<body>

    <div class="container-fluid">
			<div class="page-header">
				<div class="pull-left">
					<h1>User profile</h1>
				</div>

			</div>
			
			<div class="row-fluid">
				<div class="span12 prof">
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
                            <a href="#dependent" data-toggle='tab'>Dependency</a>
			</li>
                        <li>
                            <a href="#job" data-toggle='tab'>Job</a>
			</li>
                        <li>
                            <a href="#report" data-toggle='tab'>Report To</a>
			</li>
                     <!--   <li>
                            <a href="#salary" data-toggle='tab'>Salary</a>
			</li>-->
                      <!--  
                        <li>
                            <a href="#qualification" data-toggle='tab'>Qualifications</a>
			</li>-->
                    </ul>
                                                    
           
        <div class="tab-content padding tab-content-inline tab-content-bottom">
            <div class="tab-pane active" id="profile">
    <form action="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Manageuser/UserReg" id="profileform" method="POST" class="form-horizontal" 
          enctype="multipart/form-data">
        <div class="row-fluid">
        <div class="span2">
        <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="max-width: 100px; max-height: 150px;"><img src="img/demo/profile.jpg" /></div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 100px; max-height: 150px; line-height: 20px;"></div>
                <div>
                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                    <span class="fileupload-exists">Change</span>
                        <input type="file" name='uploadimage' id="uploadimage"/>
                    </span>
                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
        </div>
            
            <input type="hidden" name='empnumber' id="empnumber"/>
            
        </div>
                            <div class="span10">
                                    
                                    <div class="control-group">
                                            <label for="name" class="control-label right">User Role: * </label>
                                            <div class="controls">
                                             <?php echo CHtml::dropDownList('userrole', '1', CHtml::listData(HrmUserRole::model()->findAll(), 'id',
                                                        'display_name'),   array(
                                                            'class'=>'input-xlarge',)                                        
                                                                              ); ?>
                                            </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="name" class="control-label right">First Name: * </label>
                                            <div class="controls">
                                                <input type="text" id="fname" name="fname" class='input-xlarge' value="<?php  echo $editddata['emp_firstname'];?>">
                                            </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="name" class="control-label right">Middle Name:</label>
                                            <div class="controls">
                                                <input type="text" id="mname" name="mname" class='input-xlarge' value="<?php  echo $editddata['emp_middle_name'];?>">
                                            </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="name" class="control-label right">Last Name: * </label>
                                            <div class="controls">
                                                <input type="text" id="lname" name="lname" class='input-xlarge' value="<?php  echo $editddata['emp_lastname'];?>">
                                            </div>
                                    </div>
                                <?php 
                                    if($emp_number=="")
                                    {
                                        
                                    ?>
                                
                                    <div class="control-group">
                                            <label for="email" class="control-label right">Username: * </label>
                                            <div class="controls">
                                                <input type="text" id="uname" name="uname" data-rule-email="true" class='input-xlarge' value="<?php  echo $editddata['user_name'];?>">
                                                    
                                            </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="pw" class="control-label right">Password: * </label>
                                            <div class="controls">
                                                <input type="password" id="pswd" name="pswd" class='input-xlarge' value="">
                                                    
                                            </div>
                                    </div>
                                    <div class="control-group">
                                            <label for="pw" class="control-label right">Confirm Password: * </label>
                                            <div class="controls">
                                                <input type="password" id="cpswd" name="cpswd" class='input-xlarge' value="">
                                                    
                                            </div>
                                    </div>
                                    <?php }       ?>
                                    <div class="control-group">
                                            <label for="stat" class="control-label right">Status:</label>
                                            <div class="controls">
                                                <select name="userstatus" id="userstatus" class="input-xlarge">
                                                    <option value="Y">Active</option>
                                                    <option value="N">Inactive</option>
                                                </select>
                                                    
                                            </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="button" id="sbtn" name="sbtn" class='btn btn-primary' value="Save">
                                            <input type="reset" class='btn' value="Discard changes">
                                    </div>
                                
                                <div class="alert alert-success span8" id="profilealert" style="display: none;">
                                        <button data-dismiss="alert" class="close" type="button"></button>
                                        <strong>          Success!</strong>
                                </div>
                                
                                    </div>
                                </div>
                </form>
                </div>
                <div class="tab-pane" id="econtact">
                    <form action="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Manageuser/Econtact" id="contact" method="POST" class="form-horizontal">
                           <div class="span10">
                            
                            <div class="control-group">
                                            <label for="name" class="control-label right">Contact Name:</label>
                                            <div class="controls">
                                                <input type="text" id="name" name="name" class='input-xlarge' value="<?php  echo $editddata['eec_name'];?>">
                                            </div>
                            </div>
                            <div class="control-group">
                                            <label for="relation" class="control-label right">Relation:</label>
                                            <div class="controls">
                                                <input type="text" id="relation" name="relation" class='input-xlarge' value="<?php  echo $editddata['eec_relationship'];?>">
                                            </div>
                            </div>
                            <div class="control-group">
                                            <label for="address" class="control-label right">Contact Address:</label>
                                            <div class="controls">
                                                <textarea cols="50" rows="4" id="address" name="address" class='input-xlarge'><?php  echo $editddata['eec_address'];?></textarea>
                                            </div>
                            </div>
                            <div class="control-group">
                                            <label for="pin" class="control-label right">Pincode/Zip:</label>
                                            <div class="controls">
                                                <input type="text" id="pincode" name="pincode" class='input-xlarge' value="<?php  echo $editddata['eec_pincode'];?>" data-rule-number="true" data-rule-minlength="6" data-rule-maxlength="6" data-rule-required="true">
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
                                                <input type="text" id="city" name="city" class='input-xlarge' value="<?php  echo $editddata['eec_city'];?>">
                                            </div>
                            </div>
                            
                            
                            
                            
                            <div class="control-group">
                                            <label for="number" class="control-label right">Home Number:</label>
                                            <div class="controls">
                                                <input type="text" id="hnumber" name="hnumber" class='input-xlarge' value="<?php  echo $editddata['eec_home_no'];?>" data-rule-number="true" data-rule-required="true">
                                            </div>
                            </div>
                             <div class="control-group">
                                            <label for="number" class="control-label right">Mobile Number:</label>
                                            <div class="controls">
                                                <input type="text" id="mnumber" name="mnumber" class='input-xlarge' value="<?php  echo $editddata['eec_mobile_no'];?>" data-rule-number="true" data-rule-minlength="10" data-rule-maxlength="10" data-rule-required="true">
                                            </div>
                            </div>
                            <div class="control-group">
                                            <label for="number" class="control-label right">Office Number:</label>
                                            <div class="controls">
                                                <input type="text" id="onumber" name="onumber" class='input-xlarge' value="<?php  echo $editddata['eec_office_no'];?>">
                                            </div>
                            </div>
                            <div class="form-actions">
                                <input type="button" id="sbutton" name="sbutton" class='btn btn-primary' value="Save">
                                <input type="reset" class='btn' value="Discard changes">
                            </div>
                               <div class="alert alert-success span8" id="contactalert" style="display: none;">
                                        <button data-dismiss="alert" class="close" type="button"></button>
                                        <strong>          Success!</strong>
                                </div>
                          </div>                                                                                               
                    </form>
                </div>
              
            <div class="tab-pane" id="dependent">
            <form action="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Manageuser/Dependent" class="form-horizontal" id="dependentform" method="POST" class="form-horizontal">

                   <div class="span10">

                    <div class="control-group">
                                    <label for="name" class="control-label right">Name:</label>
                                    <div class="controls">
                                        <input type="text" id="dname" name="dname" class='input-xlarge' value="<?php  echo $editddata['dependent_name'];?>">
                                    </div>
                    </div>                                                                                                  
                    
                    <div class="control-group">
                                            <label for="relation" class="control-label right">Relationship:</label>
                                            <div class="controls">
                                                <select required="" name="relationship" id="relationship" class="input-xlarge">
                                                    <option value="">Please select</option>                                                    
                                                    <option value="father">Father</option>
                                                    <option value="mother">Mother</option>
                                                    <option value="brother">Brother</option>
                                                    <option value="sister">Sister</option>
                                                    <option value="wife">Wife</option>
                                                    <option value="son">Son</option>
                                                    <option value="daughter">Daughter</option>
                                                    <option value="other">Other</option>
                                                </select>                                                   
                                            </div>
                                            
                    </div>
                       <div class="control-group" id="otherdep" style="display: none;">
                                    <label for="other" class="control-label right">Other Dependent:</label>
                                    <div class="controls">
                                        <input type="text" id="odependent" name="odependent" class='input-xlarge' value="<?php  echo $editddata['dependent_relation'];?>">
                                    </div>
                    </div>
                    
                     
                       <div class="control-group">
                            <label for="date" class="control-label right">DOB:</label>
                            <div class="controls">
                                <input type="text" name="dateofbirth" id="dateofbirth" class="input-medium datepick input-xlarge" value="<?php  echo $editddata['dependent_dob'];?>">				                               
                            </div>
                       </div>
                       
                       
                    <div class="form-actions">
                        <input type="button" id="depbutton" name="depbutton" class='btn btn-primary' value="Save">
                        <input type="reset" class='btn' value="Discard changes">
                    </div>   
                    <div class="alert alert-success span8" id="dependentalert" style="display: none;">
                                        <button data-dismiss="alert" class="close" type="button"></button>
                                        <strong>          Success!</strong>
                    </div>
                        
                  </div>                                               
                                                
                </form>
                </div>
            
            <div class="tab-pane" id="job">
                <form action="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Manageuser/Job" class="form-horizontal" id="jobform" method="POST" class="form-horizontal">
                    
                    <div class="span10">
                        
                        <div class="control-group">
                                    <label for="title" class="control-label right">Job Title:</label>
                                    <div class="controls" id="jtitle">
                                                <?php echo CHtml::dropDownList('jobtitle', 'empty',
                                                        CHtml::listData(HrmJobTitle::model()->findAll(),'id','job_title'),
                                                        array(
                                                            'class'=>'input-xlarge',
                                                            'empty'=>'--Select a job title--',
                                                            )
                                                        ); ?>
                                    </div>                                                                                                          
                                    
                        </div>
                        <div class="control-group">
                                    <label for="status" class="control-label right">Employment Status:</label>
                                    <div class="controls">
                                        <select required="" name="estatus" id="estatus" class="input-xlarge">
                                                    <option value=""></option>
                                                    <option value="1">Worker</option>
                                                    <option value="2">Employee</option>
                                                    <option value="3">Self-Employed</option>
                                                    
                                                </select>                                                                                                
                                        
                                    </div>
                        </div>
                        <div class="control-group">
                                    <label for="job" class="control-label right">Job Category:</label>
                                    <div class="controls" id="jcategory">
                                         <?php echo CHtml::dropDownList('jobcategory', 'empty', 
                                                        CHtml::listData(HrmJobCategory::model()->findAll(),'id','job_category'),
                                                        array(
                                                            'class'=>'input-xlarge',
                                                             'empty'=>'--Select a Job category--',
                                                            )
                                                        ); ?>   
                                        
                                    </div>
                        </div>
                        <div class="control-group">
                            <label for="date" class="control-label right">Joining Date:</label>
                            <div class="controls">
                                <input type="text" name="joindate" id="joindate" class="input-medium datepick input-xlarge" value="<?php  echo $editddata['join_date'];?>">                                
                            </div>
                        </div>
                                                                     
                        
                        
                        <div class="form-actions">
                            <input type="button" id="jobbutton" name="jobbutton" class='btn btn-primary' value="Save">
                            <input type="reset" class='btn' value="Discard changes">
                        </div>
                        <div class="alert alert-success span8" id="jobalert" style="display: none;">
                                        <button data-dismiss="alert" class="close" type="button"></button>
                                        <strong>          Success!</strong>
                        </div>
                        
                    </div>
                    
                    
                </form>
                
                
            </div>
            
            <div class="tab-pane" id="report">
                <form action="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Manageuser/Reportto" class="form-horizontal" id="reportform" method="POST" class="form-horizontal">
                    <div class="span10">
                        <div class="control-group">
                                    <label for="name" class="control-label right">Name:</label>
                                    <div class="controls">
                                        <input type="text" id="rname" name="rname" class='input-xlarge' value="<?php  echo $editddata['name'];?>">
                                    </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"></label>
                            <div class="controls">
                                    <label class='radio'>
                                        <input type="radio" name="reportto1" id="super" value="supervisor"> Supervisor
                                    </label>
                                    <label class='radio'>
                                        <input type="radio" name="reportto1" id="sub" value="subordinate"> Subordinate
                                    </label>
                                    
                            </div>
                        </div> 

                        
                        <div class="form-actions">
                            <input type="button" id="reportbutton" name="reportbutton" class='btn btn-primary' value="Save">
                            <input type="reset" class='btn' value="Discard changes">
                        </div>
                        <div class="alert alert-success span8" id="reportalert" style="display: none;">
                                        <button data-dismiss="alert" class="close" type="button"></button>
                                        <strong>          Success!</strong>
                        </div>
                        
                    </div>
                    
                </form>
                
                
            </div>
            
            
            
            <div class="tab-pane" id="salary">
                <form action="" class="form-horizontal" id="salaryform" method="POST" class="form-horizontal">
                    <div class="span10">
                        <div class="control-group">
                                    <label for="pay" class="control-label right">Pay Grade:</label>
                                    <div class="controls">
                                        <input type="text" id="pgrade" name="pgrade" class='input-xlarge' value="">
                                    </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label right">Salary Components:</label>
                            <div class="controls">
                                    <label class='checkbox'>
                                        <input type="checkbox" id="component1" name="component1"> Basic Salary
                                    </label>
                                    <label class='checkbox'>
                                        <input type="checkbox" id="component2" name="component2"> ipsum eiusmod
                                    </label>
                                    <label class='checkbox'>
                                        <input type="checkbox" id="component3" name="component3"> Eiusmod lorem ipsum
                                    </label>
                            </div>
                        </div>
                        
                        <div class="control-group">
                                    <label for="amt" class="control-label right">Salary Amount-CTC:</label>
                                    <div class="controls">
                                        <input type="text" id="amount" name="amount" class='input-xlarge' value="">
                                    </div>
                        </div>
                        <div class="control-group">
                                    <label for="status" class="control-label right">Salary Account Types:</label>
                                    <div class="controls">
                                        <select required="" name="accounttypes" id="accounttypes" class="input-xlarge">
                                                    <option value=""></option>
                                                    <option value="1">Current Account</option>
                                                    <option value="2">Savings Account</option>
                                                    <option value="3">Recurring Account</option>
                                                    <option value="4">Fixed Account</option>
                                                </select>                                                                                                
                                        
                                    </div>
                        </div>
                        <div class="form-actions">
                            <input type="button" id="salarybutton" name="salarybutton" class='btn btn-primary' value="Save">
                            <input type="reset" class='btn' value="Discard changes">
                        </div>
                        <div class="alert alert-success span8" id="salaryalert" style="display: none;">
                                        <button data-dismiss="alert" class="close" type="button"></button>
                                        <strong>          Success!</strong>
                        </div>
                        
                    </div>
                    
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
    var baseurl="<?php echo Yii::app()->request->baseUrl; ?>";
    
</script>
<script src="js/profile.js"></script>
<script src="js/contact.js"></script>
<script src="js/dependency.js"></script>
<script src="js/job.js"></script>
<script src="js/salary.js"></script>
<script src="js/reportto.js"></script>