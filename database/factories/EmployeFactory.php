<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    protected $model = Employe::class;

    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'salaire' => $this->faker->numberBetween(3000, 9000),
            'poste' => $this->faker->jobTitle(),
            'date_embauche' => $this->faker->date(),
        ];
    }
}
