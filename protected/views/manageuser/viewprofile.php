<body>		
<div class="container-fluid">
					
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
									<a href="#security" data-toggle='tab'><i class="icon-lock"></i> Emergency Contact</a>
								</li>
                                                                <li>
									<a href="#security" data-toggle='tab'><i class="icon-lock"></i> Dependency</a>
								</li>
                                                                <li>
									<a href="#security" data-toggle='tab'><i class="icon-lock"></i> Job</a>
								</li>
                                                                <li>
									<a href="#security" data-toggle='tab'><i class="icon-lock"></i> Salary</a>
								</li>
                                                                <li>
									<a href="#security" data-toggle='tab'><i class="icon-lock"></i> Report To</a>
								</li>
                                                                <li>
									<a href="#security" data-toggle='tab'><i class="icon-lock"></i> Qualifications</a>
								</li>
							</ul>
							<div class="tab-content padding tab-content-inline tab-content-bottom">
								<div class="tab-pane active" id="profile">
									<form action="#" class="form-horizontal">
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
													<label for="roll" class="control-label right">User Roll:</label>
													<div class="controls">
														<input type="text" name="uroll" class='input-xlarge' value="">
													</div>
												</div>
												<div class="control-group">
													<label for="name" class="control-label right">First Name:</label>
													<div class="controls">
														<input type="text" name="fname" class='input-xlarge' value="">
													</div>
												</div>
                                                                                                <div class="control-group">
													<label for="name" class="control-label right">Middle Name:</label>
													<div class="controls">
														<input type="text" name="mname" class='input-xlarge' value="">
													</div>
												</div>
                                                                                                <div class="control-group">
													<label for="name" class="control-label right">Last Name:</label>
													<div class="controls">
														<input type="text" name="lname" class='input-xlarge' value="">
													</div>
												</div>
												<div class="control-group">
													<label for="name" class="control-label right">Username:</label>
													<div class="controls">
														<input type="text" name="uname" class='input-xlarge' value="">
													</div>
												</div>
                                                                                                <div class="control-group">
													<label for="pw" class="control-label right">Password:</label>
													<div class="controls">
														<input type="password" name="pw" class='input-xlarge' value="">														
													</div>
                                                                                                </div>
                                                                                                <div class="control-group">
                                                                                                        <label for="pw" class="control-label right">Confirm Password:</label>
													<div class="controls">
														<input type="password" name="cpw" class='input-xlarge' value="">														
													</div>
												</div>
												<div class="control-group">
                                                                                                    <label for="asdf" class="control-label">Status</label>
                                                                                                        <div class="controls">
                                                                                                            <select name="status" id="userstatus">
                                                                                                                <option value="1">Active</option>
                                                                                                                <option value="2">Inactive</option>
                                                                                                                
                                                                                                            </select>
                                                                                                        </div>
                                                                                                </div>
																								
												<div class="form-actions">
													<input type="submit" class='btn btn-primary' value="Save">
													<input type="reset" class='btn' value="Discard changes">
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-pane" id="notifications">
									<form action="#" class="form-horizontal">
										<div class="control-group">
											<label for="asdf" class="control-label">Email notifications</label>
											<div class="controls">
												<label class="checkbox"><input type="checkbox" name="asdf"> Send me security emails</label>
												<label class="checkbox"><input type="checkbox" name="asdf"> Send system emails</label>
												<label class="checkbox"><input type="checkbox" name="asdf"> Lorem ipsum dolor</label>
												<label class="checkbox"><input type="checkbox" name="asdf"> Minim veli</label>
											</div>
										</div>
										<div class="control-group">
											<label for="asdf" class="control-label">Email for notifications</label>
											<div class="controls">
												<select name="email" id="email">
													<option value="1">asdf@blasdas.com</option>
													<option value="2">johnDoe@asdasf.de</option>
													<option value="3">janeDoe@janejanejane.net</option>
												</select>
											</div>
										</div>
										<div class="form-actions">
											<input type="button" class='btn btn-primary' value="Save">
											<input type="reset" class='btn' value="Discard changes">
										</div>
									</form>
								</div>
								<div class="tab-pane" id="security">
									<form action="#" class="form-horizontal">
										<div class="control-group">
											<label for="asdf" class="control-label">Disable account for</label>
											<div class="controls">
												<select name="email" id="email">
													<option value="1">1 week</option>
													<option value="2">2 weeks</option>
													<option value="3">3 weeks</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label for="asdf" class="control-label">Lock account?</label>
											<div class="controls">
												<a href="more-locked.html" class="btn btn-danger">Lock account now</a>
											</div>
										</div>
										<div class="form-actions">
											<input type="submit" class='btn btn-primary' value="Save">
											<input type="reset" class='btn' value="Discard changes">
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