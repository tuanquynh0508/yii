<?php
/* @var $this CrudController */
/* @var $model Manufacturer */

$this->breadcrumbs=array(
	'Manufacturers'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Manufacturer', 'url'=>array('index')),
	array('label'=>'Create Manufacturer', 'url'=>array('create')),
	array('label'=>'Update Manufacturer', 'url'=>array('update', 'id'=>$model->manufacturer_id)),
	array('label'=>'Delete Manufacturer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->manufacturer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Manufacturer', 'url'=>array('admin')),
);
?>

<h1>View Manufacturer #<?php echo $model->manufacturer_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'manufacturer_id',
		'title',
		'created_at',
		'updated_at',
		'del_flg',
	),
)); ?>
