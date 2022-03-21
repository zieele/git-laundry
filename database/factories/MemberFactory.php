<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_member' => $this->faker->name(),
            'alamat_member' => $this->faker->streetAddress(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'tlp_member' => $this->faker->e164PhoneNumber()
        ];
    }
}
