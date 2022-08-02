<?php

use Faisal50x\LaravelJob\Models\Tag;
use function Pest\Laravel\assertModelExists;

it('can create tag modal', function () {
    $tagModel = Tag::factory()->create();
    assertModelExists($tagModel);
});
