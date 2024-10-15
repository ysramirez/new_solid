<?php

class Car
{
    public function getCountry() {}

    public function getFuel() {}
}

class RenaultPetrol extends Car
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

class Tesla extends Car
{
    public function getCountry()
    {
        return 'United States';
    }

    public function getFuel()
    {
        throw new Exception('Electric cars do not have fuel, they run on electricity');
    }
}

$renault = new RenaultPetrol();
$tesla = new Tesla();

echo "RenaultPetrol is from: " . $renault->getCountry() . "\n";
echo "RenaultPetrol uses: " . $renault->getFuel() . "\n";
echo "Tesla is from: " . $tesla->getCountry() . "\n";

try {
    echo "Tesla uses: " . $tesla->getFuel() . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
