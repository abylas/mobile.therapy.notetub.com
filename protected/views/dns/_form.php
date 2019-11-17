<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'dns-form',
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <!--		--><?php //echo $form->labelEx($model,'environment'); ?>
        <!--		--><?php //echo $form->textArea($model,'environment',array('rows'=>6, 'cols'=>50)); ?>
        <!--		--><?php //echo $form->error($model,'environment'); ?>

        <?php echo $form->labelEx($model,'environment'); ?>
        <?php echo CHtml::dropDownList('environment', 'm',
            array('CB' => 'CB',
                'GB' => 'GB',
                'RP' => 'RP',
                'KP' => 'KP',
                'YP' => 'YP',
                'EP' => 'EP',
                'RU' => 'RU',
                'AP' => 'AP'
            ));?>
        <?php echo $form->error($model,'environment'); ?>

    </div>



    <div class="row">
        <?php echo $form->labelEx($model,'arecord'); ?>
        <?php echo $form->textArea($model,'arecord',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'arecord'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cname'); ?>
        <?php echo $form->textArea($model,'cname',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'cname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'microservice'); ?>
        <?php echo $form->textArea($model,'microservice',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'microservice'); ?>
    </div>

    <!--	<div class="row">-->
    <!--		--><?php //echo $form->labelEx($model,'create_time'); ?>
    <!--		--><?php //echo $form->textField($model,'create_time'); ?>
    <!--		--><?php //echo $form->error($model,'create_time'); ?>
    <!--	</div>-->
    <!---->
    <!--	<div class="row">-->
    <!--		--><?php //echo $form->labelEx($model,'update_time'); ?>
    <!--		--><?php //echo $form->textField($model,'update_time'); ?>
    <!--		--><?php //echo $form->error($model,'update_time'); ?>
    <!--	</div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->