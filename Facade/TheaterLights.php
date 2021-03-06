<?php

namespace DesignPatterns\Facade;

class TheaterLights
{
    private $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function dim(int $level)
    {
        echo sprintf("%s dimming to %d%%\n", $this->description, $level);
    }

    public function on(): void
    {
        echo $this->description . ' on' . "\n";
    }

    public function __toString()
    {
        return $this->description;
    }
}
