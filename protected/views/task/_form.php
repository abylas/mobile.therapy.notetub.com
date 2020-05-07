<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'task-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textArea($model,'name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'details'); ?>
		<?php echo $form->textArea($model,'details',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'details'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textArea($model,'priority',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'priority'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assignee'); ?>
		<?php echo $form->textArea($model,'assignee',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'assignee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project'); ?>
		<?php echo $form->textArea($model,'project',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'project'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estimated_duration'); ?>
		<?php echo $form->textField($model,'estimated_duration'); ?>
		<?php echo $form->error($model,'estimated_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'final_duration'); ?>
		<?php echo $form->textField($model,'final_duration'); ?>
		<?php echo $form->error($model,'final_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_date');


        $this->widget('zii.widgets.jui.cJuiDatePicker',
                array(
                        'attribute'=>'start_date',
                        'name'=>'start_date',
                        'value'=>$model->start_date,
                        'model'=>$model,
                        'options'=>array(
                                'showAnim'=>'slide',
                                'showButtonPanel'=>true,
                                'dateFormat'=>'yyyy-mm-dd'
                        ),
                'htmlOptions'=> array('style'=>''),
        )); ?>


        <?php echo $form->error($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'due_date'); ?>
		<?php echo $form->textField($model,'due_date'); ?>
		<?php echo $form->error($model,'due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logged_time'); ?>
		<?php echo $form->textField($model,'logged_time'); ?>
		<?php echo $form->error($model,'logged_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id'); ?>
		<?php echo $form->error($model,'project_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->




<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
</head>
<body>

<p>Date: <input type="text" id="datepicker"></p>


</body>
</html>