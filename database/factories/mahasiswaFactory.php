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
            'NIM' => fake()->number(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('mahasiswa'),
            'rememberToken' => Str::random(10),
            //$table->string('nama', 50);
            // $table->string('NIM', 11);
            // $table->string('email');
            // $table->string('password');
            // $table->rememberToken();
        ];
    }
}
