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
            Yii::app()->red->redirect();  // for session redirection
            $this->render('manage',"",FALSE);
        }
        
        public function actionView() {
            #$this->layout=FALSE;
            Yii::app()->red->redirect();  // for session redirection
            $obj = new HrmUserRole(); 
            $session=new CHttpSession;
            $session->open();
            if(isset($_REQUEST['emp_number']))
            {    
               
               if($_REQUEST['emp_number']>0 and ($session['user_role']==1 or $session['user_role']==2)){ 
                    $getalldata = HrmUserMaster::model()->getalldetails($_REQUEST['emp_number']); 
                    $emp_number = $_REQUEST['emp_number'];
               }
               else{
                     $getalldata = HrmUserMaster::model()->getalldetails($session['empnumber']);
                     $emp_number = $session['empnumber'];
               }               
            }
            elseif ($session['user_role']!=1 and $session['user_role']!=2){
                $getalldata = HrmUserMaster::model()->getalldetails($session['empnumber']);
                $emp_number = $session['empnumber'];
                
            }else{
              $getalldata = array();
            }
            
          
           
            
            
            $this->render('viewprofile',array('model'=>$obj,'editddata'=>$getalldata,'emp_number'=>$emp_number,'user_role'=>$session['user_role']));           
             
           # Yii::app()->red->redirect();
          
            
            
            
                   
        }
        
        public function actionUservalidation(){
            Yii::app()->red->ajax_redirect();  // for session redirection
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
        

         public function actionMail(){

              $this->render('mailformat',"",FALSE);
          }


           public function actionAllmail(){
        
              $mails = HrmUserMaster::model()->getmaildetails();
              if(count($mails)>0){
                foreach ($mails as $mdata){
                   $emailid = $mdata['id'];
                   $options = '<a href="javascript:void(0);" class="editemail" rel="'.$emailid.'" title="EDIT MAIL"><i class="icon-edit"></i>';
                  $array = array($mdata['id'],$mdata['from_address'],$mdata['mail_bcc'],$mdata['display_name'],$mdata['mail_content'],$options);
                  $newarray[]=$array;
                }
             }
        $ar = array("aaData"=> $newarray);
            
        echo json_encode($ar);
           }


          public function actionEditemail()
          {
             $getmaildetails = HrmUserMaster::model()->maileditor($_REQUEST['mailid']);
             echo json_encode($getmaildetails);
         }          
    
    public function actionUpdatemail()
    {
        $updatemail = new HrmMail();
        $updatemail->updateAll(array('from_address'=>$_REQUEST['fmail'],'mail_bcc'=>$_REQUEST['bmail'],
            'mail_content'=>$_REQUEST['messagebody']),'id='.$_REQUEST['mailid']);
    }


        public function actionUserdisplay(){
             Yii::app()->red->redirect();  // for session redirection
            #$ar = array("aaData"=>array(array("id","day1","months1","year1","acting","name1"),array("id2","day2","months2","year2","acting2","name2")));
            #echo json_encode($ar);
             
               //for data table
             $k = intval($_REQUEST['draw']);
            if ($k == 0) {
              $k++;
            };

            if ($_REQUEST['length'] > 0) {
              $display_length = $_REQUEST['length'];
            } else {

            $display_length = 10;
            }

            $limit = $_REQUEST['start'];
            if ($limit=='')
              $limit = 0;

            $column = $_REQUEST['order']['0']['column'];
            $dir    = $_REQUEST['order']['0']['dir'];
            $search = $_REQUEST['search']['value'];

            $userdata1 = HrmUserMaster::model()->getuserdetails($limit,$display_length,$search,$column,$dir);
           
            $userdata1_cnt = HrmUserMaster::model()->getuserdetails_cnt();

            if ($search!='')
              $userdata1_search_cnt = HrmUserMaster::model()->getuserdetails_search_cnt($search);
            else
              $userdata1_search_cnt = $userdata1_cnt;
            
            
             
             
             if (count($userdata1)>0){
                  $i=1;
                 foreach ($userdata1 as $details)
                 {   
                      $empid = $details['emp_number']; 
                      $userid = $details['userid'];
                     if($details['status'] == 'Y'){
                     
                        $act =  '<a class="status_active" rel="'.$userid.'" href="javascript:void(0);"><span class="label label-satgreen">Active</span></a>';
                        }
                    else{
                      $act =  '<a class="status_deactive" rel="'.$userid.'" href="javascript:void(0);"><span class="label label-lightred">Inactive</span></a>';
                      
                        }
                        if($details['Jdate']!= '' and $details['Jdate']!= "0000-00-00")
                        {
                            $da = strtotime($details['Jdate']);
                            $date = date('D, M d, Y', $da);
                        }
                        else{
                            $date = "";
                        }
                       
                        $editurl = Yii::app()->request->baseUrl."/index.php?r=Manageuser/View&emp_number=".$empid;
                       
                         $option =  '
                                    <a href="'.$editurl.'" class="btn" rel="'.$empid.'" title="Edit"><i class="icon-edit"></i></a>
                                    <a href="#" class="btn empremove" rel="'.$empid.'" title="Delete"><i class="icon-remove"></i></a>';
                        
                     $array = array($details['employee_id'],$details['Name'],$details['job_title'],$details['Uname'],$act,$date,$option);
                     $newarray[] = $array;
                     $i++;
                 }
             }else{
                $newarray = array();
             }
            $ar = array("draw"=>$k,"recordsTotal"=>$userdata1_cnt,"recordsFiltered"=>$userdata1_search_cnt,"data"=> $newarray);
            
            
            #$emp1 = HrmEmployee::model()->findByAttributes();
           
            
            
            echo json_encode($ar);
            #$job1 = HrmCurrentJob::model()->findByAttributes();                       
            
            
        }

        public function actionUserdelete(){
             Yii::app()->red->ajax_redirect();  // for session redirection
             $userdata1 = HrmUserMaster::model()->deleteUser($_REQUEST['empno']);
        }

        public function actionStatusChange()
        {
          extract($_REQUEST);
            if ($status == 'Y')
              HrmUserMaster::model()->updateByPk($userid,array('status'=>'N'));
              else
              HrmUserMaster::model()->updateByPk($userid,array('status'=>'Y'));
   

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
         
                  
               Yii::app()->red->redirect();  // for session redirection
               $adding = new HrmEmployee();
               $vip =  new HrmUserMaster();
                $session=new CHttpSession;
              $session->open();
                #$adding->attributes=array($_POST['']); //for adding more fields as array
               if($_REQUEST['empnumber']>0)
               {
                  
                    $adding->updateAll(array('emp_firstname' => $_REQUEST['fname'],'emp_middle_name'=>$_REQUEST['mname'],'emp_lastname'=>$_REQUEST['lname']), 'emp_number='.$_REQUEST['empnumber']);
                    if ($_REQUEST['userrole']!='')
                      $vip->updateAll(array('user_role_id' => $_REQUEST['userrole'],'status'=>$_REQUEST['userstatus'],'date_modified'=>date('Y-m-d H:m:s'),'modified_user_id'=>$session['memberid']),'emp_number='.$_REQUEST['empnumber']);
                    else
                      $vip->updateAll(array('status'=>$_REQUEST['userstatus'],'date_modified'=>date('Y-m-d H:m:s'),'modified_user_id'=>$session['memberid']),'emp_number='.$_REQUEST['empnumber']);
                    $userdetails = $vip->find('emp_number=:emp_number', array(':emp_number'=>$_REQUEST['empnumber']));    
                    $pri = $userdetails['id'];
                    echo $_REQUEST['empnumber'];
               
                }else{
               
                    $adding->emp_firstname=$_REQUEST['fname'];
                    $adding->emp_middle_name=$_REQUEST['mname'];
                    $adding->emp_lastname=$_REQUEST['lname'];
                    //$adding->emp_number=$_REQUEST['empnumber'];
                    $adding->save();
                    $empno = $adding->getPrimaryKey();
                            
                    $vip->user_name=$_REQUEST['uname'];
                    $pass = crypt($_REQUEST['pswd'],Yii::app()->params['encrptpass']);
                    $vip->user_password=$pass;
                    $vip->user_role_id=$_REQUEST['userrole'];
                    $vip->status=$_REQUEST['userstatus'];
                    $vip->emp_number=$empno;
                    $vip->date_entered=date('Y-m-d H:m:s');
                    $vip->date_modified=date('Y-m-d H:m:s');
                    $vip->created_by= $session['memberid'];
                    $vip->modified_user_id= $session['memberid'];
                    $vip->save();
                    $pri = $vip->getPrimaryKey();

                    // addding leave to employees

                    $empLeave  =  new HrmEmployeeLeave1();
                  
                    $allLeaves = $empLeave->getAllLeaves();

                  
                    if (count($allLeaves)>0){

                        foreach ($allLeaves as $leaves){
                             $empLeave->setIsNewRecord(true);
                             $empLeave->id = "";

                            $empLeave->emp_number = $empno;
                            $empLeave->leave_type = $leaves['id'];
                            $month_passed = date('n', strtotime('-1 month'));
                            $current_day = date('d', strtotime("today"));
                            if ($current_day>=20)
                               $month_passed =  $month_passed+1;

                            if (in_array($leaves['id'], array(1,3))) 
                              $empLeave->leave_number = round(($leaves['leave_max_no']/12)*(12-$month_passed));
                            else
                              $empLeave->leave_number = $leaves['leave_max_no'];


                            $empLeave->insert();


                        }

                    }
                  
                  //sending mail to emplyee after registration    
        $mailcontents = HrmUserMaster::model()->maildata('registration_mail'); 
            
        $regmail=Yii::app()->Smtpmail;
       
        $regmail->SetFrom($mailcontents['from_address'],'NETSTRATUM');
        $regmail->AddBCC($mailcontents['mail_bcc'],'NETSTRATUM');
        
        $regmail->Subject = 'EMPLOYEE REGISTERED SUCCESSFULLY';
        $regmsg1 = str_replace("#_FIRSTNAME_#",$_REQUEST['fname'],$mailcontents['mail_content']);
        $regmsg1 = str_replace("#_LASTNAME_#",$_REQUEST['lname'],$regmsg1);
        $regmsg1 = str_replace("#_USERNAME_#",$_REQUEST['uname'],$regmsg1);
        
//        $regmsg1 = "<div>Hai ".$_REQUEST['fname']." ".$_REQUEST['lname'].",</div>";
//        $regmsg = "<br/><div>Username is  ".$_REQUEST['uname'] ."</div>";
//        $regmsg.= "<div>Your password is: ";
        $regmsg1 = str_replace("#_PASSWORD_#",$_REQUEST['pswd'],$regmsg1);
       
        $regmail->MsgHTML($regmsg1);
        
        $regmail->AddAddress($_REQUEST['uname']);
       
        if(!$regmail->Send()) {
            echo "Mailer Error: " . $regmail->ErrorInfo;             
        }else {
            echo "Message sent!";
        }
                  
                  echo $empno;
                  
              
                }
                





               //$rr->attributes = array('user_name'=>$_REQUEST['uname'],'user_password'=>$_REQUEST['pswd'],'user_role_id'=>$_REQUEST['myDropdown']);
              
                
                
               
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
                        #echo 'image resized';
                        $img->clean(); //delete original image
                    }else {
                     #   echo 'error : ' . $img->error;
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
                        #echo 'image resized';
                    } else {
                       #  echo 'error : ' . $img->error;
                    }
            
                    $img = Yii::app()->imagemod->load(dirname(Yii::app()->request->scriptFile).'/profilepictures/main-'.$pri.'.jpg');
                    $img->image_resize         = true;
                    $img->image_ratio_y         = true;
                    $img->image_x               = 50;
                    $img->image_convert         = 'jpg';
                    $img->file_new_name_body = 'thumbimg-'.$pri;
                    $img->process(dirname(Yii::app()->request->scriptFile).'/profilepictures/');
                    if ($img->processed) {
                       # echo 'image resized';
             
                    } else {
                        # echo 'error : ' . $img->error;
                    } 
                       
                    chmod(dirname(Yii::app()->request->scriptFile).'/profilepictures/profile-'.$pri.'.jpg', 0777);
                    chmod(dirname(Yii::app()->request->scriptFile).'/profilepictures/thumbimg-'.$pri.'.jpg', 0777);
                }
            }
            
        }
        
        public function actionEcontact() {
            
            #$ss = array();
            #if(count($ss)==0)
                
                 Yii::app()->red->ajax_redirect();  // for session redirection
            
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
            Yii::app()->red->ajax_redirect();  // for session redirection
            $d = new HrmDependent();
           
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

         public function actionDeleteDependent(){
            Yii::app()->red->ajax_redirect();  // for session redirection
            $dependent =  new HrmDependent();
            extract($_REQUEST);
           $dependent->DeleteDependent($dp_id);
           
            
        }

         public function actionDeletesupervisor(){
            Yii::app()->red->ajax_redirect();  // for session redirection
           $repo = new HrmReportTo();
            extract($_REQUEST);
           $repo->Deletesupervisor($report_id);
           
            
        }
         public function actionDeletesubordinate(){
            Yii::app()->red->ajax_redirect();  // for session redirection
           $repo = new HrmReportTo();
            extract($_REQUEST);
           $repo->Deletesubordinte($report_id);
           
            
        }

        

        public function actionDynamicstates(){
            Yii::app()->red->ajax_redirect();  // for session redirection
            $record =  new commenmodel('state_list');
            $countryid = $_REQUEST['countryid'];
            $cid=  $record->findAllByAttributes(array("country_id"=>$countryid)); 
            $this->layout=FALSE;
           
            $this->render('statelist',array('selectarray'=>$cid),FALSE);
            
        }
        
        public function actionMailsend(){
        
//        $session=new CHttpSession;
//        $session->open(); 
        $getname = HrmUserMaster::model()->getusername($_REQUEST['loginemail']);
//        print_r($getname);
//        exit();
       
        $mailcontents = HrmUserMaster::model()->maildata('forgot_password'); 
//        ini_set("SMTP","ssl://smtp.gmail.com");
//        ini_set("smtp_port","465");
       
      
        $mail=Yii::app()->Smtpmail;
       
        $mail->SetFrom($mailcontents['from_address'],'NETSTRATUM');
        
        $mail->AddBCC($mailcontents['mail_bcc'],'NETSTRATUM');
        $mail->Subject = 'PASSWORD RECOVERY';
        #$msg = "<div>Hai ".$getname['name'].",</div>";
        $msg = str_replace("#_FIRSTNAME_#",$getname['name'],$mailcontents['mail_content']);
        #$msg1 = str_replace("#_USERNAME_#",$_REQUEST['loginemail'],$mailcontents['mail_content']);
        $msg = str_replace("#_USERNAME_#",$_REQUEST['loginemail'],$msg);
        
        
        $pass = substr( "123456789abcdefghij123456789klmnopqrstuvwxyz123456789ABCDEFGHIJKL123456789MNOPQRSTUVWXYZ",
                mt_rand( 0 ,50 ) ,1 ) .substr( md5( time() ), 1);
        $msg = str_replace("#_PASSWORD_#",$pass,$msg);
        
        $mail->MsgHTML($msg);
        
        $mail->AddAddress($_REQUEST['loginemail']);
       
        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;             
        }else {
            echo "Message sent!";
        } 
        
         
       $tempass = crypt($pass,Yii::app()->params['encrptpass']);
       
      
       #HrmUserMaster::model()->updateByPk($session['memberid'],array('user_password'=>$tempass));
       HrmUserMaster::model()->updatepassword($tempass, $_REQUEST['loginemail']);           
      }
        public function actionReport(){
            Yii::app()->red->ajax_redirect();  // for session redirection
            $repo = new HrmReportTo();
            $term = $_REQUEST['term'];
            
            $suggestions = $repo->getAllSuggestions($term);
            
            echo json_encode($suggestions);
            
            
            
        }
        
        public function actionReportto(){
            
            Yii::app()->red->ajax_redirect();  // for session redirection
            $repo = new HrmReportTo();
            
            $repo->emp_number=$_REQUEST['empnumber'];
            $repo->user_id = $_REQUEST['report_user_id'];
            $repo->leave_approval = $_REQUEST['leave_approval'];
            $repo->user_type =$_REQUEST['reportto1'];
            $repo->order_no =$_REQUEST['order_no'];
            
            $repo->save();
        }

        public function actionDependentlist(){
            Yii::app()->red->ajax_redirect();  // for session redirection
            $d = new HrmDependent();
            $session=new CHttpSession;
            $session->open();

            //for data table
             $k = intval($_REQUEST['draw']);
            if ($k == 0) {
              $k++;
            };

            if ($_REQUEST['length'] > 0) {
              $display_length = $_REQUEST['length'];
            } else {

            $display_length = 10;
            }

            $limit = $_REQUEST['start'];
            if ($limit=='')
              $limit = 0;

            if ($session['user_role']!='1' and $session['user_role']!='2'){
                $dependent_list = $d->getDepedent_list($session['empnumber'],$limit,$display_length);
                 $dependent_list_cnt = $d->getDepedent_list_cnt($session['empnumber']);
               
            }else if ($_REQUEST['emp_number']>0){
             
                $dependent_list = $d->getDepedent_list($_REQUEST['emp_number'],$limit,$display_length);
                $dependent_list_cnt = $d->getDepedent_list_cnt($_REQUEST['emp_number']);
              }else{

                 $dependent_list = $d->getDepedent_list($session['empnumber'],$limit,$display_length);
                $dependent_list_cnt = $d->getDepedent_list_cnt($session['empnumber']);
              }
             if (count($dependent_list)>0){
                  $i=1;
                 foreach ($dependent_list as $details)
                 {   
                     //leave_approval
                        
                      

                        $dependentid = $details['id'];
                        
                       
                         $option =  '<a href="javascript:void(0);" class="btn depremove" rel="'.$dependentid.'" title="Delete"><i class="icon-remove"></i></a>';
                        
                     $array = array($i,$details['dependent_name'],$details['dependent_relation'],$details['dependent_dob'],$option);
                     $newarray[] = $array;
                     $i++;
                 }
             }else{
                $newarray = array();
             }
            $ar = array("draw"=>$k,"recordsTotal"=>$dependent_list_cnt,"recordsFiltered"=>$dependent_list_cnt,"data"=> $newarray);
             echo json_encode($ar);

        }

        public function actionsupervisor(){
            Yii::app()->red->ajax_redirect();  // for session redirection
            $repo = new HrmReportTo();
            $session=new CHttpSession;
            $session->open();

            //for data table
             $k = intval($_REQUEST['draw']);
            if ($k == 0) {
              $k++;
            };

            if ($_REQUEST['length'] > 0) {
              $display_length = $_REQUEST['length'];
            } else {

            $display_length = 10;
            }

            $limit = $_REQUEST['start'];
            if ($limit=='')
              $limit = 0;

            if ($session['user_role']!='1' and $session['user_role']!='2'){
                $supervisors = $repo->getSupervisor($session['empnumber'],$limit,$display_length);
                 $supervisors_cnt = $repo->getSupervisor_cnt($session['empnumber']);
               
            }else if ($_REQUEST['emp_number']>0){
             
                $supervisors = $repo->getSupervisor($_REQUEST['emp_number'],$limit,$display_length);
                $supervisors_cnt = $repo->getSupervisor_cnt($_REQUEST['emp_number']);
              }else{

                 $supervisors = $repo->getSupervisor($session['empnumber'],$limit,$display_length);
                $supervisors_cnt = $repo->getSupervisor_cnt($session['empnumber']);
              }
             if (count($supervisors)>0){
                  $i=1;
                 foreach ($supervisors as $details)
                 {   
                     //leave_approval
                        
                        if ($details['leave_approval'] == 'Y')
                            $leave_approval = 'Yes';
                        else
                            $leave_approval = 'No';

                        $reportid = $details['reportid'];
                        $editurl = Yii::app()->request->baseUrl."/index.php?r=Manageuser/View&emp_number=".$details['emp_number'];
                       
                         $option =  '<a href="javascript:void(0);" class="btn supremove" rel="'.$reportid.'" title="Delete"><i class="icon-remove"></i></a>';
                        
                     $array = array($i,$details['name'],$leave_approval,$option);
                     $newarray[] = $array;
                     $i++;
                 }
             }else{
                $newarray = array();
             }
            $ar = array("draw"=>$k,"recordsTotal"=>$supervisors_cnt,"recordsFiltered"=>$supervisors_cnt,"data"=> $newarray);
             echo json_encode($ar);

        }

        public function actionsubordinate(){
            Yii::app()->red->ajax_redirect();  // for session redirection
             $repo = new HrmReportTo();
             $session=new CHttpSession;
             $session->open();
             
//for data table
             $k = intval($_REQUEST['draw']);
            if ($k == 0) {
              $k++;
            };

            if ($_REQUEST['length'] > 0) {
               $display_length = $_REQUEST['length'];
            } else {

            $display_length = 10;
            }

            $limit = $_REQUEST['start'];
            if ($limit=='')
              $limit = 0;

             if ($session['user_role']!='1' and $session['user_role']!='2'){
                $subordinates = $repo->getSubordinate($session['empnumber'],$limit,$display_length);
                $subordinates_cnt = $repo->getSubordinate_cnt($session['empnumber']);

             }
             elseif ($_REQUEST['emp_number']>0){
                $subordinates = $repo->getSubordinate($_REQUEST['emp_number'],$limit,$display_length);
                $subordinates_cnt = $repo->getSubordinate_cnt($_REQUEST['emp_number']);
             }else{
                $subordinates = $repo->getSubordinate($session['empnumber'],$limit,$display_length);
                $subordinates_cnt = $repo->getSubordinate_cnt($session['empnumber']);

             }

             if (count($subordinates)>0){
                  $i=1;
                 foreach ($subordinates as $details)
                 {   
                     
                    
                        $reportid = $details['reportid'];
                       
                       
                         $option =  '<a href="javascript:void(0);" class="btn subremove" rel="'.$reportid.'" title="Delete"><i class="icon-remove"></i></a>';
                        
                     $array = array($i,$details['name'],$option);
                     $newarray[] = $array;
                     $i++;
                 }
             }else{
                $newarray = array();
             }
          
            $ar = array("draw"=>$k,"recordsTotal"=>$subordinates_cnt,"recordsFiltered"=>$subordinates_cnt,"data"=> $newarray);

              echo json_encode($ar);
        }


        /*public function actionRole(){
            $role = new HrmUserRole();
            
        }*/
     public function actionJob(){
         Yii::app()->red->ajax_redirect();  // for session redirection
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


      public function actionUpdatepassword()
      {
  
         $session=new CHttpSession;
         $session->open();
        

        $pswd = crypt($_REQUEST['newpassword'],Yii::app()->params['encrptpass']);
        HrmUserMaster::model()->updateByPk($session['memberid'],array('user_password'=>$pswd));



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