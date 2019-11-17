<?php
$this->breadcrumbs=array(
	'Dns'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Dns', 'url'=>array('index')),
	array('label'=>'Create Dns', 'url'=>array('create')),
	array('label'=>'Update Dns', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dns', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dns', 'url'=>array('admin')),
);
?>

<h1>View Dns #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'tags',
		'status',
		'create_time',
		'update_time',
		'author_id',
	),
)); ?>
