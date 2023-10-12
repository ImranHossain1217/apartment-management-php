<?php
namespace app\Classes;

use app\Classes\Apartment;

class Owner
{
    private $ownerName;
    private $apartment;

    public function __construct($ownerName, Apartment $apartment)
    {
        $this->ownerName = $ownerName;
        $this->apartment = $apartment;
    }

    public function displayOwnerDetails()
    {
        echo "Owner Name: " . $this->ownerName . "<br>";
        echo "Apartment Number: " . $this->apartment->getApartmentNumber() . "<br>";
    }
}