<?php
class User {
    private $userFirstName;
    private $userLastName;
    private $userEmail;
    private $userPassword;
    protected $userGender;
    private $userCreditCard;
    
    public function __construct($_userFirstName, $_userLastName, $_userEmail, $_userPassword, $_userGender = null)
    {
        $this -> userFirstName = $_userFirstName;
        $this -> userLastName = $_userLastName;
        $this -> userEmail = $_userEmail;
        $this -> userPassword = $_userPassword;
        $this -> userGender = $_userGender;
    }

    public function insertCreditCard($_c)
    {
        $this -> userCreditCard = $_c;
    }

    public function getFirstName()
    {
        return $this -> userFirstName;
    }
    public function getLastName()
    {
        return $this -> userLastName;
    }
    public function getEmail()
    {
        return $this -> userEmail;
    }
    public function getPassword()
    {
        return $this -> userPassword;
    }
    public function getGender()
    {
        return $this -> userGender;
    }public function getCreditCard()
    {
        return $this -> userCreditCard;
    }
}

?>