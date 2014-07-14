<?php
class Controller_Default extends Controller_Root {
    public $auto_render = true; // Auto instantiates and renders views
    public $params = array(
        'css_external'  => array(),
        'css'       => array('reset.css', 'main.less'),
        'js_external'   => array(),
        'js'        => array('plugins.js', 'main.js'),
    );

    public function action_index(){
        //$noticias = ORM::factory('Article')->find_all();

        //$this->template->content->noticias = $noticias;



        // If $this->auto_render var is set to true
        // $this->template is the "views/shared/template/base.php" file instantied. This template need $header, $content and $footer variables (auto instantied).
        // $this->template->header is the "views/shared/template/header.php" file instantied.
        // $this->template->footer is the "views/shared/template/footer.php" file instantied.
        // $this->template->content is the "views/pages/Default/index.php" file instantied.
        // Auto insert the $this->params assets in the base view
    }
}
?>
