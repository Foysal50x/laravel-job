<?php

namespace Faisal50x\LaravelJob\Database\Factories;

use Faisal50x\LaravelJob\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(1),
        ];
    }
}
