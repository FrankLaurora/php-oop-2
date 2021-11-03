<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PremiumUser.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/ProductClothing.php';
require_once __DIR__ . '/classes/CreditCard.php';

$paperino = new User("Donald", "Duck", "donald.duck@gmail.com", "paperino", "male");

$zioPaperone = new PremiumUser("Scrooge", "McDuck", "scrooge.mcduck@yahoo.com", "ziopaperone", "male");

$zioPaperone -> setFavoriteCategory("gettoni d'oro");

$cartaDiCredito = new CreditCard("Zio Paperone", "Banca di Paperopoli", "0123456789", "01-01-2020");

$zioPaperone -> insertCreditCard($cartaDiCredito);

var_dump($paperino, $zioPaperone);

var_dump($zioPaperone -> getCreditCard())
?>