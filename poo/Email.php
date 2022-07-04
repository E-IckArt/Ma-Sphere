<?php

class Email
{
    private string $email;


    /**
     * Creates a new instance of Email class
     *
     * @param string $email Plain text email
     * @return Email
     * @throws InvalidArgumentException if email format is invalid
     */
    public function __construct(string $email)
    {
        $this->email = $email;

        if (!$this->isValid()) {
            throw new InvalidArgumentException("Le format de l'email est incorrect"); // Stop l'instanciation de l'objet si l'email n'est pas valide.
        }
    }

    public function isValid(): bool
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
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
}
