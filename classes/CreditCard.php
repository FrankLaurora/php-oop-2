<?php
class CreditCard{
    private $holderName;
    private $bank;
    private $number;
    protected $expirationDate;

    public function __construct($_holderName, $_bank, $_number, $_expirationDate)
    {
        $this -> holderName = $_holderName;
        $this -> bank = $_bank;
        $this -> number = $_number;
        $this -> expirationDate = $_expirationDate;
    }
}
?>