
<?php

class Car
{
   
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    //Constructeur
    public function __construct(string $color, int $nbSeats, string $energy)
    {      
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    //Getters/Setters
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    //Methods
    public function start(): string
    {
        return 'Mon moteur est allumé. On y va.' . PHP_EOL;
    }

    public function forward(): string
    {
        $this->currentSpeed = rand(1, 100);
        return 'Go !';
    }

    public function brake(): string
    {
        $sentence = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= 'Stop this car !' . PHP_EOL;
        }
        $sentence .= 'The car has stopped.';
        return $sentence;
    }
}