<?php
class Bicycle
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats;

    private int $wheelCount;



    public function __construct(string $color, int $nbSeat, int $wheelCount)
    {
        $this->color = $color;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getWheelCount(): int
    {
        return $this->wheelCount;
    }

    public function setWheelCount(int $wheelCount): void
    {
        $this->wheelCount = $wheelCount;
    }
}
