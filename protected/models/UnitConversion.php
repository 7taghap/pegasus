<?php

/**
 * This is the model class for table "unit_conversion".
 *
 * The followings are the available columns in table 'unit_conversion':
 * @property integer $id
 * @property string $abbr
 * @property double $factor
 * @property string $name
 * @property integer $unit_type
 * @property integer $status
 * @property integer $status_id
 */
class UnitConversion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return unit_conversion the static model class
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
		return 'unit_conversion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, unit_type, status, status_id', 'numerical', 'integerOnly'=>true),
			array('factor', 'numerical'),
			array('abbr, name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, abbr, factor, name, unit_type, status, status_id', 'safe', 'on'=>'search'),
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
			'id' => 'Id',
			'abbr' => 'Abbr',
			'factor' => 'Factor',
			'name' => 'Name',
			'unit_type' => 'Unit Type',
			'status' => 'Status',
			'status_id' => 'Status',
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

		$criteria->compare('id',$this->id);

		$criteria->compare('abbr',$this->abbr,true);

		$criteria->compare('factor',$this->factor);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('unit_type',$this->unit_type);

		$criteria->compare('status',$this->status);

		$criteria->compare('status_id',$this->status_id);

		return new CActiveDataProvider('unit_conversion', array(
			'criteria'=>$criteria,
		));
	}
}