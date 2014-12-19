<?php

class LeaveController extends Controller
{
	public function actionIndex()
	{
            $this->render('index');
	}
        public function actionUserleave()
        {   #$session = new CHttpSession;
            #$session->open();
            #echo "SELECT a.name,b.id FROM hrm_leave_types a INNER JOIN hrm_employee_leave b ON a.id=b.leave_type WHERE a.active='Y' a.emp_appliable='Y' AND b.active='Y' AND b.emp_number='{$session['empnumber']}'";
            #exit();
            #$lid = new HrmLeaveTypes();
            #$leave = $lid->getPrimaryKey();
            #echo "SELECT name,leave_max_no,probation_period FROM hrm_leave_types WHERE id = '{$leave}'";
            
            Yii::app()->red->redirect();  // for session redirection
            $leavearray = HrmLeave::model()->getleaveid();
            #print_r($leavearray);
            $this->render('leaveform',array('leavearray'=>$leavearray));
            #exit();            echo "SELECT name,leave_max_no,probation_period FROM hrm_leave_types WHERE id = ".$leaveid;

            
            
            #$this->render('leaveform',"",FALSE);
            
            
            
           
            #echo $lid;
        }

        function actionAdminbalance()
        {
            Yii::app()->red->ajax_redirect();  // for session redirection


        }

        function actionShowmyleavebalance()
        {

            $this->render('leave_balance',"",FALSE);
        }

        function actionEmpbalance()
        {

          Yii::app()->red->ajax_redirect();  // for session redirection
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

            $cusdata = HrmLeave::model()->leavebalance($limit,$display_length,$search,$column,$dir);
            $cusdata_cnt = HrmLeave::model()->leavebalance_cnt();

              if ($search!='')
               $usdata_filter_cnt = HrmLeave::model()->leavebalance_search_cnt($search);
            else
               $usdata_filter_cnt = $cusdata_cnt;



            if(count($cusdata)>0){
                foreach ($cusdata as $cdata){
                  $url = "index.php?r=Leave/Userleave&myleaveid=".$cdata['id'];
                    $array = array($cdata['name'],$cdata['leave_number'],$cdata['leave_balance'],'<a href="'.$url.'">View Leaves</a>');
                    $newarray[]=$array;
                }
            }else{
                $newarray = array();
             }
            $ar = array("draw"=>$k,"recordsTotal"=>$cusdata_cnt,"recordsFiltered"=>$usdata_filter_cnt,"data"=> $newarray);
            echo json_encode($ar);  

        }

        public function actionLeavetype()
        {   
             Yii::app()->red->ajax_redirect();  // for session redirection
            $leave = new HrmLeave();
            #$session = new CHttpSession;
            #$session->open();  
            #$session['leaveid']=$store->id;
            #$session['empno']=$store->emp_number;
            $ltype = $_REQUEST['leavetype'];
            if(isset($_REQUEST['leavetype']))
            {
                $getleaveno = $leave->getMybalanceLeave($_REQUEST['leavetype']);
                #$get = HrmEmployeeLeave::model()->getalldetails($_REQUEST['leave_number']);                
            }                
            echo $getleaveno['pending_days'];
            
            
           # print_r($getleaveno);
        }
        
        public function actionAssignleave()
        {  

           Yii::app()->red->ajax_redirect();  // for session redirection
           $ass = new HrmLeave();
           $fromleave = strtotime($_REQUEST['assfromleave']);
           $ass->start_date=  date('Y-m-d',$fromleave);
           $toleave = strtotime($_REQUEST['asstoleave']);
 

            //saturday,sunday,holiday checking

              $from_chk_date = date('Y-m-d',$fromleave);
              $to_chk_date = date('Y-m-d',$toleave);

              $holidays = $ass->checkSATSUNHOL($from_chk_date,$to_chk_date);


            //

         


            $diff = abs($toleave-$fromleave);
            $years = floor($diff / (365*60*60*24));
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
             $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));            
           


            if($_REQUEST['asspdays']=="")
              $days=$days+1;
            else if($_REQUEST['asspdays']!=3)
                {
               if($_REQUEST['assistartday']!=3 and $_REQUEST['assendday']!=3)
                {
                  $sdays= '.5';   
                }
                else{
                    
                    if($_REQUEST['assistartday']==3)
                        $dur = $_REQUEST['asstotime']-$_REQUEST['assfromtime'];
                    else
                        $dur = $_REQUEST['assendto']-$_REQUEST['assendfrom'];

                    if($dur<=5){
                        $sdays= '.5';
                    }
                    else{
                        $sdays = 1;
                    }
                }
                
               
                if($diff>0){
                   $days=$days+$sdays;
                }
                else{
                   $days=$sdays;
                }
                        
                    
                }else {
                
                if($_REQUEST['assistartday']!=3)
                {
               $sdays= '.5';   
                }else{
                    
                    if($_REQUEST['assistartday']==3)
                        $dur = $_REQUEST['asstotime']-$_REQUEST['assfromtime'];
                   
                    if($dur<=5){
                        $sdays='.5';
                    }
                    else{
                        $sdays = 1;
                    }
                }
                
                if($_REQUEST['assendday']!=3)
                {
                  $edays='.5';   
                }
                else{
                    
                    if($_REQUEST['assendday']==3)
                        $dur = $_REQUEST['assendto']-$_REQUEST['assendfrom'];
                   
                    if($dur<=5){
                        $edays= '.5';
                    }
                    else{
                        $edays = 1;
                    }
                }
                 if($diff>0){
                   $days=($days-1)+$sdays+$edays;
                }
                else{
                   $days=$sdays;
                }
                
                
                
            }                                              
          
            //holiday validation
           
              $days = $days-$holidays;
            
            if ($days<=0)
            {
                echo 'holiday_error';
                exit;

            }
            //



           $ass->end_date=  date('Y-m-d',$toleave);
           $ass->apply_date=date('Y:m:d H:i:s');
           $ass->leave_comments=$_REQUEST['asscomments'];
           $ass->leave_days=$days;
           $session = new CHttpSession;
           $session->open();
           $ass->createdby=$session['empnumber'];
           $ass->emp_number=$_REQUEST['emp_id'];
           $ass->emp_leave_id=$_REQUEST['assileavetype'];
           $ass->approval = 'approve';

           
           $ass->save();
           $leave = $ass->id;

            $reqtime = new HrmLeaveTime();
            $reqtime->hrm_leave_id=$leave;
            $reqtime->start_day_time=$_REQUEST['assfromtime'];
            $reqtime->start_day_time=$_REQUEST['assendfrom'];
            $reqtime->end_day_time=$_REQUEST['asstotime'];
            $reqtime->end_day_time=$_REQUEST['assendto'];
            $reqtime->save();
            
            $supervisor = new HrmLeaveApproval();
            $super = HrmLeave::model()->getapproval($_REQUEST['emp_id']);
           #print_r($super);
            
           // $leave = $reqtime->id;
            
            if (count($super)>0){
                foreach ($super as $sup){
                      $supervisor->hrm_leave_id=$leave;
                      $supervisor->supervisor_id=$sup['user_id'];
                      $supervisor->approval='approve';
                      $supervisor->approval_date=date('Y-m-d H:m:s');
                      $supervisor->save();
                }
            }         


        }
        public function actionReqleave()
        {   
             Yii::app()->red->ajax_redirect();  // for session redirection
            $fromdate = $_REQUEST['fromleave'];
            $todate = $_REQUEST['toleave'];
            $diff = abs(strtotime($todate)-  strtotime($fromdate));
            $years = floor($diff / (365*60*60*24));
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));            
            $req = new HrmLeave();
            //saturday,sunday,holiday checking

              $from_chk_date = date('Y-m-d',strtotime($fromdate));
              $to_chk_date = date('Y-m-d',strtotime($todate));

              $holidays = $req->checkSATSUNHOL($from_chk_date,$to_chk_date);


            //

              

            if($_REQUEST['pdays']=="")
              $days=$days+1;
            else if($_REQUEST['pdays']!=3)
                {
               if($_REQUEST['startday']!=3 && $_REQUEST['endday']!=3)
                {
               $sdays=.5;   
                }
                else{
                    
                    if($_REQUEST['startday']==3)
                        $dur = $_REQUEST['totime']-$_REQUEST['fromtime'];
                    else
                        $dur = $_REQUEST['endto']-$_REQUEST['endfrom'];
                    if($dur<=5){
                        $sdays=.5;
                    }
                    else{
                        $sdays = 1;
                    }
                }
                
               
                if($diff>0){
                   $days=$days+$sdays;
                }
                else{
                   $days=$sdays;
                }
                        
                    
                }
            else {
                
                if($_REQUEST['startday']!=3)
                {
               $sdays=.5;   
                }
                else{
                    
                    if($_REQUEST['startday']==3)
                        $dur = $_REQUEST['totime']-$_REQUEST['fromtime'];
                   
                    if($dur<=5){
                        $sdays=.5;
                    }
                    else{
                        $sdays = 1;
                    }
                }
                
                if($_REQUEST['endday']!=3)
                {
               $edays=.5;   
                }
                else{
                    
                    if($_REQUEST['endday']==3)
                        $dur = $_REQUEST['endto']-$_REQUEST['endfrom'];
                   
                    if($dur<=5){
                        $edays=.5;
                    }
                    else{
                        $edays = 1;
                    }
                }
                 if($diff>0){
                   $days=($days-1)+$sdays+$edays;
                }
                else{
                   $days=$sdays;
                }
                


                
                
            }                                              
            
           //holiday validation
             $days =  $days-$holidays;
             if ($days>$_REQUEST['leave_balance'])
              {
                echo 'balance_error';
                exit;

            }
            
            if ($days<=0)
            {
                echo 'holiday_error';
                exit;

            }
            //

            $start = strtotime($_REQUEST['fromleave']);
            $req->start_date=  date('Y-m-d',$start);
            $end = strtotime($_REQUEST['toleave']);
            $req->end_date= date('Y-m-d',$end);            
            $req->start_type=$_REQUEST['startday'];
            $req->end_type=$_REQUEST['endday'];
            $req->apply_date=date('Y:m:d H:i:s');
            $req->leave_comments=$_REQUEST['comments'];
            $req->leave_days=$days;
            $session = new CHttpSession;
            $session->open();
            $req->emp_number=$session['empnumber'];
            $req->createdby=$session['empnumber'];
            $req->emp_leave_id=$_REQUEST['leavetype'];
            #$req->emp_leave_id=$_REQUEST['leaveid'];
            $req->save();
            $leave = $req->id;
            $reqtime = new HrmLeaveTime();
            $reqtime->hrm_leave_id=$leave;
            $reqtime->start_day_time=$_REQUEST['fromtime'];
            $reqtime->start_day_time=$_REQUEST['endfrom'];
            $reqtime->end_day_time=$_REQUEST['totime'];
            $reqtime->end_day_time=$_REQUEST['endto'];
            $reqtime->save();
            
            $supervisor = new HrmLeaveApproval();
            $super = HrmLeave::model()->getapproval();
           #print_r($super);
            
            //$leave = $reqtime->id;
            
            if (count($super)>0){
                foreach ($super as $sup){
                      $supervisor->hrm_leave_id=$leave;
                      $supervisor->supervisor_id=$sup['user_id'];
                      $supervisor->approval_date=date('Y-m-d');
                      $supervisor->save();
                }
            }                                                      
            
        }
        
        public function actionEmployeelist()
        {   
             Yii::app()->red->ajax_redirect();  // for session redirection
           $emp = new HrmLeave();
           $term = $_REQUEST['term'];
           $suggest = $emp->getAllSuggestions($term);
           
           echo json_encode($suggest);
        }
        
        public function actionAssLeavetype()
        {

             //Yii::app()->red->ajax_redirect();  // for session redirection
           $leave = new HrmLeave();

            if(isset ($_REQUEST['assiempleave']))
            {
            
                $emp_leaves = $leave->getEmpLeaves($_REQUEST['assiempleave']);
                if (count($emp_leaves)>0){
                     $option_values .="<select id='assileavetype' name='assileavetype'>";
                    foreach ($emp_leaves as $leaves){
                       $option_values .="<option value='{$leaves['id']}'>{$leaves['name']}</option>";
                    }
                    $option_values .="</select>";
                }

                $this->layout=FALSE;
            }
            echo  $option_values;    
            
            #$this->render('assileavetype',array('selectarray'=>$leid),FALSE);
            
        }

        public function actionAssignleavetype()
        {   
             Yii::app()->red->ajax_redirect();  // for session redirection
            $assleave = new HrmEmployeeLeave();
                       
            #$ltype = $_REQUEST['leavetype'];
            if(isset($_REQUEST['assleavetype']))
            {
                $getleaveno = $assleave->find("leave_type=".$_REQUEST['assleavetype']);                
            }    
            
            echo $getleaveno->leave_number;
            
           # print_r($getleaveno);
        }
        
        public function actionEditleave()
        {   
             Yii::app()->red->ajax_redirect();  // for session redirection                        
            $getleaves = HrmLeaveTypes::model()->editleave($_REQUEST['leaveid']);
            echo json_encode($getleaves);                           
        }
        
        public function actionUpdateleave()
        {     
             Yii::app()->red->ajax_redirect();  // for session redirection                      
            $update = new HrmLeaveTypes();
            $update->updateAll(array('name' => $_REQUEST['lname'],'leave_max_no'=>$_REQUEST['lmaxno'],
                'probation_period'=>$_REQUEST['lprob']),'id='.$_REQUEST['leaveid']);                                              
        }
        
        public function actionCustomviewleaves()
        {   
             Yii::app()->red->ajax_redirect();  // for session redirection
           
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

            $cusdata = HrmLeaveTypes::model()->customleaves($limit,$display_length,$search,$column,$dir);
            $cusdata_cnt = HrmLeaveTypes::model()->customleaves_cnt();

              if ($search!='')
               $usdata_filter_cnt = HrmLeaveTypes::model()->customleaves_search_cnt($search);
            else
               $usdata_filter_cnt = $cusdata_cnt;



            if(count($cusdata)>0){
                foreach ($cusdata as $cdata){
                    $array = array($cdata['name'],$cdata['leave_max_no'],'<button type="button" class="btn btn-success assign" rel="'.$cdata['name'].'" id="'.$cdata['id'].'~'.$cdata['leave_max_no'].'"  >ASSIGN</button>');
                    $newarray[]=$array;
                }
            }else{
                $newarray = array();
             }
            $ar = array("draw"=>$k,"recordsTotal"=>$cusdata_cnt,"recordsFiltered"=>$usdata_filter_cnt,"data"=> $newarray);
            echo json_encode($ar);            
        }

        public function actionCustomUpdateleave(){

            extract($_REQUEST);
            $leave = new HrmLeaveTypes(); 
            
           
            $leave->saveCustomLeave($employid,$customleaveid,$custom_leave_no);


        }

        public function actionViewleaves()
        {   
             Yii::app()->red->ajax_redirect();  // for session redirection
            
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

            $leavedata = HrmLeaveTypes::model()->getleavedetails($limit,$display_length,$search,$column,$dir);
            $leavedata_cnt = HrmLeaveTypes::model()->getleavedetails_cnt();
            
             if ($search!='')
               $leavedata_filter_cnt = HrmLeaveTypes::model()->getleavedetails_search_cnt($search);
            else
               $leavedata_filter_cnt = $leavedata_cnt;

            if(count($leavedata)>0){
                
                foreach ($leavedata as $ldata)
                { 
                  $leaveid = $ldata['id'];


                  $option  = '<a href="javascript:void(0);" class=" editleave" rel="'.$leaveid.'" title="EDIT LEAVE"><i class="icon-edit"></i></a>';
                  if ($ldata['custom_leave_type'] == 'Y'){
                    $option .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class=" customleave_remove" rel="'.$leaveid.'" title="Delete"><i class="icon-remove"></i></a>';
                    $leave_type = 'Custom Leave';
                  }else{

                    $leave_type = 'System Leave';

                  }
                  
                  $array = array($ldata['name'],$ldata['leave_max_no'],$ldata['probation_period'],$leave_type,$option);  
                  $newarray[]=$array;
                }
            }else{
                $newarray = array();
             }
            
             $ar = array("draw"=>$k,"recordsTotal"=>$leavedata_cnt,"recordsFiltered"=>$leavedata_filter_cnt,"data"=> $newarray);
            echo json_encode($ar);
        }


         public function actionMyreport()
        {   
             Yii::app()->red->ajax_redirect();  // for session redirection
            
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
            $myleaveid = $_REQUEST['myleaveid'];

             if ($_REQUEST['from']!='')
              $from = date('Y-m-d',strtotime($_REQUEST['from']));
            if ($_REQUEST['to']!='')
              $to = date('Y-m-d',strtotime($_REQUEST['to']));
             $leave_status = $_REQUEST['leave_status'];

            $leavedata = HrmLeave::model()->getMyleaveReport($limit,$display_length,$search,$myleaveid,$from,$to,$leave_status,$column,$dir);
            $leavedata_cnt = HrmLeave::model()->getMyleaveReport_cnt();
            $leavedata_search_cnt = HrmLeave::model()->getMyleaveReport_search_cnt($search,$myleaveid,$from,$to,$leave_status);

            
            if(count($leavedata)>0){
                
                foreach ($leavedata as $ldata)
                { 
                  $leaveid = $ldata['id'];
                  
                  if ($ldata['approval'] == 'pending')
                   $option = '<select class="cancel" id="'.$ldata["leave_id"].'"><option>Select---</option><option value="cancel">Cancel</option></select>';
                  elseif ($ldata['approval'] == 'reject') 
                    $option = "Rejected";
                  elseif ($ldata['approval'] == 'approve') {
                    
                    if ($ldata['end_date']>date('Y-m-d'))
                      $option = "Expired";
                    else
                      $option = "Scheduled";

                  }elseif ($ldata['approval'] == 'cancel') 
                    $option = "Cancelled";


                  $array = array($ldata['name'],date('F j, Y',strtotime($ldata['start_date'])),date('F j, Y',strtotime($ldata['end_date'])),$ldata['leave_comments'],$option);  
                  $newarray[]=$array;
                }
            }else{
                $newarray = array();
             }
            $ar = array("draw"=>$k,"recordsTotal"=>$leavedata_cnt,"recordsFiltered"=>$leavedata_cnt,"data"=> $newarray);
            
            echo json_encode($ar);
        }

        public function actionDeleteleave()
        {
          extract($_REQUEST);
          Yii::app()->red->ajax_redirect();  // for session redirection
          $leaveobj = new HrmLeaveTypes();
          $leaveobj->DeleteLeaveType($leaveid);

        }

         public function actionAllreport()
        {   
             Yii::app()->red->ajax_redirect();  // for session redirection
           
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
            if ($_REQUEST['from']!='')
              $from = date('Y-m-d',strtotime($_REQUEST['from']));
            if ($_REQUEST['to']!='')
              $to = date('Y-m-d',strtotime($_REQUEST['to']));
            $leave_status = $_REQUEST['leave_status'];

             $leavedata = HrmLeave::model()->getAllLeaveReport($limit,$display_length,$search,$from,$to,$leave_status,$column,$dir);
             $leavedata_cnt = HrmLeave::model()->getAllLeaveReport_cnt();

              if ($search!='' or $from!='' or $to!='' or $leave_status!='')
                $leavedata_filter_cnt = HrmLeave::model()->getAllLeaveReport_search_cnt($search,$from,$to,$leave_status);
              else
                $leavedata_filter_cnt = $leavedata_cnt;
           

            if(count($leavedata)>0){
                
                foreach ($leavedata as $ldata)
                { 

                  if ($ldata['approval'] == 'pending' and $ldata['myapproval'] != 'approve')
                   $option =  '<select class="approve" id="'.$ldata["leave_id"].'"><option>Select---</option><option value="approve">Approve</option><option value="reject">Reject</option></select>';
                  elseif ($ldata['approval'] == 'pending')
                    $option = "Pending Approval from other supervisor(s)";
                  elseif ($ldata['approval'] == 'reject') 
                    $option = "Rejected";
                  elseif ($ldata['approval'] == 'approve') {
                
                    if (strtotime($ldata['end_date'])<strtotime(date('Y-m-d')))
                      $option = "Expired";
                    else
                      $option = "Scheduled";

                  }elseif ($ldata['approval'] == 'cancel') 
                    $option = "Cancelled";
                  $leaveid = $ldata['id'];
                 
                  $array = array($ldata['emp_name'],$ldata['name'],date('F j, Y',strtotime($ldata['start_date'])),date('F j, Y',strtotime($ldata['end_date'])),$ldata['leave_comments'],$ldata['leave_days'],$option,'');  
                  $newarray[]=$array;
                }
            }else{
                $newarray = array();
             }
            
             $ar = array("draw"=>$k,"recordsTotal"=>$leavedata_cnt,"recordsFiltered"=>$leavedata_filter_cnt,"data"=> $newarray);
             echo json_encode($ar);
        }

        public function actionAddleaves()
        {   
            Yii::app()->red->ajax_redirect();  // for session redirection
            $add = new HrmLeaveTypes();
            $add->name=$_REQUEST['leavename'];
            $add->leave_max_no=$_REQUEST['leavemax'];
            $add->probation_period=$_REQUEST['leaveprobation'];
            $add->custom_leave_type='Y';
            $add->save();            
        }

        public function actionApprove()
        {
           
           extract($_REQUEST);
           HrmLeave::model()->ApproveLeave($leaveid,$approve_type);

          

        }

         public function actionCancel()
        { 
          
           extract($_REQUEST);
           HrmLeave::model()->CancelLeave($leaveid);
          
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