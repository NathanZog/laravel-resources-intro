<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->text(),
            'date' => $this->faker->date(),
            'auteur' => $this->faker->firstNameMale(),
            'professionAuteur' => $this->faker->jobTitle(),
            'age' => $this->faker->numberBetween(18,80),
            'description' => $this->faker->text(50)
        ];
    }
}
