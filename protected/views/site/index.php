<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php header("Access-Control-Allow-Origin: *"); ?>

<body style = "text-align:center;">

<h2 > You need to type sentences, and end them with periods/fullstops for this to work.
</h2>
<h2>
    You can also use your voice buttons on keyboards to simply talk to Ava.
No need to type then.
</h2>

<h2>Press the button "Ava, Remember this!" below when you are done talking.
</h2>

<h2>
    This tells Ava to remember what you said. You might need it later, in a few seconds, minutres, hours, day, weeks , months or years.
</h2>

<h2>
    Ava will remember for you. Trust her.
</h2>
<textarea size="900" maxlength="900"
          placeholder="Enter your sentences using voice or keyboard.
End all sentences with a full stop for this to work.
Press the button below, when you are done, to store individual sentences. "
          name="title" id="Note_title"
          rows = "10" cols="100"
          height = "900" width = "900">
</textarea>

<h1>

</h1>

<div id="parent"></div>

<!-- Script to insert div element -->
<script>
        function insert() {

            // $('<div class="dynamicbox" id = "'  + 1 + '">  ' +  "test 1"//value
            //     + ' </div>').appendTo($('#parent'));
            //
            //
            // $('<div class="dynamicbox" id = "'  + 2 + '">  ' +  "test 2"//value
            //     + ' </div>').appendTo($('#parent'));
            //
            //
            // $('<div class="dynamicbox" id = "'  + 3 + '">  ' +  "test 3"//value
            //     + ' </div>').appendTo($('#parent'));

            var cars = ["Saab", "Volvo", "BMW"];
            // var arr = {"red","blue"."green"};

             // var txt = "newElement";

/*

Top things I want Alice to do
 */

            // $.each(cars, function(index,value){
            //   // console.log("Javascript: " + value) ;
            //   // Testing below ones...everything above this works
            //         var ctr = index + 3;
            //         var newid = txt + ctr;
            //         console.log(value);
            //
            //         $('<div class="dynamicbox" id = "'  + newid + '">  '
            //             +  value
            //             + ' </div>')
            //             .appendTo($('#parent'));
            //
            // });

            var val = $.trim($("#Note_title").val())
            // console.log(val);

             var result = val;
            //
            var result = val.match( /[^\.!\?]+[\.!\?]+/g );
         console.log(result);
var ix = 0;
             var txt = "newElement";
            //
            //  result = JSON.parse(result);
            //  console.log(result);
            //

          //   var arr = [];
          //   var ctr = ix + 1;
          // var newid = txt + ctr;
          //   $('<div class="dynamicbox" id = "'  + newid + '">  ' +  result
          //       + ' </div>').prependTo($('#parent'));

            $.each( result, function( index, value ){
            // for (var i = 0, len = val.length; i < len; i++) {
                var ctr = index + 1;
                var newid = txt + ctr;
//                console.log(value);

             //   arr[index] = '<div class="dynamicbox" id = "'  + newid + '">  ' +  value
             //       + ' </div>';

                 $('<div class="dynamicbox" id = "'  + newid + '">  ' +  value
                     + ' </div>').appendTo($('#parent'));

            });


        }

</script>


<button type="button" class="bigbutton" id="button1" onclick="insert()">
    <!--    <a class="example_e" href="add-website-here" target="_blank" rel="nofollow noopener">-->
    Ava, Display that as individual notes!

    <!--    </a>-->
</button>

<h1>

</h1>

<button type="button" class="bigbutton" id ="button2" ">
    <!--    <a class="example_e" href="add-website-here" target="_blank" rel="nofollow noopener">-->


Ava, Remember this!
    <!--    </a>-->
</button>


</body>
