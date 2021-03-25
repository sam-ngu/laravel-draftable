<?php


namespace Acadea\Draftable\Tests\Database\Factories;

use Acadea\Draftable\Tests\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition()
    {
        return [
            'title' => $this->faker->realText(20),
        ];
    }
}
