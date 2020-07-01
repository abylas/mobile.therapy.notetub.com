<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php if(!empty($_GET['tag'])): ?>
    <h1>Notes Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template'=>"{items} \n{pager}",
)); ?>



<?php
//$this->breadcrumbs=array(
//	'Notes',
//);
//
//$this->menu=array(
//	array('label'=>'Create Notes', 'url'=>array('create')),
//	array('label'=>'Manage Notes', 'url'=>array('admin')),
//);
//?>
<!---->
<!--<h1>Notes</h1>-->
<!---->
<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); ?>
