<?php

class UserRepository extends AbstractRepository{
    public function __construct(){
        parent::__construct();

        
    }

    public function findByMail(string $mail): ?User
    {
        $stmt = $this->pdo->prepare('SELECT * FROM user WHERE mail = :mail');
        $stmt->bindParam(":mail", $mail, pdo::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch();

        if(!$data){
            return null;
        }

        $data= UserMapper::mapToObject($data);
        return $data;
    }



public function createUser(User $user)
{
    $sql = "INSERT INTO user (lastname, firstname, mail, telephone, password) VALUES (:lastname, :firstname, :mail, :telephone, :password)";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        ':lastname' => $user->getLastname(),
        ':firstname' => $user->getFirstname(),
        ':mail' => $user->getMail(),
        ':telephone' =>$user->getTelephone(),
        'password' => $user->getPassword()
    ]);

    return $this->pdo->lastInsertId();
}

}

