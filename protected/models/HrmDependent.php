<?php

/**
 * This is the model class for table "hrm_dependent".
 *
 * The followings are the available columns in table 'hrm_dependent':
 * @property string $dependent_name
 * @property string $dependent_relation
 * @property string $dependent_dob
 */
class HrmDependent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
         
        
    
	public function tableName()
	{
		return 'hrm_dependent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dependent_name, dependent_relation, dependent_dob', 'required'),
			array('dependent_name', 'length', 'max'=>300),
			array('dependent_relation', 'length', 'max'=>250),
                       # array('dependent_dob', 'date','format'=>Yii::app()->localtime->getLocalDateFormat('short')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('dependent_name, dependent_relation, dependent_dob', 'safe', 'on'=>'search'),
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
			'dependent_name' => 'Dependent Name',
			'dependent_relation' => 'Dependent Relation',
			'dependent_dob' => 'Dependent Dob',
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

		$criteria->compare('dependent_name',$this->dependent_name,true);
		$criteria->compare('dependent_relation',$this->dependent_relation,true);
		$criteria->compare('dependent_dob',$this->dependent_dob,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HrmDependent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
