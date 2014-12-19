<?php

class HolidayController extends Controller
{
        public function actionHolidayForm(){


          $this->render('holidayform',"");
        }


        public function actionShowHolidays(){

            $holidays = new holiday();
           
           $allholidays = $holidays->getAllHolidays_Calendar();
           

           if (count($allholidays)>0){

              foreach ($allholidays as $holidays)
              {

                  $array =  array('title' => $holidays['name'],"typename"=>$holidays['holiday_type'],"time"=>"00:00","start"=> $holidays['holiday_date'],"end"=> $holidays['holiday_date']);
                  $json_array[] = $array;
              }

           }
        echo json_encode($json_array);

         // echo '[{"title":"All Day Event","start":"2014-12-01"},{"id":"999","typename":"Holiday","title":"HOLIDAY","start":"2014-11-09T16:00:00-05:00","color": "#ED1317"},{"id":"999","title":"Repeating Event","start":"2014-11-16T16:00:00-05:00"},{"title":"Conference","start":"2014-11-11","end":"2014-11-13"},{"title":"Meeting","start":"2014-11-12T10:30:00-05:00","end":"2014-11-12T12:30:00-05:00"},{"title":"Lunch","start":"2014-11-12T12:00:00-05:00"},{"title":"Meeting","start":"2014-11-12T14:30:00-05:00"},{"title":"Happy Hour","start":"2014-11-12T17:30:00-05:00"},{"title":"Dinner","start":"2014-11-12T20:00:00+00:00"},{"title":"Birthday Party","start":"2014-11-13T07:00:00-05:00"},{"url":"http:\/\/google.com\/","title":"Click for Google","start":"2014-11-28"}]';

        }

        public function actionAddholiday(){
             $holidays = new holiday();
            
            $holidays->name=$_REQUEST['holidayname'];
            $holidays->holiday_date = date('Y-m-d',strtotime($_REQUEST['holidaydate']));
            $holidays->holiday_type = $_REQUEST['holidaytype'];
           
            
            $holidays->save();



        }

        public function actionInsertHoliday(){
            
            $holidays = new holiday();
            
            $repo->emp_number=$_REQUEST['empnumber'];
            $repo->user_id = $_REQUEST['report_user_id'];
            $repo->leave_approval = $_REQUEST['leave_approval'];
            $repo->user_type =$_REQUEST['reportto1'];
            $repo->order_no =$_REQUEST['order_no'];
            
            $repo->save();
        }

        public function actionDeleteHoliday()
        {

          extract($_REQUEST);
          $holidays = new holiday();
          $holidays->deleteHoliday($hol_id);



        }

       public function actionListHoliday()
       {
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

           $holidaylist = holiday::model()->getAllHolidays($limit,$display_length,$search,$column,$dir);
           $holidaylist_cnt = holiday::model()->getAllHolidays_cnt();
          

           if ($search!='')
               $holidaylist_filter_cnt = holiday::model()->getAllHolidays_search_cnt($search);
            else
               $holidaylist_filter_cnt = $holidaylist_cnt;

             if (count($holidaylist)>0){
                  $i=1;
                 foreach ($holidaylist as $details)
                 {   
                   
                        if($details['holiday_date']!= '' and $details['holiday_date']!= "0000-00-00")
                        {
                            $da = strtotime($details['holiday_date']);
                            $date = date('D, M d, Y', $da);
                        }
                        else{
                            $date = "";
                        }
                         $holid = $details['id'];
                       // $editurl = Yii::app()->request->baseUrl."/index.php?r=Manageuser/View&emp_number=".$empid;
                       
                         $option =  '
                                
                                    <a href="javascript:void(0);" class="btn holidayemove" rel="'.$holid.'" title="Delete"><i class="icon-remove"></i></a>';
                      
                      if ($details['holiday_type']=='optional')
                        $holiday_type = 'Optional Holiday';
                      else
                        $holiday_type = 'Holiday';

                     $array = array($details['name'],$date,$holiday_type,$option);
                     $newarray[] = $array;
                     $i++;
                 }
             }else{
                $newarray = array();
             }
            $ar = array("draw"=>$k,"recordsTotal"=>$holidaylist_cnt,"recordsFiltered"=>$holidaylist_filter_cnt,"data"=> $newarray);
            
            
            #$emp1 = HrmEmployee::model()->findByAttributes();
           
            
            
            echo json_encode($ar);


       }

}