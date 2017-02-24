<?php
namespace woo\base;
require_once ('woo/base/Request.php');
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 2017/2/20
 * Time: 11:12
 */

class RequestRegistry extends Request {
    private static $instance;
    private static $request;

    public function __construct()
    {

    }

    static function instance(){
        if(!isset(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    static function get_Request(){
        return self::instance();
    }

    static function set_Request( Request $request){
        self::$request = $request;
    }

}