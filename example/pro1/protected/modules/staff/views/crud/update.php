<?php
/* @var $this CrudController */
/* @var $model Staff */

$this->breadcrumbs=array(
	'Staff'=>array('index'),
	$model->staff_id=>array('view','id'=>$model->staff_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Staff', 'url'=>array('index')),
	array('label'=>'Create Staff', 'url'=>array('create')),
	array('label'=>'View Staff', 'url'=>array('view', 'id'=>$model->staff_id)),
	array('label'=>'Manage Staff', 'url'=>array('admin')),
);
?>

<h1>Update Staff <?php echo $model->staff_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>