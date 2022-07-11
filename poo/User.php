<?php

// Définition
class User
{
    // Attributs : toujours private pour les protégés depuis l'extérieur de la classe.
    private const LEGAL_AGE = 18; // Constante définie pour utilisation dans la fonction hasLegalAge

    private int $id;
    private string $firstname;
    private string $lastname;
    private int $age;
    private string $email;
    private string $password;
    private string $description;
    private bool $active;

    // Conctructeur (c'est une des méthodes de la classe, elle toujours public mais facultative)
    public function __construct(int $id, bool $active = true)
    {
        $this->id = $id;
        $this->active = $active;
    }

    // Méthode d'instance : les instances de la classe peuvent l'utiliser 

    /**
     * Returns true if user's age is equal or over fixed legal age
     *
     * @return boolean
     */
    public function hasLegalAge(): bool
    {
        return $this->age >= self::LEGAL_AGE; // Il faut utiliser self:: pour introduire une constante
    }


    // Accesseurs et Modificateurs => Getters and Setters ( toujours publics)

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }


    /**
     * Get the value of age
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of active
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Set the value of active
     *
     * @return  self
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}
