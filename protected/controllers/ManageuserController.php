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
            $this->render('viewprofile',array('model'=>$obj));           
             
            Yii::app()->red->redirect();
                   
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
            
                
           // $_REQUEST['user_name'] = $_REQUEST['uname'];
            // $rr->setAttribute("user_name", $_REQUEST['uname']);
              # $rr->setAttribute("user_password", $_REQUEST['pswd']);
              #  $rr->setAttribute("user_role_id", $_REQUEST['myDropdown']);
                $vip =  new HrmUserMaster();
                $vip->user_name=$_REQUEST['uname'];
                $vip->user_password=$_REQUEST['pswd'];
                $vip->user_role_id=$_REQUEST['userrole'];
                $vip->status=$_REQUEST['userstatus'];
                
               //$rr->attributes = array('user_name'=>$_REQUEST['uname'],'user_password'=>$_REQUEST['pswd'],'user_role_id'=>$_REQUEST['myDropdown']);
              
                $vip->save();   
                
                $pri = $vip->getPrimaryKey();
            
               $adding = new HrmEmployee();
                
                #$adding->attributes=array($_POST['']); //for adding more fields as array
               $adding->emp_firstname=$_REQUEST['fname'];
               $adding->emp_middle_name=$_REQUEST['mname'];
               $adding->emp_lastname=$_REQUEST['lname'];                              
               $adding->save();   
                
               #print_r($_FILES);
               /*
               $uploadedimage = CUploadedFile::getInstanceByName('uploadimage');
               #print_r($uploadedimage);
               $uploadedimage->saveAs(dirname(Yii::app()->request->scriptFile).'/profilepictures/main-'.$pri.'.'.$uploadedimage->extensionName);
               chmod(dirname(Yii::app()->request->scriptFile).'/profilepictures/main-'.$pri.'.'.$uploadedimage->extensionName, 0777);
               
               #echo dirname(Yii::app()->request->scriptFile).'/profilepictures';
               */
               if(isset($_FILES['uploadimage'])){
                   
             
               
               $img = Yii::app()->imagemod->load($_FILES['uploadimage']);
           if ($img->uploaded) {
            $img->image_resize          = FALSE;
            $img->image_ratio_y         = FALSE;
  
            $img->image_convert         = 'jpg';
            $img->file_new_name_body = 'main-'.$pri;
            $img->process(dirname(Yii::app()->request->scriptFile).'/profilepictures/');
            if ($img->processed) {
              echo 'image resized';
              $img->clean(); //delete original image
            } else {
              echo 'error : ' . $img->error;
            }
            
            chmod(dirname(Yii::app()->request->scriptFile).'/profilepictures/main-'.$pri.'.jpg', 0777);
            $img = Yii::app()->imagemod->load(dirname(Yii::app()->request->scriptFile).'/profilepictures/main-'.$pri.'.jpg');
            $img->image_resize          = true;
            $img->image_ratio_y         = true;
            $img->image_x               = 150;
            $img->image_convert         = 'jpg';
            $img->file_new_name_body = 'profile-'.$pri;
            $img->process(dirname(Yii::app()->request->scriptFile).'/profilepictures/');
            if ($img->processed) {
              echo 'image resized';
            
            } else {
              echo 'error : ' . $img->error;
            }
            
            $img = Yii::app()->imagemod->load(dirname(Yii::app()->request->scriptFile).'/profilepictures/main-'.$pri.'.jpg');
             $img->image_resize         = true;
            $img->image_ratio_y         = true;
            $img->image_x               = 50;
            $img->image_convert         = 'jpg';
            $img->file_new_name_body = 'thumbimg-'.$pri;
            $img->process(dirname(Yii::app()->request->scriptFile).'/profilepictures/');
            if ($img->processed) {
              echo 'image resized';
             
            } else {
              echo 'error : ' . $img->error;
            } 
            
           
            chmod(dirname(Yii::app()->request->scriptFile).'/profilepictures/profile-'.$pri.'.jpg', 0777);
            chmod(dirname(Yii::app()->request->scriptFile).'/profilepictures/thumbimg-'.$pri.'.jpg', 0777);
         }
            }
             
            
               
        }
        
        public function actionEcontact() {
            
            #$ss = array();
            #if(count($ss)==0)
                
                
                $n = new HrmEmpEmergencyContacts();
                $n->eec_name=$_REQUEST['name'];
                $n->eec_relationship=$_REQUEST['relation'];
                $n->eec_address=$_REQUEST['address'];
                $n->eec_pincode=$_REQUEST['pincode'];
                $n->eec_country=$_REQUEST['countrylist'];
                $n->eec_state=$_REQUEST['statelist'];
                $n->eec_city=$_REQUEST['city'];
                $n->eec_home_no=$_REQUEST['hnumber'];
                $n->eec_mobile_no=$_REQUEST['mnumber'];
                $n->eec_office_no=$_REQUEST['onumber'];
                $n->save();
                
            
        }

        public function actionDynamicstates(){
            
            $record =  new commenmodel('state_list');
            $countryid = $_REQUEST['countryid'];
            $cid=  $record->findAllByAttributes(array("country_id"=>$countryid)); 
            $this->layout=FALSE;
           
            $this->render('statelist',array('selectarray'=>$cid),FALSE);       
            
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