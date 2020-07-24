<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
$this->breadcrumbs=array(
	'Notes'=>array('index'),
	'Create',
);

$this->menu=array(
    array('label'=>'List Notes', 'url'=>array('index')),
    array('label'=>'Create Notes', 'url'=>array('create')),
    array('label'=>'Update Notes', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Notes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Notes', 'url'=>array('admin')),
);



//$this->menu=array(
//	array('label'=>'List Notes', 'url'=>array('index')),
//	array('label'=>'Manage Notes', 'url'=>array('admin')),
//);
?>

<?php

$tags=Tag::model()->findTagWeights(500);

//foreach($tags as $tag=>$weight)
//{
//    $link=CHtml::link(CHtml::encode($tag), array('notes/index','tag'=>$tag));
//    echo CHtml::tag('span', array(
//            'class'=>'tag',
//            'style'=>"font-size:15pt",
////            'style'=>"font-size:{$weight}pt",
//        ), $link)."\n";
//}
?>

<!--<h1>Manage Notes</h1>-->
<!---->
<!--<p>-->
<!--    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>-->
<!--    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.-->
<!--</p>-->
<!---->
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">-->
<!--    --><?php //$this->renderPartial('_search',array(
//        'model'=>$model,
//    )); ?>
<!--</div> search-form ------>
<!---->
<?php //$this->widget('zii.widgets.grid.CGridView', array(
//    'id'=>'notes-grid',
//    'dataProvider'=>$model->search(),
//    'filter'=>$model,
//    'columns'=>array(
//        'id',
//        'name',
//        'status',
//        'create_time',
//        'update_time',
//        array(
//            'class'=>'CButtonColumn',
//        ),
//    ),
//)); ?>
<!---->

<br>
<br>
<p></p>

<?php

$tags=Tag::model()->findTagWeights(500);

foreach($tags as $tag=>$weight)
{
    
//    $link=CHtml::link(CHtml::encode($tag), array('notes/index','tag'=>$tag));
//    echo CHtml::tag('span', array(
//            'class'=>'tag',
//            'style'=>"font-size:15pt",
////            'style'=>"font-size:{$weight}pt",
//        ), $link)."\n";
}
?>






<div class="hiddenCB">
    <h3>Make your choice(s)</h3>
    <div>
        <input type="checkbox" name="choice" id="cb1" /><label for="cb1">Choice A</label>
        <input type="checkbox" name="choice" id="cb2" /><label for="cb2">Choice B</label>
        <input type="checkbox" name="choice" id="cb3" /><label for="cb3">Choice C</label>
        <input type="checkbox" name="choice" id="cb4" /><label for="cb4">Choice D</label>

    </div>
</div>











<h1>Create Notes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>


<?php if(!empty($_GET['tag'])): ?>
    <h1>Notes Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template'=>"{items} \n{pager}",
)); ?>

