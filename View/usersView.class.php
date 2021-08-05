<?php
// because we are in the view (controller), we are working with objects, whereas above is data
class UsersView extends UsersRepository
{
// make this public so the index can reference this because its a 'view' class
    public function showUser($name)
    {
        //fetch data from the Users class
        $models = $this->getUser($name); // array of UserModel
        foreach ($models as $user) {
            echo "Full name: " . $user->getFirstName() . " " . $user->getLastName(); // <---- here. there is a forEach loop here, so each $user is an Array inside the $models array
        }
        // what do i want to show inside the website from here?
        // its an associative array so we need to refer to the columns in the database
    }
}