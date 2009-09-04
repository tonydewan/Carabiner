<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Carabiner 1.45 configuration file.
* CodeIgniter-library for Asset Management
*/

/*
|--------------------------------------------------------------------------
| Script Directory
|--------------------------------------------------------------------------
|
| Path to the script directory.  Relative to the CI front controller.
|
*/

$config['script_dir'] = 'assets/scripts/';


/*
|--------------------------------------------------------------------------
| Style Directory
|--------------------------------------------------------------------------
|
| Path to the style directory.  Relative to the CI front controller
|
*/

$config['style_dir'] = 'assets/styles/';

/*
|--------------------------------------------------------------------------
| Cache Directory
|--------------------------------------------------------------------------
|
| Path to the cache directory. Must be writable. Relative to the CI 
| front controller.
|
*/

$config['cache_dir'] = 'assets/cache/';




/*
* The following config values are not required.  See Libraries/Carabiner.php
* for more information.
*/



/*
|--------------------------------------------------------------------------
| Base URI
|--------------------------------------------------------------------------
|
|  Base uri of the site, like http://www.example.com/ Defaults to the CI 
|  config value for base_url.
|
*/

//$config['base_uri'] = 'http://www.example.com/';


/*
|--------------------------------------------------------------------------
| Development Flag
|--------------------------------------------------------------------------
|
|  Flags whether your in a development environment or not. Defaults to FALSE.
|
*/

$config['dev'] = FALSE;


/*
|--------------------------------------------------------------------------
| Combine
|--------------------------------------------------------------------------
|
| Flags whether files should be combined. Defaults to TRUE.
|
*/

$config['combine'] = TRUE;


/*
|--------------------------------------------------------------------------
| Minify Javascript
|--------------------------------------------------------------------------
|
| Global flag for whether JS should be minified. Defaults to TRUE.
|
*/

$config['minify_js'] = TRUE;


/*
|--------------------------------------------------------------------------
| Minify CSS
|--------------------------------------------------------------------------
|
| Global flag for whether CSS should be minified. Defaults to TRUE.
|
*/

$config['minify_css'] = TRUE;


/*
|--------------------------------------------------------------------------
| Predifined Asset Groups
|--------------------------------------------------------------------------
|
| Any groups defined here will automatically be included.  Of course, they
| won't be displayed unless you explicity display them ( like this: $this->carabiner->display('jquery') )
| See docs for more.
| 
| Currently created groups:
|	> jQuery (latest in 1.xx version)
|	> jQuery UI (latest in 1.xx version)
|	> Prototype (latest in 1.x.x.x version)
|	> script.aculo.us (latest in 1.x.x version)
|	> Mootools (1.2.2 version)
|	> Dojo (latest in 1.xx version)
|	> SWFObject (latest in 2.xx version)
|	> YUI (latest core JS/CSS in 2.x.x version)
|
*/

// jQuery (latest, as of 1.xx)
$config['groups']['jquery'] = array(
	
	'js' => array(
	
		array('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', FALSE, FALSE)
	
	)
);


// jQuery UI (latest, as of 1.xx)
$config['groups']['jqueryui'] = array(
	
	'js' => array(
	
		array('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', FALSE, FALSE),
		array('http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.js', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js', FALSE, FALSE)
	
	)
);


// Prototype (latest, as of 1.x.x.x)
$config['groups']['prototype'] = array(

	'js' => array(
	
		array('http://ajax.googleapis.com/ajax/libs/prototype/1/prototype.js', 'http://ajax.googleapis.com/ajax/libs/prototype/1/prototype.js', FALSE, FALSE)
	
	)
);


// script.aculo.us (latest, as of 1.x.x)
$config['groups']['scriptaculous'] = array(

	'js' => array(
	
		array('http://ajax.googleapis.com/ajax/libs/prototype/1/prototype.js', 'http://ajax.googleapis.com/ajax/libs/prototype/1/prototype.js', FALSE , FALSE),
		array('http://ajax.googleapis.com/ajax/libs/scriptaculous/1/scriptaculous.js', 'http://ajax.googleapis.com/ajax/libs/scriptaculous/1/scriptaculous.js', FALSE, FALSE)
		
	)
	
);


// MooTools
$config['groups']['mootools'] = array(
	
	'js' => array(
	
		array('http://ajax.googleapis.com/ajax/libs/mootools/1.2.2/mootools.js', 'http://ajax.googleapis.com/ajax/libs/mootools/1.2.2/mootools-yui-compressed.js', FALSE, FALSE)
		
	)
);


// Dojo (latest, as of 1.xx)
$config['groups']['dojo'] = array(
	
	'js' => array(
	
		array('http://ajax.googleapis.com/ajax/libs/dojo/1/dojo/dojo.xd.js.uncompressed.js', 'http://ajax.googleapis.com/ajax/libs/dojo/1/dojo/dojo.xd.js', FALSE, FALSE)
	
	)
);


// SWFObject (latest, as of 2.xx)
$config['groups']['swfobject'] = array(

	'js' => array(
	
		array('http://ajax.googleapis.com/ajax/libs/swfobject/2/swfobject_src.js', 'http://ajax.googleapis.com/ajax/libs/swfobject/2/swfobject.js', FALSE, FALSE)
	
	)
	
);


// YUI (latest, as of 2.x.x)
$config['groups']['yui'] = array(
	
	'js' => array(
	
		// JS Core
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/yuiloader/yuiloader.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/yuiloader/yuiloader.js', FALSE, FALSE),
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/dom/dom.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/dom/dom-min.js', FALSE, FALSE),
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/event/event.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/event/event-min.js', FALSE, FALSE)
		
		// JS Utilities: Uncomment as needed
		//,array('http://ajax.googleapis.com/ajax/libs/yui/2/build/animation/animation.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/animation/animation-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/connection/connection.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/connection/connection-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/cookie/cookie.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/cookie/cookie-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/datasource/datasource.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/datasource/datasource-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/dragdrop/dragdrop.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/dragdrop/dragdrop-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/element/element.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/element/element-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/history/history.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/history/history-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/imageloader/imageloader.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/imageloader/imageloader-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/json/json.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/json/json-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/paginator/paginator.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/paginator/paginator-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/resize/resize.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/resize/resize-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/selector/selector.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/selector/selector-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/stylesheet/stylesheet.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/stylesheet/stylesheet-min.js', FALSE, FALSE),
		
		// Widget JS Tools: Uncomment as needed
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/container/container.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/container/container-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/menu/menu.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/menu/menu-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/autocomplete/autocomplete.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/autocomplete/autocomplete-min.js', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/button/button.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/button/button-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/calendar/calendar.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/calendar/calendar-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/charts/charts.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/charts/charts-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/colorpicker/colorpicker.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/colorpicker/colorpicker-min.js', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/datatable/datatable.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/datatable/datatable-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/editor/editor.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/editor/editor-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/imagecropper/imagecropper.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/imagecropper/imagecropper-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/layout/layout.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/layout/layout-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/paginator/paginator.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/paginator/paginator-min.js', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/slider/slider.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/slider/slider-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/tabview/tabview.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/tabview/tabview-min.js', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/treeview/treeview.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/treeview/treeview-min.js', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/uploader/uploader.js', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/uploader/uploader-min.js', FALSE, FALSE),		

	),
	
	
	'css' => array(
	
		// CSS Core
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/fonts/fonts.css', 'screen', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/fonts/fonts-min.css', FALSE, FALSE),	
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/reset/reset.css', 'screen', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/reset/reset-min.css', FALSE, FALSE),
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/grids/grids.css', 'screen', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/grids/grids-min.css', FALSE, FALSE),
		array('http://ajax.googleapis.com/ajax/libs/yui/2/build/base/base.css', 'screen', 'http://ajax.googleapis.com/ajax/libs/yui/2/build/base/base-min.css', FALSE, FALSE)

		//CSS for Controls: Uncomment as Needed
		//,array('http://ajax.googleapis.com/ajax/libs/yui/2/build/autocomplete/assets/skins/sam/autocomplete.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/container/assets/skins/sam/container.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/menu/assets/skins/sam/menu.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/button/assets/skins/sam/button.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/calendar/assets/skins/sam/calendar.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/carousel/assets/skins/sam/carousel.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/slider/assets/skins/sam/slider.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/colorpicker/assets/skins/sam/colorpicker.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/datatable/assets/skins/sam/datatable.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/editor/assets/skins/sam/editor.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/resize/assets/skins/sam/resize.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/imagecropper/assets/skins/sam/imagecropper.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/layout/assets/skins/sam/layout.css', 'screen', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/tabview/assets/skins/sam/tabview.css', 'screen', FALSE, FALSE), 
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/treeview/assets/skins/sam/treeview.css', 'screen', FALSE, FALSE),
		//array('http://ajax.googleapis.com/ajax/libs/yui/2/build/editor/assets/skins/sam/simpleeditor.css', 'screen', FALSE, FALSE)
	
	)

);

