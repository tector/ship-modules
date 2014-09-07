<?php

use AbstractModule;

class Reactor extends AbstractModule
{
    protected $power;

    public function __construct()
    {
        parent::__construct('reactor');
    }

    public function setPower($power)
    {
        $this.power = (int) $power;
    }

    public function getPower()
    {
        return $this.power;
    }
}