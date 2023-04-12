<?php

declare(strict_types=1);

namespace App\ApiResource;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Post;

#[ApiResource(
    shortName: 'Example',
    operations: [
        new Post(uriTemplate: '/example', status: 201, output: ExampleOutput::class, processor: ExampleProcessor::class)
    ],
)]
final class ExampleInput
{

}
