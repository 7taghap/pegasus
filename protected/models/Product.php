<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $product_id
 * @property string $created_by
 * @property string $created_date
 * @property string $imgfile
 * @property string $product_desc
 * @property string $product_name
 * @property integer $product_type
 * @property string $shelf
 * @property double $total_qty_on_hand
 * @property string $update_by
 * @property string $update_date
 * @property integer $product_category_id
 * @property integer $unit_type_id
 * @property integer $order_lvl
 */
class Product extends CActiveRecord
{
   
	/**
	 * Returns the static model of the specified AR class.
	 * @return product the static model class
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
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_type, product_category_id,  unit_type_id, order_lvl', 'numerical', 'integerOnly'=>true),
			array('total_qty_on_hand', 'numerical'),
			array('created_by, imgfile, product_desc, product_name, shelf, update_by', 'length', 'max'=>255),
			array('created_date, update_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('product_id, created_by, created_date, imgfile, product_desc, product_name, product_type, shelf, total_qty_on_hand, update_by, update_date, product_category_id, unit_type, unit_type_id, order_lvl', 'safe', 'on'=>'search'),
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
                    'unit'=>array(self::BELONGS_TO,'UnitConversion','unit_type_id'),
                    'productDtls'=>array(self::HAS_MANY,'ProductDtl','product_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'product_id' => 'Product',
			'created_by' => 'Created By',
			'created_date' => 'Created Date',
			'imgfile' => 'Imgfile',
			'product_desc' => 'Product Desc',
			'product_name' => 'Product Name',
			'product_type' => 'Product Type',
			'shelf' => 'Shelf',
			'total_qty_on_hand' => 'Total Qty On Hand',
			'update_by' => 'Update By',
			'update_date' => 'Update Date',
			'product_category_id' => 'Product Category',
			
			'unit_type_id' => 'Unit Type',
			'order_lvl' => 'Order Lvl',
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

		$criteria->compare('product_id',$this->product_id);

		$criteria->compare('created_by',$this->created_by,true);

		$criteria->compare('created_date',$this->created_date,true);

		$criteria->compare('imgfile',$this->imgfile,true);

		$criteria->compare('product_desc',$this->product_desc,true);

		$criteria->compare('product_name',$this->product_name,true);

		$criteria->compare('product_type',$this->product_type);

		$criteria->compare('shelf',$this->shelf,true);

		$criteria->compare('total_qty_on_hand',$this->total_qty_on_hand);

		$criteria->compare('update_by',$this->update_by,true);

		$criteria->compare('update_date',$this->update_date,true);

		$criteria->compare('product_category_id',$this->product_category_id);

		
		$criteria->compare('unit_type_id',$this->unit_type_id);

		$criteria->compare('order_lvl',$this->order_lvl);

		return new CActiveDataProvider('product', array(
			'criteria'=>$criteria,
		));
	}
        
        
}