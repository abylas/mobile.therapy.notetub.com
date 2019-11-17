<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('environment')); ?>:</b>
	<?php echo CHtml::encode($data->environment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arecord')); ?>:</b>
	<?php echo CHtml::encode($data->arecord); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cname')); ?>:</b>
	<?php echo CHtml::encode($data->cname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('microservice')); ?>:</b>
	<?php echo CHtml::encode($data->microservice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />


</div>