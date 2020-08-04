———————————————————————————————————————-
<div class="notes">
    <div class="name">
        <?php
        echo "<br/>\n";

        $this->beginWidget('CMarkdown'
        );

        echo nl2br($data->name);
        $this->endWidget();
        ?>                                                                                                                                                                        =
    </div>
    <div class="nav">
        <b>Tags:</b>
        <?php echo implode(', ', $data->tagLinks); ?>
        <br/>
        <?php echo CHtml::link('Permalink', $data->url);

        echo "<br/>\n";
        echo "<br/>\n";

        echo $data->create_time;

        ?> |
<!--        --><?php //echo CHtml::link("Comments ({$data->commentCount})",$data->url.'#comments'); ?><!-- |-->
<!--        Last updated on --><?php //echo date('F j, Y',$data->update_time); ?>
    </div>
</div>

<br>
<br>

———————————————————————————————————————-

