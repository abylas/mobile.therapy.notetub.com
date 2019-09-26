<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php header("Access-Control-Allow-Origin: *"); ?>


<script type="text/javascript">
    // jQuery cross domain ajax
//    $.get("http://test.notetub.com/notetub/index.php?r=user/login").done(function (data) {
$.get("http://www.1.notetub.com/ajax/ajax.php").done( function (data) {
    console.log(data['points']);
//alert("data = " + JSON.stringify(data));
//alert(JSON.stringify(data['points']));
$('#points').html(data['points']);

    });
</script>

<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You now have saved <div id="points">10</div>points.</p>


<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>