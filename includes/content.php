<?php namespace WSUWP\Plugin\Demo;

class Content {

   public function __constructor() {
        // Resources only
    }

    public function init() {

        add_filter( 'the_content', array( __CLASS__, 'wsuwp_change_content_to_webteam'), 99999 );
       
    }


    public static function wsuwp_change_content_to_webteam( $content ) {

        $content .= ' I\'m a class method';

        return $content;

    }

}

(new Content)->init();