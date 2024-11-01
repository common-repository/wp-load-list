(function( $ ) {

	'use strict';



	$(function() {

	var linklistCSS ='<ul  id="ll-tabs">';
	var linklistJS ='<ul  id="ll-tabs">';

	$('link[rel="stylesheet"]').each(function(i,e){

	//	console.log(e.href);
		if(e.href.indexOf('load-list')== -1)
		{
			linklistCSS += '<li id="ll-details">' + e.href + '</li>';
		}

	});

		linklistCSS +="</ul>";

	$('#div-load-list-css').html(linklistCSS);

		$('script[src]').each(function(i,e){	
			if(e.src.indexOf('load-list')== -1)
			{
				linklistJS += '<li id="ll-details">' + e.src + '</li>';
			}


	});	  



	linklistJS +="</ul>";

	$('#div-load-list-js').html(linklistJS);





	//console.groupEnd();

});

})( jQuery );

