<?php

class UserMapper{
    public static function mapToObject(array $datas){
        return new User(
            $datas['id'],
            $datas['lastname'],
            $datas['firstname'],
            $datas['mail'],
            $datas['telephone'],
            $datas['password'],
            $datas['id_role']
        );
    }
}