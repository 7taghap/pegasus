<?php

/**
 * This is the model class for table "status".
 *
 * The followings are the available columns in table 'status':
 * @property integer $status_id
 * @property string $category
 * @property string $created_by
 * @property string $created_date
 * @property string $last_updated_by
 * @property string $last_updated_date
 * @property string $status_name
 */
class Status extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return status the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'status';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category, created_by, last_updated_by, status_name', 'length', 'max'=>255),
			array('created_date, last_updated_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('status_id, category, created_by, created_date, last_updated_by, last_updated_date, status_name', 'safe', 'on'=>'search'),
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
			'status_id' => 'Status',
			'category' => 'Category',
			'created_by' => 'Created By',
			'created_date' => 'Created Date',
			'last_updated_by' => 'Last Updated By',
			'last_updated_date' => 'Last Updated Date',
			'status_name' => 'Status Name',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('status_id',$this->status_id);

		$criteria->compare('category',$this->category,true);

		$criteria->compare('created_by',$this->created_by,true);

		$criteria->compare('created_date',$this->created_date,true);

		$criteria->compare('last_updated_by',$this->last_updated_by,true);

		$criteria->compare('last_updated_date',$this->last_updated_date,true);

		$criteria->compare('status_name',$this->status_name,true);

		return new CActiveDataProvider('status', array(
			'criteria'=>$criteria,
		));
	}
}