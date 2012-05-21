<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imgfile'); ?>
		<?php echo $form->textField($model,'imgfile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_desc'); ?>
		<?php echo $form->textField($model,'product_desc',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_name'); ?>
		<?php echo $form->textField($model,'product_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_type'); ?>
		<?php echo $form->textField($model,'product_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shelf'); ?>
		<?php echo $form->textField($model,'shelf',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_qty_on_hand'); ?>
		<?php echo $form->textField($model,'total_qty_on_hand'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_by'); ?>
		<?php echo $form->textField($model,'update_by',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_category_id'); ?>
		<?php echo $form->textField($model,'product_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unit_type_id'); ?>
		<?php echo $form->textField($model,'unit_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_lvl'); ?>
		<?php echo $form->textField($model,'order_lvl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->