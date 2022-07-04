<?php

abstract class Product // Une classe abstraite ne peut pas être instanciée

{
    // Pour être hérités les attributs doivent être "protected". Sinon ils sont redéfinis lors de l'instanciation.
    // private string $name; 
    // private float $price;

    protected string $name;
    protected float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function getSurface(): float; //Signature de la méthode. La méthode abstraite doit être implémentée dans les classes enfants. La façon de calculer la surface sera définie dans chaque classe enfant qui étends la classe abstraite.

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
