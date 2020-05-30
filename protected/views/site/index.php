<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php header("Access-Control-Allow-Origin: *"); ?>

<body style = "text-align:center;">

<h1> You need to type sentences, and end them with periods/fullstops for this to work.
    You can also use your voice buttons on keyboards to simply talk to Ava.
    No need to type then.
</h1>
<textarea size="900" maxlength="900" placeholder="Enter your sentences using voice or keyboard. end all sentences with a fuill stop for this wo work. Press Insert to store individual sentences. "
          name="title" id="Note_title"
          rows = "10" cols="100"
          height = "900" width = "900">

</textarea>


<h1 style = "color:green;" >
    Voice and/or Text based Assistant / Therapist / Helper on web
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
            //var result = val.match( /[^\.!\?]+[\.!\?]+/g );
         console.log(result);
var ix = 0;
             var txt = "newElement";
            //
            //  result = JSON.parse(result);
            //  console.log(result);
            //
            var arr = [];
            var ctr = ix + 1;
          var newid = txt + ctr;
            $('<div class="dynamicbox" id = "'  + newid + '">  ' +  result
                + ' </div>').prependTo($('#parent'));,

//             $.each( result, function( index, value ){
//             // for (var i = 0, len = val.length; i < len; i++) {
//                 var ctr = index + 1;
//                 var newid = txt + ctr;
// //                console.log(value);
//
//              //   arr[index] = '<div class="dynamicbox" id = "'  + newid + '">  ' +  value
//              //       + ' </div>';
//
//                  $('<div class="dynamicbox" id = "'  + newid + '">  ' +  value
//                      + ' </div>').prependTo($('#parent'));
//
//             });


        }

</script>

<button type="button" class="bigbutton" onclick="insert()">
    <!--    <a class="example_e" href="add-website-here" target="_blank" rel="nofollow noopener">-->

    Tell notes to Ava

    <!--    </a>-->
</button>

</body>
