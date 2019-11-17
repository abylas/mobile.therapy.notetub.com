<?php
$this->breadcrumbs=array(
	'Dns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dns', 'url'=>array('index')),
	array('label'=>'Manage Dns', 'url'=>array('admin')),
);
?>

<h1>Create Dns</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>