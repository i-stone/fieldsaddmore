<!DOCTYPE html>
<html>
    <head>
        <title>Field Addmore Example</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <div>Example 2</div>
        <form action="" method="POST">
            <div class="admore-fields">

            </div>
            <a href="#" class="fieldsaddmore-addbtn">Add more</a>

            <script id="fieldsaddmore-template" type="text/template">
            <div class="fieldsaddmore-row rowId">
                <input type="text" name="item[key][field1]" />
                <input type="text" name="item[key][field2]" />
                <input type="text" name="item[key][field3]" />
                <a href="#" data-rowid="key" class="fieldsaddmore-removebtn">Remove</a>
            </div>
            </script>

            <br><br><br><br><br>
            <div class="admore-fields2">

            </div>
            <a href="#" class="fieldsaddmore-addbtn2">Add more</a>

            <script id="fieldsaddmore-template2" type="text/template">
            <div class="fieldsaddmore-row2 rowId">
                <input type="text" name="item2[key][field1]" />
                <input type="text" name="item2[key][field2]" />
                <input type="text" name="item2[key][field3]" />
                <input type="text" name="item2[key][field4]" />
                <a href="#" data-rowid="key" class="fieldsaddmore-removebtn2">Remove</a>
            </div>
            </script>
            <br>
            <input type="submit" value="Submit" />
        </form>
        <script src="../jquery.min.js"></script>
        <script src="../jqery.fieldsaddmore.js"></script>
        <script type="text/javascript">
(function($) {
    $('.admore-fields').fieldsaddmore();

    $('.admore-fields2').fieldsaddmore({
        templateEle: "#fieldsaddmore-template2",
        rowEle: ".fieldsaddmore-row2",
        addbtn: ".fieldsaddmore-addbtn2",
        removebtn: ".fieldsaddmore-removebtn2",
        min: 1,
        startAt: 0,
        hookBeforeAdd: function(ele, options) {
        },
        hookAfterAdd: function(ele, options) {
        },
        hookBeforeInit: function(ele, options) {
        }
    });
})(jQuery);
        </script>
    </body>

</html>
<?php
if(!empty($_POST)){
    print_r($_POST);
    exit;
}
?>