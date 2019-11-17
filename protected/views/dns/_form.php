<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'dns-form',
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class = "row">

<!--    --><?php //echo CHtml::form('','post',array('enctype'=>'multipart/form-data')); ?>
<!--    --><?php //echo CHtml::activeFileField($model, 'image'); ?>
<!--   --><?php ////echo CHtml::submitButton('Submit'); ?>
<!--    --><?php //echo CHtml::endForm(); ?>
    </div>


    <div class="row">
        <!--		--><?php //echo $form->labelEx($model,'environment'); ?>
        <!--		--><?php //echo $form->textArea($model,'environment',array('rows'=>6, 'cols'=>50)); ?>
        <!--		--><?php //echo $form->error($model,'environment'); ?>

        <?php echo $form->labelEx($model,'environment'); ?>
        <?php echo CHtml::activeDropDownList($model,'environment',
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
        <?php echo $form->textArea($model,'arecord',array('rows'=>10,'cols'=>100,
            'placeholder'=>"No Blank lines allowed. Enter comma-separated pairs of (FQDN, IP address) followed by new-line characters at end of each line. \n Example: \n kafka,123.45.32.67 \n spark, 123.45.32.67" )); ?>
        <?php echo $form->error($model,'arecord'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'cname'); ?>
        <?php echo $form->textArea($model,'cname',array('rows'=>10,'cols'=>100,
            'placeholder'=>"No Blank lines allowed. Enter comma-separated pairs of (Short-Name, Long-Name} followed by new-line characters at end of each line. \n Example: \n vcenter,gpdcvmwvc201.gp.ocean.com \n wsus, gpdcwnentwu001.gp.ocean.com" )); ?>
        <?php echo $form->error($model,'cname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'microservice'); ?>
        <?php echo $form->textArea($model,'microservice',array('rows'=>10,'cols'=>100,
            'placeholder'=>"No Blank lines allowed. Enter comma-separated pairs of (hort-Name, Long-Name) followed by new-line characters at end of each line. \n Example: \n EmergencyResponseTask ,swarm-ingress.gp.ocean.com \n calendar-service, swarm-ingress.gp.ocean.com" )); ?>
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