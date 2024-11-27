<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = \App\Models\Article::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'image_path' => 'articles/' . $this->faker->word() . '.pdf', // Exemple de chemin
            'summary' => $this->faker->paragraph(),
            'content' => $this->faker->paragraphs(3, true),
        ];
    }
}
