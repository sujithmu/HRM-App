<?php

class LoginregisterController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }
        
        public function actionLogin()
        {   
               $session=new CHttpSession;

               $session->open();
              if (isset($session['memberid']))
                 header('Location:'.Yii::app()->getBaseUrl(TRUE)."/index.php"); // to redirect to index if loggedin
                
                $this->layout = '/layouts/loginlayout';
                $this->render('login');
            
                                              
        }
        public function actionLoginValidation()
        {      
                $record = new HrmUserMaster();

                $pass = crypt($_REQUEST['upw'],Yii::app()->params['encrptpass']);
                #$store = $record->findByAttributes(array('user_name'=>$_REQUEST['uemail'],'user_password'=>$pass,'status'=>'Y'));
                #print_r($store);
                
                $store = $record->getUsercheck($_REQUEST['uemail'],$pass);
               

                if ($store['id']>0){
                #$add = new HrmLoginHistory();
                #$add->attributes=$_POST;
                #$add->save();
                #print_r($add);
                
                
                $session=new CHttpSession;
                $session->open();
                $session['memberid']=$store['id'];
                $session['empnumber']=$store['emp_number'];
                $session['user_role']=$store['user_role_id'];
                $session['username']=$store['user_name'];
                $session['name']=$store['name'];
                
                #echo $session['id'];               
                
                $add = new HrmLoginHistory();
                $add->user_id=$store['id'];
                $add->user_name=$store['user_name'];
                $add->login_time=date('Y:m:d H:i:s');
                
                $add->ip_address=Yii::app()->request->getUserHostAddress();
                
                $add->save();
                echo "success";
                #print_r($add);
                #header("Location: index.php");
                }else{
                    
                    echo "fail";
                }
        }
        
        
        public function actionLogout(){

            $session=new CHttpSession;
            $session->open();

            unset(Yii::app()->session['memberid'],Yii::app()->session['empnumber'],Yii::app()->session['user_role'],Yii::app()->session['username'],Yii::app()->session['name']);
             Yii::app()->session->clear();
            Yii::app()->session->destroy();
            $this->redirect(Yii::app()->getBaseUrl(TRUE)."/index.php?r=Loginregister/Login");
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