<?php

declare(strict_types=1);

namespace App\ApiResource;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use App\Model\ExampleModel;

final class ExampleProcessor implements ProcessorInterface
{
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = [])
    {
        $exampleModel = new ExampleModel(1, 'Foo');

        return new ExampleOutput($exampleModel);
    }
}
