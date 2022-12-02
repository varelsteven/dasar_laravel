<?php

namespace Database\Factories;



use Carbon\Carbon;
use Faker\Factory as faker ;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class pegawaiFactory extends Factory
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
            'name'=> $faker->name(),
            'golongan'=> $faker->randomElement(['A','B','C']),
            'alamat'=> $faker->address(),
            'telp'=> $faker->randomNumber(8, true),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ];
    }
}
