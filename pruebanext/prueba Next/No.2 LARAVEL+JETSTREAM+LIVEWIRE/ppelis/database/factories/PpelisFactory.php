<?php

namespace Database\Factories;

use App\Models\Ppelis;
use Illuminate\Database\Eloquent\Factories\Factory;

class PpelisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ppelis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'title' => $this->faker->sentence(),
            'year' => $this->faker->sentence(),
            'ratings' => $this->faker->text(),
            'imdbID' => $this->faker->sentence(),
            'id_user' => $this->faker->sentence(), 
            'poster' => $this->faker->sentence(), 
        ];
    }
}
