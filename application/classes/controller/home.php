<?php defined('SYSPATH') or die('No direct script access');

class Controller_Home extends Controller_Template {

    public static $blog_name = 'Taki sobie blog';
    public static $subtitle = 'Historie o wszystkim i o niczym...';
    public static $links = array('link1', 'link2', 'link3');
    public static $posts = array(
        array('title' => 'Mój pierwszy wpis', 'note' => 'Jakaś tam treść'),
        array('title' => 'Mój drugi wpis', 'note' => 'Jakaś tam treść'),
        array('title' => 'Mój trzeci wpis', 'note' => 'Jakaś tam treść'),
    );

    public function action_index() {
        $header = View::factory('blog/header')
                  ->set('blog_name', self::$blog_name)
                  ->set('subtitle', self::$subtitle);
        $this->template->set('content', View::factory('blog/content', array('posts' => self::$posts)))
                       ->set('list', View::factory('blog/list', array('links' => self::$links)))
                       ->set('header', $header);

    }
}
?>
