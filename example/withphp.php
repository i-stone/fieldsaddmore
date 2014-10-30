<!DOCTYPE html>
<html>
    <head>
        <title>Field Addmore Example</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <div>Example 1</div><br>
        <form action="" method="POST">
            <!-- Main element container -->
            <div class="admore-fields">
                <?php if(!empty($_POST['items'])): ?>
                    <?php foreach($_POST['items'] as $key => $row): ?>
                        <div class="fieldsaddmore-row rowId-<?php echo $key ?>">
                            <input type="text" name="items[<?php echo $key ?>][field1]" />
                            <input type="text" name="items[<?php echo $key ?>][field2]" />
                            <input type="text" name="items[<?php echo $key ?>][field3]" />
                            <a href="#" data-rowid="<?php echo $key ?>" class="fieldsaddmore-removebtn">Remove</a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <!-- Add more button -->
            <a href="#" class="fieldsaddmore-addbtn">Add more</a>

            <!-- Addmore template -->
            <script id="fieldsaddmore-template" type="text/template">
                <div class="fieldsaddmore-row rowId">
                <input type="text" name="items[key][field1]" />
                <input type="text" name="items[key][field2]" />
                <input type="text" name="items[key][field3]" />
                <a href="#" data-rowid="key" class="fieldsaddmore-removebtn">Remove</a>
                </div>
            </script>

            <br><br><br><br><br>

            <!-- Main element container -->
            <div class="admore-fields2">
                 <?php if(!empty($_POST['items2'])): ?>
                    <?php foreach($_POST['items2'] as $key => $row): ?>
                        <div class="fieldsaddmore-row2 rowId-<?php echo $key ?>">
                            <input type="text" name="items2[<?php echo $key ?>][field1]" />
                            <input type="text" name="items2[<?php echo $key ?>][field2]" />
                            <input type="text" name="items2[<?php echo $key ?>][field3]" />
                            <input type="text" name="items2[<?php echo $key ?>][field4]" />
                            <a href="#" data-rowid="<?php echo $key ?>" class="fieldsaddmore-removebtn2">Remove</a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <!-- Add more button -->
            <a href="#" class="fieldsaddmore-addbtn2">Add more</a>

            <!-- Addmore template -->
            <script id="fieldsaddmore-template2" type="text/template">
                <div class="fieldsaddmore-row2 rowId">
                    <input type="text" name="items2[key][field1]" />
                    <input type="text" name="items2[key][field2]" />
                    <input type="text" name="items2[key][field3]" />
                    <input type="text" name="items2[key][field4]" />
                    <a href="#" data-rowid="key" class="fieldsaddmore-removebtn2">Remove</a>
                </div>
            </script>

            <br><br>
            <input type="submit" value="Submit" />
        </form>

    <script src="../jquery.min.js"></script>
    <script src="../jqery.fieldsaddmore.min.js"></script>
    <script type="text/javascript">
        (function($) {

            //Simple plugin implementation
            $('.admore-fields').fieldsaddmore({
                min:($('.fieldsaddmore-row').length>0)?0:1,
            });

            //Imlementation with different elements and callback function
            $('.admore-fields2').fieldsaddmore({
                templateEle: "#fieldsaddmore-template2",
                rowEle: ".fieldsaddmore-row2",
                addbtn: ".fieldsaddmore-addbtn2",
                removebtn: ".fieldsaddmore-removebtn2",
                min:($('.fieldsaddmore-row2').length>0)?0:1,
                callbackBeforeInit: function(ele, options) {
                    console.log('BeforeInit');
                },
                callbackBeforeAdd: function(ele, options) {
                    console.log('Before Content Add');
                },
                callbackAfterAdd: function(ele, options) {
                    console.log('After Content Add');
                },
                callbackBeforeAddClick: function(ele, options) {
                    console.log('Before Add Click');
                },
                callbackAfterAddClick: function(ele, options) {
                    console.log('After Add Click');
                },
                callbackBeforeRemoveClick: function(ele, options) {
                    console.log('Before Remove Click');
                },
                callbackAfterRemoveClick: function(ele, options) {
                    console.log('After Remove Click');
                }
            });
        })(jQuery);
    </script>
    </body>
</html>