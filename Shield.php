<?php

use AbstractModule;

class Shield extends AbstractModule
{
    protected $power;

    public function __construct()
    {
        parent::__construct('shield');
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