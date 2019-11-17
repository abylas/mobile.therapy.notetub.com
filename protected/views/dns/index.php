<?php
$this->breadcrumbs=array(
	'Dns',
);

$this->menu=array(
	array('label'=>'Create Dns', 'url'=>array('create')),
	array('label'=>'Manage Dns', 'url'=>array('admin')),
);
?>

<h1>Dns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
