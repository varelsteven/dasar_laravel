<?php

namespace Database\Factories;

use Carbon\Carbon;
use Faker\Factory as faker ;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'nama'=> $faker->name(),
            'umur'=> $faker->numberBetween(15,20),
            'alamat'=> $faker->address(),
            'jenis_kelamin'=> $faker->randomElement(['laki-laki','perempuan']),
            'class_id'=> $faker->numberBetween(1,4),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ];
    }
}
