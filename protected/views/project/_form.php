<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
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
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textArea($model,'status',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textArea($model,'category',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textArea($model,'priority',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'priority'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'images'); ?>
		<?php echo $form->textArea($model,'images',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'images'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client'); ?>
		<?php echo $form->textArea($model,'client',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'client'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'leader'); ?>
		<?php echo $form->textArea($model,'leader',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'leader'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team'); ?>
		<?php echo $form->textArea($model,'team',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'team'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tasks'); ?>
		<?php echo $form->textArea($model,'tasks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tasks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taskId'); ?>
		<?php echo $form->textField($model,'taskId'); ?>
		<?php echo $form->error($model,'taskId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_date'); ?>
		<?php echo $form->textField($model,'start_date'); ?>
		<?php echo $form->error($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'due_date'); ?>
		<?php echo $form->textField($model,'due_date'); ?>
		<?php echo $form->error($model,'due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'days_overdue'); ?>
		<?php echo $form->textField($model,'days_overdue'); ?>
		<?php echo $form->error($model,'days_overdue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
		<?php echo $form->error($model,'company_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->