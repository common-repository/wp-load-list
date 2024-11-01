<?php
	if ( current_user_can( 'manage_options' ) ) {
?>
<button id="dialog_link"> Show Load List </button>
 <script>
  jQuery( function() {
  	 jQuery('#dialog_link').click(function () {
        jQuery('#dialog').dialog('open');
        return false;
    });

    jQuery( "#dialog" ).dialog({
      autoOpen: false,
      height: jQuery(window).height() * .8,
      width: jQuery(window).width() * .8
    });

	jQuery("#tabs").tabs();
  } );
  </script>
  <style>.ui-dialog .ui-dialog-titlebar-close {background:url('<?php echo '' . plugins_url( 'images/close-b.png', __FILE__ ) . ' ';?>');}</style>
<div id="dialog" title="CSS AND JS FILES LOADING ON THIS PAGE">
<div  id="tabs">
	<ul> 
        <li><a href="#tab-1">CSS Style Sheets</a></li> 
        <li><a href="#tab-2">Javascript Files</a></li> 
    </ul> 
    	<div id="tab-1" class="fixedSizedTab">
      		<div id="div-load-list-css"></div>
      		<div id="promo-stuff"><a href="https://wpfixit.com/product/wp-sup/" target="_blank"><?php echo '<img src="' . plugins_url( 'images/wordpress_speed_up.jpg', __FILE__ ) . '" > ';?></a></div>
      		
     	</div>
     	<div id="tab-2" class="fixedSizedTab">
     	   <div id="div-load-list-js"></div>
     	   <div id="promo-stuff"><a href="https://wpfixit.com/product/wp-sup/" target="_blank"><?php echo '<img src="' . plugins_url( 'images/wordpress_speed_up.jpg', __FILE__ ) . '" > ';?></a></div>
      	</div>
    
</div>    
<div>
<?php } ?>