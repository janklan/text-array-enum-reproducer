<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    public ?int $id;

    #[ORM\Column(type: 'text[]', nullable: true, enumType: TestEnum::class)]
    public ?array $enumArray = null;
}

enum TestEnum: string
{
    case TEST = 'test';
    case TEST2 = 'test2';
}
