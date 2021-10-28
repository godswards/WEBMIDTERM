<?php

namespace Database\Factories;

use App\Models\Rotcmember;
use Illuminate\Database\Eloquent\Factories\Factory;

class RotcmemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rotcmember::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fname' => $this->faker->word,
        'lname' => $this->faker->word,
        'birthday' => $this->faker->word,
        'rank' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
