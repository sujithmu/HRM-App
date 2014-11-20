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
            
            if(isset($_REQUEST['emp_number']))
            {
               $getalldata = HrmUserMaster::model()->getalldetails($_REQUEST['emp_number']);               
            }
            else{
                
                $getalldata = array();
            }
            
          
            if(!isset($_REQUEST['emp_number']))
            {
               $emp_number = ""; 
            }
        else {
            $emp_number =  $_REQUEST['emp_number'] ;
             }  
             
            
            $this->render('viewprofile',array('model'=>$obj,'editddata'=>$getalldata,'emp_number'=>$emp_number));           
             
           # Yii::app()->red->redirect();
           
            
                   
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
        
        public function actionUserdisplay(){
            
            #$ar = array("aaData"=>array(array("id","day1","months1","year1","acting","name1"),array("id2","day2","months2","year2","acting2","name2")));
            #echo json_encode($ar);
             $userdata1 = HrmUserMaster::model()->getuserdetails();
             
             
             if (count($userdata1)>0){
                  $i=1;
                 foreach ($userdata1 as $details)
                 {   
                     
                     if($details['status'] == 'Y'){
                     
                        $act =  '<span class="label label-satgreen">Active</span>';
                        }
                    else{
                      $act =  '<span class="label label-lightred">Inactive</span>';
                      
                        }
                        if($details['Jdate']!= '' and $details['Jdate']!= "0000-00-00")
                        {
                            $da = strtotime($details['Jdate']);
                            $date = date('D, M d, Y', $da);
                        }
                        else{
                            $date = "";
                        }
                         $empid = $details['emp_number'];
                        $editurl = Yii::app()->request->baseUrl."/index.php?r=Manageuser/View&emp_number=".$empid;
                       
                         $option =  '
                                    <a href="'.$editurl.'" class="btn" rel="'.$empid.'" title="Edit"><i class="icon-edit"></i></a>
                                    <a href="#" class="btn empremove" rel="'.$empid.'" title="Delete"><i class="icon-remove"></i></a>';
                        
                     $array = array($i,$details['Name'],$details['Uname'],$act,$date,$option);
                     $newarray[] = $array;
                     $i++;
                 }
             }
            $ar = array("aaData"=> $newarray);
            
            
            #$emp1 = HrmEmployee::model()->findByAttributes();
           
            
            
            echo json_encode($ar);
            #$job1 = HrmCurrentJob::model()->findByAttributes();                       
            
            
        }

        public function actionUserdelete(){
            
             $userdata1 = HrmUserMaster::model()->deleteUser($_REQUEST['empno']);
        }


        /* public function actionReport(){
            $find = $_REQUEST['rname'];
            $rname = HrmReportTo::model()->findAllByAttributes(array("supervisor_name"=>$find));
            
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        //'model'=>$model,
        //'attribute'=>'name',
                'id'=>'country-single',
                'name'=>'country_single',
                'source'=>$this->createUrl('request/suggestCountry'),
                'htmlOptions'=>array(
                'size'=>'40'
                       ),
                ));
            
            }

        
        */



        public function actionUserReg()
        {
            
                
           // $_REQUEST['user_name'] = $_REQUEST['uname'];
            // $rr->setAttribute("user_name", $_REQUEST['uname']);
              # $rr->setAttribute("user_password", $_REQUEST['pswd']);
              #  $rr->setAttribute("user_role_id", $_REQUEST['myDropdown']);
            
            
               $adding = new HrmEmployee();
                $vip =  new HrmUserMaster();
                
                #$adding->attributes=array($_POST['']); //for adding more fields as array
               if($_REQUEST['empnumber']>0)
               {
                    $adding->updateAll(array('emp_firstname' => $_REQUEST['fname'],'emp_middle_name'=>$_REQUEST['mname'],'emp_lastname'=>$_REQUEST['lname']), 'emp_number='.$_REQUEST['empnumber']);
               
                     $vip->updateAll(array('user_role_id' => $_REQUEST['userrole'],'status'=>$_REQUEST['userstatus']),'emp_number='.$_REQUEST['empnumber']);
               }
               else{
               $adding->emp_firstname=$_REQUEST['fname'];
               $adding->emp_middle_name=$_REQUEST['mname'];
               $adding->emp_lastname=$_REQUEST['lname'];
               //$adding->emp_number=$_REQUEST['empnumber'];
               $adding->save();
                $empno = $adding->getPrimaryKey();
             
               
                $vip->user_name=$_REQUEST['uname'];
                $vip->user_password=$_REQUEST['pswd'];
                $vip->user_role_id=$_REQUEST['userrole'];
                $vip->status=$_REQUEST['userstatus'];
               # $vip->emp_number=$empno;
                $vip->save();
               }
                
              
               //$rr->attributes = array('user_name'=>$_REQUEST['uname'],'user_password'=>$_REQUEST['pswd'],'user_role_id'=>$_REQUEST['myDropdown']);
              
                
                
                $pri = $vip->getPrimaryKey();
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
                
                $contactarr = $n->find('emp_number=:emp_number', array(':emp_number'=>$_REQUEST['empnumber']));    
               
                if(count($contactarr)>0){
                    
                  $n->updateAll(array('eec_name' => $_REQUEST['name'],
                      'eec_relation'=>$_REQUEST['relation'],
                      'eec_address'=>$_REQUEST['address'],
                      'eec_pincode'=>$_REQUEST['pincode'],
                      'eec_country'=>$_REQUEST['countrylist'],
                      'eec_state'=>$_REQUEST['statelist'],'eec_city'=>$_REQUEST['city'],
                      'eec_home_no'=>$_REQUEST['hnumber'],'eec_mobile_no'=>$_REQUEST['mnumber'],
                      'eec_office_no'=>$_REQUEST['onumber']),                        
                          'emp_number='.$_REQUEST['empnumber']);  
                    
                }
        else {
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
                $n->emp_number=$_REQUEST['empnumber'];
                $n->save();
            }
            
        }
        public function actionDependent(){
            
            $d = new HrmDependent();
            $dependarr = $d->find('emp_number=:emp_number', array(':emp_number'=>$_REQUEST['empnumber']));  
            if(count($dependarr)>0){
                 $da = strtotime($_REQUEST['dateofbirth']);
                    $dob=date('Y-m-d', $da);
                $d->updateAll(array('dependent_name' => $_REQUEST['dname'],
                    'dependent_relation'=>$_REQUEST['relationship'],
                    'dependent_dob'=>$dob),                        
                     'emp_number='.$_REQUEST['empnumber']);
            }
            else{
                $d->emp_number=$_REQUEST['empnumber'];
                $d->dependent_name=$_REQUEST['dname'];
                if($_REQUEST['relationship']=='other'){
                    $d->dependent_relation=$_REQUEST['odependent'];
                    }
                else {
                    $d->dependent_relation=$_REQUEST['relationship'];
                    }
            
                 unset($_REQUEST['odependent'],$_REQUEST['relationship']);
          
            #$d->dependent_dob=$_REQUEST['dateofbirth'];
                    $da = strtotime($_REQUEST['dateofbirth']);
                    $d->dependent_dob=date('Y-m-d', $da);
            #$d->dependent_dob= date("y-m-d",strtotime($_REQUEST['dateofbirth']));
            #print_r($d);  
            
            #$from=DateTime::createFromFormat('Y-m-d',$this->dependent_dob);
            #$this->dependent_dob=$from->format('d/m/Y');
            
            
                    $d->save();
            }
            
        }

        public function actionDynamicstates(){
            
            $record =  new commenmodel('state_list');
            $countryid = $_REQUEST['countryid'];
            $cid=  $record->findAllByAttributes(array("country_id"=>$countryid)); 
            $this->layout=FALSE;
           
            $this->render('statelist',array('selectarray'=>$cid),FALSE);
            
        }
        
        public function actionReport(){
            
            $term = $_REQUEST['term'];
            
            $c = new CDbCriteria();
            $term = addcslashes($term, '%_'); 
            $c->addSearchCondition('emp_firstname', $term, true,'OR','LIKE');
          # $c->addSearchCondition('emp_middle_name','%$term%', true, 'OR');
          # $c->addSearchCondition('emp_lastname','%$term%', true, 'OR');
           # print_r($c);
            $t = HrmEmployee::model()->findAll($c);
            
            print_r($t);
            
        }
        
        public function actionReportto(){
            
            $repo = new HrmReportTo();
            $repo->emp_number=$_REQUEST['empnumber'];
            $repo->name = $_REQUEST['rname'];
            $repo->user_type =$_REQUEST['reportto1'];
            
            $repo->save();
        }
        /*public function actionRole(){
            $role = new HrmUserRole();
            
        }*/
     public function actionJob(){
         
         $job = new HrmCurrentJob();
         $jobarr = $job->find('emp_number=:emp_number', array(':emp_number'=>$_REQUEST['empnumber'])); 
         if(count($jobarr)>0){            
             
             $j = strtotime($_REQUEST['joindate']);
         
            $jaa=date('Y-m-d', $j);
             
             $job->updateAll(array('job_title' => $_REQUEST['jobtitle'],
                 'job_status'=>$_REQUEST['estatus'],
                 'job_category'=>$_REQUEST['jobcategory'],'join_date'=>$jaa),                        
                     'emp_number='.$_REQUEST['empnumber']);
             
         }
         else{
         
         $job->emp_number=$_REQUEST['empnumber'];
         $job->job_title=$_REQUEST['jobtitle'];
         $job->job_status=$_REQUEST['estatus'];
         $job->job_category=$_REQUEST['jobcategory'];
         
         
         
         $j = strtotime($_REQUEST['joindate']);
         #$job->join_date=date('Y-m-d', $j);
         $job->join_date=date('Y-m-d', $j);
         
         
         #$job->join_date=$_REQUEST['joindate'];
         $job->save();
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