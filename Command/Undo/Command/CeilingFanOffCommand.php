<?php

namespace DesignPatterns\Command\Undo\Command;

use DesignPatterns\Command\Undo\Receiver\CeilingFan;

class CeilingFanOffCommand implements Command
{
    private $ceilingFan;
    private $prevSpeed;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->off();
    }

    public function undo(): void
    {
        switch ($this->prevSpeed) {
            case CeilingFan::HIGH:
                $this->ceilingFan->high();
                break;
            case CeilingFan::MEDIUM:
                $this->ceilingFan->medium();
                break;
            case CeilingFan::LOW:
                $this->ceilingFan->low();
                break;
            case CeilingFan::OFF:
                $this->ceilingFan->off();
                break;
        }
    }
}
