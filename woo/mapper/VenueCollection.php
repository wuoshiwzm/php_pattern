<?php
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 2017/3/14
 * Time: 16:54
 */
namespace woo\mapper;


require_once("woo/mapper/Collection.php");
require_once("woo/domain/Collections.php");

class VenueCollection
    extends Collection
    implements \woo\domain\VenueCollection {
    function targetClass()
    {
        // TODO: Implement targetClass() method.
        return "\woo\domain\Venue";
    }
}