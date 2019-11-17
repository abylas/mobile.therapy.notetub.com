<?php
$this->breadcrumbs=array(
	'Dns'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dns', 'url'=>array('index')),
	array('label'=>'Create Dns', 'url'=>array('create')),
	array('label'=>'View Dns', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dns', 'url'=>array('admin')),
);
?>

<h1>Update Dns <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>