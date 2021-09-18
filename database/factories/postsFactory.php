<?php

namespace Database\Factories;

use App\Models\posts;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class postsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::pluck('id');
        return [
            'content' => $this->faker->text($maxNbChars = 200),
            'user_id' => $this->faker->randomElement($user_id)
        ];
    }
}
