<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_barang' => $this->faker->word(),
            'merk_barang' => $this->faker->word(),
            'qty' => $this->faker->randomDigit(),
            'kondisi' => $this->faker->randomElement(['layak_pakai', 'rusak_ringan', 'rusak_berat']),
            'tanggal_pengadaan' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
