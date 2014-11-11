<?php

class ManageuserController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function actionManage(){
            
           # $this->layout='//layouts/main';
           
           
           #$this->layout=FALSE;
           #echo $this->render('manage',"",TRUE); 
        
            $this->render('manage',"",FALSE);
        }
        
        public function actionView() {
            #$this->layout=FALSE;
            $obj = new HrmUserRole(); 
            $this->render('viewprofile',array('model'=>$obj),FALSE); 
             
             
                   
        }
        
        public function actionUservalidation(){
            $rs = new HrmUserMaster();
            #$set = $rs->findByAttributes(array('user_name'=>$_REQUEST['uemail']));
            $usercriteria = new CDbCriteria();
                #$usercriteria->select="id";
                $rq = $_REQUEST['uname'];
                #$usercriteria->condition="user_name=".$rq;
                $uname=HrmUserMaster::model()->findByAttributes(array("user_name"=>$rq));
                if(count($uname)>0){
                    
                    echo 'false';
                }
                else {
                    echo 'true';
                }
        }
        public function actionUserReg()
        {
            
                                    
                $adding = new HrmEmployee();
                
                #$adding->attributes=array($_POST['']); //for adding more fields as array
               echo $adding->emp_firstname=$_POST['fname'];
                echo $adding->emp_middle_name=$_POST['mname'];
                echo $adding->emp_lastname=$_POST['lname'];
                
                $adding->save();
                                                 
            
        }
        public function actionEcontact() {
            
            #$ss = array();
            #if(count($ss)==0)
             
                
                $n = new HrmEmpEmergencyContacts();
                $n->attributes=$_POST;
                $n->insert();
             
            
        }

        public function actionDynamicstates(){
            
            $record = new Countries();
            $countryid = $_REQUEST['cid'];
            $cid=  Countries::model()->findAllByAttributes(array("id"=>$countryid));              
            
        }
        /*public function actionRole(){
            $role = new HrmUserRole();
            
        }*/






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