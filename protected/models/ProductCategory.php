<?php

/**
 * This is the model class for table "product_category".
 *
 * The followings are the available columns in table 'product_category':
 * @property integer $product_category_id
 * @property string $category_name
 * @property integer $category_type
 * @property string $description
 * @property string $effective_end_date
 * @property string $effective_start_date
 * @property integer $parent_category
 */
class ProductCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return product_category the static model class
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
		return 'product_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_type, parent_category', 'numerical', 'integerOnly'=>true),
			array('category_name, description', 'length', 'max'=>255),
			array('effective_end_date, effective_start_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('product_category_id, category_name, category_type, description, effective_end_date, effective_start_date, parent_category', 'safe', 'on'=>'search'),
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
			'product_category_id' => 'Product Category',
			'category_name' => 'Category Name',
			'category_type' => 'Category Type',
			'description' => 'Description',
			'effective_end_date' => 'Effective End Date',
			'effective_start_date' => 'Effective Start Date',
			'parent_category' => 'Parent Category',
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

		$criteria->compare('product_category_id',$this->product_category_id);

		$criteria->compare('category_name',$this->category_name,true);

		$criteria->compare('category_type',$this->category_type);

		$criteria->compare('description',$this->description,true);

		$criteria->compare('effective_end_date',$this->effective_end_date,true);

		$criteria->compare('effective_start_date',$this->effective_start_date,true);

		$criteria->compare('parent_category',$this->parent_category);

		return new CActiveDataProvider('product_category', array(
			'criteria'=>$criteria,
		));
	}
}