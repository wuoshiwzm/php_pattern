<?php
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 2017/2/20
 * Time: 9:23
 */
use woo\mapper\VenueMapper;
use woo\domain\Venue;

//require_once ("woo/domain/Venue.php");
require_once ('woo/base/Registry.php');
require_once ('woo/base/Request.php');

require_once ('woo/controller/AddVenueController.php');


require_once ('woo/mapper/VenueMapper.php');
require_once ('woo/mapper/Mapper.php');

$i = 'test';

class t{
    public $p = 'test2';
}
//\woo\base\ApplicationRegistry::setDSN('mysql:host=localhost;dbname=pattern');
//\woo\base\ApplicationRegistry::setDSN('mysql:username=root');
//$mapper = new VenueMapper();
//$venue = $mapper->find(12);
//
//$venue = new Venue();
//$venue->setName('test leon');
//$mapper->insert($venue);
//$venue = $mapper->find($venue->getId());
//print_r($venue);
//$venue->setName("The Bibble Beer");
//$mapper->update($venue);

$r = new t();

echo $r->p;