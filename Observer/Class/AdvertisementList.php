<?php

/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 11/20/16
 * Time: 11:09 PM
 */
require '../Interface/IObservable.php';

class AdvertisementList implements IObservable
{

    /**
     * @var array
     */
    private $_observers = array();

    public function addAdvertisement($name)
    {
        foreach ($this->_observers as $observer)
        {
            $observer->onChanged($this,$name);
        }
    }

    function addObserver($observer)
    {
        $this->_observers[] = $observer;
        // TODO: Implement addObserver() method.
    }
}