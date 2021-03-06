<?php


namespace Acadea\Draftable\Tests\Database\Factories;

use Acadea\Draftable\Tests\Models\Comment;
use Acadea\Draftable\Tests\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'title' => $this->faker->realText(20),
            'post_id' => Post::all()->random()->id,
        ];
    }
}
