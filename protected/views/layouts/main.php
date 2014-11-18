<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />       
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css?<?php echo time()?>" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/jquery-ui/smoothness/jquery-ui.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/tagsinput/jquery.tagsinput.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/select2/select2.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/themes.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/datatable/TableTools.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/chosen/chosen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/datepicker/datepicker.css" media="screen, projection" />
        
        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/nicescroll/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/imagesLoaded/jquery.imagesloaded.min.js" type="text/javascript"></script>    
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/jquery-ui/jquery.ui.core.min.js" type="text/javascript"></script>    
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>    
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/jquery-ui/jquery.ui.resizable.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/jquery-ui/jquery.ui.datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js" type="text/javascript"></script>
        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/select2/select2.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/bootbox/jquery.bootbox.js" type="text/javascript"></script>
        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/form/jquery.form.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/validation/jquery.validate.min.js" type="text/javascript"></script>        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/validation/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/tagsinput/jquery.tagsinput.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/fileupload/bootstrap-fileupload.min.js" type="text/javascript"></script>
        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/chosen/chosen.jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/eakroko.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/application.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/demonstration.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        
        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dataTables.scroller.js" type="text/javascript"></script>
        
        
        
        
        
        
        
        
        
        <link rel="shortcut icon" href="img/favicon.ico" />
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
        
        <title>  </title>
        
        
        
        
        
</head>

<body>
    		<div id="navigation">
			<div class="container-fluid">
				<a href="#" id="brand">FLAT</a>
				<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>

         
                       
                      
                                        
                      <?php $this->widget('zii.widgets.CMenu', array(
                'items' => array(
                    array(
                        'label' => '<span class="username">Admin</span> <i class="icon-angle-down"></i>',
                        'url' => '#',
                        'linkOptions'=> array(
                            'class' => 'dropdown-toggle',
                            'data-toggle' => 'dropdown',
                            ),
                        'itemOptions' => array('class'=>'dropdown user'),
                        'items' => array(
                            array(
                                'label' => 'Manage Users',
                                'url' => '#',
                            ),
                            array(
                                'label' => 'Add Users',
                                'url' => "#",
                            ),
                            /*array(
                                'label' => 'Manage Skills',
                                'url' => '#',
                            ),
                            array(
                                'label' => 'Manage Education',
                                'url' => '#',
                            ),
                            array(
                                'label' => '',
                                array(
                                    'class' => 'divider',
                                )
                            ),
                            array(
                                'label' => 'Manage Email',
                                'url' => '#',
                            ),*/
                        )
                    ),
                    
                    array(
                        'label' => '<span class="username">Employee</span> <i class="icon-angle-down"></i>',
                        'url' => '#',
                        'linkOptions'=> array(
                            'class' => 'dropdown-toggle',
                            'data-toggle' => 'dropdown',
                            ),
                        'itemOptions' => array('class'=>'dropdown user'),
                        'items' => array(
                            array(
                                'label' => 'Manage Employee',
                                'url' => '#'
                            ),
                            array(
                                'label' => 'Reports',
                                'url' => '#',
                            ),
                            
                        )
                    ),
                    
                    
                    
                ),
                'encodeLabel' => false,
                'htmlOptions' => array(
                    'class'=>'main-nav',
                        ),
                'submenuHtmlOptions' => array(
                    'class' => 'dropdown-menu',
                )
            ));?>         
                                
                                
                                                   
                                
                                
                                                          
                                
                                
				<div class="user">
					<ul class="icon-nav">
						<li class='dropdown'>
							<a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-envelope"></i><span class="label label-lightred">4</span></a>
							<ul class="dropdown-menu pull-right message-ul">
								<li>
									<a href="#">
										<img src="img/demo/user-1.jpg" alt="">
										<div class="details">
											<div class="name">Jane Doe</div>
											<div class="message">
												Lorem ipsum Commodo quis nisi ...
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/demo/user-2.jpg" alt="">
										<div class="details">
											<div class="name">John Doedoe</div>
											<div class="message">
												Ut ad laboris est anim ut ...
											</div>
										</div>
										<div class="count">
											<i class="icon-comment"></i>
											<span>3</span>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/demo/user-3.jpg" alt="">
										<div class="details">
											<div class="name">Bob Doe</div>
											<div class="message">
												Excepteur Duis magna dolor!
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="components-messages.html" class='more-messages'>Go to Message center <i class="icon-arrow-right"></i></a>
								</li>
							</ul>
						</li>

						<li class="dropdown sett">
							<a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-cog"></i></a>
							<ul class="dropdown-menu pull-right theme-settings">
								<li>
									<span>Layout-width</span>
									<div class="version-toggle">
										<a href="#" class='set-fixed'>Fixed</a>
										<a href="#" class="active set-fluid">Fluid</a>
									</div>
								</li>
								<li>
									<span>Topbar</span>
									<div class="topbar-toggle">
										<a href="#" class='set-topbar-fixed'>Fixed</a>
										<a href="#" class="active set-topbar-default">Default</a>
									</div>
								</li>
								<li>
									<span>Sidebar</span>
									<div class="sidebar-toggle">
										<a href="#" class='set-sidebar-fixed'>Fixed</a>
										<a href="#" class="active set-sidebar-default">Default</a>
									</div>
								</li>
							</ul>
						</li>
						<li class='dropdown colo'>
							<a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-tint"></i></a>
							<ul class="dropdown-menu pull-right theme-colors">
								<li class="subtitle">
									Predefined colors
								</li>
								<li>
									<span class='red'></span>
									<span class='orange'></span>
									<span class='green'></span>
									<span class="brown"></span>
									<span class="blue"></span>
									<span class='lime'></span>
									<span class="teal"></span>
									<span class="purple"></span>
									<span class="pink"></span>
									<span class="magenta"></span>
									<span class="grey"></span>
									<span class="darkblue"></span>
									<span class="lightred"></span>
									<span class="lightgrey"></span>
									<span class="satblue"></span>
									<span class="satgreen"></span>
								</li>
							</ul>
						</li>
						<li class='dropdown language-select'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown"><img src="img/demo/flags/us.gif" alt=""><span>US</span></a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#"><img src="img/demo/flags/br.gif" alt=""><span>Brasil</span></a>
							</li>
							<li>
								<a href="#"><img src="img/demo/flags/de.gif" alt=""><span>Deutschland</span></a>
							</li>
							<li>
								<a href="#"><img src="img/demo/flags/es.gif" alt=""><span>España</span></a>
							</li>
							<li>
								<a href="#"><img src="img/demo/flags/fr.gif" alt=""><span>France</span></a>
							</li>
						</ul>
					</li>
					</ul>
					<div class="dropdown">
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">John Doe <img src="img/demo/user-avatar.jpg" alt=""></a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="more-userprofile.html">Edit profile</a>
							</li>
							<li>
								<a href="#">Account settings</a>
							</li>
							<li>
								<a href="more-login.html">Sign out</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    
    
        <div class="container-fluid" id="content">
			<div id="left">
				<form action="search-results.html" method="GET" class='search-form'>
					<div class="search-pane">
						<input type="text" name="search" placeholder="Search here...">
						<button type="submit"><i class="icon-search"></i></button>
					</div>
				</form>
				<div class="subnav">
					<div class="subnav-title">
						<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Content</span></a>
					</div>
					<ul class="subnav-menu">
						<li class='dropdown'>
							<a href="#" data-toggle="dropdown">Articles</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action #1</a>
								</li>
								<li>
									<a href="#">Antoher Link</a>
								</li>
								<li class='dropdown-submenu'>
									<a href="#" data-toggle="dropdown" class='dropdown-toggle'>Go to level 3</a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">This is level 3</a>
										</li>
										<li>
											<a href="#">Unlimited levels</a>
										</li>
										<li>
											<a href="#">Easy to use</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">News</a>
						</li>
						<li>
							<a href="#">Pages</a>
						</li>
						<li>
							<a href="#">Comments</a>
						</li>
					</ul>
				</div>
				<div class="subnav">
					<div class="subnav-title">
						<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Plugins</span></a>
					</div>
					<ul class="subnav-menu">
						<li>
							<a href="#">Cache manager</a>
						</li>
						<li class='dropdown'>
							<a href="#" data-toggle="dropdown">Import manager</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action #1</a>
								</li>
								<li>
									<a href="#">Antoher Link</a>
								</li>
								<li class='dropdown-submenu'>
									<a href="#" data-toggle="dropdown" class='dropdown-toggle'>Go to level 3</a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">This is level 3</a>
										</li>
										<li>
											<a href="#">Unlimited levels</a>
										</li>
										<li>
											<a href="#">Easy to use</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Contact form generator</a>
						</li>
						<li>
							<a href="#">SEO optimization</a>
						</li>
					</ul>
				</div>
				<div class="subnav">
					<div class="subnav-title">
						<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Settings</span></a>
					</div>
					<ul class="subnav-menu">
						<li>
							<a href="#">Theme settings</a>
						</li>
						<li class='dropdown'>
							<a href="#" data-toggle="dropdown">Page settings</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action #1</a>
								</li>
								<li>
									<a href="#">Antoher Link</a>
								</li>
								<li class='dropdown-submenu'>
									<a href="#" data-toggle="dropdown" class='dropdown-toggle'>Go to level 3</a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">This is level 3</a>
										</li>
										<li>
											<a href="#">Unlimited levels</a>
										</li>
										<li>
											<a href="#">Easy to use</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Security settings</a>
						</li>
					</ul>
				</div>
				<div class="subnav subnav-hidden">
					<div class="subnav-title">
						<a href="#" class='toggle-subnav'><i class="icon-angle-right"></i><span>Default hidden</span></a>
					</div>
					<ul class="subnav-menu">
						<li>
							<a href="#">Menu</a>
						</li>
						<li class='dropdown'>
							<a href="#" data-toggle="dropdown">With submenu</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action #1</a>
								</li>
								<li>
									<a href="#">Antoher Link</a>
								</li>
								<li class='dropdown-submenu'>
									<a href="#" data-toggle="dropdown" class='dropdown-toggle'>More stuff</a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">This is level 3</a>
										</li>
										<li>
											<a href="#">Easy to use</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Security settings</a>
						</li>
					</ul>
				</div>
			</div>   
			
                        <div id="main">
                            
                             <div class="mainfooter">

                                <?php echo $content; ?>
                             
                             </div>  
                            
                            
                            
			</div>
            <div id="footer">
                        <p>
				FLAT - Responsive Admin Template <span class="font-grey-4">|</span> <a href="#">Contact</a> <span class="font-grey-4">|</span> <a href="#">Imprint</a> 
			</p>
			<a href="#" class="gototop"><i class="icon-arrow-up"></i></a>
                     </div>
		</div>


                     
                        
    
    
</body>
</html>

