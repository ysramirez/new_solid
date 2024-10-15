<?php

class Car
{
    public function getCountry() {}
}

class FuelCar extends Car 
{
    public function getFuel() {}
}

class ElectricCar extends Car 
{
    public function getEnergy() {}
}


class RenaultPetrol extends FuelCar
{
    public function getCountry()
    {
        return 'France';
    }

    public function getFuel()
    {
        return 'Petrol';
    }
}

class Tesla extends ElectricCar
{
    public function getCountry()
    {
        return 'United States';
    }

    public function getEnergy()
    {
        return 'Electricity';
    }
}

$renault = new RenaultPetrol();
$tesla = new Tesla();

echo "RenaultPetrol is from: " . $renault->getCountry() . "\n";
echo "RenaultPetrol uses: " . $renault->getFuel() . "\n";
echo "Tesla is from: " . $tesla->getCountry() . "\n";
echo "Tesla uses: " . $tesla->getEnergy() . "\n";
