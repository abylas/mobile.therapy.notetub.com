<?php
$this->breadcrumbs=array(
	'Notes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Notes', 'url'=>array('index')),
	array('label'=>'Create Notes', 'url'=>array('create')),
	array('label'=>'View Notes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Notes', 'url'=>array('admin')),
);
?>

<h1>Update Notes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>