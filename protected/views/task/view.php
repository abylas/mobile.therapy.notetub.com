<?php
$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Task', 'url'=>array('index')),
	array('label'=>'Create Task', 'url'=>array('create')),
	array('label'=>'Update Task', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Task', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Task', 'url'=>array('admin')),
);
?>

<h1>View Task #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'details',
		'priority',
		'assignee',
		'project',
		'estimated_duration',
		'final_duration',
		'start_date',
		'due_date',
		'logged_time',
		'project_id',
	),
)); ?>
