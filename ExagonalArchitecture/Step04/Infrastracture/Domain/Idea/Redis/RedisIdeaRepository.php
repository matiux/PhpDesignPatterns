<?php

namespace DesignPatterns\ExagonalArchitecture\Step04\Infrastracture\Domain\Idea\Redis;

use DesignPatterns\ExagonalArchitecture\Step04\Domain\Idea\Idea;
use DesignPatterns\ExagonalArchitecture\Step04\Domain\Idea\IdeaRepository;
use Ramsey\Uuid\UuidInterface;

class RedisIdeaRepository implements IdeaRepository
{
    public function find(UuidInterface $id): ?Idea
    {

    }

    public function create(UuidInterface $ideaId, string $title, string $author, string $description): bool
    {

    }

    public function update(Idea $idea): bool
    {

    }
}
