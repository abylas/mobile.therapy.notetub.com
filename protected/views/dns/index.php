<?php
$this->breadcrumbs=array(
	'Dns',
);

$this->menu=array(
	array('label'=>'Create Dns', 'url'=>array('create')),
	array('label'=>'Manage Dns', 'url'=>array('admin')),
);
?>

<h1>Dns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


<body style = "text-align:center;">

<h1 style = "color:green;" >
    Voice and/or Text based Presenter on web
</h1>

<div id= "parent"></div>

<br><br>

<button onclick="insert()">
    insert
</button>

<!-- Script to insert div element -->
<script>
    function insert() {
        $("#parent").append('<div id = "newElement">A '
            + 'Computer Science portal for geeks      <img src="images/blue_arrow.png">                      </div> <br> <br>');


    }
</script>
</body>

</html>
