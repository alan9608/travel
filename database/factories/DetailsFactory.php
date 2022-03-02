<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Details;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Details::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'lastname' => $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'birthday' => $this->faker->dateTimeBetween($startDate = '-60 years', $endDate = '-20 years', $timezone = null),
            'about' => $this->faker->realText($maxNbChars = 139, $indexSize = 2),
        ];
    }
}
