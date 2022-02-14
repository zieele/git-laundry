<?php

namespace Database\Factories;

use App\Models\Outlet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_outlet' => $this->faker->randomElement(Outlet::select('id')->get()),
            'jenis' => $this->faker->randomElement(['kiloan', 'selimut', 'kaos', 'bed_cover', 'lain']),
            'nama_paket' => $this->faker->words($nb = 3, $asText = true),
            'harga' => round($this->faker->numberBetween($min=5000, $max=100000), -3)
        ];
    }
}
