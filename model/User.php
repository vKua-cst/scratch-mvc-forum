<?php
namespace Model;

use App\AbstractEntity;

class User extends AbstractEntity {

    private $id;
    private $pseudo;
    private $password;
    private $inscription;
    private $role;

    public function __construct($data){
        parent::hydrate($data, $this);
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
            return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
            $this->id = $id;

            return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getPseudo()
    {
            return $this->pseudo;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
            $this->pseudo = $pseudo;

            return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
            return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
            $this->password = $password;

            return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getInscription($format)
    {
            return $this->inscription->format($format);
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setInscription($created_at)
    {
            $this->inscription = new \DateTime($created_at);

            return $this;
    }

    public function __toString(){
        return $this->username;
    }

    /**
     * Get the value of grade
     */ 
    public function getRole()
    {
            return $this->role;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setRole($role)
    {
            $this->role = $role;

            return $this;
    }
}