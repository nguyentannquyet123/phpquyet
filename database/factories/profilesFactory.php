<?php

namespace Database\Factories;

use App\Models\profiles;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class profilesFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = profiles::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {


    return   [
      'address' => $this->faker->address(),
      'tel' => $this->faker->tollFreePhoneNumber(),
      'province' => $this->faker->city(),
      'user_id' => $this->faker->numberBetween($min = 0, $max = 31),
      'created_at' => now(),
      'updated_at' => now(),
    ];
  }
}
