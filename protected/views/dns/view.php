<?php
$this->breadcrumbs=array(
	'Dns'=>array('index'),
	$model->id,
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
<?php
if(isset($model->environment)) {
    echo "; " . $model->environment;
    echo "<br>";
    echo "<br>";
}
if(isset($model->arecord)) {
    echo nl2br($model->arecord);
    echo "<br>";
    echo "<br>";
}
if(isset($model->cname))
{
echo nl2br($model->cname);
    echo "<br>";
    echo "<br>";
}
if(isset($model->microservice))
{
    echo nl2br($model->microservice);
    echo "<br>";
    echo "<br>";
}






?>


<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data'=>$model,
//	'attributes'=>array(
//		'id',
//		'environment',
//		'arecord',
//		'cname',
//		'microservice',
//		'create_time',
//		'update_time',
//	),
//)); ?>
