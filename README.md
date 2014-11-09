## Fields addmore Plugin in jQuery


#### First include .js file
```xml
<script src="js/jquery.min.js"></script>
<script src="js/jqery.fieldsaddmore.min.js"></script>
```


#### Default Example
```xml
<!-- Main element container -->
<div class="admore-fields">
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
```

```xml
    <script type="text/javascript">
        (function($) {

            //Simple plugin implementation
            $('.admore-fields').fieldsaddmore();

        })(jQuery);
    </script>
```
#### Custom Example

```xml
<!-- Main element container -->
<div class="admore-fields2">
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
```
```xml
<script type="text/javascript">
    (function($) {

        //Imlementation with different elements and callback function
        $('.admore-fields2').fieldsaddmore({
            templateEle: "#fieldsaddmore-template2",
            rowEle: ".fieldsaddmore-row2",
            addbtn: ".fieldsaddmore-addbtn2",
            removebtn: ".fieldsaddmore-removebtn2",
            min: 1,
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

```