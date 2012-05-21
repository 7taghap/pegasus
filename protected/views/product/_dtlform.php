<h1> Product Detail </h1>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
  <table>
              <tr>
                <td><?php echo $form->labelEx($model->productDtl,'product_name'); ?></td>
                <td><?php echo $form->textField($model->productDtl,'product_name',array('size'=>30,'maxlength'=>255)); ?></td>
                <td><?php echo $form->error($model->productDtl,'product_name'); ?></td>
                
                <td><?php echo $form->labelEx($model->productDtl,'price'); ?></td>
                <td><?php echo $form->textField($model->productDtl,'price'); ?></td>
                <td><?php echo $form->error($model->productDtl,'price'); ?></td>
                    
            </tr>
</table>