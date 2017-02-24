<?php
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 2017/2/20
 * Time: 9:23
 */

require_once ("woo/domain/Venue.php");
require_once ('woo/base/Registry.php');
require_once ('woo/base/Request.php');

require_once ('woo/controller/AddVenueController.php');

try {
    $venues = \woo\domain\Venue::findAll();
} catch (Exception $e){
    include('error.php');
    exit(0);
}

$vencontroller = new \woo\controller\AddVenueController();
$vencontroller->process();

?>


<!---->
<!--<html>-->
<!--<head>-->
<!--    <title>Venues</title>-->
<!--</head>-->
<!--<body>-->
<?php //foreach ($venues as $venue) { ?>
<!--    --><?php //print $venue->getName(); ?><!--<br>-->
<?php //} ?>
<!--</body>-->
<!--</html>-->
