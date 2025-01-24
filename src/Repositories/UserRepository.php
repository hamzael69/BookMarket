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


}
