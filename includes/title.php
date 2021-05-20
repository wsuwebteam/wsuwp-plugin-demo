<?php namespace WSUWP\Plugin\Demo;

class Title {

   public function __constructor() {
        // Resources only
    }

    public function init() {
       
        add_filter( 'the_title', array( __CLASS__, 'wsuwp_change_title_to_webteam'), 99999 );
        // Actually do stuff
    }


    public static function wsuwp_change_title_to_webteam( $title ) {

        $title .= ' Go Webteam!';

        return $title;

    }

}

(new Title)->init();