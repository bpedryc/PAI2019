<?php

require_once 'Repository.php';
require_once 'Models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $email): ?User
    {
        $statement = $this->database->connect()->prepare('
            SELECT * FROM users WHERE email = :email
        ');
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if($user == false) {
            return null;
        }

        return new User(
            $user['Email'],
            $user['Password'],
            $user['FirstName'],
            $user['LastName']
        );
    }
}