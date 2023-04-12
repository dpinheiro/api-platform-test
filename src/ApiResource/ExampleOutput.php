<?php

declare(strict_types=1);

namespace App\ApiResource;

use App\Model\ExampleModel;

final class ExampleOutput
{
    private ExampleModel $exampleModel;

    public function __construct(ExampleModel $exampleModel)
    {
        $this->exampleModel = $exampleModel;
    }

    public function getId(): int
    {
        return $this->exampleModel->getId();
    }

    public function getName(): string
    {
        return $this->exampleModel->getName();
    }
}
