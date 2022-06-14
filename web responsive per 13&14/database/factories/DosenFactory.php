<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $JabatanStruktural = ['Rektor', 'Wakil Rektor', 'Dekan', 'Wakil Dekan', 'Kaprodi', 'Kepala Perpustakaan', 'Kepala Laboratorium', 'Kepala Lembaga Penelitian', 'Humas'];

        return [
            'nip' => $this->faker->nik(),
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'position' => $this->faker->randomElement($JabatanStruktural)
        ];
    }
}
