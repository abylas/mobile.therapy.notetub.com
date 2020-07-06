<div class="notes">
<!--    <div class="title">-->
<!--        --><?php //echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
<!--    </div>-->
<!--    <div class="author">-->
<!--        posted by --><?php //echo $data->author->username . ' on ' . date('F j, Y',$data->create_time); ?>
<!--    </div>-->
    <div class="name">
        <?php
        $this->beginWidget('CMarkdown'
//            ,
//            array('purifyOutput'=>true)
        );
        echo $data->name;
//        content;
        $this->endWidget();
        ?>                                                                                                                                                                        =
    </div>
    <div class="nav">
        <b>Tags:</b>
        <?php echo implode(', ', $data->tagLinks); ?>
        <br/>
        <?php echo CHtml::link('Permalink', $data->url); ?> |
<!--        --><?php //echo CHtml::link("Comments ({$data->commentCount})",$data->url.'#comments'); ?><!-- |-->
<!--        Last updated on --><?php //echo date('F j, Y',$data->update_time); ?>
    </div>
</div>



<!--<div class="view">-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('name')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->name); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('status')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->status); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('create_time')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->create_time); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('update_time')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->update_time); ?>
<!--	<br />-->
<!---->
<!---->
<!--</div>-->