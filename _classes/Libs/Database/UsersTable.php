<?php

namespace Libs\Database;

use PDOException;

class UsersTable
{
    private $db = null;
    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }
    
    public function insert($data)
    {
       try{
            $query="INSERT INTO users (name,email,phone,address,password,role_id,created_at)
                VALUES(:name,:email,:phone,:address,:password,:role_id,NOW()) ";

            $statement=$this->db->prepare($query);
            $statement->execute($data);

            return $this->db->lastInertId();

       }catch(PDOException $e){
        return $e->getMessage();
       }
    }

    public function getAll()
    {
        $statement=$this->db->query("SELECT * FROM users");

        return $statement->fetchAll();
    }
}