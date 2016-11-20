<?php
/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 11/20/16
 * Time: 10:43 PM
 */
require '../Class/AdvertisementFactory.php';

$ad = AdvertisementFactory::Create(1);

$ad->setAdName('AliBaBa');

print_r($ad->getAdName()."\n");
print_r($ad->getAdID()."\n");
