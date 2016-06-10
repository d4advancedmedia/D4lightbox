D4 Lightbox
==============

### How To Install

1. Install and Activate plugin

2. Add the code below to page

```
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>
```

2a. or add the following to custom.js in 'Skivvy'

```
$("a[rel^='prettyPhoto']").prettyPhoto();
```

2b. or if you want it to apply to all WordPress Galleries automagically, add the following to custom.js in 'Skivvy'

````
$(".gallery-icon a").attr( 'rel', 'prettyPhoto[gallery]');
$("a[rel^='prettyPhoto']").prettyPhoto();
````

3. add rel="prettyPhoto" to all links around image. (using the 'portfoliolio' plugin add to the [portfolio] shortcode)


### TIPS

- Trouble adding rel="prettyPhoto[pp_gall]" in shortcodes? Try:

```
rel="prettyPhoto&#91;pp_gal&#93;"
```

Credits
---------

prettyPhoto v3.1.4
© Copyright, Stephane Caron
http://www.no-margin-for-errors.com


============================= Released under =============================

Creative Commons 2.5
http://creativecommons.org/licenses/by/2.5/

OR

GPLV2 license
http://www.gnu.org/licenses/gpl-2.0.html

You are free to use prettyPhoto in commercial projects as long as the
copyright header is left intact.

============================ More information ============================
http://www.no-margin-for-errors.com/projects/prettyPhoto/


============================== Description ===============================

prettyPhoto is a jQuery based lightbox clone. Not only does it support images,
it also add support for videos, flash, YouTube, iFrame. It's a full blown
media modal box.

Please refer to http://www.no-margin-for-errors.com/projects/prettyPhoto/
for all the details on how to use. 
