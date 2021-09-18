<?php

namespace Database\Factories;

use App\Models\comments;
use App\Models\posts;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class commentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = comments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::pluck('id');
        $post_id = posts::pluck('id');
        return [
            
'content' => $this->faker->text($maxNbChars = 50),  
'post_id' => $this->faker->randomElement($post_id),
'user_id' => $this->faker->randomElement($user_id),
        ];
    }
}
