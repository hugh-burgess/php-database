<?php

class UsersController extends UsersRepository
{
// where we update, insert in the database
    public function createUser($firstname, $lastname)
    {
        // run the information from the users table
        $this->setUser($firstname, $lastname);
    }
}