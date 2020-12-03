<?php

namespace Database\Factories;

use App\Models\AcademyGroup;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstNameMale,
            'birth_date' => $this->faker->dateTimeBetween('1970-01-01', '2020-11-30')->format('Y-m-d H:i:s'),
            'active'  => $this->faker->boolean,
            'group_id'  => AcademyGroup::all()->random()->id,
        ];
    }
}
