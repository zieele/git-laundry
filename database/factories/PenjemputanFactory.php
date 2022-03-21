<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\Outlet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenjemputanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_member' => $this->faker->randomElement(Member::select('id')->get()),
            'id_outlet' => $this->faker->randomElement(Outlet::select('id')->get()),
            'status' => $this->faker->randomElement(['tercatat', 'penjemputan', 'selesai'])
        ];
    }
}
