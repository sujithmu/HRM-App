<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class holiday extends CActiveRecord
{
	public $name;
	public $holiday_date;
	public $holiday_type;
	public $active;

	public function tableName()
	{
		return 'hrm_holidays';
	}

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// name and holiday_date are required
			array('name, holiday_date', 'required'),
			// rememberMe needs to be a boolean
			array('active', 'boolean'),
			
			
		);
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getAllHolidays($limit,$display_length,$search,$column,$dir)
       {
       		
       		 $columns = array(0=>"name",1=>"holiday_date",2=>"holiday_type");
         
         if ($columns !='')
         	$orderby = "order by ".$columns[$column]." ".$dir;

       		if ($search!='')
       			$append = " and (name like '%$search%' or holiday_type like '%$search%')";
       		else
       			$append = '';

       		$getall = Yii::app()->db->createCommand("SELECT id,name,holiday_date,holiday_type from hrm_holidays where active = 'Y' $append $orderby limit $limit,$display_length ")->queryAll();
            return $getall;


       }

         public function getAllHolidays_Calendar()
      {
      	$getall = Yii::app()->db->createCommand("SELECT id,name,holiday_date,holiday_type from hrm_holidays where active = 'Y' ")->queryAll();
            return $getall;
      	
      }

       public function getAllHolidays_cnt()
      {
      	$getall = Yii::app()->db->createCommand("SELECT id from hrm_holidays where active = 'Y' ")->queryAll();
            return count($getall);
      	
      }

      public function getAllHolidays_search_cnt($search)
      {
      	$getall = Yii::app()->db->createCommand("SELECT id from hrm_holidays where active = 'Y'
      		and (name like '%$search%' or holiday_type like '%$search%')")->queryAll();
            return count($getall);
      	
      }

      
 	
 	public function deleteHoliday($id)
      {
      	$getall = Yii::app()->db->createCommand("DELETE from hrm_holidays WHERE id = ".$id)->query();
            return count($getall);
      	
      }
       

	
}
