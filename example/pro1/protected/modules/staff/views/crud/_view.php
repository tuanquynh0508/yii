<?php
/* @var $this CrudController */
/* @var $data Staff */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->staff_id), array('view', 'id'=>$data->staff_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_account')); ?>:</b>
	<?php echo CHtml::encode($data->staff_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_pwd')); ?>:</b>
	<?php echo CHtml::encode($data->staff_pwd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::encode($data->fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('del_flg')); ?>:</b>
	<?php echo CHtml::encode($data->del_flg); ?>
	<br />


</div>