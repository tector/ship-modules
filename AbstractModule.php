<?php

class AbstractModule
{
    protected $category;
    protected $slots;

    public function __construct($category, $slots)
    {
        $this.setCategory($category);
        $this.setSlots((int) $slots);
    }

    public function setCategory($category)
    {
        $this.category = (String) $category;
    }

    public function getCategory()
    {
        return $this.category;
    }
}