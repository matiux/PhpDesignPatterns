<?php

namespace DesignPatterns\ExagonalArchitecture\Step04\Application\Service\Idea;

use DesignPatterns\ExagonalArchitecture\Step04\Domain\Idea\Idea;

class RateIdeaResponse
{
    private $idea;

    public function __construct(Idea $idea)
    {
        $this->idea = $idea;
    }
}
