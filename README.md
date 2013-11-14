# Kohana 3.3 extended

Features
---

- Template structure with base, header, footer and content files.
- Auto return content view file from controller/action name.
- Manage assets anytime in Controller or View files (style sheets, images and javascript files).
- Compress, merge and minify CSS and JS files when env is set equal PRODUCTION.
- Image helper for resize, crop and cache images.
- Manage env mode and base url in .htaccess.

Structure
---

In this structure the module template (modules/template) is used for organize views and assets.

	- media/ (extended structure for assets)
		- css/
		- img/
			- upload/
		- js/
	+ application/ (kohana default structure)
	+ modules/ (kohana default structure)
	+ system/ (kohana default structure)


Template Module
---

Types of assets that can be inserted:
- css: The system will search the folder "/media/css/".
- css_external: The system will insert the url expecting it to be an absolute URL.
- css_inline: The system will group all the strings added and put into a style tag.
- js: The system will search the folder "/media/js/".
- js_external: The system will insert the url expecting it to be an absolute URL.
- js_inline: The system will group all the strings added and put into a script tag.

Example:

	$type = 'js';
	$list_files = array('example1.js', 'example2.js', 'main.js');
	Template::add($type, $list_files);

Controller Root
---
Auto Template::add
Get view with the controller and action name
Method "Before" can be extended
Method "After" can be extended

Example:

	class Controller_Default extends Controller_Root {
		public $auto_render = true; // Auto instantiates and renders views
		public $params = array(
			'css_external' 	=> array(),
			'css' 		=> array('reset.css', 'fonts/stylesheet.css', 'main.css'),
			'js_external' 	=> array('http://code.jquery.com/jquery-1.9.1.min.js'),
			'js' 		=> array('vendor/jquery.mask.min.js','main.js'),
		);
	
		public function action_index(){
			// If $this->auto_render var is set to true
			// $this->template is the "views/shared/template/base.php" file instantied. This template need $header, $content and $footer variables (auto instantied).
			// $this->template->header is the "views/shared/template/header.php" file instantied.
			// $this->template->footer is the "views/shared/template/footer.php" file instantied.
			// $this->template->content is the "views/pages/Default/index.php" file instantied.
			// Auto insert the $this->params assets in the base view 
		}
	}
...

Image helper
---


	$file = 'image.png'; // Image in the real size. Stored in the "media/img/upload/" folder.
	$params = array(
		'w'		=> 100, // Width you want
		'h'		=> 100, // Height you want
		'crop' 		=> true, // Crop image?
		'resize' 	=> true, // Resize Image?
	)
	
	// Return the path and file name relative to the root directory. Eg: "media/_img/FILE_NAME.png"
	Img::get($file, $params);
