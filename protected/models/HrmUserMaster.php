<?php

/**
 * This is the model class for table "hrm_user_master".
 *
 * The followings are the available columns in table 'hrm_user_master':
 * @property integer $id
 * @property integer $user_role_id
 * @property integer $emp_number
 * @property string $user_name
 * @property string $user_password
 * @property integer $deleted
 * @property string $status
 * @property string $date_entered
 * @property string $date_modified
 * @property integer $modified_user_id
 * @property integer $created_by
 */
class HrmUserMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hrm_user_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			#array('user_role_id, emp_number, user_name, user_password, deleted, status, date_entered, date_modified, modified_user_id, created_by', 'required'),
			#array('user_role_id, emp_number, deleted, modified_user_id, created_by', 'numerical', 'integerOnly'=>true),
			array('user_name, user_password', 'length', 'max'=>200),
			#array('status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			#array('id, user_role_id, emp_number, user_name, user_password, deleted, status, date_entered, date_modified, modified_user_id, created_by', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_role_id' => 'User Role',
			'emp_number' => 'Emp Number',
			'user_name' => 'User Name',
			'user_password' => 'User Password',
			'deleted' => 'Deleted',
			'status' => 'Status',
			'date_entered' => 'Date Entered',
			'date_modified' => 'Date Modified',
			'modified_user_id' => 'Modified User',
			'created_by' => 'Created By',
                        'emp_deleted' => 'Emp Deleted',
		);
	}
        
        public function getuserdetails()
        {
            
        $rawData=Yii::app()->db->createCommand("SELECT concat(a.emp_firstname,' ',a.emp_lastname) as "
        . "Name,a.emp_number,b.user_name as Uname,b.status,c.join_date as Jdate FROM hrm_employee a "
                . "LEFT JOIN hrm_user_master b ON "
                 . "a.emp_number = b.emp_number LEFT JOIN hrm_current_job c ON a.emp_number=c.emp_number WHERE a.emp_deleted != 'Y'")->queryAll();
         
        return $rawData;
        }
        
        public function getalldetails($empnumber)
        {
            $getall = Yii::app()->db->createCommand("SELECT a.emp_firstname,a.emp_middle_name,a.emp_lastname,"
                    . "b.user_role_id,b.user_name,b.status,"
                    . "c.dependent_name,c.dependent_relation,c.dependent_dob,"
                    . "d.job_title,d.job_status,d.job_category,d.join_date,"
                    . "e.name,e.user_type,"
                    . "f.eec_name,f.eec_address,f.eec_city,f.eec_state,f.eec_pincode,f.eec_country,f.eec_relationship,"
                    . "f.eec_home_no,f.eec_mobile_no,f.eec_office_no "
                    . "FROM hrm_employee a LEFT JOIN hrm_user_master b ON a.emp_number=b.emp_number "
                    . "LEFT JOIN hrm_dependent c ON a.emp_number=c.emp_number "
                    . "LEFT JOIN hrm_current_job d ON a.emp_number=d.emp_number "
                    . "LEFT JOIN hrm_report_to e ON a.emp_number=e.emp_number "
                    . "LEFT JOIN hrm_emp_emergency_contacts f ON a.emp_number=f.emp_number WHERE a.emp_number=".$empnumber )->queryRow();
            return $getall;
        }
        
        public function deleteUser($empno)
        {
            
              Yii::app()->db->createCommand("UPDATE hrm_employee SET emp_deleted='Y' WHERE emp_number=".$empno)->query();
              
              Yii::app()->db->createCommand("UPDATE hrm_user_master SET emp_deleted='Y' WHERE emp_number=".$empno)->query();
        }

        /**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_role_id',$this->user_role_id);
		$criteria->compare('emp_number',$this->emp_number);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('deleted',$this->deleted);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('date_entered',$this->date_entered,true);
		$criteria->compare('date_modified',$this->date_modified,true);
		$criteria->compare('modified_user_id',$this->modified_user_id);
		$criteria->compare('created_by',$this->created_by);
                $criteria->compare('emp_deleted',$this->emp_deleted);
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        

        /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HrmUserMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
