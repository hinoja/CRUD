<?php

namespace Database\Factories;

use App\Models\Acteur;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
     protected $model = Acteur::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'adresse' => $this->faker->address(),
            'pays' => $this->faker->country(),
            'birthDay' => $this->faker->date(),
            'password' => $this->faker->password(),
            'email' => $this->faker->unique()->safeEmail(),
            'created_at' => now(),
        ];
    }
}
