<?php

/**
 * This is the model class for table "product_dtl".
 *
 * The followings are the available columns in table 'product_dtl':
 * @property integer $product_dtl_id
 * @property string $created_by
 * @property string $created_date
 * @property string $last_updated_by
 * @property string $last_updated_date
 * @property double $price
 * @property integer $price_type
 * @property double $qty_on_hand
 * @property double $selling_qty
 * @property integer $status
 * @property double $sug_price
 * @property integer $product_id
 * @property integer $package_type
 * @property string $dtl_name
 * @property integer $status_id
 */
class ProductDtl extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return product_dtl the static model class
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
		return 'product_dtl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('price_type, status, product_id, package_type, status_id', 'numerical', 'integerOnly'=>true),
			array('price, qty_on_hand, selling_qty, sug_price', 'numerical'),
			array('created_by, last_updated_by, dtl_name', 'length', 'max'=>255),
			array('price_type,status, product_id,package_type,price,qty_on_hand,selling_qty,sug_price,dtl_name,last_updated_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('product_dtl_id, created_by, created_date, last_updated_by, last_updated_date, price, price_type, qty_on_hand, selling_qty, status, sug_price, product_id, package_type, dtl_name, status_id', 'safe', 'on'=>'search'),
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
                    'product' => array(self::BELONGS_TO, 'Product', 'product_id'),
                    'unit'=>array(self::BELONGS_TO,'UnitConversion', 'package_type')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'product_dtl_id' => 'Product Dtl',
			'created_by' => 'Created By',
			'created_date' => 'Created Date',
			'last_updated_by' => 'Last Updated By',
			'last_updated_date' => 'Last Updated Date',
			'price' => 'Price',
			'price_type' => 'Price Type',
			'qty_on_hand' => 'Qty On Hand',
			'selling_qty' => 'Selling Qty',
			'status' => 'Status',
			'sug_price' => 'Sug Price',
			'product_id' => 'Product',
			'package_type' => 'Package Type',
			'dtl_name' => 'Dtl Name',
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

		$criteria->compare('product_dtl_id',$this->product_dtl_id);

		$criteria->compare('created_by',$this->created_by,true);

		$criteria->compare('created_date',$this->created_date,true);

		$criteria->compare('last_updated_by',$this->last_updated_by,true);

		$criteria->compare('last_updated_date',$this->last_updated_date,true);

		$criteria->compare('price',$this->price);

		$criteria->compare('price_type',$this->price_type);

		$criteria->compare('qty_on_hand',$this->qty_on_hand);

		$criteria->compare('selling_qty',$this->selling_qty);

		$criteria->compare('status',$this->status);

		$criteria->compare('sug_price',$this->sug_price);

		$criteria->compare('product_id',$this->product_id);

		$criteria->compare('package_type',$this->package_type);

		$criteria->compare('dtl_name',$this->dtl_name,true);

		$criteria->compare('status_id',$this->status_id);

		return new CActiveDataProvider('ProductDtl', array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchEmpty()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->condition="product_id = 0";

		return new CActiveDataProvider('ProductDtl', array(
			'criteria'=>$criteria,
		));
	}
}