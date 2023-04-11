<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jobTitles = [
            'Back-end Developer',
            'Front-end Developer',
            'Full-stack Developer',
            'Mobile Developer',
            'Game Developer',
            'Web Developer',
            'DevOps Engineer',
            'Software Engineer',
            'Data Scientist',
            'Data Analyst',
            'UI/UX Designer',
            'Product Manager',
            'Project Manager',
            'QA Engineer',
            'Technical Writer',
            'Security Engineer',
            'IT Support',
            'Network Engineer',
            'Database Administrator',
            'Cloud Architect'
        ];

        $tags = [
            'Laravel',
            'PHP',
            'MySQL',
            'JavaScript',
            'React',
            'Vue.js',
            'Node.js',
            'AWS',
            'Docker',
            'REST API',
            'GraphQL',
            'MongoDB',
            'Firebase',
            'Git',
            'Agile',
            'Scrum',
            'DevOps',
            'CI/CD',
            'Testing',
            'Security'
        ];

        $company = [
            'ACME Corp',
            'Globex',
            'Initech',
            'Wonka Industries',
            'Umbrella Corporation',
            'Stark Industries',
            'Wayne Enterprises',
            'Dunder Mifflin',
            'Vandelay Industries',
            'Bluth Company',
            'Sterling Cooper',
            'Prestige Worldwide',
            'Gringotts Wizarding Bank',
            'Spacely Sprockets',
            'Soylent Corporation',
            'Weyland-Yutani',
            'Nakatomi Corporation',
            'Monarch Solutions',
            'Aperture Science',
            'Buy n Large'
        ];

        return [
            'title'=> $this->faker->randomElement($jobTitles),
            'tags'=> implode(', ', $this->faker->randomElements($tags, 3)),
            'company'=> $this->faker->randomElement($company),
            'location'=>$this->faker->city(),
            'email'=> $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'description'=> $this->faker->paragraph(5),
        ];

    }
}
