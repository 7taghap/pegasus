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
Yii::app()->clientScript->registerScript('addItems', "
$.fn.ajaxSubmit=function(formId){

   var url = $('#'+formId).attr('action');
   var form = $('#'+formId);
TopUp.close(function() {
 $.ajax({
    type:'post',
    url:url,
     data: $(form).serializeArray(),
     success:function(response) {
      //  var content = $('#tblProductDtls',$(response)).html();
        var content = $('.form',$(response)).html();
        var productForm = $('#product',$(response)).html();
        alert(productForm);
       // $('#product').empty();
       // $('#product').append(productForm);
       // $('#tblProductDtls').empty();
        //$('#tblProductDtls').append(content);
        $('.form').empty();
        $('.form').append(content);
     }
    });

});
};

$.fn.deleteItem=function() {
var id = $(this).attr('href');
  $.ajax({
    type:'post',
    url:'?r=product/create',
     data:{id:id},
     success:function(response) {
      var content = $('#tblProductDtls',$(response)).html();
      $('#tblProductDtls').empty();
        $('#tblProductDtls').append(content);
    }
});
return false;
}



"); ?>