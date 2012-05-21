<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->product_id,
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->product_id)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->product_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->product_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'product_id',
		'created_by',
		'created_date',
		'imgfile',
		'product_desc',
		'product_name',
		'product_type',
		'shelf',
		'total_qty_on_hand',
		'update_by',
		'update_date',
		'product_category_id',
		'unit_type_id',
		'order_lvl',
	),
)); ?>
