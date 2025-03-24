<?php

namespace Database\Factories;

use App\Models\Article; //дописано вручную
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
 
 
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
			'name' => $this->faker->sentence,// Название статьи
            'body' => $this->faker->paragraph,// Текст статьи
        ];
    }
}
