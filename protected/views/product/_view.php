<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->product_id), array('view', 'id'=>$data->product_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imgfile')); ?>:</b>
	<?php echo CHtml::encode($data->imgfile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_desc')); ?>:</b>
	<?php echo CHtml::encode($data->product_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_name')); ?>:</b>
	<?php echo CHtml::encode($data->product_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_type')); ?>:</b>
	<?php echo CHtml::encode($data->product_type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('shelf')); ?>:</b>
	<?php echo CHtml::encode($data->shelf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_qty_on_hand')); ?>:</b>
	<?php echo CHtml::encode($data->total_qty_on_hand); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_by')); ?>:</b>
	<?php echo CHtml::encode($data->update_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->unit_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_lvl')); ?>:</b>
	<?php echo CHtml::encode($data->order_lvl); ?>
	<br />

	*/ ?>

</div>