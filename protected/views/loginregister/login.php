<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css">

<body class='login'>
	<div class="wrapper">
		<h1><a href="index.html"><img src="img/logo-big.png" alt="" class='retina-ready' width="59" height="49"></a></h1>
		<div class="login-body">
			<h2>SIGN IN</h2>
                        
                        <div  class="alert alert-error logerror" id="error_msg">
			
                     
                    </div>
                        
                        
			<form action="index.html" method='get' class='form-validate' id="test">
				<div class="control-group">
					<div class="email controls">
						<input type="text" name='uemail' id="uemail" placeholder="Email address" class='input-block-level' data-rule-required="true" data-rule-email="true">
					</div>
				</div>
				<div class="control-group">
					<div class="pw controls">
                                            <input type="password" name="upw" id="upw" placeholder="Password" class='input-block-level' data-rule-required="true">
					</div>
				</div>
				<div class="submit">
					<div class="remember">
						<input type="checkbox" name="remember" class='icheck-me' data-skin="square" data-color="blue" id="remember"> <label for="remember">Remember me</label>
					</div>
                                    <input type="button" id="btnsubmit" value="Sign me in" class='btn btn-primary'>
				</div>
                               
			</form>
			<div class="forget">
				<a href="#"><span>Forgot password?</span></a>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
    var baseurl="<?php echo Yii::app()->request->baseUrl; ?>";
</script>
<script src="js/login.js"></script>
    