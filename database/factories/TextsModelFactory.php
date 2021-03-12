<?php

namespace Database\Factories;

use App\Models\TextsModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class TextsModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TextsModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(100),
            'content' => $this->faker->text(256)
        ];
    }
}
