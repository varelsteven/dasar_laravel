<?php

namespace Database\Factories;

use Carbon\Carbon;
use Faker\Factory as faker ;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama'=> $faker->name(),
            'deskripsi'=> $faker->paragraph(),
            'stock'=> $faker->numberBetween(1, 100),
            'distributor'=> $faker->word() ,
            'kategori_id'=> $faker->numberBetween(1,4),
            'harga'=> $faker->randomFloat(),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ];
    }
}
