<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dpt>
 */
class DptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = Dpt::class;

    public function definition()
    {
        return [
            'nik' => $this->faker->nik(),
            'nama' => $this->faker->firstName(),
            'jk' => $this->faker->randomElement(['Laki-Laki','Perempuan']),
            'alamat' => $this->faker->streetName(),
            'tgllahir' => $this->faker->date('Y_m_d'),
            'status' => $this->faker->randomElement(['1', '0'])
        ];
    }
}
