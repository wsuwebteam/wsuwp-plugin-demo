<?php namespace WSUWP\Plugin\Demo;

class Plugin {

   public function __constructor() {
        // Resources only
    }

    public function init() {

        include_once __DIR__ . '/content.php';

        include_once __DIR__ . '/title.php';
        // Actually do stuff
    }

}

(new Plugin)->init();
