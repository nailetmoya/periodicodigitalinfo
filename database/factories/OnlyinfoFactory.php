<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Onlyinfo>
 */
class OnlyinfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            //
            'name' => $name,
            'slug' => Str::slug($name),
           
            'body' => $this->faker->text(2000),
            'status' => $this->faker->randomElement([1, 2]),
           
            'user_id' => User::all()->random()->id
        ];
    }
}
