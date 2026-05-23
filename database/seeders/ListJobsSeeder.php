<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class ListJobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                'title' => 'Software Developer',
                'salary' => '45000',
                'job_description' => 'Develops software applications.'
            ],
            [
                'title' => 'Web Developer',
                'salary' => '40000',
                'job_description' => 'Develops web applications.'
            ],
            [
                'title' => 'Front-End Developer',
                'salary' => '42000',
                'job_description' => 'Builds user interfaces.'
            ],
            [
                'title' => 'Back-End Developer',
                'salary' => '48000',
                'job_description' => 'Handles server-side logic.'
            ],
            [
                'title' => 'Mobile App Developer',
                'salary' => '47000',
                'job_description' => 'Develops mobile applications.'
            ]
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}