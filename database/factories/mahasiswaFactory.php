<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mahasiswa>
 */
class mahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'NIM' => '201511047',
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('mahasiswa'),
            'remember_token' => Str::random(10),
            'foto' => 'dummy.jpg'
        ];
    }
}
