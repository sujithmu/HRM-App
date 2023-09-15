<?php

/**
 * This is the model class for table "hrm_resource_assign".
 *
 * The followings are the available columns in table 'hrm_resource_assign':
 * @property integer $id
 * @property string $product_slno
 * @property integer $emp_number
 * @property string $status
 */
class HrmResourceAssign extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hrm_resource_assign';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('product_slno, emp_number', 'required'),
			//array('emp_number', 'numerical', 'integerOnly'=>true),
			array('product_slno', 'length', 'max'=>20),
			array('status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_slno, emp_number, status', 'safe', 'on'=>'search'),
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
			'product_slno' => 'Product Slno',
			'emp_number' => 'Emp Number',
			'status' => 'Status',
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
		$criteria->compare('product_slno',$this->product_slno,true);
		$criteria->compare('emp_number',$this->emp_number);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function search_hard_emp($term)
        {
            $employee = Yii::app()->db->createCommand("SELECT concat(emp_firstname,' ',emp_lastname) as label,emp_number,employee_id FROM hrm_employee WHERE emp_firstname LIKE '%{$term}%'")->queryAll();
            return $employee;
        }
        public function search_soft_emp($term)
        {
            $employee = Yii::app()->db->createCommand("SELECT concat(emp_firstname,' ',emp_lastname) as label,emp_number,employee_id FROM hrm_employee WHERE emp_firstname LIKE '%{$term}%'")->queryAll();
            return $employee;
        }

        public function get_assign_details($empno,$type)
        {

            $getdata = Yii::app()->db->createCommand("SELECT COUNT(product_slno) as cnt FROM hrm_resource_assign WHERE emp_number=$empno and product_slno like '$type%' ")->queryRow();
            return $getdata;
        }
        

        public function delete_resource_details($resource_id,$type)
        {   $date = date('Y-m-d H:i:s');
			$getdata = Yii::app()->db->createCommand(" UPDATE hrm_resource_assign set status = 'N', return_date='$date' WHERE resource_id=$resource_id and resource_type = '$type' and status = 'Y' ")->query();
        	
        }


        public function getallhistory($resource_id,$type)
        {
            //echo "SELECT concat(b.emp_firstname,' ',b.emp_lastname) as name,a.assign_date,a.return_date FROM hrm_resource_assign a LEFT JOIN hrm_employee b on a.emp_number=b.emp_number WHERE a.resource_id=$resource_id AND a.resource_type='$type'";
            //exit();
            $resourcehistory = Yii::app()->db->createCommand("SELECT concat(b.emp_firstname,' ',b.emp_lastname) as name,a.assign_date,a.return_date,a.status FROM hrm_resource_assign a LEFT JOIN hrm_employee b on a.emp_number=b.emp_number WHERE a.resource_id=$resource_id AND a.resource_type='$type' order by a.assign_date desc")->queryAll();
            return $resourcehistory;
            

        }
        
        public function getsoftwarehistory($resource_id,$type)
        {
            $resourcehistory = Yii::app()->db->createCommand("SELECT concat(b.emp_firstname,' ',b.emp_lastname) as name,a.assign_date,a.return_date,a.status FROM hrm_resource_assign a LEFT JOIN hrm_employee b on a.emp_number=b.emp_number WHERE a.resource_id=$resource_id AND a.resource_type='$type' order by a.assign_date desc")->queryAll();
            return $resourcehistory;
        }

        


        /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HrmResourceAssign the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
