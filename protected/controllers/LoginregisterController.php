<?php

class LoginregisterController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function actionLogin()
        {   
                #$session=new CHttpSession;

                #$session->open();
                #echo $session['id'];
                $this->layout = '//layouts/loginlayout';
                $this->render('login');
            
                                              
        }
        public function actionLoginValidation()
        {
                $record = new HrmUserMaster();
                
                $store = $record->findByAttributes(array('user_name'=>$_REQUEST['uemail'],'user_password'=>$_REQUEST['upw'],'status'=>'Y'));
                #print_r($store);
                if (count($store)>0){
                #$add = new HrmLoginHistory();
                #$add->attributes=$_POST;
                #$add->save();
                #print_r($add);
                
                
                $session=new CHttpSession;
                $session->open();
                $session['id']=$store->id;
                $session['user_role']=$store->user_role_id;
                $session['username']=$store->user_name;
                #echo $session['id'];               
                
                $add = new HrmLoginHistory();
                $add->user_id=$store->id;
                $add->user_name=$store->user_name;
                $add->login_time=date('Y:m:d H:i:s');
                
                $add->ip_address=Yii::app()->request->getUserHostAddress();
                
                $add->save();
                #print_r($add);
                #header("Location: index.php");
                }else{
                    
                    echo "fail";
                }
        }
        
        
        



        // Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}