<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'start_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['Pending', 'Progress', 'Finished']),
        ];
    }
}
