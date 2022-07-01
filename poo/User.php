<?php

// Définition
class User
{
    // Attributs : toujours private pour les protégés depuis l'extérieur de la classe.
    private const LEGAL_AGE = 18; // Constante définie pour utilisation dans la fonction hasLegalAge

    private int $id;
    private string $name;
    private int $age;
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
     * Get the value of name
     */
    public function getName(): string
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

// Instanciation d'un objet
$user = new User(123, false);
$admin = new User(1);

echo '<pre>';
var_dump($user);

echo $user?->getId();
echo '<br>';

$users[] = [$user, $admin];
var_dump($users);

$user->setAge(20);
var_dump($user);

$user2 = new User(23);
$user2->setName('Helen')
    ->setAge(32)
    ->setDescription('tape canal waste claws play see moving wolf sleep problem pig screen hat image help shelf enjoy dozen complete sort tiny dry setting spell');

array_push($users, $user2);

echo '<h1>Users</h1>';
var_dump($users);

$admin->setAge(32);

echo $admin->hasLegalAge() ? "Access granted" : "Acces denied";
