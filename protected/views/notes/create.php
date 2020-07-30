<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php header("Access-Control-Allow-Origin: *"); ?>


<script>

    $(document).ready(function() {
        // alert("Checked");
        //set initial state.
        // $('#hiddenbCB div input').val(this.checked);

        $(':checkbox').change(function() {
            if(this.checked) {
                // alert("checked";)
                // var returnVal = confirm("Are you sure?");
                // $(this).prop("checked", returnVal);

                var t = this.labels[0].innerText;
                //$(this).text(); //$(this).label();
                console.log(t);
                var tags = $('#Notes_tags').val();


                if (tags == null || tags.length==0 || tags == '') {
                    var newTags = t;
                    $('#Notes_tags').val(newTags);
                }
                else {
                    var newTags = tags + ", " + t;
                    $('#Notes_tags').val(newTags);
                }

                console.log(newTags);
                //
            }
            else
            {
                // alert("unchecked");
                var t = this.labels[0].innerText;
                var tags = $('#Notes_tags').val();

                $('#Notes_tags').val(tags.replace(', '+ t, ''));


            }

            // $('#textbox1').val(this.checked);
        });
    });


    // function insert() {
    //
    //     alert("button clicked ");
    //
    //     var elementClicked;
    //
    //     $(".hiddenCB div #tag1").change(function() {
    //         if(this.checked) {
    //             //Do stuff
    //             alert("element CHECKED");
    //
    //         }
    //         else{
    //             alert("element NOT CHECKED");
    //
    //         }
    //     });
    //     //
    //     // $("#tag1").click(function(){
    //     //     elementClicked = true;
    //     // });
    //     // if( elementClicked != true ) {
    //     //     alert("element not clicked");
    //     // }else{
    //     //     alert("element clicked");
    //     // }
    //
    // }

</script>


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

<!--<button type="button" class="bigbutton" id="button1" onclick="insert()">-->
<!--    Ava, Display that as individual notes!-->
<!---->
<!--</button>-->



<?php


$tags=Tag::model()->findTagWeights(500);

foreach($tags as $tag=>$weight)
{
//    $link=CHtml::link(CHtml::encode($tag), array('notes/index','tag'=>$tag));
//    echo CHtml::tag('span', array(
//            'class'=>'tag',
//            'style'=>"font-size:15pt",
//            'style'=>"font-size:{$weight}pt",
//        ), $link)."\n";
}
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

<div class="hiddenCB">
    <h3>Mark your note </h3>
    <div>
<?php

$tags=Tag::model()->findTagWeights(500);
$counter = 0;
foreach($tags as $tag=>$weight)
{$counter++;
    echo "<input type='checkbox' name='choice' id='tag" .$counter. "' onclick=insert()/><label for='tag".$counter."'>";
echo $tag;
echo        "</label>";
//
//    echo"<input type='checkbox' name='PLJan'";
//if (isset($_POST['PLJan'])) { echo " value='checked'"; }
//echo $row->PLJan . "/> January ";

//    $link=CHtml::link(CHtml::encode($tag), array('notes/index','tag'=>$tag));
//    echo CHtml::tag('span', array(
//            'class'=>'tag',
//            'style'=>"font-size:15pt",
////            'style'=>"font-size:{$weight}pt",
//        ), $link)."\n";
}
?>

    </div>
</div>





<!---->
<!--<div class="hiddenCB">-->
<!--    <h3>Make your choice(s)</h3>-->
<!--    <div>-->
<!--        <input type="checkbox" name="choice" id="cb1" /><label for="cb1">Choice A</label>-->
<!--        <input type="checkbox" name="choice" id="cb2" /><label for="cb2">Choice B</label>-->
<!--        <input type="checkbox" name="choice" id="cb3" /><label for="cb3">Choice C</label>-->
<!--        <input type="checkbox" name="choice" id="cb4" /><label for="cb4">Choice D</label>-->
<!---->
<!--    </div>-->
<!--</div>-->











<div id ="create_notes_title" >Create Notes</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>


<?php if(!empty($_GET['tag'])): ?>
    <h1>Notes Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template'=>"{items} \n{pager}",
)); ?>


