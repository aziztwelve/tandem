<?php

namespace Database\Factories;

use App\Models\AcademyGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcademyGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AcademyGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'   => $this->faker->paragraph(3),
            'course'  => $this->faker->numberBetween(1, 5),
            'faculty' => $this->faker->randomElement(['Business School', 'Arts & Sciences', 'Dental Medicine', 'School of Design', 'Divinity School', 'Public Health',]),
            'archive'  => $this->faker->boolean,
        ];
    }
}
