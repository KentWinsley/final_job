<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'salary' => '₱' . $this->faker->numberBetween(30000, 60000),
            'job_description' => $this->faker->sentence(),
        ];
    }
}