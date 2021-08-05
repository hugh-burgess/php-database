<?php

// what is the model and what is its role
// it doesnt do anything, just holds data
class User
{
    // what data i keep
    private $firstName;
    private $lastName;

    //what data i need

    /**
     * Model constructor.
     * @param string $firstname
     * @param string $lastname
     */
    public function __construct(string $firstname, string $lastname)
    {
        $this->firstName = $firstname;
        $this->lastName = $lastname;
    }

// getter function - to access the private data above for use by other classes
    public function getFirstName(): string // return type declaration
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

}