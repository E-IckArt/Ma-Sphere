<?php

require_once 'Product.php';

class ProductCirc extends Product
{
    private int $diameter;

    public function __construct($name, $price, $diameter)
    {
        parent::__construct($name, $price);
        $this->diameter = $diameter;
    }

    public function getSurface(): float
    {
        return M_PI * (($this->diameter / 2) ** 2);
    }

    /**
     * Get the value of diameter
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * Set the value of diameter
     *
     * @return  self
     */
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;

        return $this;
    }
}
