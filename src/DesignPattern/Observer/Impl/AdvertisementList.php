<?php

namespace DesignPattern\Observer\Impl;

use DesignPattern\Observer\Inter\IObservable;

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
    }
}