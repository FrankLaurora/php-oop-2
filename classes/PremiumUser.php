<?php
require_once __DIR__ . '/User.php';

class PremiumUser extends User {
    private $favoriteCategory;
    private $premiumDiscount = 25;

    public function setFavoriteCategory($_favoriteCategory)
    {
        $this -> favoriteCategory = $_favoriteCategory;
    }
}

?>