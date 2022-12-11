<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dosen>
 */
class dosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => 'Prof.Dadang Ursun,Ph.D.',
            'NIP' => '198507232005022001',
            'no_telepon' => '085759988119',
            'email' => fake() -> unique() ->safeEmail(),
            'foto' => 'dummy2.jpg',
            'password' => 'passwordDummy122333'
            // $table->string('nama', 50);
            // $table->string('NIP', 18);
            // $table->string('email');
            // $table->string('password');
        ];
    }
}
