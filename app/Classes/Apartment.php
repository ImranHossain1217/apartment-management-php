<?php
namespace app\Classes;

abstract class Apartment
{
    protected $apartmentNumber;
    protected $area;
    protected $numberOfRooms;
    protected $rent;

    public function __construct($apartmentNumber, $area, $numberOfRooms)
    {
        $this->apartmentNumber = $apartmentNumber;
        $this->area = $area;
        $this->numberOfRooms = $numberOfRooms;
    }

    abstract public function calculateRent();

    public function displayApartmentDetails()
    {
        echo "Apartment Number: " . $this->apartmentNumber . "<br>";
        echo "Area: " . $this->area . "<br>";
        echo "Number of Rooms: " . $this->numberOfRooms . "<br>";
        echo "Rent: " . $this->rent . "<br>";
    }

    public function getApartmentNumber()
    {
        return $this->apartmentNumber;
    }
}