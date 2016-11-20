<?php

/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 11/20/16
 * Time: 10:34 PM
 */
require '../Interface/IAdvertisement.php';

class Advertisement implements IAdvertisement
{


    /**
     * Advertisement constructor.
     */
    public function __construct($id)
    {
        $this->adID = $id;
    }

    private $adID;
    private $adName;

    /**
     * @return mixed
     */
    public function getAdName()
    {
        return $this->adName;
    }

    /**
     * @param mixed $adName
     */
    public function setAdName($adName)
    {
        $this->adName = $adName;
    }

    function getAdID()
    {
        // TODO: Implement getAdID() method.
        return $this->adID;
    }
}