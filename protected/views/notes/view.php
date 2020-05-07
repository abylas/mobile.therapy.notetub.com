<?php
$this->breadcrumbs=array(
	'Notes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Notes', 'url'=>array('index')),
	array('label'=>'Create Notes', 'url'=>array('create')),
	array('label'=>'Update Notes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Notes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Notes', 'url'=>array('admin')),
);
?>

<h1>View Notes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'status',
		'create_time',
		'update_time',
	),
)); ?>
