<?php

/**
 * This is the model class for table "hrm_report_to".
 *
 * The followings are the available columns in table 'hrm_report_to':
 * @property integer $id
 * @property integer $emp_number
 * @property string $name
 * @property string $user_type
 */
class HrmReportTo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hrm_report_to';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
<<<<<<< HEAD
			array('emp_number, user_id, user_type', 'required'),
			array('emp_number', 'numerical', 'integerOnly'=>true),
			array('user_id', 'length', 'max'=>11),
			array('user_type', 'length', 'max'=>11),
			array('order_no', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, emp_number, user_id, user_type', 'safe', 'on'=>'search'),
=======
			array('emp_number, name, user_type', 'required'),
			array('emp_number', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>300),
			array('user_type', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, emp_number, name, user_type', 'safe', 'on'=>'search'),
>>>>>>> 42f330eb744fe1d25bac6a230657af11bb26c84f
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
			'emp_number' => 'Emp Number',
<<<<<<< HEAD
			'user_id' => 'user_id',
			'user_type' => 'User Type',
			'order_no' => 'Order No'
=======
			'name' => 'Name',
			'user_type' => 'User Type',
>>>>>>> 42f330eb744fe1d25bac6a230657af11bb26c84f
		);
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
		$criteria->compare('emp_number',$this->emp_number);
<<<<<<< HEAD
		$criteria->compare('user_id',$this->user_id,true);
=======
		$criteria->compare('name',$this->name,true);
>>>>>>> 42f330eb744fe1d25bac6a230657af11bb26c84f
		$criteria->compare('user_type',$this->user_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

<<<<<<< HEAD

	public function getSupervisor($empnumber)
        {

            $getall = Yii::app()->db->createCommand("SELECT concat(a.emp_firstname,' ',a.emp_middle_name,' ',a.emp_lastname) as name,"
                    . "b.id as userid,b.user_role_id,c.leave_approval,c.order_no "
                    . "FROM hrm_employee a INNER JOIN hrm_user_master b ON a.emp_number=b.emp_number "
                    . "INNER JOIN hrm_report_to c ON a.emp_number=c.user_id "
                    . "WHERE c.user_type = 'supervisor' and a.emp_number=".$empnumber )->queryAll();
            return $getall;
        }


      public function getSubordinate($empnumber)
        {
            $getall = Yii::app()->db->createCommand("SELECT concat(a.emp_firstname,' ',a.emp_middle_name,' ',a.emp_lastname) as name,"
                    . "b.id as userid,b.user_role_id "
                    . "FROM hrm_employee a INNER JOIN hrm_user_master b ON a.emp_number=b.emp_number "
                    . "INNER JOIN hrm_report_to c ON a.emp_number=c.user_id "
                    . "WHERE c.user_type = 'subordinate' and a.emp_number=".$empnumber )->queryAll();
            return $getall;
        }


       public function getAllSuggestions($term)
       {
       		$getall = Yii::app()->db->createCommand("SELECT concat(emp_firstname,' ',emp_middle_name,' ',emp_lastname) as label, emp_number as id from hrm_employee "
                  
                    . "WHERE status = 'Y' and emp_deleted = 'N' and concat(emp_firstname,' ',emp_middle_name,' ',emp_lastname) like '%{$term}%'")->queryAll();
            return $getall;


       }

=======
>>>>>>> 42f330eb744fe1d25bac6a230657af11bb26c84f
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HrmReportTo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
