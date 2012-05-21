<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <table>
              <tr>
                <td><?php echo $form->labelEx($model,'product_name'); ?></td>
                <td><?php echo $form->textField($model,'product_name',array('size'=>30,'maxlength'=>255)); ?></td>
                <td><?php echo $form->error($model,'product_name'); ?></td>
                
                <td><?php echo $form->labelEx($model,'product_type'); ?></td>
                <td><?php echo $form->textField($model,'product_type'); ?></td>
                <td><?php echo $form->error($model,'product_type'); ?></td>
                    
            </tr>
            <tr>
                <td><?php echo $form->labelEx($model,'product_desc'); ?></td>
                <td><?php echo $form->textField($model,'product_desc',array('size'=>30,'maxlength'=>255)); ?></td>
                <td><?php echo $form->error($model,'product_desc'); ?></td>
                
                <td><?php echo $form->labelEx($model,'product_category_id'); ?></td>
                <td><?php echo $form->dropDownList($model,'product_category_id', 
                        CHtml::listData(ProductCategory::model()->findAll(),'product_category_id','category_name')); ?></td>
		<td><?php echo $form->error($model,'product_category_id'); ?></td>
            </tr>
            <tr>
                <td><?php echo $form->labelEx($model,'order_lvl'); ?></td>
		<td><?php echo $form->textField($model,'order_lvl'); ?></td>
		<td><?php echo $form->error($model,'order_lvl'); ?></td>
                
                <td> <?php echo $form->labelEx($model,'unit_type_id'); ?></td>
		<td><?php echo $form->dropDownList($model,'unit_type_id',
                         CHtml::listData(UnitConversion::model()->findAll(),'id','name')); ?></td>
		<td><?php echo $form->error($model,'unit_type_id'); ?></td>
            
            </tr>
            <tr>
                 <td><?php echo $form->labelEx($model,'shelf'); ?></td>
                <td><?php echo $form->textField($model,'shelf',array('size'=>30,'maxlength'=>255)); ?></td>
                <td><?php echo $form->error($model,'shelf'); ?></td>
                
                <td><?php echo $form->labelEx($model,'total_qty_on_hand'); ?></td>
		<td><?php echo $form->textField($model,'total_qty_on_hand'); ?></td>
		<td><?php echo $form->error($model,'total_qty_on_hand'); ?></td>
            </tr>
            <tr>
                          
                <td><?php echo $form->labelEx($model,'imgfile'); ?></td>
		<td><?php echo $form->textField($model,'imgfile',array('size'=>10,'maxlength'=>255)); ?></td>
		<td><?php echo $form->error($model,'imgfile'); ?></td>
            </tr>
         
        </table>
        <!--product dtls -->
        <table id="tblProductDtls">
            <thead>
                <tr><th colspan="5"><input type="button" id="addItem" href="#productDtlForm" value="Add Item" style="float:right;"/></th></tr>
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Selling Qty</th>
                    <th>Suggested Price</th>
                    <th>Qty on Hand </th>
                    <th>Unit</th>
                </tr>
            </thead>
            <tbody>
                  
            </tbody>
        </table>
        <div id="hiddenFields" style="display:none;"></div>
         <input type="button" id="addItem" href="#productDtlForm" value="Add Item" style="float:right;"/>
        

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
        
     

<?php $this->endWidget(); ?>

</div><!-- form -->


   <div  style="display:none">
    <div id="productDtlForm">
        <h1> Product Detail Form </h1>
    <table>
        <tr>
            <td><?php echo $form->labelEx($productDtl,'dtl_name'); ?></td>
                <td><?php echo $form->textField($productDtl,'dtl_name',array('size'=>30,'maxlength'=>255)); ?></td>
                <td><?php echo $form->error($productDtl,'dtl_name'); ?></td>
        </tr>
          <tr>
             <td><?php echo $form->labelEx($productDtl,'selling_qty'); ?></td>
                <td><?php echo $form->textField($productDtl,'selling_qty',array('size'=>30,'maxlength'=>255)); ?></td>
                <td><?php echo $form->error($productDtl,'selling_qty'); ?></td>
        </tr>
         <tr>
             <td><?php echo $form->labelEx($productDtl,'price'); ?></td>
                <td><?php echo $form->textField($productDtl,'price',array('size'=>30,'maxlength'=>255)); ?></td>
                <td><?php echo $form->error($productDtl,'price'); ?></td>
        </tr>
         <tr>
           <td><?php echo $form->labelEx($productDtl,'sug_price'); ?></td>
                <td><?php echo $form->textField($productDtl,'sug_price',array('size'=>30,'maxlength'=>255)); ?></td>
                <td><?php echo $form->error($productDtl,'sug_price'); ?></td>
        </tr>
        <tr>
                <td> <?php echo $form->labelEx($productDtl,'package_type'); ?></td>
		<td><?php echo $form->dropDownList($productDtl,'package_type',
                         CHtml::listData(UnitConversion::model()->findAll(),'id','name')); ?></td>
		<td><?php echo $form->error($productDtl,'package_type'); ?></td>
        </tr>
        <tr>
           <td><?php echo $form->labelEx($productDtl,'qty_on_hand'); ?></td>
                <td><?php echo $form->textField($productDtl,'qty_on_hand',array('size'=>30,'maxlength'=>255)); ?></td>
                <td><?php echo $form->error($productDtl,'qty_on_hand'); ?></td>
        </tr>
    </table>
        <div> <input type="button" value="Cancel" onclick="$.fancybox.close();return false;"/>
            <input type="button" value="Add" id="addDetailItem"/> 
        </div>
    </div>
</div>