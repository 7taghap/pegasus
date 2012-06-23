<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>Create Product</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,
    'productDtl'=>$productDtl,
    
   )); ?>
<?php
$this->widget('application.extensions.fancybox.EFancyBox', array(
    'target'=>'#addItem',
    'config'=>array('modal'=>true
	),
    )
); ?>
<?php
Yii::app()->clientScript->registerScript('addItems', "
    
var productDtls = new Array();


$('#addDetailItem').click(function(){
var productDtl = new Object;
productDtl.dtlName =  $('#ProductDtl_dtl_name').val();
productDtl.sellingQty = $('#ProductDtl_selling_qty').val();
productDtl.price = $('#ProductDtl_price').val();
productDtl.sugPrice = $('#ProductDtl_sug_price').val();
productDtl.qtyOnHand =  $('#ProductDtl_qty_on_hand').val();

productDtls.push(productDtl);
var myData = new Array();
myData[0] = $('#ProductDtl_dtl_name').val();
myData[1] = $('#ProductDtl_selling_qty').val();
myData[2] = $('#ProductDtl_price').val();
myData[3] = $('#ProductDtl_sug_price').val();
myData[4]= $('#ProductDtl_qty_on_hand').val();
myData[5] = $('#ProductDtl_package_type option:selected').text();
$('#tblProductDtls').addData(myData,true);

var currentIdx = $('#tblProductDtls').getRowCount();
 for (var i = 0; i < productDtls.size; i++) {
        alert(productDtls[i]);
    }
$('#hiddenFields').appendProductDtlHiddenInputField(myData,currentIdx);

$.fancybox.close();
	
});

"); ?>