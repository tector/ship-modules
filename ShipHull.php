<?php

class ShipHull
{
    protected $class;
    protected $reactorSlots;
    protected $shieldSlots;
    protected $weaponSlots;
    protected $containerSlots;
    protected $droneSlots;


    public function __construct($class, $slots)
    {
        $this.setClass($class);
        $this.setSlots($slots);
    }

    public function getClass()
    {
        return $this.class;
    }

    public function setClass($class)
    {
        $this.class = $class;
    }

    public function getSlots()
    {
        return $this.slots;
    }

    public function setSlots($slots)
    {
        $this.slots = $slots;
    }
}