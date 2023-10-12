<?php
namespace app\Classes;

use app\Classes\Apartment;
use app\Interfaces\HasAminites;
use app\Traits\HasBalcony;

class LuxuryApartment extends Apartment implements HasAminites
{
    use HasBalcony;
    protected $aminites;

    public function __construct($apartmentNumber, $area, $numberOfRooms, $aminites)
    {
        parent::__construct($apartmentNumber, $area, $numberOfRooms);
        $this->aminites = $aminites;
    }

    public function calculateRent()
    {
        $this->rent = $this->area * 0.5 + $this->numberOfRooms * 100;
        if ($this->hasBalcony()) {
            $this->rent += 200;
        }
    }

    public function getAminites()
    {
        return implode(", ", $this->aminites);
    }
}