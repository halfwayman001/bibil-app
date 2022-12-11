<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BahanAjar>
 */
class BahanAjarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul_materi' => fake()->sentence(),
            'deskripsi' => fake()->paragraph(2, true),
            'file_materi' => 'CS605-Software Engineering Practitioner’s Approach  by Roger S. Pressman 7th ed.pdf' 
        ];
    }
}
