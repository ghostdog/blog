<?php defined('SYSPATH') or die('No direct script access');

class Controller_Errors extends Controller {

    public function action_404() {
        $this->request->response = '<strong>Bardzo mi przykro, ale strona, której szukasz nie istnieje :(</strong>';
    }
}
?>
