<?php
require_once ('woo/base/Registry.php');
require_once ('woo/base/Request.php');
require_once ('index.php');
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 2017/2/20
 * Time: 11:59
 */
$reg = Registry::instance();

print_r($reg->getRequest());