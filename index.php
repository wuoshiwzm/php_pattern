<?php
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 2017/2/20
 * Time: 9:23
 */

//require_once ("woo/domain/Venue.php");
require_once ('woo/base/Registry.php');
require_once ('woo/base/Request.php');

require_once ('woo/controller/AddVenueController.php');


require_once ('woo/mapper/VenueMapper.php');
require_once ('woo/mapper/Mapper.php');


//\woo\base\ApplicationRegistry::setDSN('mysql:host=localhost;dbname=pattern');
//\woo\base\ApplicationRegistry::setDSN('mysql:username=root');
$mapper = new \woo\mapper\VenueMapper();
//$venue = $mapper->find(12);

$venue = new \woo\domain\Venue();
$venue->setName('test set name');
$mapper->insert($venue);
$venue = $mapper->find($venue->getId());
print_r($venue);







print_r($venue);
