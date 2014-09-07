<?php

class Ship
{
    protected $shipHull;
    protected $modules;
    protected $crew;
    protected $cargo;

    public function __construct(object $shipHull, array $modules, $crew, $cargo)
    {
        $this.shipHull = $shipHull;
        $this.modules = $modules;
        $this.crew = $crew;
        $this.cargo = $cargo;
    }

    public getShieldStrength()
    {
        $strength = 0;
        foreach ($this.modules as $module) {
            if ($module.getCategory() == 'shield') {
                $strength = $module.getPower();
            }
        }
    }

    public getPower()
    {

    }

}