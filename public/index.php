<?php
include 'autoloader.php';
use app\Classes\Owner;
use app\Classes\LuxuryApartment;
use app\Classes\StandardApartment;


// standard apartment object
$standardApartment = new StandardApartment("101", 100, 2);
$standardApartment->setBalcony(true);
$standardApartment->calculateRent();

echo "Standard Apartment Details: <br>";
$standardApartment->displayApartmentDetails();
echo "<hr>";

// luxury apartment object
$luxuryApartment = new LuxuryApartment("102", 200, 3, ["kitchen", "balcony"]);
$luxuryApartment->setBalcony(true);
$luxuryApartment->calculateRent();

echo "Luxury Apartment Details: <br>";
$luxuryApartment->displayApartmentDetails();
echo "Aminites: " . $luxuryApartment->getAminites();
echo "<hr>";

// Ower object
$owner1 = new Owner("Abdul Ohab", $standardApartment);
$owner2 = new Owner("Shakib Al Hasan", $luxuryApartment);

echo "Owner Details: <br>";
$owner1->displayOwnerDetails();
$owner2->displayOwnerDetails();