<?php

require_once 'Product.php';

class ProductRect extends Product
{
    private int $width;
    private int $height;

    public function __construct(string $name, float $price, int $width, $height)
    {
        parent::__construct($name, $price); // Appelle les attributs définis dans la classe parente
        $this->name .= " - Rectangular"; // Rajoute une information par rapport à la définition faite dans la classe Product
        $this->width = $width;
        $this->height = $height;
    }

    public function getSurface(): float
    {
        return $this->height * $this->width;
    }

    /**
     * Get the value of width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}
