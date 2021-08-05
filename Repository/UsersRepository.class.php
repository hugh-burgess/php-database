<?php

class UsersRepository extends Dbh
{
    // get single user
    protected function getUser($name): array
    {
        $sql = "SELECT * FROM users WHERE users_firstname = ?"; // map data for controller to work with data -> a user
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        // determine if we want to fetch one or multiple rows
        // this is only handling the db info, not showing it, which is done in View
        $results = $stmt->fetchAll();
        // take the information, insert it into an array and pass onto the next class
        $models = []; // <----- the mapping from here
        foreach ($results as $result) {
            $first = $result['users_firstname'];
            $last = $result['users_lastname'];
            // like in JS, $variable[] = something .. is "push 'something' to array 'variable'"
            $models[] = $this->createUserModel($first, $last);
        } // <----- the mapping to here
        return $models;
    }

    protected function setUser($firstname, $lastname)
    {
        // insert with prepared statements as before
        $sql = "INSERT INTO users(users_firstname, users_lastname) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
    }

    protected function createUserModel($first, $last): User
    {
        $model = new User($first, $last);
        return $model;

    }
}